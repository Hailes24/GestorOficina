<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\OrdemServicoController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\FaturaController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\FaturaPDFController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ProfissaoController;
use App\Http\Controllers\AgendamentoController;
use App\Models\Agendamento;

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

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('clientes', ClienteController::class);
Route::resource('veiculos', VeiculoController::class);
Route::resource('produtos', ProdutoController::class);
Route::resource('categorias', CategoriaController::class);
Route::resource('ordens', OrdemServicoController::class);
Route::resource('servicos', ServicoController::class);
Route::resource('faturas', FaturaController::class);
Route::resource('vendas', VendaController::class);
Route::resource('funcionarios', FuncionarioController::class);
Route::resource('profissoes', ProfissaoController::class);
Route::resource('agendamentos', AgendamentoController::class);
Route::get('clienteid', [ClienteController::class, 'getDataCliente'])->name('clientes.getdata');
Route::get('produtoid', [ProdutoController::class, 'getDataProduto'])->name('produtos.getdata');
Route::get('faturapdf/{id}', [FaturaPDFController::class, 'geratePDF'])->name('fatura.pdf');

