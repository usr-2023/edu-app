<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

### Requirements

-   [Git](https://github.com/git-guides/install-git)
-   [Composer](https://getcomposer.org/download/)
-   PHP 8.1+
-   [Npm](https://www.npmjs.com/get-npm)
-   A database (e.g. MySQL)

### Clone

Clone this repository and enter the project's directory:

```shell
git clone https://github.com/alighirbn/edu-app.git
cd edu-app
```

### Install

Install dependencies with Composer:

```shell
composer install
```

Compile the project assets:

```shell
npm install
npm run dev
```

## Configure your .env

Copy the `.env.example` into `.env`

```shell
cp .env.example .env
```

Set up the database credentials in `.env` file:

```shell
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=edu
DB_USERNAME=root
DB_PASSWORD=
```

Generate the application key.

```shell
php artisan key:generate
```

## Prepare your Database

create a new database on your mysql server [phpmyadmin](http://localhost/phpmyadmin/)
and name it edu

Run the migrations

```shell
php artisan migrate
```

Compile the project assets:

```shell
npm install
npm run build
```

enjoy!!
