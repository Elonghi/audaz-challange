<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Challange

O código abaixo precisa cadastrar uma tarifa de ônibus relacionando as entidades "Operator" e "Fare", onde "Fare" é a tarifa e "Operator" a operadora de benefício de vale-transporte. Uma "Fare" só pode ser cadastrada caso aquela operadora não possua nenhuma tarifa ativa (Fare.Status == 1) de mesmo valor dentro de um período de 6 meses. Porém o desenvolvedor que iniciou este código precisou parar o trabalho por tempo indeterminado e agora você precisa completá-lo e garantir que funcione.

## Requisitos

Composer 2.3^
PHP 7.4^

## Rodando o projeto

Assim que você baixar o projeto o primeiro passo para que ele funcione é abrir um terminar na pasta raiz e rodar o <b> composer install </b> para que as dependencias possam ser instaladas.

Apos a finalização da instalação das dependencias você já pode rodar o comando <b>php artisan serve</b> para que ele crie um servidor local na porta 8000

O Banco de dados do projeto esta hospedado na AWS então não é necessario configurar nada depois que baixar o projeto.

## Como funciona




## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
