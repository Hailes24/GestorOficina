<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\cliente;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller{
    
    public function index(){
        
        return view('cliente/registarCliente');
       
       // return redirect('/Cliente'); 
    }

    
    public function create(Request $data){
        /*$data ->validate([
             'telefone'=>'required|unique:clientes|min:9|max:9',  'nome'=>'required|min:10|max:100','email'=>'required|email']);
             */   
         $regra=['telefone'=>'required|unique:clientes|min:9|max:9',  'nome'=>'required|min:10|max:100','email'=>'required|email'];
         $message=['required'=>'O campo não pode estar em branco',
         'email'=>'Digite um endereço de email válido',
         'telefone.min'=>'É necessário no mínimo 9 caracteres ',
         'telefone.max'=>'É necessário 9 caracteres ao máximo',
         'nome.min'=>'Nome inválido',
         'nome.max'=>'Nome inválido'];
         $data->validate($regra, $message);
        // $cliente=Cliente::all();
         
         Cliente::create([
             'idFuncionario' => $data['idFuncionario'],
             'nome' => $data['nome'], 
             'email' => $data['email'],
             'telefone' => $data['telefone'],           
             'dataHora' => now()->format('Y-m-d H:i'),             
         ]);
         return view('/dashboard');
     }

    
     public function store(){
        
        $search = request('search');
        
        if($search){
            $cliente=Cliente::where([
                ['nome', 'like','%'. $search.'%']
            ])->get();
            return view('cliente/Pesquisarcliente', ['search'=> $cliente, ' search'=> $search]);
        }else{
            
            return  $search;
        }
       
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(){
        
        $cliente=Cliente::all();
        return view('cliente/mostrarCliente', compact('cliente')); 
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
    public function destroy($id){
        $cli=cliente::find($id);
        if(isset($cli)){
            $cli->delete();
        }
        return redirect('/mostrarCliente')->with('smg', 'Evento Excluido Com sucesso');
    }
}
