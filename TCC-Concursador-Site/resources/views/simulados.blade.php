<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/simulados.js', 'resources/css/simulados.css'])
<x-app-layout>
  <div class="text-center">
    <h5 class="text-7xl font-Montserrat text-white p-8">Simulados</h5>
  </div>
  <main class="flex flex-col items-center justify-center p-10">
    <!-- Enem -->
    <div class="relative w-[80%] overflow-hidden">
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
        <h1 class="text-5xl font-Montserrat text-kblue p-10">ENEM</h1>
      </div>

      <!-- Conteúdo -->
      <div class="bg-whiteblue overflow-hidden transition-all duration-600 max-h-0 peer-checked:max-h-[600px]">

        <!-- Lista de Anos (como no site do ENEM) -->
        <div class="flex justify-center p-4 space-x-4 py-5 gap-4 border-b">
          <button data-ano="2024" class="ano-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue" onclick="setActiveYear(this)">2024</button>
          <button data-ano="2023" class="ano-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue" onclick="setActiveYear(this)">2023</button>
          <button data-ano="2022" class="ano-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue" onclick="setActiveYear(this)">2022</button>
          <button data-ano="2021" class="ano-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue " onclick="setActiveYear(this)">2021</button>
          <button data-ano="2020" class="ano-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue" onclick="setActiveYear(this)">2020</button>
          <button data-ano="2019" class="ano-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue" onclick="setActiveYear(this)">2019</button>
          <button data-ano="2018" class="ano-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue" onclick="setActiveYear(this)">2018</button>
          <button data-ano="2017" class="ano-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue " onclick="setActiveYear(this)">2017</button>
        <!-- Adicione mais anos conforme necessário -->
        </div>
        <div class="flex justify-center grid grid-cols-2 place-items-center p-4">
        <h2>Dia 1</h2>
        <h2>Dia 2</h2>
        </div>

        <div id="provasContainer" class="grid grid-cols-2 grid-rows-2 place-items-center">
          <div class="grid-item">
            <div id="provasList" class="grid grid-cols-2 grid-rows-4 gap-4 text-3xl font-Montserrat text-steelblue p-8"></div>
          </div>
          <div class="grid-item">
            <div id="gabaritoList" class="grid grid-cols-2 grid-rows-4 gap-4 text-3xl font-Montserrat text-steelblue p-8"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- FATEC -->
    <div class="relative w-[80%] overflow-hidden">
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
        <h1 class="text-5xl font-Montserrat text-steelblue p-10 text-right">FATEC</h1>
      </div>

       <!-- Conteúdo -->
      <div class="bg-whiteblue overflow-hidden transition-all duration-600 max-h-0 peer-checked:max-h-[600px]">

      <!-- Lista de Anos (como no site do FATEC) -->
      <div class="flex justify-center p-4 space-x-4 py-5 gap-4 border-b">
        <button data-ano-fatec="2024" class="ano-fatec-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue" onclick="setActiveYearFatec(this)">2024</button>
        <button data-ano-fatec="2023" class="ano-fatec-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue" onclick="setActiveYearFatec(this)">2023</button>
        <button data-ano-fatec="2022" class="ano-fatec-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue" onclick="setActiveYearFatec(this)">2022</button>
        <button data-ano-fatec="2020" class="ano-fatec-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue" onclick="setActiveYearFatec(this)">2020</button>
        <button data-ano-fatec="2019" class="ano-fatec-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue" onclick="setActiveYearFatec(this)">2019</button>
        <button data-ano-fatec="2018" class="ano-fatec-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue" onclick="setActiveYearFatec(this)">2018</button>
        <button data-ano-fatec="2017" class="ano-fatec-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue " onclick="setActiveYearFatec(this)">2017</button>
      <!-- Adicione mais anos conforme necessário -->
      </div>
      <div class="flex justify-center grid grid-cols-2 place-items-center p-4">
      <h2>Provas</h2>
      <h2>Gabaritos</h2>
      </div>

      <div id="provasContainerFatec" class="grid grid-cols-2 grid-rows-1 place-items-center">
        <div class="grid-item">
          <div id="provasListFatec" class="grid grid-cols-1 grid-rows-2 gap-4 text-3xl font-Montserrat text-steelblue p-8"></div>
        </div>
        <div class="grid-item">
          <div id="gabaritoListFatec" class="grid grid-cols-1 grid-rows-2 gap-4 text-3xl font-Montserrat text-steelblue p-8"></div>
        </div>
      </div>
      </div>
    </div>

    <!-- FUVEST -->
    <div class="relative w-[80%] overflow-hidden">
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
        <h1 class="text-5xl font-Montserrat text-kblue p-10">FUVEST</h1>
      </div>

      <!-- Conteúdo -->
      <div class="bg-whiteblue overflow-hidden transition-all duration-600 max-h-0 peer-checked:max-h-[600px]">

      <!-- Lista de Anos (como no site do FUVEST) -->
      <div class="flex justify-center p-4 space-x-4 py-5 gap-4 border-b">
        <button data-ano-fuvest="2024" class="ano-fuvest-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue" onclick="setActiveYearFuvest(this)">2024</button>
        <button data-ano-fuvest="2023" class="ano-fuvest-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue" onclick="setActiveYearFuvest(this)">2023</button>
        <button data-ano-fuvest="2022" class="ano-fuvest-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue" onclick="setActiveYearFuvest(this)">2022</button>
        <button data-ano-fuvest="2021" class="ano-fuvest-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue " onclick="setActiveYearFuvest(this)">2021</button>
        <button data-ano-fuvest="2020" class="ano-fuvest-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue" onclick="setActiveYearFuvest(this)">2020</button>
        <button data-ano-fuvest="2019" class="ano-fuvest-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue" onclick="setActiveYearFuvest(this)">2019</button>
        <button data-ano-fuvest="2018" class="ano-fuvest-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue" onclick="setActiveYearFuvest(this)">2018</button>
        <button data-ano-fuvest="2017" class="ano-fuvest-btn py-2 px-4 relative text-steelblue hover:after:w-full after:transition-all after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-steelblue " onclick="setActiveYearFuvest(this)">2017</button>
      <!-- Adicione mais anos conforme necessário -->
      </div>
      <div class="flex justify-center grid grid-rows-1 grid-cols-1 place-items-center p-4">
      </div>

      <div id="provasContainerFuvest" class="grid grid-cols-1 grid-rows-1 place-items-center">
      <h2>Primeira fase</h2>
        <div class="grid-item">
          <div id="provasListFuvest" class="grid grid-cols-2 grid-rows-1 gap-4 text-3xl font-Montserrat text-steelblue p-8"></div>
        </div>
        <h2>Segunda fase</h2>
        <div class="grid-item">
          <div id="gabaritoListFuvest" class="grid grid-cols-2 grid-rows-1 gap-4 text-3xl font-Montserrat text-steelblue p-8"></div>
        </div>
      </div>
      </div>
    </div>
  </main>
</x-app-layout>
