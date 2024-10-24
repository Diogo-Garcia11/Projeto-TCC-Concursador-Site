## Requisitos

* PHP 8.2 ou superior: https://windows.php.net/downloads/releases/php-8.3.13-nts-Win32-vs16-x64.zip
* Composer: https://getcomposer.org/download/
* Node.js 20 ou superior: https://nodejs.org/en/download/package-manager

## Como rodar o projeto baixado
Instalar as dependências do PHP(necessário)
```
composer install
```

Instalar as dependências do Node.js(necessário)
```
npm install
```

Gerar a chave (necessário gerar a chave só uma vez na hora de hospedar, a chave já foi criada)
```
php artisan key:generate
```

Executar as migrations para criar as tabelas no banco de dados, sem a conexao ao banco, o projeto nao roda (necessário)
```
php artisan migrate
```

Executar as seeds (opcional)
```
php artisan db:seed
```

abrir o servidor local do projeto Laravel(necessário)
```
php artisan serve
```

Executar as bibliotecas Node.js(necessário)
```
npm run dev
```

Acessar o conteúdo no navegador
```
http://127.0.0.1:8000/
```

## Sequencia para criar o projeto (não há necessidade, só para transmitir o conhecimento)
Criar o projeto com Laravel
```
composer create-project laravel/laravel laravel-meu-projeto
```

Acessar op diretório onde está o projeto
```
cd laravel-meu-projeto
```

Iniciar o projeto criado com Laravel
```
php artisan serve
```

Acessar o conteúdo padrão do Laravel
```
http://127.0.0.1:8000/
```

Criar Controller
```
php artisan make:controller NomeDaController
```
```
php artisan make:controller ContaController
```

Criar a VIEW
```
php artisan make:view nomeDaView
```
```
php artisan make:view contas/create
```

Criar a migration
```
php artisan make:migration create_contas_table
```

Executar as migration
```
php artisan migrate
```

Criar a model
```
php artisan make:model Conta
```

Criar o arquivo Request com validações
```
php artisan make:request ContaRequest
```

Criar seed
```
php artisan make:seeder ContaSeeder
```

Executar as seed
```
php artisan db:seed
```

Instalar o Vite
```
npm install
```

Instalar o framework Bootstrap
```
npm i --save bootstrap @popperjs/core
```

Instalar o sass
```
npm i --save-dev sass
```

Executar as bibliotecas Node.js
```
npm run dev
```
## Bibliotecas opcionais

Traduzir para português
https://github.com/lucascudo/laravel-pt-BR-localization (já está traduzido)

Instalar a biblioteca para gerar PDF
```
composer require barryvdh/laravel-dompdf
```

Instalar o sweetalert2
```
npm install sweetalert2
```

Instalar o Select2
```
npm install select2
```

Instalar o jQuery
```
npm install jquery
```

Instalar o tema do Bootstrap 5 para Select2
```
npm install select2-bootstrap-5-theme
```

Instalar a dependência para gerar word
```
composer require phpoffice/phpword
```

Criar personalização enviar e-mail contas a pagar
```
php artisan make:mail SendEmailContaPagar
```
