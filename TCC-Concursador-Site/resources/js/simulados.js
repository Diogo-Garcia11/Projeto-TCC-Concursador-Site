
//ETEC
// Página dos Simulados
document.addEventListener('DOMContentLoaded', function() {
    const yearButtons = document.querySelectorAll('.ano-btn');
    const yearButtonsFatec = document.querySelectorAll('.ano-fatec-btn');
  
    // Define o ano padrão ao carregar a página
    const defaultYear = '2023';
    const defaultButton = document.querySelector(`button[data-ano="${defaultYear}"]`);
    const defaultButtonFatec = document.querySelector(`button[data-ano-fatec="${defaultYear}"]`);
    
    // Função para atualizar o ano ativo
    function setActiveYear(button) {
        yearButtons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
  
        const year = button.getAttribute('data-ano');
        updateProvas(year);
        updateGabaritos(year);
    }
  
    // Adiciona evento de clique a todos os botões de ano
    yearButtons.forEach(button => {
        button.addEventListener('click', function() {
            setActiveYear(this);
        });
    });
  
    // Conteúdo das provas
    const provasData = {
        '2023': [
            { title: 'Prova – Caderno 1 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_PV_impresso_D1_CD1.pdf', color: "bg-azul" },
            { title: 'Gabarito – Caderno 1 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_GB_impresso_D1_CD1.pdf', color: "bg-azul" },
            { title: 'Prova – Caderno 2 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_PV_impresso_D1_CD2.pdf' , color: "bg-amarelo"},
            { title: 'Gabarito – Caderno 2 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_GB_impresso_D1_CD2.pdf' , color: "bg-amarelo"},
            { title: 'Prova – Caderno 3 – Branco – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_PV_impresso_D1_CD3.pdf', color: "bg-white" },
            { title: 'Gabarito – Caderno 3 – Branco – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_GB_impresso_D1_CD3.pdf', color: "bg-white" },
            { title: 'Prova – Caderno 4 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_PV_impresso_D1_CD4.pdf' , color: "bg-rosa"},
            { title: 'Gabarito – Caderno 4 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_GB_impresso_D1_CD4.pdf' , color: "bg-rosa"},
        ],
        '2022': [
          { title: 'Prova – Caderno 1 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2022_PV_impresso_D1_CD1.pdf', color: "bg-azul" },
          { title: 'Gabarito – Caderno 1 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2022_GB_impresso_D1_CD1.pdf', color: "bg-azul" },
          { title: 'Prova – Caderno 2 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2022_PV_impresso_D1_CD2.pdf', color: "bg-amarelo" },
          { title: 'Gabarito – Caderno 2 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2022_GB_impresso_D1_CD2.pdf', color: "bg-amarelo" },
          { title: 'Prova – Caderno 3 – Branco – Aplicação Regular', link: 'http://download.inep.gov.br/enem/provas_e_gabaritos/2022_PV_impresso_D1_CD3.pdf', color: "bg-white" },
          { title: 'Gabarito – Caderno 3 – Branco – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2022_GB_impresso_D1_CD3.pdf', color: "bg-white" },
          { title: 'Prova – Caderno 4 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2022_PV_impresso_D1_CD4.pdf', color: "bg-rosa" },
          { title: 'Gabarito – Caderno 4 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2022_GB_impresso_D1_CD4.pdf', color: "bg-rosa" },
        ],
        '2021': [
          { title: 'Prova – Caderno 1 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_PV_impresso_D1_CD1.pdf', color: "bg-azul" },
          { title: 'Gabarito – Caderno 1 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_GB_impresso_D1_CD1.pdf', color: "bg-azul" },
          { title: 'Prova – Caderno 2 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_PV_impresso_D1_CD2.pdf', color: "bg-amarelo" },
          { title: 'Gabarito – Caderno 2 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_GB_impresso_D1_CD2.pdf', color: "bg-amarelo" },
          { title: 'Prova – Caderno 3 – Branco – Aplicação Regular', link: 'http://download.inep.gov.br/enem/provas_e_gabaritos/2021_PV_impresso_D1_CD3.pdf', color: "bg-white" },
          { title: 'Gabarito – Caderno 3 – Branco – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_GB_impresso_D1_CD3.pdf', color: "bg-white" },
          { title: 'Prova – Caderno 4 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_PV_impresso_D1_CD4.pdf', color: "bg-rosa" },
          { title: 'Gabarito – Caderno 4 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_GB_impresso_D1_CD4.pdf', color: "bg-rosa" },
        ],
        '2020': [
          { title: 'Prova – Caderno 1 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2020_PV_impresso_D1_CD1.pdf', color: "bg-azul" },
          { title: 'Gabarito – Caderno 1 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2020_GB_impresso_D1_CD1.pdf', color: "bg-azul" },
          { title: 'Prova – Caderno 2 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2020_PV_impresso_D1_CD2.pdf', color: "bg-amarelo" },
          { title: 'Gabarito – Caderno 2 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2020_GB_impresso_D1_CD2.pdf', color: "bg-amarelo" },
          { title: 'Prova – Caderno 3 – Branco – Aplicação Regular', link: 'http://download.inep.gov.br/enem/provas_e_gabaritos/2020_PV_impresso_D1_CD3.pdf', color: "bg-white" },
          { title: 'Gabarito – Caderno 3 – Branco – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2020_GB_impresso_D1_CD3.pdf', color: "bg-white" },
          { title: 'Prova – Caderno 4 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2020_PV_impresso_D1_CD4.pdf', color: "bg-rosa" },
          { title: 'Gabarito – Caderno 4 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2020_GB_impresso_D1_CD4.pdf', color: "bg-rosa" },
        ],
        '2019': [
          { title: 'Prova – Caderno 1 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/provas/2019/2019_PV_impresso_D1_CD1.pdf', color: "bg-azul" },
          { title: 'Gabarito – Caderno 1 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/gabaritos/2019/gabarito_1_dia_caderno_1_azul_aplicacao_regular.pdf', color: "bg-azul" },
          { title: 'Prova – Caderno 2 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/provas/2019/2019_PV_impresso_D1_CD2.pdf', color: "bg-amarelo" },
          { title: 'Gabarito – Caderno 2 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/gabaritos/2019/gabarito_1_dia_caderno_2_amarelo_aplicacao_regular.pdf', color: "bg-amarelo" },
          { title: 'Prova – Caderno 3 – Branco – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/provas/2019/2019_PV_impresso_D1_CD3.pdf', color: "bg-white" },
          { title: 'Gabarito – Caderno 3 – Branco – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/gabaritos/2019/gabarito_1_dia_caderno_3_branco_aplicacao_regular.pdf', color: "bg-white" },
          { title: 'Prova – Caderno 4 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/provas/2019/2019_PV_impresso_D1_CD4.pdf', color: "bg-rosa" },
          { title: 'Gabarito – Caderno 4 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/gabaritos/2019/gabarito_1_dia_caderno_4_rosa_aplicacao_regular.pdf', color: "bg-rosa" },
        ],
        '2018': [
          { title: 'Prova – Caderno 1 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/provas/2018/2018_PV_impresso_D1_CD1.pdf', color: "bg-azul" },
          { title: 'Gabarito – Caderno 1 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/gabaritos/2018/GAB_ENEM_2018_DIA_1_AZUL.pdf', color: "bg-azul" },
          { title: 'Prova – Caderno 2 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/provas/2018/2018_PV_impresso_D1_CD2.pdf', color: "bg-amarelo" },
          { title: 'Gabarito – Caderno 2 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/gabaritos/2018/GAB_ENEM_2018_DIA_1_AMARELO.pdf', color: "bg-amarelo" },
          { title: 'Prova – Caderno 3 – Branco – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/provas/2018/2018_PV_impresso_D1_CD3.pdf', color: "bg-white" },
          { title: 'Gabarito – Caderno 3 – Branco – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/gabaritos/2018/GAB_ENEM_2018_DIA_1_BRANCO.pdf', color: "bg-white" },
          { title: 'Prova – Caderno 4 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/provas/2018/2018_PV_impresso_D1_CD4.pdf', color: "bg-rosa" },
          { title: 'Gabarito – Caderno 4 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/gabaritos/2018/GAB_ENEM_2018_DIA_1_ROSA.pdf', color: "bg-rosa" },
        ],
        '2017': [
          { title: 'Prova – Caderno 1 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_PV_impresso_D1_CD1.pdf', color: "bg-azul" },
          { title: 'Gabarito – Caderno 1 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_GB_impresso_D1_CD1.pdf', color: "bg-azul" },
          { title: 'Prova – Caderno 2 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_PV_impresso_D1_CD2.pdf', color: "bg-amarelo" },
          { title: 'Gabarito – Caderno 2 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_GB_impresso_D1_CD2.pdf', color: "bg-amarelo" },
          { title: 'Prova – Caderno 3 – Branco – Aplicação Regular', link: 'http://download.inep.gov.br/enem/provas_e_gabaritos/2021_PV_impresso_D1_CD3.pdf', color: "bg-white" },
          { title: 'Gabarito – Caderno 3 – Branco – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_GB_impresso_D1_CD3.pdf', color: "bg-white" },
          { title: 'Prova – Caderno 4 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_PV_impresso_D1_CD4.pdf', color: "bg-rosa" },
          { title: 'Gabarito – Caderno 4 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_GB_impresso_D1_CD4.pdf', color: "bg-rosa" },
        ],
    };
  
    const gabaritoData = {
        '2023': [
            { title: 'Prova – Caderno 5 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_PV_impresso_D2_CD5.pdf', color: "bg-amarelo" },
            { title: 'Gabarito – Caderno 5 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_GB_impresso_D2_CD5.pdf', color: "bg-amarelo"},
            { title: 'Prova – Caderno 6 – Cinza – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_PV_impresso_D2_CD6.pdf', color: 'bg-cinza'  },
            { title: 'Gabarito – Caderno 6 – Cinza – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_GB_impresso_D2_CD6.pdf', color: 'bg-cinza' },
            { title: 'Prova – Caderno 7 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_PV_impresso_D2_CD7.pdf', color: "bg-azul" },
            { title: 'Gabarito – Caderno 7 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_GB_impresso_D2_CD7.pdf', color: "bg-azul" },
            { title: 'Prova – Caderno 8 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_PV_impresso_D2_CD8.pdf', color: "bg-rosa" },
            { title: 'Gabarito – Caderno 8 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_GB_impresso_D2_CD8.pdf', color: "bg-rosa" },
        ],
        '2022': [
            { title: 'Prova – Caderno 5 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2022_PV_impresso_D2_CD5.pdf', color: "bg-amarelo"  },
            { title: 'Gabarito – Caderno 5 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2022_GB_impresso_D2_CD5.pdf', color: "bg-amarelo"  },
            { title: 'Prova – Caderno 6 – Cinza – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2022_PV_impresso_D2_CD6.pdf', color: 'bg-cinza' },
            { title: 'Gabarito – Caderno 6 – Cinza – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2022_GB_impresso_D2_CD6.pdf', color: 'bg-cinza' },
            { title: 'Prova – Caderno 7 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2022_PV_impresso_D2_CD7.pdf', color: "bg-azul" },
            { title: 'Gabarito – Caderno 7 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2022_GB_impresso_D2_CD7.pdf', color: "bg-azul" },
            { title: 'Prova – Caderno 8 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2022_PV_impresso_D2_CD8.pdf', color: "bg-rosa" },
            { title: 'Gabarito – Caderno 8 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2022_GB_impresso_D2_CD8.pdf', color: "bg-rosa" },
        ],
        '2021': [
          { title: 'Prova – Caderno 5 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_PV_impresso_D2_CD5.pdf', color: "bg-amarelo"  },
          { title: 'Gabarito – Caderno 5 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_GB_impresso_D2_CD5.pdf', color: "bg-amarelo"  },
          { title: 'Prova – Caderno 6 – Cinza – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_PV_impresso_D2_CD6.pdf', color: 'bg-cinza' },
          { title: 'Gabarito – Caderno 6 – Cinza – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_GB_impresso_D2_CD6.pdf', color: 'bg-cinza' },
          { title: 'Prova – Caderno 7 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_PV_impresso_D2_CD7.pdf', color: "bg-azul" },
          { title: 'Gabarito – Caderno 7 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_GB_impresso_D2_CD7.pdf', color: "bg-azul" },
          { title: 'Prova – Caderno 8 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_PV_impresso_D2_CD8.pdf', color: "bg-rosa" },
          { title: 'Gabarito – Caderno 8 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_GB_impresso_D2_CD8.pdf', color: "bg-rosa" },
        ],
        '2020': [
          { title: 'Prova – Caderno 5 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2020_PV_impresso_D2_CD5.pdf', color: "bg-amarelo"  },
          { title: 'Gabarito – Caderno 5 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2020_GB_impresso_D2_CD5.pdf', color: "bg-amarelo"  },
          { title: 'Prova – Caderno 6 – Cinza – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2020_PV_impresso_D2_CD6.pdf', color: 'bg-cinza' },
          { title: 'Gabarito – Caderno 6 – Cinza – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2020_GB_impresso_D2_CD6.pdf', color: 'bg-cinza' },
          { title: 'Prova – Caderno 7 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2020_PV_impresso_D2_CD7.pdf', color: "bg-azul" },
          { title: 'Gabarito – Caderno 7 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2020_GB_impresso_D2_CD7.pdf', color: "bg-azul" },
          { title: 'Prova – Caderno 8 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2020_PV_impresso_D2_CD8.pdf', color: "bg-rosa" },
          { title: 'Gabarito – Caderno 8 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2020_GB_impresso_D2_CD8.pdf', color: "bg-rosa" },
        ],
        '2019': [
          { title: 'Prova – Caderno 5 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/provas/2019/2019_PV_impresso_D2_CD5.pdf', color: "bg-amarelo"  },
          { title: 'Gabarito – Caderno 5 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/gabaritos/2019/gabarito_2_dia_caderno_5_amarelo_aplicacao_regular.pdf', color: "bg-amarelo"  },
          { title: 'Prova – Caderno 6 – Cinza – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/provas/2019/2019_PV_impresso_D2_CD6.pdf', color: 'bg-cinza' },
          { title: 'Gabarito – Caderno 6 – Cinza – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/gabaritos/2019/gabarito_2_dia_caderno_6_cinza_ampliada_aplicacao_regular.pdf', color: 'bg-cinza' },
          { title: 'Prova – Caderno 7 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/provas/2019/2019_PV_impresso_D2_CD7.pdf', color: "bg-azul" },
          { title: 'Gabarito – Caderno 7 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/gabaritos/2019/gabarito_2_dia_caderno_7_azul_aplicacao_regular.pdf', color: "bg-azul" },
          { title: 'Prova – Caderno 8 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/provas/2019/2019_PV_impresso_D2_CD8.pdf', color: "bg-rosa" },
          { title: 'Gabarito – Caderno 8 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/gabaritos/2019/gabarito_2_dia_caderno_8_rosa_aplicacao_regular.pdf', color: "bg-rosa" },
        ],
        '2018': [
          { title: 'Prova – Caderno 5 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/provas/2018/2DIA_05_AMARELO_BAIXA.pdf', color: "bg-amarelo"  },
          { title: 'Gabarito – Caderno 5 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/gabaritos/2018/GAB_ENEM_2018_DIA_2_AMARELO.pdf', color: "bg-amarelo"  },
          { title: 'Prova – Caderno 6 – Cinza – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/provas/2018/2018_PV_impresso_D2_CD6.pdf', color: 'bg-cinza' },
          { title: 'Gabarito – Caderno 6 – Cinza – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/gabaritos/2018/GAB_ENEM_2018_DIA_2_AMARELO.pdf', color: 'bg-cinza' },
          { title: 'Prova – Caderno 7 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/provas/2018/2018_PV_impresso_D2_CD7.pdf', color: "bg-azul" },
          { title: 'Gabarito – Caderno 7 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/gabaritos/2018/GAB_ENEM_2018_DIA_2_AZUL.pdf', color: "bg-azul" },
          { title: 'Prova – Caderno 8 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/provas/2018/2018_PV_impresso_D2_CD8.pdf', color: "bg-rosa" },
          { title: 'Gabarito – Caderno 8 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/educacao_basica/enem/gabaritos/2018/GAB_ENEM_2018_DIA_2_ROSA.pdf', color: "bg-rosa" },
        ],
        '2017': [
          { title: 'Prova – Caderno 5 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_PV_impresso_D2_CD5.pdf', color: "bg-amarelo"  },
          { title: 'Gabarito – Caderno 5 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_GB_impresso_D2_CD5.pdf', color: "bg-amarelo"  },
          { title: 'Prova – Caderno 6 – Cinza – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_PV_impresso_D2_CD6.pdf', color: 'bg-cinza' },
          { title: 'Gabarito – Caderno 6 – Cinza – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_GB_impresso_D2_CD6.pdf', color: 'bg-cinza' },
          { title: 'Prova – Caderno 7 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_PV_impresso_D2_CD7.pdf', color: "bg-azul" },
          { title: 'Gabarito – Caderno 7 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_GB_impresso_D2_CD7.pdf', color: "bg-azul" },
          { title: 'Prova – Caderno 8 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_PV_impresso_D2_CD8.pdf', color: "bg-rosa" },
          { title: 'Gabarito – Caderno 8 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2021_GB_impresso_D2_CD8.pdf', color: "bg-rosa" },
        ],
    };
  
    // Chama a função para definir o ano padrão
    if (defaultButton) {
        setActiveYear(defaultButton);
    }
  
    // Função para atualizar o conteúdo na tela
    function updateProvas(year) {
        const provasList = document.getElementById('provasList');
        provasList.innerHTML = ''; // Limpa o conteúdo atual
  
        const provas = provasData[year] || []; // Obtém as provas para o ano selecionado
  
        provas.forEach(prova => {
            const provaItem = document.createElement('div');
            provaItem.className = `p-4 border rounded ${prova.color}`;
            const provaLink = document.createElement('a');
            provaLink.href = prova.link;
            provaLink.target = '_blank';
            provaLink.className = 'text-xl text-steelblue';
            provaLink.textContent = `➤ ${prova.title}`;
            provaItem.appendChild(provaLink);
            provasList.appendChild(provaItem);
        });
  
        // Se não houver provas, adicione uma mensagem
        if (provas.length === 0) {
          provasList.innerHTML = '<p class="text-gray-500">Nenhuma prova disponível para este ano.</p>';
          provasList.classList.remove('grid-cols-2'); // Remove a classe de 2 colunas
          provasList.classList.add('grid-cols-1'); // Adiciona a classe de 1 coluna
          provasList.classList.remove('grid-rows-4'); // Remove a classe de 2 colunas
          provasList.classList.add('grid-cols-1'); // Adiciona a classe de 1 coluna
      } else {
          // Caso haja provas, assegure-se que esteja em 2 colunas
          provasList.classList.remove('grid-cols-1');
          provasList.classList.add('grid-cols-2');
          provasList.classList.remove('grid-rows-1');
          provasList.classList.add('grid-rows-4');
      }
    }
  
    function updateGabaritos(year) {
        const gabaritoList = document.getElementById('gabaritoList');
        gabaritoList.innerHTML = ''; // Limpa o conteúdo atual
  
        const gabaritos = gabaritoData[year] || []; // Obtém os gabaritos para o ano selecionado
  
        gabaritos.forEach(gabarito => {
            const gabaritoItem = document.createElement('div');
            gabaritoItem.className = `p-4 border rounded ${gabarito.color}`;
            const gabaritoLink = document.createElement('a');
            gabaritoLink.href = gabarito.link;
            gabaritoLink.target = '_blank';
            gabaritoLink.className = 'text-xl text-steelblue';
            gabaritoLink.textContent = `➤ ${gabarito.title}`;
            gabaritoItem.appendChild(gabaritoLink);
            gabaritoList.appendChild(gabaritoItem);
        });
  
        // Se não houver gabaritos, adicione uma mensagem
        if (gabaritos.length === 0) {
          gabaritoList.innerHTML = '<p class="text-gray-500">Nenhuma prova disponível para este ano.</p>';
          gabaritoList.classList.remove('grid-cols-2'); // Remove a classe de 2 colunas
          gabaritoList.classList.add('grid-cols-1'); // Adiciona a classe de 1 coluna
          gabaritoList.classList.remove('grid-rows-4'); // Remove a classe de 2 colunas
          gabaritoList.classList.add('grid-rows-1'); // Adiciona a classe de 1 coluna
      } else {
          // Caso haja provas, assegure-se que esteja em 2 colunas
          gabaritoList.classList.remove('grid-cols-1');
          gabaritoList.classList.add('grid-cols-2');
          gabaritoList.classList.remove('grid-rows-1'); // Remove a classe de 2 colunas
          gabaritoList.classList.add('grid-rows-4'); // Adiciona a classe de 1 coluna
      }
    }
  
  
    //FATEC
    // Função para atualizar o ano ativo
    function setActiveYearFatec(button) {
        yearButtonsFatec.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
  
        const yearFatec = button.getAttribute('data-ano-fatec');
        updateProvasFatec(yearFatec);
        updateGabaritosFatec(yearFatec);
    }
  
    // Adiciona evento de clique a todos os botões de ano
    yearButtonsFatec.forEach(button => {
        button.addEventListener('click', function() {
            setActiveYearFatec(this);
        });
    });
  
    // Conteúdo das provas
    const provasDataFatec = {
        '2023': [
            { title: 'Prova - 1° Semestre', link: 'https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2024/01/CADERNO-FATEC-1SEM-2024.pdf', color: "bg-cinza" },
            { title: 'Prova – 2° Semestre', link: 'https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2024/07/CADERNO-FATEC-2-SEM2024.pdf', color: "bg-cinza" },
        ],
        '2022': [
          { title: 'Prova - 2° Semestre', link: 'https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2022/07/caderno_lar_2_sem_2022.pdf', color: "bg-cinza" },
        ],
        '2020': [
         { title: 'Prova - 1° Semestre', link: 'https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2019/12/prova-vestibular-1sem-2020.pdf', color: "bg-cinza" },
        ],
        '2019': [
          { title: 'Prova - 1° Semestre', link: 'https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2018/12/prova-vestibular-1sem-2019.pdf', color: "bg-cinza" },
          { title: 'Prova – 2° Semestre', link: 'https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2019/06/prova-vestibular-2sem-2019.pdf', color: "bg-cinza" },
      ],
      '2018': [
        { title: 'Prova - 1° Semestre', link: 'https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2018/01/prova-vestibular-1sem-2018.pdf', color: "bg-cinza" },
        { title: 'Prova – 2° Semestre', link: 'https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2018/07/ProvaVestibular.pdf', color: "bg-cinza" },
    ],
    '2017': [
      { title: 'Prova - 1° Semestre', link: 'https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2017/10/prova_1_semestre.pdf', color: "bg-cinza" },
      { title: 'Prova – 2° Semestre', link: 'https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2017/10/Prova.pdf', color: "bg-cinza" },
  ],
    };
  
    const gabaritoDataFatec = {
        '2023': [
          { title: 'Gabarito – 1° Semestre', link: 'https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2024/01/GABARITO-FATEC-1SEM2024.pdf', color: "bg-cinza" },
            { title: 'Gabarito - 2° Semestre', link: 'https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2024/07/GABARITO-FATEC-2-SEM2024.pdf', color: "bg-cinza"},
        ],
        '2022': [
          { title: 'Gabarito – 2° Semestre', link: 'https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2022/07/gabarito-oficial-vertibular-2-sem-22.pdf', color: "bg-cinza" },
       ],
       '2020': [
          { title: 'Gabarito - 1° Semestre', link: 'https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2023/03/gabarito_vestibular_fatec_1o_sem_2020.pdf', color: "bg-cinza" },
        ],
        '2019': [
          { title: 'Gabarito - 1° Semestre', link: 'https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2018/12/gabarito-vestibular-1sem-2019.pdf', color: "bg-cinza" },
          { title: 'Gabarito – 2° Semestre', link: 'https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2019/06/gabarito-vestibular-2sem-2019.pdf', color: "bg-cinza" },
      ],
      '2018': [
        { title: 'Gabarito - 1° Semestre', link: 'https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2018/01/gabarito_vestibular_1sem_2018.pdf', color: "bg-cinza" },
        { title: 'Gabarito – 2° Semestre', link: 'https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2018/07/GabaritoVestibular.pdf', color: "bg-cinza" },
    ],
    '2017': [
      { title: 'Gabarito - 1° Semestre', link: 'https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2023/03/Gabarito-2017.pdf', color: "bg-cinza" },
      { title: 'Gabarito – 2° Semestre', link: 'https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2017/10/Gabarito.pdf', color: "bg-cinza" },
  ],
    };
  
    // Chama a função para definir o ano padrão
    if (defaultButtonFatec) {
        setActiveYearFatec(defaultButtonFatec);
    }
  
    function updateProvasFatec(yearFatec) {
      const provasListFatec = document.getElementById('provasListFatec');
      provasListFatec.innerHTML = ''; // Limpa o conteúdo atual
  
      const provasFatec = provasDataFatec[yearFatec] || []; // Obtém as provas para o ano selecionado
  
      provasFatec.forEach(provaFatec => {
          const provaFatecItem = document.createElement('div');
          provaFatecItem.className = `p-4 border rounded ${provaFatec.color}`;
          const provaFatecLink = document.createElement('a');
          provaFatecLink.href = provaFatec.link; // Corrigido
          provaFatecLink.target = '_blank';
          provaFatecLink.className = 'text-xl text-steelblue';
          provaFatecLink.textContent = `➤ ${provaFatec.title}`; // Corrigido
          provaFatecItem.appendChild(provaFatecLink);
          provasListFatec.appendChild(provaFatecItem); // Corrigido
      });
  
      // Se não houver provas, adicione uma mensagem
      if (provasFatec.length === 0) { // Corrigido
          provasListFatec.innerHTML = '<p class="text-gray-500">Nenhuma prova disponível para este ano.</p>';
      }
  }
  
  function updateGabaritosFatec(yearFatec) {
      const gabaritoListFatec = document.getElementById('gabaritoListFatec');
      gabaritoListFatec.innerHTML = ''; // Limpa o conteúdo atual
  
      const gabaritosFatec = gabaritoDataFatec[yearFatec] || []; // Obtém os gabaritos para o ano selecionado
  
      gabaritosFatec.forEach(gabarito => {
          const gabaritoItem = document.createElement('div');
          gabaritoItem.className = `p-4 border rounded ${gabarito.color}`;
          const gabaritoLink = document.createElement('a');
          gabaritoLink.href = gabarito.link; // Corrigido
          gabaritoLink.target = '_blank';
          gabaritoLink.className = 'text-xl text-steelblue';
          gabaritoLink.textContent = `➤ ${gabarito.title}`;
          gabaritoItem.appendChild(gabaritoLink);
          gabaritoListFatec.appendChild(gabaritoItem); // Corrigido
      });
  
      // Se não houver gabaritos, adicione uma mensagem
      if (gabaritosFatec.length === 0) { // Corrigido
          gabaritoListFatec.innerHTML = '<p class="text-gray-500">Nenhum gabarito disponível para este ano.</p>';
      }
  }
  
  // FUVEST
  // Função para atualizar o ano ativo
  function setActiveYearFuvest(button) {
    yearButtonsFuvest.forEach(btn => btn.classList.remove('active'));
    button.classList.add('active');
  
    const yearFuvest = button.getAttribute('data-ano-fuvest');
    updateProvasFuvest(yearFuvest);
    updateGabaritosFuvest(yearFuvest);
  }
  
  // Adiciona evento de clique a todos os botões de ano
  const yearButtonsFuvest = document.querySelectorAll('.ano-fuvest-btn');
  yearButtonsFuvest.forEach(button => {
    button.addEventListener('click', function() {
        setActiveYearFuvest(this);
    });
  });
  
  // Conteúdo das provas
  const provasDataFuvest = {
    '2024': [
    ],
    '2023': [
        { title: 'Prova V', link: 'https://acervo.fuvest.br/fuvest/2023/fuvest2023_primeira_fase_prova_V.pdf', color: "bg-cinza" },
        { title: 'Prova K', link: 'https://acervo.fuvest.br/fuvest/2023/fuvest2023_primeira_fase_prova_K.pdf', color: "bg-cinza" },
        { title: 'Prova Q', link: 'https://acervo.fuvest.br/fuvest/2023/fuvest2023_primeira_fase_prova_Q.pdf', color: "bg-cinza" },
        { title: 'Prova X', link: 'https://acervo.fuvest.br/fuvest/2023/fuvest2023_primeira_fase_prova_X.pdf', color: "bg-cinza" },
        { title: 'Prova Z', link: 'https://acervo.fuvest.br/fuvest/2023/fuvest2023_primeira_fase_prova_Z.pdf', color: "bg-cinza" },
        { title: 'Gabarito', link: 'https://acervo.fuvest.br/fuvest/2023/fuvest2023_gabarito_primeira_fase.pdf', color: "bg-azul" },
        
    ],
    '2022': [
      { title: 'Prova V', link: 'https://acervo.fuvest.br/fuvest/2022/fuvest_2022_primeira_fase_tipo_V.pdf', color: "bg-cinza" },
      { title: 'Prova K', link: 'https://acervo.fuvest.br/fuvest/2022/fuvest_2022_primeira_fase_tipo_K.pdf', color: "bg-cinza" },
      { title: 'Prova Q', link: 'https://acervo.fuvest.br/fuvest/2022/fuvest_2022_primeira_fase_tipo_Q.pdf', color: "bg-cinza" },
      { title: 'Prova X', link: 'https://acervo.fuvest.br/fuvest/2022/fuvest_2022_primeira_fase_tipo_X.pdf', color: "bg-cinza" },
      { title: 'Prova Z', link: 'https://acervo.fuvest.br/fuvest/2022/fuvest_2022_primeira_fase_tipo_Z.pdf', color: "bg-cinza" },
      { title: 'Gabarito', link: 'https://acervo.fuvest.br/fuvest/2022/fuvest_2022_primeira_fase_gabarito_retificado.pdf', color: "bg-azul" },
  ],
  '2021': [
      { title: 'Prova - 1° Fase', link: 'https://acervo.fuvest.br/fuvest/2021/fuvest_2021_primeira_fase.pdf', color: "bg-cinza" },
      { title: 'Gabarito - 1° Fase', link: 'https://acervo.fuvest.br/fuvest/2021/fuvest_2021_primeira_fase_gabarito_v2.pdf', color: "bg-azul" },
  ],
  '2020': [
    { title: 'Prova - 1° Fase', link: 'https://acervo.fuvest.br/fuvest/2020/fuvest_2020_primeira_fase_prova_V.pdf', color: "bg-cinza" },
    { title: 'Gabarito - 1° Fase', link: 'https://acervo.fuvest.br/fuvest/2020/fuvest_2020_primeira_fase_gabaritos.pdf', color: "bg-azul" },
  ],
  '2019': [
    { title: 'Prova - 1° Fase', link: 'https://acervo.fuvest.br/fuvest/2019/fuvest_2019_primeira_fase.pdf', color: "bg-cinza" },
    { title: 'Gabarito - 1° Fase', link: 'https://acervo.fuvest.br/fuvest/2019/fuv2019.gabarito.oficial.pdf', color: "bg-azul" },
  ],
  '2018': [
    { title: 'Prova - 1° Fase', link: 'https://acervo.fuvest.br/fuvest/2018/fuv2018_1fase_prova_V.pdf', color: "bg-cinza" },
    { title: 'Gabarito - 1° Fase', link: 'https://acervo.fuvest.br/fuvest/2018/fuv2018_1fase_prova_gab.pdf', color: "bg-azul" },
  ],
  '2017': [
    { title: 'Prova - 1° Fase', link: 'https://acervo.fuvest.br/fuvest/2017/fuv2017_1fase_prova_V.pdf', color: "bg-cinza" },
    { title: 'Gabarito - 1° Fase', link: 'https://acervo.fuvest.br/fuvest/2017/fuv2017_1fase_prova_gab.pdf', color: "bg-azul" },
  ],
    // Adicione outros anos conforme necessário
  };
  
  const gabaritoDataFuvest = {
    '2024': [
    ],
        '2023': [
        { title: 'Prova - 1º Dia - 2° Fase', link: 'https://acervo.fuvest.br/fuvest/2023/fuvest_2023_segunda_fase_dia_1.pdf', color: "bg-cinza" },
        { title: 'Prova - 2º Dia - 2° Fase', link: 'https://acervo.fuvest.br/fuvest/2023/fuvest_2023_segunda_fase_dia_2.pdf', color: "bg-cinza" },
    ],
        '2022': [
        { title: 'Prova - 1º Dia - 2° Fase', link: 'https://acervo.fuvest.br/fuvest/2022/fuvest_2022_segunda_fase_dia_1.pdf', color: "bg-cinza" },
        { title: 'Prova - 2º Dia - 2° Fase', link: 'https://acervo.fuvest.br/fuvest/2022/fuvest_2022_segunda_fase_dia_2.pdf', color: "bg-cinza" },
    ],  
        '2021': [
          { title: 'Prova - 1º Dia - 2° Fase', link: 'https://acervo.fuvest.br/fuvest/2021/fuv2021_2fase_dia_1.pdf', color: "bg-cinza" },
          { title: 'Prova - 2º Dia - 2° Fase', link: 'https://acervo.fuvest.br/fuvest/2021/fuv2021_2fase_dia_2.pdf', color: "bg-cinza" },
    ],
      '2020': [
        { title: 'Prova - 1º Dia - 2° Fase', link: 'https://acervo.fuvest.br/fuvest/2020/fuv2020_2fase_dia_1.pdf', color: "bg-cinza" },
        { title: 'Prova - 2º Dia - 2° Fase', link: 'https://acervo.fuvest.br/fuvest/2020/fuv2020_2fase_dia_2.pdf', color: "bg-cinza" },
    ],
      '2019': [
        { title: 'Prova - 1º Dia - 2° Fase', link: 'https://acervo.fuvest.br/fuvest/2019/fuv2019_2fase_dia1.pdf', color: "bg-cinza" },
        { title: 'Prova - 2º Dia - 2° Fase', link: 'https://acervo.fuvest.br/fuvest/2019/fuv2019_2fase_dia2.pdf', color: "bg-cinza" },
    ],
      '2018': [
        { title: 'Prova - 1º Dia - 2° Fase', link: 'https://acervo.fuvest.br/fuvest/2018/fuv2018_2fase_dia1.pdf', color: "bg-cinza" },
        { title: 'Prova - 2º Dia - 2° Fase', link: 'https://acervo.fuvest.br/fuvest/2018/fuv2018_2fase_dia2.pdf', color: "bg-cinza" },
        { title: 'Prova - 3º Dia - 2° Fase', link: 'https://acervo.fuvest.br/fuvest/2018/fuv2018_2fase_dia3.pdf', color: "bg-cinza" },
    ],
      '2017': [
        { title: 'Prova - 1º Dia - 2° Fase', link: 'https://acervo.fuvest.br/fuvest/2017/fuv2017_2fase_dia1.pdf', color: "bg-cinza" },
        { title: 'Prova - 2º Dia - 2° Fase', link: 'https://acervo.fuvest.br/fuvest/2017/fuv2017_2fase_dia2.pdf', color: "bg-cinza" },
        { title: 'Prova - 3º Dia - 2° Fase', link: 'https://acervo.fuvest.br/fuvest/2017/fuv2017_2fase_dia3.pdf', color: "bg-cinza" },
    ],
    // Adicione outros anos conforme necessário
  };
  
  // Chama a função para definir o ano padrão (por exemplo, 2023)
  const defaultButtonFuvest = document.querySelector('button[data-ano-fuvest="2023"]');
  if (defaultButtonFuvest) {
    setActiveYearFuvest(defaultButtonFuvest);
  }
  
  function updateProvasFuvest(yearFuvest) {
    const provasListFuvest = document.getElementById('provasListFuvest');
    provasListFuvest.innerHTML = ''; // Limpa o conteúdo atual
  
    const provasFuvest = provasDataFuvest[yearFuvest] || []; // Obtém as provas para o ano selecionado
  
    provasFuvest.forEach(provaFuvest => {
        const provaFuvestItem = document.createElement('div');
        provaFuvestItem.className = `p-4 border rounded ${provaFuvest.color}`;
        const provaFuvestLink = document.createElement('a');
        provaFuvestLink.href = provaFuvest.link;
        provaFuvestLink.target = '_blank';
        provaFuvestLink.className = 'text-xl text-steelblue';
        provaFuvestLink.textContent = `➤ ${provaFuvest.title}`;
        provaFuvestItem.appendChild(provaFuvestLink);
        provasListFuvest.appendChild(provaFuvestItem);
    });
  
    // Se não houver provas, adicione uma mensagem
    if (provasFuvest.length === 0) {
      provasListFuvest.innerHTML = '<p class="text-gray-500">Nenhuma prova disponível para este ano.</p>';
      provasListFuvest.classList.remove('grid-cols-2'); // Remove a classe de 2 colunas
      provasListFuvest.classList.add('grid-cols-1'); // Adiciona a classe de 1 coluna
  } else {
      // Caso haja provas, assegure-se que esteja em 2 colunas
      provasListFuvest.classList.remove('grid-cols-1');
      provasListFuvest.classList.add('grid-cols-2');
  }
  }
  
  function updateGabaritosFuvest(yearFuvest) {
    const gabaritoListFuvest = document.getElementById('gabaritoListFuvest');
    gabaritoListFuvest.innerHTML = ''; // Limpa o conteúdo atual
  
    const gabaritosFuvest = gabaritoDataFuvest[yearFuvest] || []; // Obtém os gabaritos para o ano selecionado
  
    gabaritosFuvest.forEach(gabarito => {
        const gabaritoItem = document.createElement('div');
        gabaritoItem.className = `p-4 border rounded ${gabarito.color}`;
        const gabaritoLink = document.createElement('a');
        gabaritoLink.href = gabarito.link;
        gabaritoLink.target = '_blank';
        gabaritoLink.className = 'text-xl text-steelblue';
        gabaritoLink.textContent = `➤ ${gabarito.title}`;
        gabaritoItem.appendChild(gabaritoLink);
        gabaritoListFuvest.appendChild(gabaritoItem);
    });
  
    // Se não houver gabaritos, adicione uma mensagem
    if (gabaritosFuvest.length === 0) {
      gabaritoListFuvest.innerHTML = '<p class="text-gray-500">Nenhuma prova disponível para este ano.</p>';
      gabaritoListFuvest.classList.remove('grid-cols-2'); // Remove a classe de 2 colunas
      gabaritoListFuvest.classList.add('grid-cols-1'); // Adiciona a classe de 1 coluna
  } else {
      // Caso haja provas, assegure-se que esteja em 2 colunas
      gabaritoListFuvest.classList.remove('grid-cols-1');
      gabaritoListFuvest.classList.add('grid-cols-2');
  }
  }
  });