<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\UserController;
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

Route::post('/salvar', [AgendaController::class, 'store']);
Route::get('/horario',[DataController::class, 'index'] );
Route::get('/clientes', [UserController::class, 'index']);
Route::get('/listar', function () {
    return view('listar');
});

Route::get('/adicionar',[AgendaController::class, 'index']);

Route::get('/login', function () {
    return view('login');
});


