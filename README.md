<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Gerenciador de séries

Um gerenciador de séries assistidas, desenvolvido com o framework Laravel.<br>
O usuário pode cadastrar o nome da série, a quantidade de temporadas e episódios. 
Podendo também ser marcado quais episódios já foram assistidos pelo usuário.

## 

<div>
  <div style="width:30%">
    <a href='#'><img src="assets/img/tela-inicio-projeto.gif" style="width:100%" alt="Imagem do projeto"></a>   
  </div><hr>
</div>

## 🚀 Iniciar
🔗 Link do site

    https://

🡇 Comando no terminal para clonar e configurar o projeto

    git clone https://github.com/Doug-Silva/php-laravel-controle-series.git
    cd php-laravel-controle-series
    composer install
    mv .env.example .env
    php artisan cache:clear
    composer dump-autoload
    php artisan key:generate
    npm install
    clear
    php artisan serve
    
💻 Abra o projeto na sua IDE de preferência

- [Visual Studio Code](https://code.visualstudio.com/download)
- [PhpStorm](https://www.jetbrains.com/phpstorm)

🌐 Acesse o arquivo .env depois exclua essa parte

    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=

🌐 No arquivo .env utilize o código abaixo para usar o sqlite 

    DB_CONNECTION=sqlite

## 🔨 Seja um dos contribuidores<br>
Quer fazer parte desse projeto? Clique [AQUI](CONTRIBUTING.md) e leia como contribuir.
