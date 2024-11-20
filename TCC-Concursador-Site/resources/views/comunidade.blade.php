<x-app-layout>         
        <div class="flex h-90vh mx-auto shadow-md sm:rounded-lg space-x-6">
            <!-- Coluna da Imagem -->
            <div class="w-1/2 hidden lg:flex justify-center items-center">
                <iframe src="https://discord.com/widget?id=1305032158230085632&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
            </div>
            <!-- Coluna do Formulário -->
            <div class="w-full lg:w-1/2 flex flex-col justify-center items-center space-y-6">
                <h1 class="font-bigShoulders text-6xl lg:text-9xl text-shadow">FALE CONOSCO</h1>

                <!-- Exibe status de sessão -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Formulário de Fale Conosco -->
                <form method="POST" action="{{ route('contact.send') }}" class="w-3/4 flex flex-col space-y-4 font-monserrat">
                    @csrf

                    <!-- Campo Email -->
                    <div>
                        <x-input-label class="text-white" for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Campo Descreva seu problema -->
                    <div class="mt-5">
                        <x-input-label class="text-white" for="problem" :value="__('Descreva sua dúvida')" />
                        <textarea id="problem" name="problem" class="text-black block mt-1 w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500" rows="5" required></textarea>
                        <x-input-error :messages="$errors->get('problem')" class="mt-2" />
                    </div>

                    <!-- Botão de Submit -->
                    <button type="submit" class="mt-4 w-full bg-[#435D86] text-white font-semibold py-2 rounded-md hover:bg-[#444887]">
                        {{ __('Enviar') }}
                    </button>
                </form>
            </div>
        </div>
    </body>
</x-app-layout>