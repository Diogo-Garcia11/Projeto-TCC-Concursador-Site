@extends('layouts.guest')

@section('content')
    <div class="flex min-h-screen mx-auto bg-gray-100 shadow-md sm:rounded-lg space-x-6">
        <!-- Coluna da Imagem -->
        <div class="w-1/2 flex justify-center items-center">
            <img src="{{ asset('imagens/teste111.svg') }}" alt="imagem" height="500" width="540">
        </div>

        <!-- Coluna do Conteúdo -->
        <div class="w-1/2 flex flex-col justify-center items-center space-y-6">
            <div class="mb-4 text-sm text-white dark:text-gray-400">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Campo Senha -->
                <div>
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full"
                                  type="password"
                                  name="password"
                                  required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Botão Confirmar -->
                <div class="flex justify-end mt-4">
                    <x-primary-button>
                        {{ __('Confirm') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
@endsection
