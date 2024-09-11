<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<x-app-layout>
  <div class="text-center">
    <h5 class="text-7xl font-Montserrat text-white p-8">MATÉRIAS</h5>
  </div>
  <main class="p-4">
    <!-- Química -->
    <div class="flex justify-center">
      <button id="dropdownButton"  class= "bg-steelblue p-6 shadow border-2 border-steelblue h-62 w-[90%] rounded-lg flex items-center">
        <div class="flex-shrink-0 m-10">
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
        <h5 class="text-5xl font-Montserrat text-white text-left">QUÍMICA</h5>
      </button>
    </div>

    <div id="dropdownPanel" class="absolute z-10 hidden mt-2 w-[90%] bg-steelblue border-2 border-steelblue rounded-lg shadow-lg">
            <div class="p-4 text-white">
                <!-- Conteúdo do Dropdown -->
                <p>Detalhes sobre a Química...</p>
                <!-- Adicione mais conteúdo conforme necessário -->
            </div>
        </div>
    </div>

        <!-- Física -->
        <div class="flex justify-center">
      <button id="dropdownButton"  class= "bg-steelblue p-6 shadow border-2 border-steelblue h-64 w-[90%] flex items-center">
        <div class="flex-shrink-0 m-10">
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
        <h5 class="text-5xl font-Montserrat text-white text-left">Física</h5>
      </button>
    </div>

    <div id="dropdownPanel" class="absolute z-10 hidden mt-2 w-[90%] bg-steelblue border-2 border-steelblue rounded-lg shadow-lg">
            <div class="p-4 text-white">
                <!-- Conteúdo do Dropdown -->
                <p>Detalhes sobre a Química...</p>
                <!-- Adicione mais conteúdo conforme necessário -->
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const dropdownButton = document.getElementById('dropdownButton');
            const dropdownPanel = document.getElementById('dropdownPanel');

            dropdownButton.addEventListener('click', () => {
                // Toggle a visibilidade do painel do dropdown
                dropdownPanel.classList.toggle('hidden');
            });

            // Fechar o dropdown se clicado fora
            document.addEventListener('click', (event) => {
                if (!dropdownButton.contains(event.target) && !dropdownPanel.contains(event.target)) {
                    dropdownPanel.classList.add('hidden');
                }
            });
        });
    </script>

  </main>
</x-app-layout>

