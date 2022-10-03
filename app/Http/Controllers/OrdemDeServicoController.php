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
            'dataHora' => $data['dataHora'],  
            'descricaoDoservico' => $data['descricaoDoservico'],
            'DescricaoCliente' => $data['DescricaoCliente'],            
                      
        ]);
        return redirect('OS/verOS');       
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
