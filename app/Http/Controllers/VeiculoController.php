<?php

namespace App\Http\Controllers;


use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Veiculo;
use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $cliente=Cliente::all();
       // return view('cliente/mostrarCliente', compact('cliente')); 
        return view('veiculo/incluirVeiculo', compact('cliente')); 
     }
 
     public function create(Request $data)    {
              
         Veiculo::create([
             'idFuncionario' => $data['idFuncionario'],
             'idcliente' => $data['idcliente'],
             'placa' => $data['placa'],            
             'modelo' => $data['modelo'],  
             'marca' => $data['marca'],
             'combustivel' => $data['combustivel'],            
             'cor' => $data['cor'],            
         ]);
         return redirect('/dashboard');      
     }
 
     public function store(){
         $search = request('search');
         
         if($search){
             $veiculo=Veiculo::where([
                 ['placa', 'like','%'. $search.'%']
             ])->get();
             return view('veiculo/PesquisarVeiculo', ['search'=> $veiculo, ' search'=> $search]);
         }else{
             
             return  $search;
         }
     }
 
    
     public function show(){
         $veiculo=Veiculo::all();
         return view('veiculo/mostrarveiculo',compact('veiculo'));
         //
     }
 
     
     public function edit($id)
     {
         //
     }
 
    
    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        $vei=veiculo::find($id);
        if(isset($vei)){
            $vei->delete();
        }
        return redirect('/mostrarVeiculos')->with('smg', 'Evento Excluido Com sucesso');
    }
}
