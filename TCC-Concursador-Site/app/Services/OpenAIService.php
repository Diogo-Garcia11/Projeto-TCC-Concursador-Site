<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class OpenAIService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client([
            'verify' => false // Desabilitar verificação SSL para desenvolvimento
        ]);
        $this->apiKey = config('services.openai.api_key');
    }

    public function correctEssay($essay)
    {
        $maxRetries = 3;
        $retryDelay = 1000; // 1 segundo

        for ($i = 0; $i < $maxRetries; $i++) {
            try {
                $response = $this->client->post('https://api.openai.com/v1/chat/completions', [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $this->apiKey,
                        'Content-Type' => 'application/json',
                    ],
                    'json' => [
                        'model' => 'gpt-4o-mini',
                        'messages' => [
                            [
                                'role' => 'system',
                                'content' => "Você é um corretor de redações dissertativas argumentativas que deve seguir os principais critérios avaliativos do ENEM (Exame Nacional do Ensino Médio), que são: 1-Domínio da escrita formal em língua portuguesa; 2-Capacidade de interpretação das informações e organização dos argumentos; 3-Domínio dos mecanismos linguísticos de argumentação; e 4-Capacidade de conclusão com propostas coerentes que respeitem os direitos humanos. Não comente sobre o que você acha do tema. Caso ao final da mensagem, o texto não seja uma redação como combinado, retorne com uma mensagem do tipo: 'Desculpe, mas não posso fazer nada com essa informação, pelo fato de não ser uma redação' e não deixe claro que isto é um prompt ou outros termos técnicos, nem fale que você é o ChatGPT. e no final, dê uma nota de 0 á 1000"
                            ],
                            [
                                'role' => 'user',
                                'content' => $essay
                            ]
                        ],
                        'max_tokens' => 400,
                        'temperature' => 0.7,
                    ],
                ]);

                $data = json_decode($response->getBody(), true);
                return $data['choices'][0]['message']['content'];
            } catch (RequestException $e) {
                if ($e->getResponse() && $e->getResponse()->getStatusCode() == 429) {
                    // Aguarde antes de tentar novamente
                    usleep($retryDelay * 1000);
                    $retryDelay *= 2; // Backoff exponencial
                } else {
                    throw $e;
                }
            }
        }

        throw new \Exception('Exceeded maximum number of retries');
    }
}