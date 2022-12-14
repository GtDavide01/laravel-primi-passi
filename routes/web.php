<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $title = "Sono la prima pagina in laravel!";
    return view('home', compact("title"));
})->name("home");

Route::get('/pagina1', function () {
    return view('pagina1');
})->name("pagina1laravel");

Route::get('/pagina2', function () {
    return view('pagina2');
})->name("pagina2laravel");

Route::get('/pagina3', function () {
    return view('pagina3');
})->name("pagina3laravel");
