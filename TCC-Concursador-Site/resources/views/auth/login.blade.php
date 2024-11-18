@extends('layouts.guest')

@section('content')
    <div class="flex min-h-screen mx-auto bg-gray-100 shadow-md sm:rounded-lg space-x-6">
        <!-- Coluna da Imagem (Caso queira deixar um layout de dois lados) -->
        <div class="w-1/2 hidden lg:flex justify-center items-center">
            <img src="{{ asset('imagens/teste111.svg') }}" alt="imagem" height="500" width="540">
        </div>
        <!-- Coluna do Formulário -->
        <div class="w-full lg:w-1/2 flex flex-col justify-center items-center space-y-6">
            <h1 class="font-bigShoulders text-6xl lg:text-8xl text-shadow">SEJA BEM VINDO</h1>

            <!-- Exibe status de sessão -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Formulário de Login -->
            <form method="POST" action="{{ route('login') }}" class="w-3/4 flex flex-col space-y-4 font-monserrat">
                @csrf

                <!-- Campo Email -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Campo Senha -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Senha')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Campo Lembrar de Mim -->
                <div class="flex items-center justify-between mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded text-[#435D86] border-gray-300" name="remember">
                        <span class="ml-2 text-gray-700">Mantenha-se conectado</span>
                    </label>

                    <a href="{{ route('password.request') }}" class="text-sm text-[#435D86] hover:underline">
                        Esqueceu a senha?
                    </a>
                </div>

                <!-- Botão de Submit -->
                <button type="submit" class="mt-4 w-full bg-[#435D86] text-white font-semibold py-2 rounded-md hover:bg-[#444887]">
                {{ __('Entrar') }}
                </button>

                <!-- Link para Cadastro -->
                <p class="text-sm text-center text-gray-700">Ainda não tem uma conta? <a href="{{ route('register') }}" class="text-[#435D86] hover:underline">Registre-se</a></p>
            </form>
        </div>
    </div>
@endsection
