<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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


Route::prefix('dashboard')->group(function(){
    Route::get('/index', [DashboardController::class, 'index'])->name('dashboard-index');
    Route::get('/painel', [DashboardController::class, 'painel'])->name('dashboard-painel');
    Route::get('/painelhome', [DashboardController::class, 'painelhome'])->name('dashboard-painelhome');

    Route::get ('/loja',[DashboardController::class, 'loja'])->name('loja');
    Route::get ('/configuracoes',[DashboardController::class, 'configuracoes'])->name('dashboard-configuracoes');
    Route::get ('/outros',[DashboardController::class, 'outros'])->name('dashboard-outros');
    Route::get ('/registo',[DashboardController::class, 'registo'])->name('dashboard-registo');
    Route::post('/', [DashboardController::class,'store'])->name('dashboard-store');
    Route::post('/login', [DashboardController::class,'login'])->name('login');
    Route::post('/registar', [DashboardController::class,'register'])->name('register');
    Route::post('/logout', [DashboardController::class, 'logout'])->name('dashboard-logout');
    Route::get('loja/criar', [DashboardController::class, 'criar'])->name('criar');
    Route::get('loja/listar-produtos', [DashboardController::class, 'listar'])->name('listar');
    Route::get('/lojaa', [DashboardController::class, 'lojaa'])->name('lojaa');

    Route::get('painel/listarusers', [DashboardController::class, 'listar_users'])->name('listar-users');
    Route::get('painel/listarfunc', [DashboardController::class, 'listar_func'])->name('listarfunc');
    Route::get('/{id}/edit', [DashboardController::class, 'edit'])->where('id', '[0-9]+')->name('edit');
    Route::get('/{id}/editar', [DashboardController::class, 'editaru'])->where('id', '[0-9]+')->name('editaru');
    Route::post('/listar-func/{id}', [DashboardController::class, 'update'])->name('update');
    Route::post('/{id}', [DashboardController::class, 'updateu'])->name('updateu');
    Route::get('/', [DashboardController::class, 'numprodutos'])->name('numprodutos');
    Route::post('/', [DashboardController::class, 'store'])->name('criar-store');
    Route::get('d/loja/vizu', [DashboardController::class, 'vizu'])->name('vizu');
    Route::delete('listar-produtos/{id}/', [DashboardController::class, 'destroyProduto'])->where('id', '[0-9]+')->name('delete');
    Route::delete('listarfunc/{id}/', [DashboardController::class, 'destroyUser'])->where('id', '[0-9]+')->name('deletefunc');
    Route::delete('listaruser/{id}/', [DashboardController::class, 'destroyUserl'])->where('id', '[0-9]+')->name('deleteuser');

    
    
});
    


Route::fallback(function(){
    return "Erro, rota não localizada";
});

Auth::routes();

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logotenomorota', [DashboardController::class, 'logotenomorota'])->name('logotenomorota');


