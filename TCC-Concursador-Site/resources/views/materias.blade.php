<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<x-app-layout>
  <div class="text-center">
    <h5 class="text-7xl font-Montserrat text-white p-8">MATÉRIAS</h5>
  </div>
  <main class="flex flex-col items-center justify-center p-10">
    <!-- Matemática -->
    <div class="relative w-[80%] overflow-hidden">
    <input type="checkbox" id="toggle-matematica" class="peer absolute top-0 inset-x-0 w-full h-40 opacity-0 z-10 cursor-pointer" 
    @if(request()->get('section') === 'matematica') checked @endif>
      <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-40 opacity-0 z-10 cursor-pointer">
      <div class="bg-steelblue h-40 w-full pl-5 flex items-center">
        <div class=" left-3 ">
          <svg fill="#000000" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg" class="w-20 h-20">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path d="M116,184a12,12,0,0,1-12,12H84v20a12,12,0,0,1-24,0V196H40a12,12,0,0,1,0-24H60V152a12,12,0,0,1,24,0v20h20A12,12,0,0,1,116,184ZM104,60H40a12,12,0,0,0,0,24h64a12,12,0,0,0,0-24Zm48,116.06641h64a12,12,0,0,0,0-24H152a12,12,0,0,0,0,24Zm64,15.86718H152a12,12,0,0,0,0,24h64a12,12,0,0,0,0-24Zm-64.48535-87.44824a12.00033,12.00033,0,0,0,16.9707,0L184,88.9707l15.51465,15.51465a12.0001,12.0001,0,0,0,16.9707-16.9707L200.9707,72l15.51465-15.51465a12.0001,12.0001,0,0,0-16.9707-16.9707L184,55.0293,168.48535,39.51465a12.0001,12.0001,0,0,0-16.9707,16.9707L167.0293,72,151.51465,87.51465A12.00062,12.00062,0,0,0,151.51465,104.48535Z"></path>
            </g>
          </svg>
        </div>
        <h1 class="text-5xl font-Montserrat text-kblue p-10">MATEMÁTICA</h1>
      </div>

      <!-- Conteúdo -->
      <div class="bg-whiteblue overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-[500px]">
        <div class="p-4 grid grid-cols-3 grid-rows-3 gap-4 place-items-center">

          <div class="grid-item">
            <a href="{{route('matematica.conjuntos-numericos')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Conjuntos numéricos</a>
          </div>
          <div class="grid-item">
            <a href="{{route('matematica.fracao')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Fração</a>
          </div>
          <div class="grid-item">
            <a href="{{route('matematica.porcentagem')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Porcentagem</a>
          </div>
          <div class="grid-item">
            <a href="{{route('matematica.equacao-1')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Equação 1º grau</a>
          </div>
          <div class="grid-item">
            <a href="{{route('matematica.equacao-2')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Equação 2º grau</a>
          </div>
          <div class="grid-item">
            <a href="{{route('matematica.funcoes')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Funções</a>
          </div>
          <div class="grid-item">
            <a href="{{route('matematica.geometria-plana')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Geometria plana</a>
          </div>
          <div class="grid-item">
            <a href="{{route('matematica.geometria-espacial')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Geometria espacial</a>
          </div>
          <div class="grid-item">
            <a href="{{route('matematica.teorema-pitagoras')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Teorema de Pitágoras</a>
          </div>
          <div class="grid-item">
            <a href="{{route('matematica.media-mediana-moda')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Média, mediana e moda</a>
          </div>
          <div class="grid-item">
            <a href="{{route('matematica.graficos-tabelas')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Gráficos e tabelas</a>
          </div>
          <div class="grid-item">
            <a href="{{route('matematica.probabilidade')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Probabilidade</a>
          </div>
          <div class="grid-item">
            <a href="{{route('matematica.juros-simples-compostos')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Juros simples e compostos</a>
          </div>
          <div class="grid-item">
            <a href="{{route('matematica.trigonometria')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Trigonometria</a>
          </div>
          <div class="grid-item">
            <a href="{{route('matematica.unidades-medida')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Unidades de medida</a>
          </div>
        </div>
      </div>
    </div>

    <!-- PORTUGUÊS -->
    <div class="relative w-[80%] overflow-hidden">
    <input type="checkbox" id="toggle-portugues" class="peer absolute top-0 inset-x-0 w-full h-40 opacity-0 z-10 cursor-pointer" 
    @if(request()->get('section') === 'portugues') checked @endif>
      <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-40 opacity-0 z-10 cursor-pointer">
      <div class="bg-kblue h-40 w-full pl-5 flex items-center">
        <div class=" right-3 ">
          <svg viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" class="w-20 h-20">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <title>book</title>
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="icon" fill="#000000" transform="translate(42.666667, 106.666667)">
                  <path d="M175.702784,2.84217094e-14 L213.333333,18.7946667 L250.963883,2.84217094e-14 L426.666667,2.84217094e-14 L426.666667,320 L261.013333,320 L213.333333,343.851392 L165.632,320 L3.55271368e-14,320 L3.55271368e-14,2.84217094e-14 L175.702784,2.84217094e-14 Z M165.632,42.6666667 L42.6666667,42.6666667 L42.6666667,277.333333 L175.702784,277.333333 L192,285.473 L192,55.851 L165.632,42.6666667 Z M384,42.6666667 L261.013333,42.6666667 L234.666,55.846 L234.666,285.473 L250.963883,277.333333 L384,277.333333 L384,42.6666667 Z M362.666667,170.666667 L362.666667,202.666667 L256,202.666667 L256,170.666667 L362.666667,170.666667 Z M170.666667,170.666667 L170.666667,202.666667 L64,202.666667 L64,170.666667 L170.666667,170.666667 Z M362.666667,85.3333333 L362.666667,117.333333 L256,117.333333 L256,85.3333333 L362.666667,85.3333333 Z M170.666667,85.3333333 L170.666667,117.333333 L64,117.333333 L64,85.3333333 L170.666667,85.3333333 Z" id="Path-2"> </path>
                </g>
              </g>
            </g>
          </svg>
        </div>
        <h1 class="text-5xl font-Montserrat text-steelblue p-10 text-right">PORTUGUÊS</h1>
      </div>

      <!-- Conteúdo -->
      <div class="bg-whiteblue overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-[500px]">
        <div class="p-4 grid grid-cols-3 grid-rows-3 gap-4 place-items-center">

          <div class="grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ Gêneros Textuais</a>
          </div>
          <div class="grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ Figuras de Linguagem</a>
          </div>
          <div class="grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ Funções da linguagem</a>
          </div>
          <div class="grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ Análise Sintática</a>
          </div>
          <div class="grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ Coesão e Coerência</a>
          </div>
          <div class="grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ Interpretação de texto</a>
          </div>
          <div class="grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ Radioatividade</a>
          </div>
          <div class="grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ Soluções químicas</a>
          </div>
          <div class="grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ gfgfdgdf</a>
          </div>
          <div class="grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ gfdgd</a>
          </div>
          <div class="grid-item">
            <a href="" class="text-3xl font-Montserrat text-steelblue p-8">➤ gddfgdf</a>
          </div>
          <div class="grid-item">
            <a href="{{route('portugues.redacao')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Redacao</a>
          </div>
        </div>
      </div>
    </div>

    <!-- HISTÓRIA -->
    <div class="relative w-[80%] overflow-hidden">
    <input type="checkbox" id="toggle-historia" class="peer absolute top-0 inset-x-0 w-full h-40 opacity-0 z-10 cursor-pointer" 
    @if(request()->get('section') === 'historia') checked @endif>
      <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-40 opacity-0 z-10 cursor-pointer">
      <div class="bg-steelblue h-40 w-full pl-5 flex items-center">
        <div class=" left-3 ">
          <svg fill="#000000" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.001 512.001" xml:space="preserve" class="h-20 w-20">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <g>
                <g>
                  <path d="M359.973,162.137v-31.364c19.232,3.808,37.842,10.772,54.995,20.673l15.04,8.683l63.678-110.294l-15.04-8.683 C432.014,14.23,379.06,0,325.51,0c-52.951,0-105.31,13.765-151.418,39.807c-47.513,26.837-87.126,66.135-114.558,113.646 C18.913,223.81,7.859,305.846,28.408,384.45l4.677,17.89l120.833-39.829l-3.553-15.432c-3.27-14.202-4.776-28.584-4.578-42.874 l34.731,5.789v162.537l289.445,39.47v-83.574h-17.367c-67.032,0-121.567-54.534-121.567-121.567 c0-9.576,7.791-17.367,17.367-17.367s17.367,7.791,17.367,17.367v52.1h104.2v-86.833 C469.962,211.478,420.621,162.137,359.973,162.137z M139.747,199.763c-24.511,42.456-33.625,91.434-26.226,139.492l-55.597,18.326 c-12.252-64.087-1.228-129.745,31.69-186.761C138.078,86.879,228.467,34.733,325.51,34.733c41.695,0,82.992,9.74,120.453,28.295 l-29.02,50.264c-28.596-13.553-59.909-20.656-91.519-20.656c-36.959,0-73.509,9.611-105.696,27.79 C186.553,139.165,158.896,166.599,139.747,199.763z M149.66,269.639c3.877-18.266,10.623-35.978,20.166-52.508 c31.936-55.313,91.474-89.692,155.413-89.757v34.762c-68.984,0-126.84,48.519-141.259,113.22L149.66,269.639z M435.229,324.226 h-34.733v-17.367c0-28.728-23.372-52.1-52.1-52.1s-52.1,23.371-52.1,52.1c0,80.314,60.893,146.674,138.933,155.342v10.008 l-219.978-29.997V306.859c0-60.648,49.341-109.989,109.989-109.989h34.733c41.496,0,75.256,33.76,75.256,75.256V324.226z"></path>
                </g>
              </g>
            </g>
          </svg>
        </div>
        <h1 class="text-5xl font-Montserrat text-kblue p-10">HISTÓRIA</h1>
      </div>

      <!-- Conteúdo -->
      <div class="bg-whiteblue overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-[500px]">
        <div class="p-4 grid grid-cols-3 grid-rows-3 gap-4 place-items-center">

          <div class="grid-item">
            <a href="{{route('historia.periodo-colonial')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Período Colonial</a>
          </div>
          <div class="grid-item">
            <a href="{{route('historia.independencia-brasil')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Independência do Brasil</a>
          </div>
          <div class="grid-item">
            <a href="{{route('historia.proclamacao-republica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Proclamação da República</a>
          </div>
          <div class="grid-item">
            <a href="{{route('historia.era-vargas')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Era Vargas</a>
          </div>
          <div class="grid-item">
            <a href="{{route('historia.ditadura-militar')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Ditadura militar</a>
          </div>
          <div class="grid-item">
            <a href="{{route('historia.civilizacoes-antigas')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Civilizações antigas</a>
          </div>
          <div class="grid-item">
            <a href="{{route('historia.idade-media')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Idade Média</a>
          </div>
          <div class="grid-item">
            <a href="{{route('historia.revolucao-francesa')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Revolução Francesa</a>
          </div>
          <div class="grid-item">
            <a href="{{route('historia.revolucao-industrial')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Revolução Industrial</a>
          </div>
          <div class="grid-item">
            <a href="{{route('historia.guerras-mundiais')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Guerras Mundiais</a>
          </div>
        </div>
      </div>
    </div>

    <!-- GEOGRAFIA -->
    <div class="relative w-[80%] overflow-hidden">
    <input type="checkbox" id="toggle-geografia" class="peer absolute top-0 inset-x-0 w-full h-40 opacity-0 z-10 cursor-pointer" 
    @if(request()->get('section') === 'geografia') checked @endif>
      <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-40 opacity-0 z-10 cursor-pointer">
      <div class="bg-kblue h-40 w-full pl-5 flex items-center">
        <div class=" right-3 ">
          <svg viewBox="0 0 64 64" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" fill="#000000" class="w-20 h-20">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path d="M47.61,16.34l-2.77,3.55a1.18,1.18,0,0,1-.91.44h-3.8a1.21,1.21,0,0,1-.58-.16l-1.43-.83a1.14,1.14,0,0,0-1.24.05l-2.15,1.54a1.14,1.14,0,0,1-1.31,0L29.14,18a1.16,1.16,0,0,1-.26-1.65L34.7,8.84" fill="none" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"></path>
              <circle cx="33.91" cy="24.72" r="16.54" fill="none" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"></circle>
              <path d="M49.17,40.56A21.72,21.72,0,0,1,18.39,9.91" fill="none" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"></path>
              <path d="M20.1,33.83l5.43-4.64a1.16,1.16,0,0,1,1.41-.09l2.42,1.66a1.13,1.13,0,0,0,1.12.1l3.7-2.5a1.13,1.13,0,0,1,1.16.12l4,2.31a1.15,1.15,0,0,1,.21,1.63l-2.34,4.06a1.15,1.15,0,0,1-1.35.35l-3.63-1a1.15,1.15,0,0,0-1.59.94l-.42,4.07" fill="none" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"></path>
              <line x1="45.4" y1="36.62" x2="51.79" y2="43.29" fill="none" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"></line>
              <line x1="21.78" y1="13.47" x2="15.33" y2="6.7" fill="none" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"></line>
              <line x1="33.93" y1="46.8" x2="33.93" y2="52.14" fill="none" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"></line>
              <path d="M41.12,57.3H26.33a1.14,1.14,0,0,1-1.06-1.57l2.51-2.87a1.17,1.17,0,0,1,1.07-.72h9.76a1.15,1.15,0,0,1,1.06.72l2.52,2.87A1.15,1.15,0,0,1,41.12,57.3Z" fill="none" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"></path>
            </g>
          </svg>
        </div>
        <h1 class="text-5xl font-Montserrat text-steelblue p-10 text-right">GEOGRAFIA</h1>
      </div>

      <!-- Conteúdo -->
      <div class="bg-whiteblue overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-[500px]">
        <div class="p-4 grid grid-cols-3 grid-rows-3 gap-4 place-items-center">

          <div class="grid-item">
            <a href="{{route('geografia.geografia-fisica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Geografia física</a>
          </div>
          <div class="grid-item">
            <a href="{{route('geografia.geopolitica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Geopolítica</a>
          </div>
          <div class="grid-item">
            <a href="{{route('geografia.geografia-economica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Geografia Econômica</a>
          </div>
          <div class="grid-item">
            <a href="{{route('geografia.cartografia')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Cartografia</a>
          </div>
          <div class="grid-item">
            <a href="{{route('geografia.populacao')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ População</a>
          </div>
        </div>
      </div>
    </div>

    <!-- BIOLOGIA -->
    <div id="biologia" class="relative w-[80%] overflow-hidden">
    <input type="checkbox" id="toggle-biologia" class="peer absolute top-0 inset-x-0 w-full h-40 opacity-0 z-10 cursor-pointer" 
    @if(request()->get('section') === 'biologia') checked @endif>
      <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-40 opacity-0 z-10 cursor-pointer">
      <div class="bg-steelblue h-40 w-full pl-5 flex items-center">
        <div class=" left-3 ">
          <svg fill="#000000" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" class="h-20 w-20">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <g>
                <g>
                  <path d="M479.319,114.383c0,16.309-3.011,31.926-8.492,46.335L351.282,41.172c14.409-5.481,30.026-8.492,46.335-8.492V0 c-90.101,0-163.404,73.303-163.404,163.404v76.255h-74.077C71.837,239.66,0,311.496,0,399.796h32.681 c0-13.729,2.192-26.955,6.227-39.355l112.653,112.653c-12.401,4.035-25.626,6.226-39.356,6.226V512 c88.299,0,160.136-71.837,160.136-160.136v-74.077l76.255,0.001C438.697,277.787,512,204.484,512,114.383H479.319z M182.687,458.003l-128.69-128.69c6.087-9.138,13.322-17.445,21.497-24.721l131.913,131.913 C200.132,444.68,191.825,451.914,182.687,458.003z M226.116,408.994l-123.11-123.109c10.775-5.425,22.414-9.373,34.658-11.56 l100.012,100.011C235.488,386.581,231.541,398.221,226.116,408.994z M239.66,330.104l-57.763-57.763h57.763V330.104z M266.894,245.106v-57.234l57.235,57.235L266.894,245.106z M368.785,243.547L268.454,143.215 c1.939-12.455,5.648-24.33,10.852-35.367l124.846,124.847C393.115,237.899,381.24,241.607,368.785,243.547z M432.346,214.672 L297.328,79.654c7.013-8.384,15.055-15.879,23.931-22.287l133.375,133.374C448.223,199.617,440.73,207.658,432.346,214.672z"></path>
                </g>
              </g>
            </g>
          </svg>
        </div>
        <h1 class="text-5xl font-Montserrat text-kblue p-10">BIOLOGIA</h1>
      </div>

      <!-- Conteúdo -->
      <div class="bg-whiteblue overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-[500px]">
        <div class="p-4 grid grid-cols-3 grid-rows-3 gap-4 place-items-center">

          <div class="grid-item">
            <a href="{{route('biologia.citologia')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Citologia</a>
          </div>
          <div class="grid-item">
            <a href="{{route('biologia.genetica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Genética</a>
          </div>
          <div class="grid-item">
            <a href="{{route('biologia.evolucao')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Evolução</a>
          </div>
          <div class="grid-item">
            <a href="{{route('biologia.ecologia')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Ecologia</a>
          </div>
          <div class="grid-item">
            <a href="{{route('biologia.fisiologia')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Fisiologia</a>
          </div>         
        </div>
      </div>
    </div>

    <!-- QUÍMICA -->
    <div class="relative w-[80%] overflow-hidden">
    <input type="checkbox" id="toggle-quimica" class="peer absolute top-0 inset-x-0 w-full h-40 opacity-0 z-10 cursor-pointer" 
    @if(request()->get('section') === 'quimica') checked @endif>
      <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-40 opacity-0 z-10 cursor-pointer">
      <div class="bg-kblue h-40 w-full pl-5 flex items-center">
        <div class=" right-3 ">
          <svg viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" fill="#000000" class="w-20 h-20">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <defs>
                <style>
                  .cls-1 {
                    fill: none;
                    stroke: #020202;
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
          </svg>
        </div>
        <h1 class="text-5xl font-Montserrat text-steelblue p-10 text-right">QUÍMICA</h1>
      </div>

      <!-- Conteúdo -->
      <div class="bg-whiteblue overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-[500px]">
        <div class="p-4 grid grid-cols-3 grid-rows-3 gap-4 place-items-center">

          <div class="grid-item">
            <a href="{{route('quimica.estrutura-atomica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Estrutura Atômica</a>
          </div>
          <div class="grid-item">
            <a href="{{route('quimica.tabela-periodica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Tabela periódica</a>
          </div>
          <div class="grid-item">
            <a href="{{route('quimica.ligacoes-quimicas')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Ligações químicas</a>
          </div>
          <div class="grid-item">
            <a href="{{route('quimica.oxirreducoes')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Oxirreduções</a>
          </div>
          <div class="grid-item">
            <a href="{{route('quimica.reacoes-quimicas')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Reações Químicas</a>
          </div>
          <div class="grid-item">
            <a href="{{route('quimica.eletroquimica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Eletroquímica</a>
          </div>
          <div class="grid-item">
            <a href="{{route('quimica.radioatividade')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Radioatividade</a>
          </div>
          <div class="grid-item">
            <a href="{{route('quimica.acidos-bases')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Ácidos e Bases</a>
          </div>
          <div class="grid-item">
            <a href="{{route('quimica.estequiometria')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Estequiometria</a>
          </div>
          <div class="grid-item">
            <a href="{{route('quimica.termodinamica-quimica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Termodinâmica Química</a>
          </div>
          
        </div>
      </div>
    </div>

    <!-- FÍSICA -->
    <div class="relative w-[80%] overflow-hidden">
    <input type="checkbox" id="toggle-fisica" class="peer absolute top-0 inset-x-0 w-full h-40 opacity-0 z-10 cursor-pointer" 
    @if(request()->get('section') === 'fisica') checked @endif>
      <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-40 opacity-0 z-10 cursor-pointer">
      <div class="bg-steelblue h-40 w-full pl-5 flex items-center">
        <div class=" left-3 ">
          <svg fill="#000000" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" class="w-20 h-20">
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
          </svg>
        </div>
        <h1 class="text-5xl font-Montserrat text-kblue p-10">FÍSICA</h1>
      </div>

      <!-- Conteúdo -->
      <div class="bg-whiteblue overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-[500px]">
        <div class="p-4 grid grid-cols-3 grid-rows-3 gap-4 place-items-center">

          <div class="grid-item">
            <a href="{{route('fisica.cinematica')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Cinemática</a>
          </div>
          <div class="grid-item">
            <a href="{{route('fisica.newton')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Leis de Newton</a>
          </div>
          <div class="grid-item">
            <a href="{{route('fisica.energia')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Energia, Trabalho e Potência</a>
          </div>
          <div class="grid-item">
            <a href="{{route('fisica.ondulatoria')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Ondulatória</a>
          </div>
          <div class="grid-item">
            <a href="{{route('fisica.eletricidade')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Eletricidade e Circuitos Elétricos</a>
          </div>

        </div>
      </div>
    </div>

    <!-- FILOSOFIA -->
    <div class="relative w-[80%] overflow-hidden">
    <input type="checkbox" id="toggle-filosofia" class="peer absolute top-0 inset-x-0 w-full h-40 opacity-0 z-10 cursor-pointer" 
    @if(request()->get('section') === 'filosofia') checked @endif>
      <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-40 opacity-0 z-10 cursor-pointer">
      <div class="bg-kblue h-40 w-full pl-5 flex items-center">
        <div class=" right-3 ">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" enable-background="new 0 0 100 100" xml:space="preserve" class="w-20 h-40">
            <g>
              <path d="M54.911,64.803c-0.044,0-0.09-0.007-0.135-0.02c-0.264-0.074-0.417-0.348-0.342-0.611c0.007-0.025,0.719-2.549,0.93-3.786   c0.09-0.529-0.164-2.028-0.409-3.478c-0.304-1.799-0.618-3.659-0.538-4.85c0.075-1.144-0.695-2.778-1.376-4.22   c-0.526-1.115-1.023-2.169-1.154-3.009c-0.266-1.695-2.504-6.93-5.772-6.656c-3.919,0.312-6.454,0.184-7.804-1.404   c-0.183-0.215-0.356-0.437-0.528-0.655c-0.966-1.232-1.728-2.203-3.836-1.718c-2.659,0.614-2.74,0.873-3.042,1.838   c-0.515,1.646-0.578,2.94-0.396,3.145c0.893,0.051,0.949,0.875,0.976,1.271c0.008,0.124,0.024,0.355,0.065,0.405   c0.598,0.24,0.742,0.702,0.847,1.04c0.086,0.277,0.141,0.427,0.338,0.558c0.228,0.152,0.29,0.459,0.139,0.688   c-0.152,0.228-0.458,0.289-0.688,0.139c-0.5-0.332-0.636-0.77-0.735-1.089c-0.091-0.293-0.121-0.355-0.261-0.411   c-0.626-0.25-0.668-0.883-0.694-1.261c-0.008-0.121-0.021-0.323-0.055-0.375c-0.337-0.018-0.589-0.165-0.756-0.412   c-0.618-0.913,0.054-3.286,0.274-3.992c0.44-1.409,0.868-1.839,3.766-2.508c2.721-0.629,3.847,0.807,4.839,2.073   c0.164,0.208,0.329,0.419,0.503,0.625c1.071,1.258,3.459,1.338,6.97,1.058c4.182-0.349,6.568,5.81,6.83,7.491   c0.109,0.7,0.577,1.69,1.072,2.74c0.768,1.626,1.562,3.309,1.468,4.709c-0.071,1.074,0.247,2.957,0.527,4.618   c0.282,1.67,0.526,3.113,0.408,3.809c-0.22,1.29-0.923,3.784-0.953,3.89C55.326,64.66,55.128,64.803,54.911,64.803z" />
            </g>
            <g>
              <path d="M35.428,54.999c-0.229,0-0.435-0.16-0.484-0.394c-0.007-0.033-0.717-3.326-2.069-4.948   c-1.606-1.928-0.639-4.933-0.597-5.06c0.036-0.109,0.109-0.203,0.206-0.264c0.733-0.464,1.715-0.998,2.229-0.914   c0.292,0.048,0.522,0.157,0.726,0.253c0.16,0.075,0.298,0.14,0.449,0.17c0.241,0.048,2.354,0.507,2.354,1.949   c0,0.878-0.729,1.697-1.131,2.083c0.349,1.192,1.268,3.667,2.463,4.513c0.224,0.158,0.276,0.467,0.119,0.69   c-0.159,0.224-0.468,0.276-0.691,0.118c-1.865-1.319-2.887-5.197-2.93-5.361c-0.048-0.187,0.017-0.385,0.166-0.508   c0.263-0.216,1.014-0.963,1.014-1.536c0-0.472-1.014-0.869-1.556-0.976c-0.271-0.054-0.487-0.156-0.679-0.246   c-0.166-0.078-0.309-0.146-0.464-0.171c-0.155,0.01-0.784,0.314-1.379,0.675c-0.159,0.598-0.603,2.668,0.465,3.949   c1.509,1.812,2.246,5.233,2.277,5.378c0.057,0.268-0.114,0.53-0.382,0.587C35.497,54.995,35.462,54.999,35.428,54.999z" />
            </g>
            <g>
              <path d="M33.023,65.279c-0.352,0-0.754-0.155-1.256-0.603c-0.291-0.259-0.568-0.416-0.835-0.567   c-0.65-0.369-1.323-0.75-1.061-2.253c0.292-1.675,1.329-2.701,2.427-3.788l0.318-0.315c1.213-1.213,1.612-1.385,3.828-2.34   l0.527-0.228c3.522-1.523,6.298-3.448,6.248-4.026c-0.381-1.232-0.403-3.294,0.173-4.392c0.401-0.763,0.324-1.447-0.258-2.287   c-0.802-1.159-0.076-2.806-0.044-2.876c0.112-0.249,0.406-0.359,0.654-0.249c0.25,0.112,0.361,0.405,0.25,0.654   c-0.148,0.334-0.445,1.328-0.045,1.906c0.788,1.139,0.893,2.222,0.321,3.312c-0.442,0.843-0.419,2.619-0.103,3.643   c0.592,1.916-5.563,4.688-6.803,5.225l-0.528,0.228c-2.163,0.933-2.441,1.053-3.519,2.131l-0.322,0.319   c-1.067,1.056-1.91,1.89-2.147,3.253c-0.142,0.815-0.004,0.893,0.573,1.221c0.283,0.16,0.636,0.36,1.006,0.689   c0.521,0.463,0.632,0.399,0.998,0.184c0.17-0.099,0.383-0.223,0.646-0.293c0.336-0.089,0.539-0.36,0.535-0.451   c-0.257-0.148-0.39-0.339-0.415-0.565c-0.04-0.367,0.219-0.621,0.468-0.866c0.234-0.229,0.526-0.516,0.706-0.944   c0.582-1.385,1.369-2.488,5.657-3.019c0.378-0.159,2.385-1.01,4.194-1.849c1.74-0.809,1.87-1.844,2.152-4.113l0.017-0.134   c0.199-1.592,0.855-3.093,1.434-4.417c0.327-0.749,0.636-1.456,0.839-2.114c0.215-0.698,0.294-1.05,0.323-1.218   c-0.097-0.187-0.067-0.422,0.089-0.579c0.162-0.163,0.458-0.205,0.652-0.087c0.383,0.23,0.363,0.617-0.117,2.175   c-0.219,0.712-0.539,1.444-0.878,2.22c-0.579,1.324-1.177,2.693-1.359,4.143l-0.017,0.134c-0.289,2.318-0.48,3.85-2.719,4.889   c-2.013,0.935-4.268,1.881-4.29,1.891c-0.042,0.018-0.087,0.029-0.132,0.035c-4.122,0.5-4.533,1.479-4.931,2.427   c-0.257,0.613-0.66,1.008-0.926,1.269c-0.014,0.014-0.028,0.027-0.043,0.042c0.224,0.227,0.322,0.522,0.275,0.837   c-0.083,0.555-0.613,1.083-1.26,1.255c-0.135,0.035-0.265,0.111-0.402,0.19C33.642,65.141,33.355,65.279,33.023,65.279z" />
            </g>
            <g>
              <path d="M49.33,57.32c-1.044,0-1.431-0.356-1.548-0.509c-0.167-0.217-0.126-0.527,0.091-0.694c0.205-0.158,0.494-0.132,0.667,0.057   c0.056,0.038,0.638,0.4,2.619-0.142c0.267-0.077,0.537,0.083,0.608,0.347c0.073,0.264-0.082,0.536-0.347,0.608   C50.53,57.232,49.849,57.32,49.33,57.32z" />
            </g>
            <g>
              <path d="M43.147,82.183c-0.217,0-0.399-0.041-0.532-0.135c-0.064-0.045-0.296-0.078-0.45-0.101   c-0.417-0.06-0.936-0.135-1.215-0.579c-0.191-0.305-0.209-0.69-0.055-1.18c0.278-0.882,1.059-1.449,1.813-1.999   c0.613-0.445,1.191-0.866,1.48-1.414c0.608-1.155,0.461-4.37-2.628-6.914c-3.261-2.686-6.096-6.187-6.124-6.221   c-0.172-0.214-0.139-0.525,0.075-0.697c0.214-0.172,0.526-0.138,0.697,0.074c0.028,0.034,2.802,3.459,5.982,6.078   c3.408,2.807,3.73,6.517,2.875,8.141c-0.396,0.752-1.096,1.262-1.773,1.755c-0.654,0.476-1.271,0.926-1.452,1.496   c-0.084,0.268-0.05,0.354-0.05,0.354c0.055,0.059,0.355,0.102,0.516,0.125c0.305,0.044,0.62,0.089,0.876,0.269   c0.322,0.062,2.26-0.697,4.875-2.332c1.679-1.05,2.607-2.657,2.509-3.304c-0.019-0.126-0.07-0.181-0.2-0.215   c-1.581-0.415-2.614-3.017-4.332-8.689c-1.391-4.593-3.701-5.009-3.724-5.013c-0.268-0.042-0.456-0.292-0.417-0.561   s0.283-0.458,0.551-0.421c0.12,0.016,2.944,0.439,4.539,5.707c1.176,3.883,2.425,7.7,3.635,8.018   c0.511,0.135,0.85,0.509,0.928,1.025c0.187,1.229-1.143,3.154-2.964,4.292C47.314,80.537,44.516,82.183,43.147,82.183z" />
            </g>
            <g>
              <path d="M43.445,76.778c-0.089,0-0.179-0.024-0.26-0.074c-0.159-0.099-3.91-2.452-4.968-5.701c-0.949-2.915-3.039-4.312-3.06-4.326   c-0.229-0.149-0.292-0.457-0.143-0.686c0.15-0.229,0.457-0.295,0.687-0.143c0.098,0.063,2.403,1.605,3.458,4.848   c0.945,2.901,4.512,5.143,4.548,5.165c0.232,0.144,0.304,0.449,0.16,0.682C43.772,76.694,43.61,76.778,43.445,76.778z" />
            </g>
            <g>
              <path d="M38.589,84.1c-0.273,0-0.633-0.115-0.828-0.45c-0.343-0.59,0.086-1.377,0.438-1.917c0.846-1.297,1.147-4.232-1.644-6.594   c-2.669-2.258-6.08-6.118-6.57-6.678c-0.337-0.203-1.531-1.024-2.149-2.756c-0.68-1.907-0.716-2.119,0.244-3.355   c0.168-0.217,0.478-0.257,0.695-0.088c0.216,0.168,0.256,0.479,0.088,0.695c-0.654,0.843-0.654,0.843-0.094,2.414   c0.58,1.626,1.753,2.257,1.765,2.264c0.054,0.028,0.103,0.066,0.143,0.112c0.037,0.043,3.755,4.298,6.518,6.636   c2.922,2.472,3.125,5.91,1.833,7.891c-0.439,0.674-0.402,0.9-0.401,0.902c0.279-0.017,0.487,0.158,0.503,0.432   c0.017,0.273-0.213,0.475-0.487,0.491C38.627,84.1,38.608,84.1,38.589,84.1z" />
            </g>
            <g>
              <path d="M37.674,43.896c-0.072,0-0.144-0.015-0.213-0.048c-0.247-0.118-0.352-0.414-0.235-0.661   c0.188-0.396,0.676-1.584,0.676-2.322c0-0.568,0.138-0.92,0.248-1.203c0.106-0.272,0.176-0.453,0.12-0.822   c-0.042-0.271,0.144-0.524,0.414-0.565c0.274-0.042,0.524,0.145,0.565,0.414c0.098,0.633-0.048,1.005-0.176,1.333   c-0.097,0.248-0.18,0.462-0.18,0.843c0,1.113-0.741,2.682-0.772,2.748C38.037,43.792,37.859,43.896,37.674,43.896z" />
            </g>
            <g>
              <path d="M41.801,53.287c-0.098,0-0.196-0.029-0.283-0.089l-1.992-1.387c-0.225-0.157-0.28-0.466-0.124-0.69   c0.156-0.224,0.464-0.28,0.69-0.124l1.992,1.386c0.225,0.157,0.28,0.466,0.124,0.69C42.112,53.213,41.958,53.287,41.801,53.287z" />
            </g>
            <g>
              <path d="M64.607,84.429c-0.092,0-0.185-0.025-0.267-0.078c-0.23-0.146-0.298-0.453-0.152-0.684c0.117-0.186,0.327-0.65,0.227-0.908   c-0.016-0.04-0.064-0.164-0.372-0.247c-1.677-0.452-2.703-2.466-2.703-3.412c0-1.866-0.355-3.02-1.057-3.429   c-1.101-0.642-0.971-2.149-0.819-3.895c0.079-0.918,0.161-1.868,0.086-2.794c-0.186-2.273-0.405-2.335-4.065-3.366l-0.192-0.054   c-3.66-1.034-6.94-0.061-6.972-0.051c-0.262,0.081-0.539-0.067-0.618-0.329c-0.08-0.262,0.067-0.538,0.329-0.618   c0.145-0.045,3.577-1.07,7.531,0.043l0.191,0.055c3.671,1.033,4.543,1.279,4.785,4.24c0.082,1.009-0.008,2.045-0.087,2.959   c-0.116,1.352-0.227,2.628,0.332,2.954c1.549,0.902,1.549,3.448,1.549,4.284c0,0.555,0.784,2.136,1.969,2.455   c0.656,0.177,0.928,0.559,1.039,0.849c0.307,0.793-0.252,1.698-0.316,1.798C64.929,84.349,64.77,84.429,64.607,84.429z" />
            </g>
            <g>
              <path d="M64.025,88.002H38.484c-0.274,0-0.496-0.223-0.496-0.496s0.222-0.496,0.496-0.496h25.541c0.273,0,0.496,0.223,0.496,0.496   S64.299,88.002,64.025,88.002z" />
            </g>
            <g>
              <path d="M64.025,90.066H38.484c-0.274,0-0.496-0.223-0.496-0.496s0.222-0.496,0.496-0.496h25.541c0.273,0,0.496,0.223,0.496,0.496   S64.299,90.066,64.025,90.066z" />
            </g><text x="0" y="115" fill="#000000" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">
          </svg>
        </div>
        <h1 class="text-5xl font-Montserrat text-steelblue p-10 text-right">FILOSOFIA</h1>
      </div>

      <!-- Conteúdo -->
      <div class="bg-whiteblue overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-[500px]">
        <div class="p-4 grid grid-cols-3 grid-rows-3 gap-4 place-items-center">

          <div class="grid-item">
            <a href="{{route('filosofia.filosofos')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Sócrates, Platão e Aristóteles</a>
          </div>
          <div class="grid-item">
            <a href="{{route('filosofia.contratualismo')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Contratualismo</a>
          </div>
          <div class="grid-item">
            <a href="{{route('filosofia.kant')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Ética de Kant</a>
          </div>
          <div class="grid-item">
            <a href="{{route('filosofia.marxismo')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Marxismo</a>
          </div>
          <div class="grid-item">
            <a href="{{route('filosofia.iluminismo')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Iluminismo</a>
          </div>
        </div>
      </div>
    </div>

    <!-- SOCIOLOGIA -->
    <div class="relative w-[80%] overflow-hidden">
    <input type="checkbox" id="toggle-sociologia" class="peer absolute top-0 inset-x-0 w-full h-40 opacity-0 z-10 cursor-pointer" 
    @if(request()->get('section') === 'sociologia') checked @endif>
      <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-40 opacity-0 z-10 cursor-pointer">
      <div class="bg-steelblue h-40 w-full pl-5 flex items-center">
        <div class=" left-3 ">
          <svg fill="#000000" height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 349.759 349.759" xml:space="preserve" class="w-20 h-20">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path d="M144.688,319.567c-47.77,0-90.209-23.273-116.573-59.072c-0.418-0.453-0.789-0.959-1.098-1.511 C10.018,235.267,0,206.219,0,174.88s10.018-60.388,27.017-84.104c0.309-0.552,0.679-1.058,1.097-1.51 c26.364-35.8,68.804-59.073,116.574-59.073c0,0,0,0,0,0c0.001,0-0.001,0,0,0c57.863,0,110.045,34.343,132.94,87.491 c1.748,4.058-0.125,8.765-4.182,10.513c-4.06,1.747-8.765-0.125-10.512-4.183c-3.022-7.015-6.615-13.657-10.715-19.89 c-15.818,4.941-32.546,8.766-49.79,11.409c3.017,16.021,4.79,33.382,5.196,51.347h11.59c4.418,0,8,3.582,8,8s-3.582,8-8,8h-11.59 c-0.781,34.519-6.608,66.807-16.605,91.641C179.326,303.569,162.871,319.567,144.688,319.567z M106.386,247.849 c9.192,34.635,24.254,55.718,38.302,55.718c14.05,0,29.115-21.089,38.307-55.736C157.783,245.214,131.579,245.217,106.386,247.849z M47.559,259.211c16.648,19.148,38.855,33.348,64.08,40.056c-4.888-6.701-9.354-14.987-13.283-24.746 c-3.047-7.569-5.708-15.832-7.955-24.638C75.628,252.102,61.256,255.226,47.559,259.211z M16.246,182.88 c1.421,23.07,8.95,44.514,20.983,62.734c15.796-4.932,32.499-8.747,49.717-11.388c-3.017-16.02-4.79-33.382-5.196-51.347H16.246z M97.751,182.88c0.418,17.976,2.236,34.537,5.064,49.263c27.537-3.02,56.217-3.022,83.749-0.021 c2.826-14.723,4.641-31.27,5.06-49.241H97.751z M97.751,166.88h93.872c-0.418-17.976-2.236-34.537-5.063-49.263 c-27.55,3.021-56.195,3.021-83.745,0C99.988,132.342,98.17,148.904,97.751,166.88z M16.246,166.88h65.503 c0.407-17.965,2.18-35.327,5.196-51.347c-17.218-2.641-33.92-6.456-49.717-11.388C25.195,122.366,17.667,143.809,16.246,166.88z M106.386,101.91c25.208,2.634,51.395,2.633,76.604,0.001c-9.191-34.642-24.253-55.719-38.302-55.719 C130.64,46.192,115.578,67.275,106.386,101.91z M177.735,50.49c4.889,6.702,9.355,14.988,13.285,24.749 c3.047,7.569,5.707,15.833,7.955,24.639c14.808-2.226,29.212-5.358,42.941-9.356C225.055,71.09,202.688,57.107,177.735,50.49z M47.559,90.548c13.698,3.984,28.069,7.108,42.841,9.328c2.248-8.806,4.908-17.068,7.955-24.638 c3.929-9.759,8.396-18.045,13.283-24.746C86.414,57.201,64.207,71.4,47.559,90.548z M209.124,319.011 c-0.651,0-1.309-0.08-1.959-0.245c-0.652-0.165-1.272-0.409-1.85-0.723c-1.251-0.677-2.262-1.652-2.977-2.801 c-0.544-0.87-0.926-1.854-1.102-2.905c-0.153-0.901-0.152-1.837,0.019-2.767c0.111-0.611,0.291-1.198,0.533-1.753l15.258-37.606 c7.031-17.322,19.679-40.351,48.225-40.351h20.339c28.547,0,41.195,23.028,48.225,40.35l15.335,37.791 c1.661,4.094-0.311,8.76-4.405,10.421c-0.04,0.017-0.081,0.032-0.122,0.048c-0.002,0.001-0.004,0.002-0.007,0.003 c-0.004,0.002-0.009,0.004-0.014,0.005c-0.005,0.002-0.01,0.004-0.016,0.007c-0.002,0-0.003,0.001-0.005,0.002 c-0.007,0.002-0.014,0.005-0.021,0.008c0,0,0,0,0,0c-0.023,0.009-0.046,0.018-0.069,0.025l0,0.001 c-0.006,0.002-0.013,0.004-0.019,0.007c-0.002,0-0.004,0.001-0.007,0.002c-0.004,0.002-0.008,0.003-0.012,0.004 c-0.004,0.002-0.009,0.004-0.014,0.006c-0.001,0-0.002,0-0.004,0.001c-0.961,0.345-1.952,0.487-2.917,0.468H209.345 C209.271,319.01,209.197,319.011,209.124,319.011z M221.006,303.008h108.871l-10.867-26.781 c-8.638-21.284-18.626-30.366-33.397-30.366h-20.341c-14.771,0-24.76,9.082-33.399,30.367L221.006,303.008z M275.44,217.1 c-19.301,0-35.003-15.703-35.003-35.004s15.702-35.003,35.003-35.003c19.3,0,35.002,15.702,35.002,35.003 S294.741,217.1,275.44,217.1z M275.44,163.093c-10.479,0-19.003,8.524-19.003,19.003s8.524,19.004,19.003,19.004 c10.478,0,19.002-8.525,19.002-19.004S285.918,163.093,275.44,163.093z"></path>
            </g>
          </svg>
        </div>
        <h1 class="text-5xl font-Montserrat text-kblue p-10">SOCIOLOGIA</h1>
      </div>

      <!-- Conteúdo -->
      <div class="bg-whiteblue overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-[500px]">
        <div class="p-4 grid grid-cols-3 grid-rows-3 gap-4 place-items-center">

          <div class="grid-item">
            <a href="{{route('sociologia.movimentos-sociais')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Movimentos sociais</a>
          </div>
          <div class="grid-item">
            <a href="{{route('sociologia.cidadania-direitos-humanos')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Cidadania e Direitos Humanos</a>
          </div>
          <div class="grid-item">
            <a href="{{route('sociologia.politica-estado-governo')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Política, Estado e Governo</a>
          </div>
          <div class="grid-item">
            <a href="{{route('sociologia.sociedade-contemporanea')}}" class="text-3xl font-Montserrat text-steelblue p-8">➤ Sociedade Contemporânea</a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script>document.addEventListener("DOMContentLoaded", function () {
    const section = new URLSearchParams(window.location.search).get('section');
    if (section === 'biologia') {
        const element = document.getElementById('biologia');
        if (element) {
            element.scrollIntoView({ behavior: 'smooth' });
        }
    }
});</script>
</x-app-layout>

