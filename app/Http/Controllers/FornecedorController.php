<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\cliente;
use App\Models\Fornecedore;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        return view('fornecedor/cadastrarFornecedor');
    }
    /************ CADASTRAR FORNECEDOR************ */
    public function create(Request $data){

        $regra=['telefone'=>'required|unique:fornecedores|min:9|max:9','name'=>'required|min:10|max:100','email'=>'required|email'];
        $message=['required'=>'O campo não pode estar em branco',
        'email'=>'Digite um endereço de email válido',
        'telefone.min'=>'É necessário no mínimo 9 caracteres ',
        'telefone.max'=>'É necessário 9 caracteres ao máximo',
        'unique:fornecedores'=>' O usuario já existe',
        'name.min'=>'Nome inválido',
        'name.max'=>'Nome inválido'];

        $data->validate($regra, $message);
       
        Fornecedore::create([
            'idFuncionario' => $data['idFuncionario'],
            'name' => $data['name'],   
            'email' => $data['email'],
            'telefone' => $data['telefone'],                    
        ]);
        return redirect('/dashboard', compact('cliente'));
    }



   /* public function index(){
        $fornecedor=Fornecedore::all();
        
        return view('fornecedor/listarFornecedor', compact('fornecedor'));
    
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(){
        
        $search = request('search');
        
        if($search){
            $fornecedor=Fornecedore::where([
                ['name', 'like','%'. $search.'%']
            ])->get();
            return view('fornecedor/pesquisarFornecedor', ['search'=> $fornecedor, ' search'=> $search]);
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
        
        $fornecedor=fornecedore::all();
        return view('fornecedor/listarFornecedor', compact('fornecedor')); 
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
