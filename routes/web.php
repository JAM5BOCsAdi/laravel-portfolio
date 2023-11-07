<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*

    Commands: [UBUNTU]

    1. Getting Started On Windows [Create project - https://laravel.com/docs/10.x/installation#getting-started-on-windows]
    => curl -s https://laravel.build/laravel-portfolio | bash

    2. cd laravel-portfolio

.       ./vendor/bin/sail up

    3. Gives permission to www folder =>  sudo chmod -R 777 www/

    4. Re-Run " ./vendor/bin/sail up "

----------------------------------------------------------------------------------
    Site:

    1. ./vendor/bin/sail up [When you are inside Ubuntu, and logged in]
    csadi@DESKTOP-9JPD5A8:~/www/laravel-portfolio$ ./vendor/bin/sail up

    Ctrl + C -> Stop Running [Docker]

    2.  Open another terminal

        cd www/
        cd laravel-portfolio

        csadi@DESKTOP-9JPD5A8:~/www/laravel-portfolio$ ./vendor/bin/sail shell
        sail@4e1e5803a85c:/var/www/html$

    3. npm run dev

    4. http://localhost/
    [
        Or you can click on this: "APP_URL: http://localhost" in the Terminal
        and opens up the site in browser.
    ]

    See emails [.env]:
    http://localhost:8025 -> :8025 is the place the email is sent to

    You can see the emails only when you are using Sail:
    https://laravel.com/docs/10.x/sail

    MAIL_MAILER=smtp
    MAIL_HOST=mailpit    <- mailhog is another one [https://laravel.com/docs/10.x/mail#mailtrap]
    MAIL_PORT=1025
    MAIL_USERNAME=null
    MAIL_PASSWORD=null
    MAIL_ENCRYPTION=null
    MAIL_FROM_ADDRESS="hello@example.com"
    MAIL_FROM_NAME="${APP_NAME}"


----------------------------------------------------------------------------------
    Changes:

    docker-compose.yml:
        - '${APP_PORT:-80}:80' -> - '${APP_PORT:-8080}:80'
        - '${FORWARD_DB_PORT:-3306}:3306' -> - '${FORWARD_DB_PORT:-3307}:3306'

    .env:
        DB_PORT=3306 -> DB_PORT=3307


*/

Route::get('/', function () {
    return view('home');
});


Route::post('/contact/submit', [\App\Http\Controllers\ContactController::class, 'submit']);
