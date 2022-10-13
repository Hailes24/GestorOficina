<?php

use Illuminate\Support\Facades\Route;
use App\Models\cliente;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
   
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/Cliente',[App\Http\Controllers\ClienteController::class, 'index']);
Route::get('/cadastrarFuncionario',[App\Http\Controllers\RegisteredUserController::class, 'cadastrarfuncionario']);
Route::get('/funcionario',[App\Http\Controllers\Auth\RegisteredUserController::class, 'registar']);
Route::Post('/cadastrarCliente',[App\Http\Controllers\ClienteController::class, 'create']);
Route::get('/fornecedor',[App\Http\Controllers\fornecedorController::class, 'index']);
Route::Post('/cadastrarFornecedor',[App\Http\Controllers\FornecedorController::class, 'create']);
Route::get('/verFornecedores',[App\Http\Controllers\FornecedorController::class, 'show']);
Route::get('/pesquisarFornecedor',[App\Http\Controllers\FornecedorController::class, 'store']);
Route::get('/ordemdeServico',[App\Http\Controllers\OrdemDeServicoController::class, 'index']);
Route::get('/Ver_ordemdeServico',[App\Http\Controllers\OrdemDeServicoController::class, 'show']);
Route::Post('/cadastrarOS',[App\Http\Controllers\OrdemDeServicoController::class, 'create']);
Route::get('/veiculo',[App\Http\Controllers\VeiculoController::class, 'index']);
Route::Post('/incluirVeiculo',[App\Http\Controllers\VeiculoController::class, 'create']);
Route::get('/mostrarCliente',[App\Http\Controllers\ClienteController::class, 'show']);
//Route::get('/Funcionario',[App\Http\Controllers\FuncionarioController::class, 'index']);
Route::get('/pesquisar_funcionario',[App\Http\Controllers\Auth\RegisteredUserController::class, 'pesquisarFuncionario']);
Route::get('/funcionarios',[App\Http\Controllers\FuncionarioController::class, 'show']);
Route::get('/mostrarVeiculos',[App\Http\Controllers\VeiculoController::class, 'show']);
Route::get('/pesquisarcliente',[App\Http\Controllers\ClienteController::class, 'store']);
Route::get('/pesquisarVeiculo',[App\Http\Controllers\VeiculoController::class, 'store']);
Route::post('/incluirServico',[App\Http\Controllers\ServicoController::class, 'create']);
Route::get('/pesquisarServico',[App\Http\Controllers\ServicoController::class, 'store']);
Route::get('/verServicos',[App\Http\Controllers\ServicoController::class, 'show']);
Route::get('/servico',[App\Http\Controllers\ServicoController::class, 'index']);
Route::get('/categoria',[App\Http\Controllers\ProdutoController::class, 'index']);
Route::post('/categoria-reg',[App\Http\Controllers\ProdutoController::class, 'create']);
Route::get('/produto-reg',[App\Http\Controllers\ProdutoController::class, 'indexP']);
Route::get('/categoria-pesquisa',[App\Http\Controllers\ProdutoController::class, 'store']);
Route::get('/categoria-listar',[App\Http\Controllers\ProdutoController::class, 'showCategoria']);
Route::get('/Produto-listar',[App\Http\Controllers\ProdutoController::class, 'verTodososProdutos']);
Route::get('/categoria-listar/{id}',[App\Http\Controllers\c::class, 'destroyCat']);
Route::get('/cliente-listar/{id}',[App\Http\Controllers\ClienteController::class, 'destroy']);
Route::get('/veiculo-listar/{id}',[App\Http\Controllers\veiculoController::class, 'destroy']);
Route::post('/produto-listar/{id}',[App\Http\Controllers\ProdutoController::class, 'edit']);
Route::Post('/incluirproduto',[App\Http\Controllers\ProdutoController::class, 'cadastrarProduto']);
Route::get('/categoria-atualizar/{id}',[App\Http\Controllers\ProdutoController::class, 'update']);









