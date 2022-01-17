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
    return view('welcome');
});

Route::get('/prova', function () {
    return "Això és una prova";
});

Route::get('/parametre/{numero}{numero1}', function($numero, $numero1) {
    return $numero + $numero1;
})->name ('suma');
