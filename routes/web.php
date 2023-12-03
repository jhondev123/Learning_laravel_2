<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\TesteController;

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

Route::get('/', [HomeController::class, 'home'])->name("site.index");
Route::get('/sobre', [SobreController::class, 'sobre'])->name("site.sobre");
Route::get('/contato', [ContatoController::class, 'contato'])->name("site.contato");
Route::post('/contato', [ContatoController::class, 'sendMessage'])->name("site.contato");

Route::get('/login', [LoginController::class, 'login'])->name("site.login");

Route::prefix("/app")->group(function () {
    Route::get('/clientes', [ClientesController::class, 'clientes'])->name("app.clientes");
    Route::get('/fornecedores', [FornecedoresController::class, 'index'])->name("app.fornecedores");
    Route::get('/produtos', [ProdutosController::class, 'produtos'])->name("app.produtos");
});


Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name("site.teste");



Route::fallback(function () {
    echo "rota acessada n existe <a href='" . route('site.index') . "'>clique aqui </a>";
});



Route::get(
    '/contato/{nome}/{categoria_id}',
    function (
        string $nome,
        int $categoria_id = 1
    ) {
        echo "{$nome}{$categoria_id}";
    }
)->where("categoria_id", "[0-9]+")->where("nome", "[A-Za-z]+");
