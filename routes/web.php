<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAgendamentos;

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
    return view('index');
});
Route::get('/consulta', function () { return view('consulta'); });
Route::delete('/excluir/{id}', [controllerAgendamentos::class, 'DELETE']);
Route::get('/consultar', [ControllerAgendamentos::class, 'funConsultar'] );
Route::post('/addAgendamentos', [ControllerAgendamentos::class, 'store']);
Route::get('/editar/{id}', [ControllerAgendamentos::class, 'Editar']);
Route::put('/atualizar{id}', [ControllerAgendamentos::class, 'UPDATE']);
