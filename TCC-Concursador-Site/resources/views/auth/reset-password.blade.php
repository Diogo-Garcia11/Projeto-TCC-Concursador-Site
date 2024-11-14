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
        <div class="w-1/2 flex justify-center items-center">
            <img src="{{ asset('imagens/teste111.svg') }}" alt="imagem" height="500" width="540">
        </div>

        <!-- Coluna do Formulário -->
        <div class="w-1/2 flex flex-col justify-center items-center space-y-6">
            <h1 class="font-bigShoulders text-8xl text-shadow">REDIFINIÇÃO DE SENHA</h1>

            <!-- Exibe status de sessão -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Formulário de Reset de Senha -->
            <form method="POST" action="{{ route('password.store') }}" class="w-3/4 flex flex-col space-y-4 font-monserrat">
                @csrf
                <!-- Token de Reset de Senha -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Campo Email -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Campo Nova Senha -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Nova Senha')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Campo Confirmar Senha -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Botão de Envio -->
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>
                        {{ __('Redefinir Senha') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
@endsection
