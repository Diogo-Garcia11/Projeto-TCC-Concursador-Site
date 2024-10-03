import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


// Página  dos Simulados
// Adiciona a classe 'active' ao botão clicado
const yearButtons = document.querySelectorAll('.ano-btn');

yearButtons.forEach(button => {
    button.addEventListener('click', function () {
    // Remove a classe 'active' de todos os botões
    yearButtons.forEach(btn => btn.classList.remove('active'));
    // Adiciona a classe 'active' ao botão clicado
    this.classList.add('active');
    });
});

// Modifica o conteúdo das provas
// conteudo das provas
document.addEventListener('DOMContentLoaded', function() {
    const provasData = {
      '2024': [
        { title: 'Enem 2024 - Prova Primeiro dia', link: '#' },
        { title: 'Prova 2', link: '#' },
      ],
      '2023': [
        { title: 'Prova – Caderno 1 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_PV_impresso_D1_CD1.pdf' },
        { title: 'Gabarito – Caderno 1 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_GB_impresso_D1_CD1.pdf' },
        { title: 'Prova – Caderno 2 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_PV_impresso_D1_CD2.pdf' },
        { title: 'Gabarito – Caderno 2 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_GB_impresso_D1_CD2.pdf' },
        { title: 'Prova – Caderno 3 – Branco – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_PV_impresso_D1_CD3.pdf' },
        { title: 'Gabarito – Caderno 3 – Branco – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_GB_impresso_D1_CD3.pdf' },
        { title: 'Prova – Caderno 4 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_PV_impresso_D1_CD4.pdf' },
        { title: 'Gabarito – Caderno 8 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_GB_impresso_D1_CD4.pdf' },
      ],
      '2022': [
        { title: 'Prova 1', link: '#' },
        { title: 'Prova 2', link: '#' },
      ],
      '2021': [
        { title: 'Prova 1', link: '#' },
        { title: 'Prova 2', link: '#' },
      ],
    };
  
    const gabaritoData = {
      '2024': [
        { title: 'Enem 2024 - Prova Primeiro dia', link: '#' },
        { title: 'Prova 2', link: '#' },
      ],
      '2023': [
        { title: '1º Dia – Caderno 1 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_PV_impresso_D1_CD1.pdf' },
        { title: '1º Dia – Caderno 2 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_PV_impresso_D1_CD2.pdf' },
        { title: '1º Dia – Caderno 3 – Branco – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_PV_impresso_D1_CD3.pdf' },
        { title: '1º Dia – Caderno 4 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_PV_impresso_D1_CD4.pdf' },
        { title: '2º Dia – Caderno 5 – Amarelo – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_PV_impresso_D2_CD5.pdf' },
        { title: '2º Dia – Caderno 6 – Cinza – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_PV_impresso_D2_CD6.pdf' },
        { title: '2º Dia – Caderno 7 – Azul – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_PV_impresso_D2_CD7.pdf' },
        { title: '2º Dia – Caderno 8 – Rosa – Aplicação Regular', link: 'https://download.inep.gov.br/enem/provas_e_gabaritos/2023_PV_impresso_D2_CD8.pdf' },
      ],
      '2022': [
        { title: 'Prova 1', link: '#' },
        { title: 'Prova 2', link: '#' },
      ],
      '2021': [
        { title: 'Prova 1', link: '#' },
        { title: 'Prova 2', link: '#' },
      ],
    };
    // Adiciona evento de clique aos botões de ano
    const buttons = document.querySelectorAll('.ano-btn');
    buttons.forEach(button => {
      button.addEventListener('click', function() {
        setActiveYear(this);
      });
    });
  
    // função de seleção do ano
    function setActiveYear(button) {
      const buttons = document.querySelectorAll('.ano-btn');
      buttons.forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');
  
      const year = button.getAttribute('data-ano');
      updateProvas(year);
      updateGabaritos(year);
    }
    
    // função para imprimir o conteúdo na tela
    function updateProvas(year) {
      const provasList = document.getElementById('provasList');
      provasList.innerHTML = ''; // Limpa o conteúdo atual
  
      const provas = provasData[year] || []; // Obtém as provas para o ano selecionado
  
      provas.forEach(prova => {
        const provaItem = document.createElement('div');
        provaItem.className = 'p-4 border rounded bg-white';
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
  
      const gabaritos = gabaritoData[year] || []; // Obtém as provas para o ano selecionado
  
      gabaritos.forEach(gabarito => {
        const gabaritoItem = document.createElement('div');
        gabaritoItem.className = 'p-4 border rounded bg-white';
        const gabaritoLink = document.createElement('a');
        gabaritoLink.href = gabarito.link;
        gabaritoLink.target = '_blank';
        gabaritoLink.className = 'text-xl text-steelblue';
        gabaritoLink.textContent = `➤ ${gabarito.title}`;
        gabaritoItem.appendChild(gabaritoLink);
        gabaritoList.appendChild(gabaritoItem);
      });
  
      // Se não houver provas, adicione uma mensagem
      if (gabarito.length === 0) {
        gabaritoList.innerHTML = '<p class="text-gray-500">Nenhum gabarito disponível para este ano.</p>';
      }
    }
  });
  