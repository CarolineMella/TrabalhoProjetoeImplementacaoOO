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

Auth::routes();

Route::get('/cliente', [App\Http\Controllers\ClienteController::class, 'index'])->name('cliente.index');
Route::get('/cliente/adicionar', [App\Http\Controllers\ClienteController::class, 'adicionar'])->name('cliente.adicionar');
Route::post('/cliente/salvar', [App\Http\Controllers\ClienteController::class, 'salvar'])->name('cliente.salvar');
Route::get('/cliente/editar/{id}', [App\Http\Controllers\ClienteController::class, 'editar'])->name('cliente.editar');
Route::put('/cliente/atualizar/{id}', [App\Http\Controllers\ClienteController::class, 'atualizar'])->name('cliente.atualizar');
Route::get('/cliente/deletar/{id}', [App\Http\Controllers\ClienteController::class, 'deletar'])->name('cliente.deletar');

Route::get('/cliente/detalhe/{id}', [App\Http\Controllers\ClienteController:: class, 'detalhe'])->name('cliente.detalhe');
Route::get('/telefone/adicionar/{id}', [App\Http\Controllers\TelefoneController::class, 'adicionar'])->name('telefone.adicionar');
Route::post('/telefone/salvar/{id}', [App\Http\Controllers\TelefoneController::class, 'salvar'])->name('telefone.salvar');

Route::get('/telefone/editar/{id}', [App\Http\Controllers\TelefoneController::class, 'editar'])->name('telefone.editar');
Route::put('/telefone/atualizar/{id}', [App\Http\Controllers\TelefoneController::class, 'atualizar'])->name('telefone.atualizar');
Route::get('/telefone/deletar/{id}', [App\Http\Controllers\TelefoneController::class, 'deletar'])->name('telefone.deletar');
