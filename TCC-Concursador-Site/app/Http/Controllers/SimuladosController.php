<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class SimuladosController extends Controller
{
    public function index()
    {
        $provas = $this->buscarProvas(); // Busca as provas
    
        dd($provas); // Adicione isto para debugar
    
        return view('simulados', compact('provas')); // Retorna a visão com as provas
    }
    

    private function buscarProvas()
    {
        $client = new Client();
        try {
            $response = $client->request('GET', 'https://api.enem.dev/v1/exams', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            return json_decode($response->getBody(), true); // Retorna as provas em formato de array
        } catch (RequestException $e) {
            return []; // Retorna um array vazio em caso de erro
        }
    }
    public function show($year)
    {
        $questoes = $this->buscarQuestoes($year); // Método que busca as questões para o ano especificado
    
        return view('questoes', compact('questoes', 'year'));
    }
    
    private function buscarQuestoes($year)
    {
        $client = new Client();
        try {
            $response = $client->request('GET', "https://api.enem.dev/v1/exams/{year}/questions");
            return json_decode($response->getBody(), true); // Retorna as questões em formato de array
        } catch (RequestException $e) {
            return []; // Retorna um array vazio em caso de erro
        }
    }

}
