<x-app-layout>
<<<<<<< HEAD
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
=======
  <div class="text-center">
    <h5 class="text-7xl font-Montserrat text-white p-8">Matérias</h5>
  </div>
  <main class="p-4">
    <div class="flex justify-center">
      <div class="bg-steelblue p-6 rounded shadow h-64 w-[90%] flex items-center">
        <div class="flex-shrink-0">
          <svg width="50%" height="auto" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <defs>
                <style>.cls-1{fill:none;stroke:#020202;stroke-miterlimit:10;stroke-width:1.91px;}</style>
              </defs>
              <line class="cls-1" x1="7.23" y1="1.5" x2="16.77" y2="1.5"></line>
              <path class="cls-1" d="M14.86,6.27V1.5H9.14V6.27L2.7,19.15a2.3,2.3,0,0,0-.25,1h0A2.32,2.32,0,0,0,4.77,22.5H19.23a2.32,2.32,0,0,0,2.32-2.32h0a2.3,2.3,0,0,0-.25-1Z"></path>
              <path class="cls-1" d="M6.89,10.76c5-2.17,5.31,1.9,10.42.41"></path>
              <line class="cls-1" x1="7.23" y1="18.68" x2="9.14" y2="18.68"></line>
              <line class="cls-1" x1="10.09" y1="14.86" x2="12" y2="14.86"></line>
              <line class="cls-1" x1="14.86" y1="16.77" x2="16.77" y2="16.77"></line>
            </g>
          </svg>
        </div>
      </div>
    </div>
  </main>
>>>>>>> 9e63cd4176ef15e330d32843b6cd6da4717172ef
</x-app-layout>
