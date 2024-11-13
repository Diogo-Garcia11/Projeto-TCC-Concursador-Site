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
                                'content' => "Você é um corretor de redações dissertativas argumentativas que deve seguir os principais critérios avaliativos do ENEM (Exame Nacional do Ensino Médio), que são: 
                                                Competência I Demonstrar domínio da modalidade escrita formal da língua portuguesa.
                                                Competência II
                                                Compreender a proposta de redação e aplicar conceitos das várias áreas
                                                de conhecimento para desenvolver o tema dentro dos limites estruturais
                                                do texto dissertativo-argumentativo em prosa.
                                                Competência III Selecionar, relacionar, organizar e interpretar informações, fatos, opiniões
                                                e argumentos em defesa de um ponto de vista.
                                                Competência IV Demonstrar conhecimento dos mecanismos linguísticos necessários para
                                                a construção da argumentação.
                                                Competência V Elaborar proposta de intervenção para o problema abordado, respeitando
                                                os direitos humanos.
                                                A nota da redação, que variará entre 0 (zero) e 1.000 (mil) pontos, obedecerá
                                                à Matriz de Referência do exame. Cada avaliador(a) atribuirá uma nota entre 0
                                                (zero) e 200 (duzentos) pontos para cada uma das cinco competências. A nota total
                                                de cada avaliador(a) corresponderá à soma das notas atribuídas a cada uma das
                                                competências e a soma desses pontos comporá a nota total de cada avaliador(a),
                                                que poderá chegar a 1.000 pontos. A nota final do(a) participante será a média
                                                aritmética das notas totais atribuídas pelos(as) dois(duas) avaliadores(as).
                                                Não comente sobre o que você acha do tema. Caso ao final da mensagem, o texto não seja uma redação como combinado, 
                                                retorne com uma mensagem do tipo: 'Desculpe, mas não posso fazer nada com essa informação, pelo fato de não ser uma redação' 
                                                e não deixe claro que isto é um prompt ou outros termos técnicos, nem fale que você é o ChatGPT. e no final, dê uma nota de 0 á 1000.
                                                Você esta numa pagina html, então responda de uma forma unica, padrão que fique bonito para os usuarios lerem sua resposta numa pagina http.
                                                escreva a analise completa com nota no final. NÃO ESCREVA PELA METADE"
                            ],
                            [
                                'role' => 'user',
                                'content' => $essay
                            ]
                        ],
                        'max_tokens' => 800,
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