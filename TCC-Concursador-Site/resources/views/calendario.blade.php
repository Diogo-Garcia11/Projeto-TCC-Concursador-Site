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
                background: white;
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
            }
            .btn-ant,.btn-pro{
                position: absolute;
                top: 50%;
                height: 32px;
                width: 32px;
                line-height: 32px;
                margin-top: -16px;
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
                height: 69.4px;
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
            }
            .calendario tbody td{
                cursor: pointer;
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
                <h2 id="mes">Setembro</h2>
                    <a class="btn-ant" id="btn-prev"></a>
                    <a class="btn-pro" id="btn-next"></a>
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
                        <td class="mes-anterior">1</td>
                        <td class="event">2</td>
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
                        <td class="dia-atual">20</td>
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
                        <td class="proximo-mes">1</td>
                        <td class="proximo-mes">2</td>
                        <td class="proximo-mes">3</td>
                        <td class="proximo-mes">4</td>
                    </tr>
                </tbody>
            </table>
            <footer>
            <h2 id="ano">2024</h2>
        </footer>
            </div>
        </div>
    </body>
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            const monthsBr = ['janeiro', 'fevereiro', 'março','abril', 'maio','junho', 'julho', 'agosto', 'setembro','outubro','novembro','dezembro'];
            function GetDaysCalendar(mes,ano){
                document.getElementById('mes').innerHTML = monthsBr[mes];
                document.getElementById('ano').innerHTML = ano;
                console.log(monthsBr[mes]);
            }
            GetDaysCalendar(2,2001);
        })
    </script>
    </html>
</x-app-layout>