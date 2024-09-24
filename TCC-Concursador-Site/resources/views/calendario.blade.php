<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calendário Vestibulares</title>
        <style>
            *{
                padding: 0;
                margin: 0;
            }
            .conteudo{
                left: 50%;
                margin: 15px 0 0 -250px;
                position: absolute;
                width: 500px;
                height: 51px;
            }
            .calendario{
                text-align: center;
            }
            .conteudo .calendario header{
                position: relative;
            }

            h2{
                margin-top: 20px;
                font-size: 32px;
                text-transform: uppercase;
                color: #f9f9f9;
            }
            .btn-ant,.btn-pro{
                position: absolute;
                top: 50%;
                height: 32px;
                width: 32px;
                line-height: 32px;
                margin-top: -16px;
                background-color: #f9f9f9;
                border: 2px solid #cbd1d2;
                border-radius: 50%;
                color: #cbd1d2;
                font-size: 16px;
                font-weight: bold;
            }
            .btn-ant{
                left:80px;
            }
            .btn-pro{
                right: 80px;
            }
            .btn-ant:hover, .btn-pro:hover{
                background: #cbd1d2;
                color: #f9f9f9;
            }
            .calendario table{
                margin-top: 20px;
                border-collapse: collapse;
            }
            .calendario thead{
                background: white;
                font-weight: 600;
                text-transform: uppercase;
                border-bottom: 2px solid red;
            }
            .calendario thead td{
                height: 71.4px;
            }
            .calendario thead td:first-child{
               border-left: 2px solid red;
            }
            .calendario thead td:last-child{
               border-right: 2px solid red;
            }
            .calendario td{
                border: 1px solid #cbd1d2;
                height: 71.4px;
                text-align: center;
                width: 71.4px;
                border-bottom: #00addf;
            }
            .calendario tbody td{
                background-color: #f9f9f9;
                cursor: pointer;
                border-bottom: #00addf;
            }
            .calendario tbody td:first-child{
               border-left: 2px solid rgba(21, 37, 63);
            }
            .calendario tbody td:last-child{
               border-right: 2px solid rgba(21, 37, 63);
            }
            .calendario tbody td:hover{
                background: rgba(0, 173, 223, 0.8);
                color: #f9f9f9;
            }
            .calendario table .dia-atual{
                background: #00addf;
                color: #f9f9f9;
            }
            .calendario .mes-anterior, .calendario .proximo-mes{
                color: #cbd1d2;
            }
            .calendario .mes-anterior:hover, .calendario .proximo-mes:hover{
                background: #98a0a0;
            }
            .event{
                position: relative;
            }
            .event:after{
                content:' ' ;
                width: 7px;
                height: 7px;
                left: 50px;
                bottom: 7px;
                margin: -3.5px 0 0 -3.5px;
                background: #00addf;
                display: block;
                position: absolute;
                border-radius: 50%;
            }
            .event:hover::after{
                background: #f9f9f9 ;
            }
        </style>
    </head>
    <body>
        <div class="conteudo">
            <div class="calendario">
            <header>
                <h2 id="mes"></h2>
                    <a class="btn-ant" id="btn_ant"><</a>
                    <a class="btn-pro" id="btn_prev">></a>
            </header>
            <table>
                <thead>
                    <tr>
                        <td>Dom</td>
                        <td>Seg</td>
                        <td>Ter</td>
                        <td>Qua</td>
                        <td>Qui</td>
                        <td>Sex</td>
                        <td>Sab</td>
                    </tr>
                </thead>
                <tbody id="dias">
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                        <td>18</td>
                        <td>19</td>
                        <td>20</td>
                        <td>21</td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>23</td>
                        <td>24</td>
                        <td>25</td>
                        <td>26</td>
                        <td>27</td>
                        <td>28</td>
                    </tr>
                    <tr>
                        <td>29</td>
                        <td>30</td>
                        <td>31</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                    </tr>
                </tbody>
            </table>
            <footer>
            <h2 id="ano"></h2>
        </footer>
            </div>
        </div>
    </body>
    <script>
    document.addEventListener('DOMContentLoaded', function(){
            const monthsBr = ['janeiro', 'fevereiro', 'março','abril', 'maio','junho', 'julho', 'agosto', 'setembro','outubro','novembro','dezembro'];
            const tableDays = document.getElementById('dias');
            function GetDaysCalendar(mes,ano){
                document.getElementById('mes').innerHTML = monthsBr[mes];
                document.getElementById('ano').innerHTML = ano;
                
                let firstDaysOfWeek = new Date (ano,mes,1).getDay()-1;
                let getLastDayThisMonth = new Date(ano,mes+1,0).getDate();

                for(var i = -firstDaysOfWeek,calendario = 0; i < (42-firstDaysOfWeek); i++, calendario++)
                {
                    let dt = new Date(ano,mes,i);
                    let dayTable = tableDays.getElementsByTagName('td')[calendario];
                    dayTable.classList.remove('mes-anterior');
                    dayTable.classList.remove('proximo-mes');
                    dayTable.classList.remove('dia-atual');
                    dayTable.innerHTML = dtNow.getDate();

                    if(dt.getFullYear() == dtNow.getFullYear() && dt.getMonth() == dtNow.getMonth() && dt.getDate() == dtNow.getDate()){
                        dayTable.classList.add('dia-atual')
                    }

                    if(i < 1){
                        dayTable.classList.add('mes-anterior')
                    }
                    if(i > getLastDayThisMonth){
                        dayTable.classList.add('proximo-mes')
                    }
                }
            }

            let now = new Date();
            let mes = now.getMonth();
            let ano = now.getFullYear();
            GetDaysCalendar(mes,ano);

            const botao_proximo = document.getElementById('btn_prev');
            const botao_anterior = document.getElementById('btn_ant');

            botao_proximo.onclick = function(){
                mes++;
                if(mes > 11){
                    mes = 0;
                    ano++;
                }
                GetDaysCalendar(mes,ano);
            }
            botao_anterior.onclick = function(){
                mes--;
                if(mes < 0){
                    mes = 11;
                    ano--;
                }
                GetDaysCalendar(mes,ano);
            }
        })
        </script>
    </html>
</x-app-layout>