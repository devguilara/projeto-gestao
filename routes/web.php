<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\SobreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre', [SobreController::class, 'sobre'])->name('site.sobre');

Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');

Route::get('/login', [LoginController::class, 'login'])->name('site.login');

Route::prefix('/app')->group(function () {

    Route::get('/clientes', [ClientesController::class, 'clientes'])->name('app.clientes');
    Route::get('/fornecedores', [FornecedoresController::class, 'fornecedores'])->name('app.index');
    Route::get('/produtos', [ProdutosController::class, 'produtos'])->name('app.produtos');
});

Route::fallback(function () {

    echo 'Rota acessada não existe =( <br/> Volte ao inicio pelo <a href="'.route('site.index').'">link</a>';

});
