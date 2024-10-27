<x-app-layout>
    <div class="container" style="margin-top: 80px;">
        <div class="calendario">
            <header>
                <button id="mes-anterior">&lt;</button>
                <h2 id="mes-ano"></h2>
                <button id="mes-posterior">&gt;</button>
            </header>
            <div class="calendario-container" id="dias-calendario"></div>
        </div>
    </div>

    <style>
        .container { text-align: center; margin: 20px auto; }
        .calendario { 
            display: inline-block; 
            width: 100%; 
            max-width: 600px; 
            background-color: rgb(67, 93, 134); 
            border: 2px solid #00796b; 
            border-radius: 8px; 
            padding: 20px; 
        }
        header h2 {
             color: white; /* Muda a cor do texto para branco */
        }

        header { display: flex; justify-content: space-between; align-items: center; }
        .calendario-container {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
            margin-top: 20px;
        }
        .dia {
            padding: 15px;
            background-color:white; 
            position: relative;
            cursor: pointer;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .dia.event {
            background-color: rgb(100, 140, 190); 
        }
        .evento-card {
            display: none; 
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            background-color: #fff;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            width: 150px;
            z-index: 10;
        }
        .dia:hover .evento-card {
            display: block;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mesAno = document.getElementById('mes-ano');
            const tabelaDias = document.getElementById('dias-calendario');
            const btnMesAnterior = document.getElementById('mes-anterior');
            const btnMesPosterior = document.getElementById('mes-posterior');
            const meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
            let dataAtual = new Date();

            function carregarEventos(mes, ano) {
                tabelaDias.querySelectorAll('.dia').forEach(dia => {
                    dia.classList.remove('event'); 
                });

                fetch(`/eventos?mes=${mes + 1}&ano=${ano}`)
                    .then(response => response.json())
                    .then(eventos => {
                        eventos.forEach(evento => {
                            let data = new Date(evento.data);
                            let dia = data.getDate();
                            let celula = tabelaDias.querySelector(`.dia[data-dia='${dia}']`);
                            if (celula) {
                                celula.classList.add('event'); 
                                let eventoCard = document.createElement('div');
                                eventoCard.classList.add('evento-card');
                                eventoCard.innerHTML = `<strong>Eventos:</strong><ul><li>${evento.descricao}</li></ul>`;
                                celula.appendChild(eventoCard);
                            }
                        });
                    })
                    .catch(error => console.error('Erro ao carregar eventos:', error));
            }

            function gerarCalendario(mes, ano) {
                mesAno.textContent = `${meses[mes]} ${ano}`;
                tabelaDias.innerHTML = '';
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
