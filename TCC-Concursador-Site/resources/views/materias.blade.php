<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<style>
  /* Personalização do scrollbar */
  ::-webkit-scrollbar {
      width: 12px; /* Largura do scrollbar */
  }

  ::-webkit-scrollbar-track {
      background: #2b2b2b; /* Cor de fundo da trilha */
       /* Bordas arredondadas da trilha */
  }

  ::-webkit-scrollbar-thumb {
      background: #6b7280; /* Cor da barra de rolagem */
       /* Bordas arredondadas da barra */
  }

  ::-webkit-scrollbar-thumb:hover {
      background: #4b5563; /* Cor da barra de rolagem ao passar o mouse */
  }
</style>
<x-app-layout>
<div class="flex h-screen px-5 py-5">
    <!-- Parte da esquerda para o conteúdo -->
    <div class="flex-grow p-5 bg-gray-900 rounded-lg border-4 border-gray-700 mr-8 flex flex-col">
      <h1 id="materia-titulo" class="text-5xl font-Montserrat text-white mb-4">Matemática</h1>
      <div id="materia-conteudo" class="text-gray-300 flex-grow overflow-y-auto">
        <!-- Conteúdo inicial para Matemática -->
        <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700  grid-item">
          <a href="{{route('matematica.conjuntos-numericos')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Conjuntos numéricos</a>
        </div>
        <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700  grid-item">
          <a href="{{route('matematica.fracao')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Fração</a>
        </div>
        <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700  grid-item">
          <a href="{{route('matematica.porcentagem')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Porcentagem</a>
        </div>
        <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700  grid-item">
          <a href="{{route('matematica.equacao-1')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Equação 1º grau</a>
        </div>
        <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700  grid-item">
          <a href="{{route('matematica.equacao-2')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Equação 2º grau</a>
        </div>
        <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700  grid-item">
          <a href="{{route('matematica.funcoes')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Funções</a>
        </div>
        <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700  grid-item">
          <a href="{{route('matematica.geometria-plana')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Geometria plana</a>
        </div>
        <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700  grid-item">
          <a href="{{route('matematica.geometria-espacial')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Geometria espacial</a>
        </div>
        <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700  grid-item">
          <a href="{{route('matematica.teorema-pitagoras')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Teorema de Pitágoras</a>
        </div>
        <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700  grid-item">
          <a href="{{route('matematica.media-mediana-moda')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Média, mediana e moda</a>
        </div>
        <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700  grid-item">
          <a href="{{route('matematica.graficos-tabelas')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Gráficos e tabelas</a>
        </div>
        <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700  grid-item">
          <a href="{{route('matematica.probabilidade')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Probabilidade</a>
        </div>
        <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700  grid-item">
          <a href="{{route('matematica.juros-simples-compostos')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Juros simples e compostos</a>
        </div>
        <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700  grid-item">
          <a href="{{route('matematica.trigonometria')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Trigonometria</a>
        </div>
        <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700  grid-item">
          <a href="{{route('matematica.unidades-medida')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Unidades de medida</a>
        </div>
      </div>
    </div>


    <!-- Parte da direita para as matérias -->
    <div class="w-1/3 bg-gray-900 rounded-lg border-4 border-gray-700 p-5 flex flex-col">
      <h1 class="text-5xl font-Montserrat text-white mb-4">Matérias</h1>
      <div class="space-y-2 flex-grow overflow-y-auto">
        <a href="#" class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded " onclick="mostrarConteudo('matemática')"> <svg fill="#FFFFFF" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg" class="w-20 h-20">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path d="M116,184a12,12,0,0,1-12,12H84v20a12,12,0,0,1-24,0V196H40a12,12,0,0,1,0-24H60V152a12,12,0,0,1,24,0v20h20A12,12,0,0,1,116,184ZM104,60H40a12,12,0,0,0,0,24h64a12,12,0,0,0,0-24Zm48,116.06641h64a12,12,0,0,0,0-24H152a12,12,0,0,0,0,24Zm64,15.86718H152a12,12,0,0,0,0,24h64a12,12,0,0,0,0-24Zm-64.48535-87.44824a12.00033,12.00033,0,0,0,16.9707,0L184,88.9707l15.51465,15.51465a12.0001,12.0001,0,0,0,16.9707-16.9707L200.9707,72l15.51465-15.51465a12.0001,12.0001,0,0,0-16.9707-16.9707L184,55.0293,168.48535,39.51465a12.0001,12.0001,0,0,0-16.9707,16.9707L167.0293,72,151.51465,87.51465A12.00062,12.00062,0,0,0,151.51465,104.48535Z"></path>
            </g>
          </svg>Matemática</a>

        <a href="#" class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded" onclick="mostrarConteudo('português')"><svg viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#FFFFFF" class="w-20 h-20">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <title>book</title>
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="icon" fill="#FFFFFF" transform="translate(42.666667, 106.666667)">
                  <path d="M175.702784,2.84217094e-14 L213.333333,18.7946667 L250.963883,2.84217094e-14 L426.666667,2.84217094e-14 L426.666667,320 L261.013333,320 L213.333333,343.851392 L165.632,320 L3.55271368e-14,320 L3.55271368e-14,2.84217094e-14 L175.702784,2.84217094e-14 Z M165.632,42.6666667 L42.6666667,42.6666667 L42.6666667,277.333333 L175.702784,277.333333 L192,285.473 L192,55.851 L165.632,42.6666667 Z M384,42.6666667 L261.013333,42.6666667 L234.666,55.846 L234.666,285.473 L250.963883,277.333333 L384,277.333333 L384,42.6666667 Z M362.666667,170.666667 L362.666667,202.666667 L256,202.666667 L256,170.666667 L362.666667,170.666667 Z M170.666667,170.666667 L170.666667,202.666667 L64,202.666667 L64,170.666667 L170.666667,170.666667 Z M362.666667,85.3333333 L362.666667,117.333333 L256,117.333333 L256,85.3333333 L362.666667,85.3333333 Z M170.666667,85.3333333 L170.666667,117.333333 L64,117.333333 L64,85.3333333 L170.666667,85.3333333 Z" id="Path-2"> </path>
                </g>
              </g>
            </g>
          </svg>Português</a>

        <a href="#" class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded" onclick="mostrarConteudo('história')"><svg fill="#FFFFFF" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.001 512.001" xml:space="preserve" class="h-20 w-20">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <g>
                <g>
                  <path d="M359.973,162.137v-31.364c19.232,3.808,37.842,10.772,54.995,20.673l15.04,8.683l63.678-110.294l-15.04-8.683 C432.014,14.23,379.06,0,325.51,0c-52.951,0-105.31,13.765-151.418,39.807c-47.513,26.837-87.126,66.135-114.558,113.646 C18.913,223.81,7.859,305.846,28.408,384.45l4.677,17.89l120.833-39.829l-3.553-15.432c-3.27-14.202-4.776-28.584-4.578-42.874 l34.731,5.789v162.537l289.445,39.47v-83.574h-17.367c-67.032,0-121.567-54.534-121.567-121.567 c0-9.576,7.791-17.367,17.367-17.367s17.367,7.791,17.367,17.367v52.1h104.2v-86.833 C469.962,211.478,420.621,162.137,359.973,162.137z M139.747,199.763c-24.511,42.456-33.625,91.434-26.226,139.492l-55.597,18.326 c-12.252-64.087-1.228-129.745,31.69-186.761C138.078,86.879,228.467,34.733,325.51,34.733c41.695,0,82.992,9.74,120.453,28.295 l-29.02,50.264c-28.596-13.553-59.909-20.656-91.519-20.656c-36.959,0-73.509,9.611-105.696,27.79 C186.553,139.165,158.896,166.599,139.747,199.763z M149.66,269.639c3.877-18.266,10.623-35.978,20.166-52.508 c31.936-55.313,91.474-89.692,155.413-89.757v34.762c-68.984,0-126.84,48.519-141.259,113.22L149.66,269.639z M435.229,324.226 h-34.733v-17.367c0-28.728-23.372-52.1-52.1-52.1s-52.1,23.371-52.1,52.1c0,80.314,60.893,146.674,138.933,155.342v10.008 l-219.978-29.997V306.859c0-60.648,49.341-109.989,109.989-109.989h34.733c41.496,0,75.256,33.76,75.256,75.256V324.226z"></path>
                </g>
              </g>
            </g>
          </svg> História</a>

        <a href="#" class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded" onclick="mostrarConteudo('geografia')"><svg viewBox="0 0 64 64" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" class="w-20 h-20">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path d="M47.61,16.34l-2.77,3.55a1.18,1.18,0,0,1-.91.44h-3.8a1.21,1.21,0,0,1-.58-.16l-1.43-.83a1.14,1.14,0,0,0-1.24.05l-2.15,1.54a1.14,1.14,0,0,1-1.31,0L29.14,18a1.16,1.16,0,0,1-.26-1.65L34.7,8.84" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"></path>
              <circle cx="33.91" cy="24.72" r="16.54" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"></circle>
              <path d="M49.17,40.56A21.72,21.72,0,0,1,18.39,9.91" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"></path>
              <path d="M20.1,33.83l5.43-4.64a1.16,1.16,0,0,1,1.41-.09l2.42,1.66a1.13,1.13,0,0,0,1.12.1l3.7-2.5a1.13,1.13,0,0,1,1.16.12l4,2.31a1.15,1.15,0,0,1,.21,1.63l-2.34,4.06a1.15,1.15,0,0,1-1.35.35l-3.63-1a1.15,1.15,0,0,0-1.59.94l-.42,4.07" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"></path>
              <line x1="45.4" y1="36.62" x2="51.79" y2="43.29" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"></line>
              <line x1="21.78" y1="13.47" x2="15.33" y2="6.7" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"></line>
              <line x1="33.93" y1="46.8" x2="33.93" y2="52.14" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"></line>
              <path d="M41.12,57.3H26.33a1.14,1.14,0,0,1-1.06-1.57l2.51-2.87a1.17,1.17,0,0,1,1.07-.72h9.76a1.15,1.15,0,0,1,1.06.72l2.52,2.87A1.15,1.15,0,0,1,41.12,57.3Z" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"></path>
            </g>
          </svg> Geografia</a>

        <a href="#" class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded" onclick="mostrarConteudo('biologia')"><svg fill="#FFFFFF" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" class="h-20 w-20">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <g>
                <g>
                  <path d="M479.319,114.383c0,16.309-3.011,31.926-8.492,46.335L351.282,41.172c14.409-5.481,30.026-8.492,46.335-8.492V0 c-90.101,0-163.404,73.303-163.404,163.404v76.255h-74.077C71.837,239.66,0,311.496,0,399.796h32.681 c0-13.729,2.192-26.955,6.227-39.355l112.653,112.653c-12.401,4.035-25.626,6.226-39.356,6.226V512 c88.299,0,160.136-71.837,160.136-160.136v-74.077l76.255,0.001C438.697,277.787,512,204.484,512,114.383H479.319z M182.687,458.003l-128.69-128.69c6.087-9.138,13.322-17.445,21.497-24.721l131.913,131.913 C200.132,444.68,191.825,451.914,182.687,458.003z M226.116,408.994l-123.11-123.109c10.775-5.425,22.414-9.373,34.658-11.56 l100.012,100.011C235.488,386.581,231.541,398.221,226.116,408.994z M239.66,330.104l-57.763-57.763h57.763V330.104z M266.894,245.106v-57.234l57.235,57.235L266.894,245.106z M368.785,243.547L268.454,143.215 c1.939-12.455,5.648-24.33,10.852-35.367l124.846,124.847C393.115,237.899,381.24,241.607,368.785,243.547z M432.346,214.672 L297.328,79.654c7.013-8.384,15.055-15.879,23.931-22.287l133.375,133.374C448.223,199.617,440.73,207.658,432.346,214.672z"></path>
                </g>
              </g>
            </g>
          </svg> Biologia</a>

        <a href="#" class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded" onclick="mostrarConteudo('química')"><svg viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" class="w-20 h-20">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <defs>
                <style>
                  .cls-1 {
                    fill: none;
                    stroke: #FFFFFF;
                    stroke-miterlimit: 10;
                    stroke-width: 1.91px;
                  }
                </style>
              </defs>
              <line class="cls-1" x1="7.23" y1="1.5" x2="16.77" y2="1.5"></line>
              <path class="cls-1" d="M14.86,6.27V1.5H9.14V6.27L2.7,19.15a2.3,2.3,0,0,0-.25,1h0A2.32,2.32,0,0,0,4.77,22.5H19.23a2.32,2.32,0,0,0,2.32-2.32h0a2.3,2.3,0,0,0-.25-1Z"></path>
              <path class="cls-1" d="M6.89,10.76c5-2.17,5.31,1.9,10.42.41"></path>
              <line class="cls-1" x1="7.23" y1="18.68" x2="9.14" y2="18.68"></line>
              <line class="cls-1" x1="10.09" y1="14.86" x2="12" y2="14.86"></line>
              <line class="cls-1" x1="14.86" y1="16.77" x2="16.77" y2="16.77"></line>
            </g>
          </svg>Química</a>

        <a href="#" class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded" onclick="mostrarConteudo('física')"> <svg fill="#FFFFFF" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" class="w-20 h-20">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <g>
                <g>
                  <path d="M256,192c-35.285,0-64,28.715-64,64s28.715,64,64,64s64-28.715,64-64C320,220.715,291.285,192,256,192z M256,294.4 c-21.171,0-38.4-17.229-38.4-38.4s17.229-38.4,38.4-38.4s38.4,17.229,38.4,38.4S277.171,294.4,256,294.4z"></path>
                </g>
              </g>
              <g>
                <g>
                  <path d="M453.999,252.314c34.33-47.181,42.743-91.332,23.706-124.314c-11.324-19.61-36.941-42.991-94.703-42.991 c-9.37,0-19.268,0.862-29.38,2.091C330.513,33.203,295.996,0,256,0c-39.987,0-74.513,33.203-97.621,87.1 c-10.103-1.237-20.002-2.091-29.363-2.091C71.236,85.018,45.619,108.39,34.295,128c-19.038,32.981-10.624,77.124,23.706,124.314 c0.896,1.229,1.946,2.441,2.867,3.669C25.788,302.916,14.31,349.38,34.295,384c11.324,19.61,36.941,42.991,94.703,42.991 c9.37,0,19.268-0.862,29.38-2.091C181.487,478.797,216.004,512,256,512s74.513-33.203,97.621-87.108 c10.112,1.237,20.011,2.091,29.38,2.091c57.754,0,83.379-23.373,94.703-42.991c19.985-34.62,8.516-81.084-26.573-128.026 C452.053,254.754,453.103,253.534,453.999,252.314z M383.002,110.609c34.552,0,60.783,9.847,72.533,30.191 c13.918,24.098,4.813,58.453-21.06,94.703c-15.411-17.254-34.022-34.304-55.211-50.662c-3.576-26.547-9.037-51.191-16.282-73.173 C369.903,110.993,376.61,110.609,383.002,110.609z M382.771,220.868c13.303,11.563,25.088,23.356,35.354,35.132 c-10.266,11.767-22.05,23.561-35.354,35.132C383.497,279.654,384,267.998,384,256S383.497,232.346,382.771,220.868z M349.807,163.772c-9.574-6.366-19.413-12.621-29.807-18.628c-10.249-5.914-20.582-11.29-30.925-16.41 c16.623-5.717,32.717-10.112,48-13.107C342.135,130.389,346.445,146.483,349.807,163.772z M256,25.6 c27.896,0,53.154,25.165,71.62,65.869c-22.997,4.83-47.112,12.365-71.62,22.383c-24.508-10.018-48.623-17.553-71.62-22.391 C202.846,50.765,228.105,25.6,256,25.6z M174.925,115.627c15.283,2.995,31.377,7.39,48,13.107 c-10.351,5.111-20.685,10.496-30.933,16.41c-10.385,6.007-20.224,12.271-29.798,18.628 C165.555,146.483,169.873,130.389,174.925,115.627z M128.998,401.391c-34.551,0-60.783-9.847-72.533-30.191 c-13.943-24.149-4.787-58.59,21.205-94.908c15.727,17.553,34.193,34.731,55.074,50.901c3.575,26.53,9.037,51.174,16.273,73.148 C142.097,401.007,135.39,401.391,128.998,401.391z M129.229,291.132c-13.303-11.563-25.088-23.356-35.354-35.132 c10.266-11.767,22.05-23.561,35.354-35.132C128.503,232.346,128,244.002,128,256S128.503,279.654,129.229,291.132z M132.736,184.832c-21.197,16.358-39.8,33.417-55.211,50.662c-25.865-36.241-34.97-70.596-21.06-94.694 c11.742-20.335,37.982-30.182,72.533-30.191c6.391,0,13.099,0.375,20.019,1.05C141.781,133.641,136.311,158.293,132.736,184.832z M162.176,348.186c9.651,6.443,19.533,12.732,29.815,18.671c10.257,5.914,20.591,11.29,30.933,16.41 c-16.623,5.717-32.717,10.112-48,13.107C169.865,381.602,165.547,365.491,162.176,348.186z M256,486.4 c-27.895,0-53.154-25.165-71.62-65.869c22.997-4.83,47.113-12.365,71.62-22.383c24.508,10.018,48.623,17.553,71.62,22.383 C309.154,461.235,283.896,486.4,256,486.4z M337.067,396.365c-15.292-2.995-31.377-7.39-48-13.107 c10.351-5.112,20.676-10.496,30.925-16.41c10.3-5.939,20.173-12.228,29.824-18.671 C346.453,365.483,342.127,381.594,337.067,396.365z M355.089,313.207c-14.822,10.965-30.754,21.581-47.889,31.471 s-34.295,18.441-51.2,25.796c-16.905-7.356-34.065-15.898-51.2-25.796c-17.135-9.89-33.067-20.506-47.889-31.471 c-2.082-18.321-3.311-37.419-3.311-57.207s1.229-38.886,3.311-57.207c14.822-10.965,30.754-21.581,47.889-31.471 c17.135-9.89,34.295-18.44,51.2-25.796c16.905,7.356,34.065,15.898,51.2,25.796c17.135,9.89,33.067,20.506,47.889,31.471 c2.082,18.321,3.311,37.419,3.311,57.207S357.171,294.886,355.089,313.207z M455.535,371.2 c-11.742,20.335-37.982,30.191-72.533,30.191c-6.391,0-13.099-0.375-20.019-1.05c7.236-21.973,12.698-46.609,16.273-73.148 c20.881-16.171,39.347-33.348,55.074-50.901C460.322,312.619,469.47,347.051,455.535,371.2z"></path>
                </g>
              </g>
            </g>
          </svg> Física</a>

        <a href="#" class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded" onclick="mostrarConteudo('filosofia')"><svg class="w-20 h-20" fill="#FFFFFF" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.001 512.001" xml:space="preserve" stroke="#FFFFFF"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M509.607,250.223l-70.195-70.195v-99.27c0-4.512-3.658-8.17-8.17-8.17h-99.269L261.777,2.393 c-3.191-3.191-8.364-3.191-11.554,0l-70.195,70.194h-99.27c-4.512,0-8.17,3.658-8.17,8.17v99.27L2.393,250.223 c-3.191,3.191-3.191,8.364,0,11.554l70.195,70.195v99.27c0,4.512,3.658,8.17,8.17,8.17h99.27l70.195,70.195 c1.595,1.595,3.686,2.393,5.777,2.393c2.09,0,4.182-0.797,5.777-2.393l70.195-70.195h99.27c4.512,0,8.17-3.658,8.17-8.17v-99.27 l70.195-70.195C512.798,258.587,512.798,253.412,509.607,250.223z M72.588,308.863L19.725,256l52.863-52.863V308.863z M256,19.724 l52.863,52.863H203.136L256,19.724z M88.928,88.928h74.76l-74.76,74.76V88.928z M88.928,186.796l97.868-97.868h138.408 l97.868,97.868v45.211C381.418,183.557,320.588,155.233,256,155.233c-64.589,0-125.418,28.324-167.072,76.774V186.796z M196.304,196.302c15.946-15.946,37.147-24.727,59.698-24.727c22.551,0,43.752,8.781,59.698,24.727 c15.946,15.946,24.727,37.147,24.727,59.698s-8.782,43.752-24.727,59.698c-15.946,15.946-37.147,24.727-59.698,24.727 c-22.551,0-43.752-8.781-59.698-24.727C163.387,282.781,163.387,229.22,196.304,196.302z M185.283,327.763 c-37.437-13.854-70.488-38.587-94.534-71.763c24.045-33.177,57.099-57.909,94.537-71.765c-0.176,0.174-0.361,0.337-0.536,0.512 c-39.288,39.289-39.288,103.216,0,142.504C184.924,327.425,185.106,327.589,185.283,327.763z M327.254,327.251 c19.032-19.032,29.514-44.337,29.514-71.252c0-26.915-10.482-52.221-29.514-71.252c-0.174-0.174-0.358-0.336-0.534-0.509 c37.436,13.856,70.486,38.587,94.532,71.762c-24.043,33.173-57.093,57.905-94.526,71.761 C326.9,327.588,327.081,327.425,327.254,327.251z M88.928,423.072v-74.76l74.76,74.76H88.928z M256,492.276l-52.863-52.863 h105.727L256,492.276z M423.072,423.072h-74.76l74.76-74.76V423.072z M423.072,325.204l-97.868,97.868H186.796l-97.868-97.868 c0,0,0-45.211,0-45.211C130.582,328.442,191.41,356.767,256,356.767c64.588,0,125.418-28.324,167.072-76.774V325.204z M423.072,163.687l-74.76-74.76h74.76V163.687z M439.412,308.863V203.136L492.276,256L439.412,308.863z"></path> </g> </g> <g> <g> <path d="M256,212.422c-24.027,0-43.574,19.547-43.574,43.574c0,24.027,19.546,43.574,43.574,43.574 c24.027,0,43.574-19.548,43.574-43.574C299.574,231.969,280.027,212.422,256,212.422z M256,283.23 c-15.017,0-27.234-12.217-27.234-27.234c0-15.017,12.216-27.234,27.234-27.234c15.017,0,27.234,12.217,27.234,27.234 C283.234,271.013,271.017,283.23,256,283.23z"></path> </g> </g> <g> <g> <path d="M328.898,133.427c-23.346-11.456-47.872-17.265-72.898-17.265c-25.028,0-49.555,5.81-72.9,17.267 c-4.051,1.988-5.722,6.884-3.735,10.934c1.419,2.893,4.321,4.573,7.34,4.572c1.208,0,2.436-0.269,3.594-0.838 c21.086-10.349,43.191-15.596,65.702-15.596c22.509,0,44.613,5.247,65.697,15.595c4.051,1.989,8.947,0.317,10.935-3.734 C334.62,140.311,332.948,135.416,328.898,133.427z"></path> </g> </g> <g> <g> <path d="M332.631,367.635c-1.988-4.051-6.883-5.721-10.935-3.734c-21.085,10.349-43.189,15.595-65.697,15.595 c-22.511,0-44.616-5.247-65.702-15.596c-4.05-1.987-8.946-0.317-10.934,3.735c-1.988,4.05-0.316,8.946,3.735,10.934 c23.346,11.459,47.874,17.269,72.901,17.269c25.026,0,49.552-5.81,72.897-17.267C332.947,376.582,334.619,371.687,332.631,367.635 z"></path> </g> </g> </g></svg>Filosofia</a>

        <a href="#" class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded" onclick="mostrarConteudo('sociologia')"> <svg fill="#FFFFFF" height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 349.759 349.759" xml:space="preserve" class="w-20 h-20">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path d="M144.688,319.567c-47.77,0-90.209-23.273-116.573-59.072c-0.418-0.453-0.789-0.959-1.098-1.511 C10.018,235.267,0,206.219,0,174.88s10.018-60.388,27.017-84.104c0.309-0.552,0.679-1.058,1.097-1.51 c26.364-35.8,68.804-59.073,116.574-59.073c0,0,0,0,0,0c0.001,0-0.001,0,0,0c57.863,0,110.045,34.343,132.94,87.491 c1.748,4.058-0.125,8.765-4.182,10.513c-4.06,1.747-8.765-0.125-10.512-4.183c-3.022-7.015-6.615-13.657-10.715-19.89 c-15.818,4.941-32.546,8.766-49.79,11.409c3.017,16.021,4.79,33.382,5.196,51.347h11.59c4.418,0,8,3.582,8,8s-3.582,8-8,8h-11.59 c-0.781,34.519-6.608,66.807-16.605,91.641C179.326,303.569,162.871,319.567,144.688,319.567z M106.386,247.849 c9.192,34.635,24.254,55.718,38.302,55.718c14.05,0,29.115-21.089,38.307-55.736C157.783,245.214,131.579,245.217,106.386,247.849z M47.559,259.211c16.648,19.148,38.855,33.348,64.08,40.056c-4.888-6.701-9.354-14.987-13.283-24.746 c-3.047-7.569-5.708-15.832-7.955-24.638C75.628,252.102,61.256,255.226,47.559,259.211z M16.246,182.88 c1.421,23.07,8.95,44.514,20.983,62.734c15.796-4.932,32.499-8.747,49.717-11.388c-3.017-16.02-4.79-33.382-5.196-51.347H16.246z M97.751,182.88c0.418,17.976,2.236,34.537,5.064,49.263c27.537-3.02,56.217-3.022,83.749-0.021 c2.826-14.723,4.641-31.27,5.06-49.241H97.751z M97.751,166.88h93.872c-0.418-17.976-2.236-34.537-5.063-49.263 c-27.55,3.021-56.195,3.021-83.745,0C99.988,132.342,98.17,148.904,97.751,166.88z M16.246,166.88h65.503 c0.407-17.965,2.18-35.327,5.196-51.347c-17.218-2.641-33.92-6.456-49.717-11.388C25.195,122.366,17.667,143.809,16.246,166.88z M106.386,101.91c25.208,2.634,51.395,2.633,76.604,0.001c-9.191-34.642-24.253-55.719-38.302-55.719 C130.64,46.192,115.578,67.275,106.386,101.91z M177.735,50.49c4.889,6.702,9.355,14.988,13.285,24.749 c3.047,7.569,5.707,15.833,7.955,24.639c14.808-2.226,29.212-5.358,42.941-9.356C225.055,71.09,202.688,57.107,177.735,50.49z M47.559,90.548c13.698,3.984,28.069,7.108,42.841,9.328c2.248-8.806,4.908-17.068,7.955-24.638 c3.929-9.759,8.396-18.045,13.283-24.746C86.414,57.201,64.207,71.4,47.559,90.548z M209.124,319.011 c-0.651,0-1.309-0.08-1.959-0.245c-0.652-0.165-1.272-0.409-1.85-0.723c-1.251-0.677-2.262-1.652-2.977-2.801 c-0.544-0.87-0.926-1.854-1.102-2.905c-0.153-0.901-0.152-1.837,0.019-2.767c0.111-0.611,0.291-1.198,0.533-1.753l15.258-37.606 c7.031-17.322,19.679-40.351,48.225-40.351h20.339c28.547,0,41.195,23.028,48.225,40.35l15.335,37.791 c1.661,4.094-0.311,8.76-4.405,10.421c-0.04,0.017-0.081,0.032-0.122,0.048c-0.002,0.001-0.004,0.002-0.007,0.003 c-0.004,0.002-0.009,0.004-0.014,0.005c-0.005,0.002-0.01,0.004-0.016,0.007c-0.002,0-0.003,0.001-0.005,0.002 c-0.007,0.002-0.014,0.005-0.021,0.008c0,0,0,0,0,0c-0.023,0.009-0.046,0.018-0.069,0.025l0,0.001 c-0.006,0.002-0.013,0.004-0.019,0.007c-0.002,0-0.004,0.001-0.007,0.002c-0.004,0.002-0.008,0.003-0.012,0.004 c-0.004,0.002-0.009,0.004-0.014,0.006c-0.001,0-0.002,0-0.004,0.001c-0.961,0.345-1.952,0.487-2.917,0.468H209.345 C209.271,319.01,209.197,319.011,209.124,319.011z M221.006,303.008h108.871l-10.867-26.781 c-8.638-21.284-18.626-30.366-33.397-30.366h-20.341c-14.771,0-24.76,9.082-33.399,30.367L221.006,303.008z M275.44,217.1 c-19.301,0-35.003-15.703-35.003-35.004s15.702-35.003,35.003-35.003c19.3,0,35.002,15.702,35.002,35.003 S294.741,217.1,275.44,217.1z M275.44,163.093c-10.479,0-19.003,8.524-19.003,19.003s8.524,19.004,19.003,19.004 c10.478,0,19.002-8.525,19.002-19.004S285.918,163.093,275.44,163.093z"></path>
            </g>
          </svg> Sociologia</a>
          
        <!-- Adicione mais matérias conforme necessário -->
      </div>
    </div>
  </div>

  <script>
    function mostrarConteudo(materia) {
      let conteudo = {
        matemática: `
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('matematica.conjuntos-numericos')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Conjuntos numéricos</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('matematica.fracao')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Fração</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('matematica.porcentagem')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Porcentagem</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('matematica.equacao-1')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Equação 1º grau</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('matematica.equacao-2')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Equação 2º grau</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('matematica.funcoes')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Funções</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('matematica.geometria-plana')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Geometria plana</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('matematica.geometria-espacial')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Geometria espacial</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('matematica.teorema-pitagoras')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Teorema de Pitágoras</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('matematica.media-mediana-moda')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Média, mediana e moda</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('matematica.graficos-tabelas')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Gráficos e tabelas</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('matematica.probabilidade')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Probabilidade</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('matematica.juros-simples-compostos')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Juros simples e compostos</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('matematica.trigonometria')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Trigonometria</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('matematica.unidades-medida')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Unidades de medida</a>
          </div>
        `,
        português: `
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ Gêneros Textuais</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ Figuras de Linguagem</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ Funções da linguagem</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ Análise Sintática</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ Coesão e Coerência</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ Interpretação de texto</a>
          </div>
        `,
        história: `
        <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('historia.periodo-colonial')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Período Colonial</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('historia.independencia-brasil')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Independência do Brasil</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('historia.proclamacao-republica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Proclamação da República</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('historia.era-vargas')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Era Vargas</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('historia.ditadura-militar')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Ditadura militar</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('historia.civilizacoes-antigas')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Civilizações antigas</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('historia.idade-media')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Idade Média</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('historia.revolucao-francesa')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Revolução Francesa</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('historia.revolucao-industrial')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Revolução Industrial</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('historia.guerras-mundiais')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Guerras Mundiais</a>
          </div>
        `,
        geografia: `
        <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ Hidrografia</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ Relevo</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ Ligações químicas</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ Oxirreduções</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ Ligações químicas</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ Eletroquímica</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ Radioatividade</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ Soluções químicas</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ gfgfdgdf</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ gfdgd</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ gddfgdf</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ gdfgd</a>
          </div>
        `,
        biologia: `
        <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('biologia.celulas')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Células</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('biologia.genetica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Genética</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('biologia.evolucao')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Evolução</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('biologia.ecologia')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Ecologia</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('biologia.fisiologia')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Fisiologia</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('biologia.botanica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Botânica</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('biologia.zoologia')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Zoologia</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('biologia.microbiologia')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Microbiologia</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('biologia.bioenergetica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Bioenergética</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('biologia.interacao-ecologica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Interações Ecológicas</a>
          </div>
        `,
        química: `
        <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('quimica.estrutura-atomica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Estrutura Atômica</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('quimica.tabela-periodica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Tabela periódica</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('quimica.ligacoes-quimicas')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Ligações químicas</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('quimica.oxirreducoes')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Oxirreduções</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('quimica.reacoes-quimicas')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Reações Químicas</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('quimica.eletroquimica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Eletroquímica</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('quimica.radioatividade')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Radioatividade</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('quimica.acidos-bases')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Ácidos e Bases</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('quimica.estequiometria')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Estequiometria</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('quimica.termodinamica-quimica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Termodinâmica Química</a>
          </div>
        `,
        física: `
        <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('fisica.mecanica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Mecânica</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('fisica.termodinamica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Termodinâmica</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('fisica.optica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Óptica</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('fisica.eletromagnetismo')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Eletromagnetismo</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('fisica.ondas')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Ondas</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('fisica.trabalho-energia')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Trabalho e Energia</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('fisica.fluidos')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Fluidos</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('fisica.cinematica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Cinemática</a>
          </div>
        `,
        filosofia: `
        <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('filosofia.etica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Ética</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('filosofia.periodo-pre-socratico')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Período Pré-socrático</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('filosofia.periodo-socratico')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Período Socrático</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('filosofia.filosofia-antiga')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Filosofia antiga</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('filosofia.filosofia-moderna')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Filosofia Moderna</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('filosofia.existencialismo')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Existencialismo</a>
          </div>
        `,
        sociologia: `
        <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('sociologia.movimentos-sociais')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Movimentos sociais</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('sociologia.cidadania-direitos-humanos')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Cidadania e Direitos Humanos</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('sociologia.politica-estado-governo')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Política, Estado e Governo</a>
          </div>
          <div class="block text-3xl font-Montserrat text-steelblue p-2 border-2 border-gray-700 rounded grid-item">
            <a href="{{route('sociologia.sociedade-contemporanea')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Sociedade Contemporânea</a>
          </div>
        `,
      };

      document.getElementById('materia-titulo').innerText = `${materia.charAt(0).toUpperCase() + materia.slice(1)}`;
      document.getElementById('materia-conteudo').innerHTML = conteudo[materia];
    }
  </script>

</x-app-layout>