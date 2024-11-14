@extends('layouts.guest')

@section('content')
    <div class="flex h-screen mx-auto bg-gray-100 shadow-md overflow-hidden sm:rounded-lg p-6 space-x-6">
        <!-- Coluna do Formulário -->
        <div class="w-1/2 flex flex-col justify-center items-center space-y-6">
            <h1 class="font-bigShoulders text-8xl text-shadow">CRIE SUA CONTA</h1>
        
            <!-- Formulário de Registro -->
            <form method="POST" action="{{ route('register') }}" class="w-3/4 flex flex-col space-y-4">
                @csrf
            
                <!-- Campo Nome -->
                <div>
                    <x-input-label for="name" :value="__('Nome')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
            
                <!-- Campo Email -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
            
                <!-- Campo Senha -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Senha')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
            
                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
            
                <!-- Botão de Registro -->
                <button type="submit" class="mt-4 w-full bg-[#435D86] text-white font-semibold py-2 rounded-md hover:bg-[#444887]">
                    {{ __('Registrar') }}
                </button>
            
                <!-- Link para Login -->
                <p class="text-sm text-center text-gray-700">Já tem uma conta? <a href="{{ route('login') }}" class="text-[#435D86] hover:underline">Entrar</a></p>
            </form>
        </div>
        <!-- Coluna da Imagem (Caso queira manter o layout com duas colunas) -->
        <div class="w-1/2 flex justify-center items-center">
            <img src="{{ asset('imagens/teste111.svg') }}" alt="imagem" height="500" width="540">
        </div>
    </div>
@endsection
