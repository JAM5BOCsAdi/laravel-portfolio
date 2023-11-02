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

    http://localhost/

----------------------------------------------------------------------------------
    Changes:

    docker-compose.yml:
        - '${APP_PORT:-80}:80' -> - '${APP_PORT:-8080}:80'
        - '${FORWARD_DB_PORT:-3306}:3306' -> - '${FORWARD_DB_PORT:-3307}:3306'

    .env:
        DB_PORT=3306 -> DB_PORT=3307


*/

Route::get('/', function () {
    return view('welcome');
});
