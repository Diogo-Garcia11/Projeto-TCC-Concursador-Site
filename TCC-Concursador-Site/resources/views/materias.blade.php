<x-app-layout>
    <div class="flex flex-col items-center justify-center min-h-screen pt-32 pb-20"> <!-- Centralizar verticalmente -->
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <!-- Container grid para os itens -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4"> <!-- Aumentado o espaçamento entre os cards -->
                <!-- Item 1 -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-12 w-full h-80">
                    <div class="flex flex-col items-center">
                        <img src="{{asset('imagens/mat.jpg')}}" alt="Placeholder Image" class="mb-8 w-64 h-64 object-cover">
                        <a href="{{route('simulados.fuvest')}}" class="text-xl font-semibold hover:underline">Matemática</a>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-12 w-full h-80">
                    <div class="flex flex-col items-center">
                        <img src="{{asset('imagens/port.jpg')}}" alt="Placeholder Image" class="mb-8 w-64 h-64 object-cover">
                        <a href="{{route('simulados.fatec')}}" class="text-xl font-semibold hover:underline">Português</a>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-12 w-full h-80">
                    <div class="flex flex-col items-center">
                        <img src="{{asset('imagens/lit.jpg')}}" alt="Placeholder Image" class="mb-8 w-64 h-64 object-cover">
                        <a href="{{route('simulados.fatec')}}" class="text-xl font-semibold hover:underline">Literatura</a>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-12 w-full h-80">
                    <div class="flex flex-col items-center">
                        <img src="{{asset('imagens/fil.jpg')}}" alt="Placeholder Image" class="mb-8 w-64 h-64 object-cover">
                        <a href="{{route('simulados.fatec')}}" class="text-xl font-semibold hover:underline">Filosofia</a>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-12 w-full h-80">
                    <div class="flex flex-col items-center">
                        <img src="https://via.placeholder.com/300" alt="Placeholder Image" class="mb-8 w-64 h-64 object-cover">
                        <a href="{{route('simulados.fatec')}}" class="text-xl font-semibold hover:underline">Biologia</a>
                    </div>
                </div>
                <!-- Item 6 -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-12 w-full h-80">
                    <div class="flex flex-col items-center">
                        <img src="https://via.placeholder.com/300" alt="Placeholder Image" class="mb-8 w-64 h-64 object-cover">
                        <a href="{{route('simulados.fatec')}}" class="text-xl font-semibold hover:underline">Física</a>
                    </div>
                </div>
                <!-- Item 7 -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-12 w-full h-80">
                    <div class="flex flex-col items-center">
                        <img src="https://via.placeholder.com/300" alt="Placeholder Image" class="mb-8 w-64 h-64 object-cover">
                        <a href="{{route('simulados.fatec')}}" class="text-xl font-semibold hover:underline">Química</a>
                    </div>
                </div>
                <!-- Item 8 -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-12 w-full h-80">
                    <div class="flex flex-col items-center">
                        <img src="{{asset('imagens/his.jpg')}}" class="mb-8 w-64 h-64 object-cover">
                        <a href="{{route('simulados.fatec')}}" class="text-xl font-semibold hover:underline">História</a>
                    </div>
                </div>
                <!-- Item 9 -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-12 w-full h-80">
                    <div class="flex flex-col items-center">
                        <img src="{{asset('imagens/geo.jpg')}}" alt="Placeholder Image" class="mb-8 w-64 h-64 object-cover">
                        <a href="{{route('simulados.fatec')}}" class="text-xl font-semibold hover:underline">Geografia</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
