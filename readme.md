# Blog

Uma aplicação blog com gestão de artigos, usuários (admins, autores e visitantes) e agendamento de publicações totalmente componentizada utilizando Laravel 5.5, VueJS 2 e Bootstrap 3.

## Começando 🏃

Essas instruções fornecerão uma cópia do projeto instalado e funcionando em sua máquina local.

## Pré-requisitos ⚠️

O que você precisar para instalar a aplicação

```
PHP 7.1.8 - 7.4.16
Composer >= 1.4.2
Node >= 8.6.0
```
### Configuração do php 🐘

```
# Habilitar os recursos no php.ini
extension=mbstring
extension=openssl
extension=pdo_sqlite
extension_dir = "ext"
```

## Instalação da aplicação 💻

Passos para rodar a aplicação

```
# Clonar
git clone https://github.com/tarcisioaraujo/blog-laravel-vue.git

# Acessar o diretório
cd blog-laravel-vue

# Instalar e atualizar as dependências do Composer (leva alguns minutos ☕)
composer install
composer update

# Instalar as dependências do Node JS
npm install

# Configurar variáveis de ambiente
cp .env.example .env
php artisan key:generate

# Alterar o arquivo .env para ficar dessa forma
DB_CONNECTION=sqlite
//DB_HOST=127.0.0.1
//DB_PORT=3306
//DB_DATABASE=homestead
//DB_USERNAME=homestead
//DB_PASSWORD=secret

# Criar arquivo do banco de dados SQLite
copy con .\database\database.sqlite
<aperte a tecla F6>

# Criar tabelas do Banco de Dados
php artisan migrate

# Rodar Servidor PHP
php artisan serve

# Acessar o endereço 
http://localhost:8000
```
## Login 🛂

Usuário de teste

```
E-mail: admin@mail.com
Password: 123456
```

## Autor

<a href="https://github.com/tarcisioaraujo">
 <img style="border-radius: 50%;" src="https://media-exp1.licdn.com/dms/image/C4E35AQFvMmYXx9EI7w/profile-framedphoto-shrink_200_200/0/1614359838849?e=1617480000&v=beta&t=zJdmMKRJbjYF9HseI8HmCvnPFrMu6P56saVWU8Wnitc" width="100px;" alt=""/>
 <br />
 <sub><b>Tarcísio Silva de Araújo</b></sub></a> <a href="https://github.com/tarcisioaraujo" title="GitHub"></a>

Feito por Tarcísio Silva de Araújo 👋

[![Linkedin Badge](https://img.shields.io/badge/-Tarcísio-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/tarcisiosaraujo/)](https://www.linkedin.com/in/tarcisiosaraujo/) 
[![Gmail Badge](https://img.shields.io/badge/-tarcisio.saraujo@gmail.com-c14438?style=flat-square&logo=Gmail&logoColor=white&link=mailto:tarcisio.saraujo@gmail.com)](mailto:tarcisio.saraujo@gmail.com)