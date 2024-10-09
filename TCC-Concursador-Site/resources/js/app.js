import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

//ETEC
// Página dos Simulados
document.addEventListener('DOMContentLoaded', function() {
  const yearButtons = document.querySelectorAll('.ano-btn');

  // Define o ano padrão ao carregar a página
  const defaultYear = '2023';
  const defaultButton = document.querySelector(`button[data-ano="${defaultYear}"]`);
  
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
          gabaritoList.innerHTML = '<p class="text-gray-500">Nenhum gabarito disponível para este ano.</p>';
      }
  }
});