<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return redirect('/login');
});

Route::get('/olx', [App\Http\Controllers\OlxController::class, 'olx'])->name('olx');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');

Route::put('/olx/telefone', [App\Http\Controllers\TelefoneController::class, 'updateTelefone'])->name('telefone.update');
Route::get('/olx/numero', [App\Http\Controllers\TelefoneController::class, 'numero'])->name('numero');




Route::get('/olx/create', [App\Http\Controllers\ProdutoController::class, 'createproduto'])->name('createproduto');
Route::post('/olx/create/store', [App\Http\Controllers\ProdutoController::class, 'store'])->name('create_anuncio');
Route::get('/olx/create/verificar/{id}', [App\Http\Controllers\ProdutoController::class, 'ver'])->name('ver');
Route::get('/olx/{id}/edit', [App\Http\Controllers\ProdutoController::class, 'edit'])->name('edit');
Route::put('/olx/{id}', [App\Http\Controllers\ProdutoController::class, 'update_Anuncio'])->name('update_Anuncio');
Route::delete('/olx/delete/anuncio/{id}', [App\Http\Controllers\ProdutoController::class, 'destroy_Anuncio'])->where('id', '[0-9]+')->name('destroy_Anuncio');

Route::get('/olx/perfil/{email}', [App\Http\Controllers\ProfileController::class,'perfil'])->name('perfil');
Route::get('/olx/erro', [App\Http\Controllers\ProfileController::class,'erro'])->name('erro');

Route::get('/olx/anuncio/ver/{id}', [App\Http\Controllers\AnuncioController::class, 'ver_anuncio'])->name('ver_anuncio');
Route::get('/olx/pesquisar', [App\Http\Controllers\AnuncioController::class, 'pesquisar'])->name('pesquisar');

Route::post('/olx/create/categoria/store', [App\Http\Controllers\CategoriaController::class, 'store_categoria'])->name('create_categoria');
Route::get('/olx/categoria/{id}', [App\Http\Controllers\CategoriaController::class, 'ver_categoria'])->name('ver_categoria');


//registo e login do adm

Route::get('/register/adm', [App\Http\Controllers\AdminController::class, 'registerAdm'])->name('registerAdm');













