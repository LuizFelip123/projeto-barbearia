<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HorarioController;
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
})->middleware('auth');
Route::get('/registro', function () {
    return view('registro');
});

Route::post('/salvar', [AgendaController::class, 'store'])->middleware('auth');
Route::get('/horario',[DataController::class, 'index'] )->middleware('auth');
Route::get('/clientes', [UserController::class, 'index'])->middleware('auth');
Route::get('/delete/{id}',[HorarioController::class, 'destroy'])->middleware('auth');
Route::post('/resevar', [HorarioController::class, 'joinUser'])->middleware('auth');

Route::get('/listar', function () {
    return view('listar');
})->middleware('auth');;

Route::get('/adicionar',[AgendaController::class, 'index'])->middleware('auth');;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/register', [UserController::class, 'register']);

Route::post('/login', [UserController::class, 'login']);
Route::get('/logout',[UserController::class, 'logout']);