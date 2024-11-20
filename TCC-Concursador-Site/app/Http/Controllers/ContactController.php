<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validação dos dados
        $validated = $request->validate([
            'email' => 'required|email',
            'problem' => 'required|string|max:1000',
        ]);

        // Dados do e-mail
        $data = [
            'email' => $validated['email'],
            'problem' => $validated['problem'],
        ];

        // Enviar o e-mail sem utilizar uma view
        Mail::raw(
            'Email: ' . $data['email'] . "\n\n" . 
            'Mensagem: ' . $data['problem'], 
            function ($message) use ($data) {
                $message->to('concursador.ofc@gmail.com') // Destinatário
                        ->subject('Nova Mensagem de Contato') // Assunto
                        ->from($data['email']); // Remetente
            }
        );

        // Retornar mensagem de sucesso para a mesma página
        return back()->with('status', 'Sua mensagem foi enviada com sucesso!');
    }
}
