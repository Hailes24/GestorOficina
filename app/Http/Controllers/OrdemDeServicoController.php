<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Veiculo;
use App\Models\Produto;
use App\Models\cliente;
use App\Models\ordem_de_servico;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class OrdemDeServicoController extends Controller{
    
    public function index(){
        $produto=Produto::all();
        $veiculo=Veiculo::all();
        return view('OS/CadastrarOS', compact('produto','veiculo')); 
       // return view('veiculo/incluirVeiculo', compact('cliente')); 
       
     }
    
    public function create(Request $data)    {
        ordem_de_servico::create([
            'idFuncionario' => $data['idFuncionario'],
            'idproduto' => $data['idproduto'],
            'idVeiculo' => $data['idVeiculo'],
            'dadaEntrega' => $data['dadaEntrega'],            
            'dataHora' =>now()->format('Y-m-d H:i'), 
            'descricaoDoservico' => $data['descricaoDoservico'],
            'DescricaoCliente' => $data['DescricaoCliente'],            
                      
        ]);
        return view('dashboard');       
    }

    public function store(){
        
        
        //
    }

    public function show(){        
        $ordemdeservico=ordem_de_servico::all();
        return view('OS/verOS', compact('ordemdeservico')); 
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
