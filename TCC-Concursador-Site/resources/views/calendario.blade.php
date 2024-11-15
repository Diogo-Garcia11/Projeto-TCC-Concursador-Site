<x-app-layout>
    <div class="container-c" style="margin-top: 80px;">
        <div class="calendario">
            <header class="calendario-header">
                <button id="mes-anterior">&lt;</button>
                <h2 id="mes-ano"></h2>
                <button id="mes-posterior">&gt;</button>
            </header>
            <!-- Adicionando os dias da semana -->
            <div class="calendario-dias-semana" id="dias-semana"></div>
            <div class="calendario-container" id="dias-calendario"></div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mesAno = document.getElementById('mes-ano');
            const tabelaDias = document.getElementById('dias-calendario');
            const diasSemana = document.getElementById('dias-semana');
            const btnMesAnterior = document.getElementById('mes-anterior');
            const btnMesPosterior = document.getElementById('mes-posterior');
            const meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
            const diasDaSemana = ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'];
            let dataAtual = new Date();

            function carregarEventos(mes, ano) {
                tabelaDias.querySelectorAll('.dia').forEach(dia => {
                    dia.classList.remove('event'); 
                });

                fetch(`/eventos?mes=${mes + 1}&ano=${ano}`)
                .then(response => response.json())
                .then(eventos => {
                    eventos.forEach(evento => {
                        let data = new Date(evento.dataEvento);
                        let dia = data.getDate();
                        let celula = tabelaDias.querySelector(`.dia[data-dia='${dia}']`);
                        if (celula) {
                            celula.classList.add('event'); 
                            let eventoCard = document.createElement('div');
                            eventoCard.classList.add('evento-card');
                            eventoCard.innerHTML = `<strong>Eventos:</strong><ul><li>${evento.descricaoEvento}</li></ul>`;
                            celula.appendChild(eventoCard);
                        }
                    });
                })
                .catch(error => console.error('Erro ao carregar eventos:', error));
            }

            function gerarCalendario(mes, ano) {
                mesAno.textContent = `${meses[mes]} ${ano}`;
                tabelaDias.innerHTML = '';
                diasSemana.innerHTML = ''; // Limpa os dias da semana antes de gerar a linha

                // Adiciona os dias da semana
                diasDaSemana.forEach(dia => {
                    let diaSemana = document.createElement('div');
                    diaSemana.classList.add('dia-semana');
                    diaSemana.textContent = dia;
                    diasSemana.appendChild(diaSemana);
                });

                let primeiroDiaDoMes = new Date(ano, mes, 1).getDay();
                let diasNoMes = new Date(ano, mes + 1, 0).getDate();
                let diaAtual = 1;

                for (let i = 0; i < 6; i++) {
                    if (diaAtual > diasNoMes) break; // Adiciona quebra se o dia atual ultrapassar o total de dias no mês
                    for (let j = 0; j < 7; j++) {
                        let celula = document.createElement('div');
                        celula.classList.add('dia');
                        if (i === 0 && j < primeiroDiaDoMes || diaAtual > diasNoMes) {
                            celula.textContent = '';
                        } else {
                            celula.textContent = diaAtual;
                            celula.setAttribute('data-dia', diaAtual); 
                            diaAtual++;
                        }
                        tabelaDias.appendChild(celula);
                    }
                }

                carregarEventos(mes, ano);
            }

            btnMesAnterior.onclick = function () {
                dataAtual.setMonth(dataAtual.getMonth() - 1);
                gerarCalendario(dataAtual.getMonth(), dataAtual.getFullYear());
            };

            btnMesPosterior.onclick = function () {
                dataAtual.setMonth(dataAtual.getMonth() + 1);
                gerarCalendario(dataAtual.getMonth(), dataAtual.getFullYear());
            };

            gerarCalendario(dataAtual.getMonth(), dataAtual.getFullYear());
        });
    </script>
</x-app-layout>
