<x-app-layout>
    <!-- Dropdown para Enem -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg relative">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <button id="dropdownButtonEnem" class="text-blue-600 hover:text-blue-800">
                        Enem
                    </button>
                </div>
            </div>
            <div id="dropdownPanelEnem" class="relative z-10 hidden mt-2 w-full bg-white border border-gray-300 rounded-lg shadow-lg">
                <div class="p-4">
                    <!-- Conteúdo do Dropdown -->
                    <p>Detalhes sobre o Enem...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Dropdown para Fatec -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg relative">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <button id="dropdownButtonFatec" class="text-blue-600 hover:text-blue-800">
                        Fatec
                    </button>
                </div>
            </div>
            <div id="dropdownPanelFatec" class="relative z-10 hidden mt-2 w-full bg-white border border-gray-300 rounded-lg shadow-lg">
                <div class="p-4">
                    <!-- Conteúdo do Dropdown -->
                    <p>Simulado Fatec 2024</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Dropdown para Fuvest -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg relative">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <button id="dropdownButtonFuvest" class="text-blue-600 hover:text-blue-800">
                        Fuvest
                    </button>
                </div>
            </div>
            <div id="dropdownPanelFuvest" class="relative z-10 hidden mt-2 w-full bg-white border border-gray-300 rounded-lg shadow-lg">
                <div class="p-4">
                    <!-- Conteúdo do Dropdown -->
                    <p>Detalhes sobre a Fuvest...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Dropdown para Unicamp -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg relative">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <button id="dropdownButtonUnicamp" class="text-blue-600 hover:text-blue-800">
                        Unicamp
                    </button>
                </div>
            </div>
            <div id="dropdownPanelUnicamp" class="relative z-10 hidden mt-2 w-full bg-white border border-gray-300 rounded-lg shadow-lg">
                <div class="p-4">
                    <!-- Conteúdo do Dropdown -->
                    <p>Detalhes sobre a Unicamp...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Dropdown para Senac -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg relative">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <button id="dropdownButtonSenac" class="text-blue-600 hover:text-blue-800">
                        Senac
                    </button>
                </div>
            </div>
            <div id="dropdownPanelSenac" class="relative z-10 hidden mt-2 w-full bg-white border border-gray-300 rounded-lg shadow-lg">
                <div class="p-4">
                    <!-- Conteúdo do Dropdown -->
                    <p>Detalhes sobre o Senac...
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Dropdown para IFSP -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg relative">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <button id="dropdownButtonIfsp" class="text-blue-600 hover:text-blue-800">
                        IFSP
                    </button>
                </div>
            </div>
            <div id="dropdownPanelIfsp" class="relative z-10 hidden mt-2 w-full bg-white border border-gray-300 rounded-lg shadow-lg">
                <div class="p-4">
                    <!-- Conteúdo do Dropdown -->
                    <p>Detalhes sobre o IFSP...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Script JavaScript para Dropdown -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const dropdownButtons = document.querySelectorAll('[id^="dropdownButton"]');
            dropdownButtons.forEach(button => {
                const panelId = button.id.replace('dropdownButton', 'dropdownPanel');
                const dropdownPanel = document.getElementById(panelId);

                button.addEventListener('click', () => {
                    dropdownPanel.classList.toggle('hidden');
                });

                document.addEventListener('click', (event) => {
                    if (!button.contains(event.target) && !dropdownPanel.contains(event.target)) {
                        dropdownPanel.classList.add('hidden');
                    }
                });
            });
        });
    </script>
</x-app-layout>
