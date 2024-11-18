@extends('layouts.guest')

@section('content')
    <!-- Navbar -->
    <nav class="absolute top-0 left-0 w-full z-10 bg-transparent">
        <div class="flex items-center justify-between p-4">
            <div class="flex items-center">
                <img class="h-8 w-auto mr-2" src="{{ asset('imagens/logocon.svg') }}" alt="logo">
                <h1 class="text-white font-semibold text-lg">CONCURSADOR</h1>
            </div>
        </div>
    </nav>

    <!-- Conteúdo Principal Centralizado -->
    <div class="flex min-h-screen justify-center items-center mx-auto bg-gray-100 shadow-md sm:rounded-lg space-x-6">
        <!-- Coluna da Imagem -->
        <div class="w-1/2 hidden lg:flex justify-center items-center">
            <img src="{{ asset('imagens/teste111.svg') }}" alt="imagem" height="500" width="540">
        </div>

        <!-- Coluna do Formulário -->
        <div class="w-full lg:w-1/2 flex flex-col justify-center items-center space-y-6">
            <h1 class="font-bigShoulders text-4xl sm:text-7xl xl:text-8xl text-shadow">RECUPERAÇÃO DE SENHA</h1>

            <!-- Exibe status de sessão -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Formulário de Recuperação de Senha -->
            <form method="POST" action="{{ route('password.email') }}" class="w-3/4 flex flex-col space-y-4 font-monserrat">
                @csrf

                <!-- Campo Email -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Botão de Envio -->
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>
                        {{ __('Enviar Link para Resetar Senha') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
@endsection
