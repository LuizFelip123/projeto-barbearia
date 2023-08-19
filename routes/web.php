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

Route::get('/', function () {
    return view('home');
});
Route::get('/registro', function () {
    return view('registro');
});


Route::get('/horario', function () {
    return view('horario');
});
Route::get('/clientes', function () {
    return view('clientes');
});
Route::get('/listar', function () {
    return view('listar');
});

Route::get('/adicionar', function () {
    return view('adicionar');
});

Route::get('/login', function () {
    return view('login');
});


