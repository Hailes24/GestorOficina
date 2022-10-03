<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\cliente;
use App\Models\Servico;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ServicoController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('servico/incluirServico');
    }

    public function create(Request $data){
        $cliente=Cliente::all();
       
        $regra=['nome'=>'required|unique:servicos|min:5|max:500', 'preco'=>'required'];
        $message=['required'=>'O campo não pode estar em branco',
        'nome.min'=>'Nome inválido',
        'nome.max'=>'Nome inválido',
        'nome.unique'=>'Este Serviço Já foi cadastrado. Por Favor, insira outro diferente'];
        $data->validate($regra, $message);
        Servico::create([
            'idFuncionario' => $data['idFuncionario'], 
            'nome' => $data['nome'], 
            'preco' => $data['preco'],             
        ]);
        return view('/dashboard', compact('cliente'));
    }

    
    public function store(){
        //
        $search = request('search');
        
        if($search){
            $servico=Servico::where([
                ['nome', 'like','%'. $search.'%']
            ])->get();
            return view('servico/pesquisarServico', ['search'=> $servico, ' search'=> $search]);
        }else{
            
        }
    }

    public function show(){
        $servico=Servico::all();
        return view('servico/mostrarServico',compact('servico'));
        //
    }

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
