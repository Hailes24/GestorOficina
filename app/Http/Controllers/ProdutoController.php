<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Models\produto;
use App\Models\cliente;
use App\Models\categoria;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProdutoController extends Controller{
    
    public function index(){
       return view('produto/incluircategoria');
    }

    public function indexP(){
        $categoria=categoria::all();
        return view('produto/incluirproduto', compact('categoria')); 
       // return view('veiculo/incluirVeiculo', compact('cliente')); 
       
     }
   
    public function create(Request $data){
        $regra=['nome'=>'required|min:5|max:500'];
        $message=['required'=>'O campo não pode estar em branco',
        'nome.min'=>'Nome inválido',
        'nome.max'=>'Nome inválido',
        'nome.unique'=>'Este Serviço Já foi cadastrado. Por Favor, insira outro diferente'];
        $data->validate($regra, $message);
        categoria::create([
            'nome' => $data['nome'],            
        ]);
        return view('/dashboard');
    }


    public function cadastrarProduto(Request $data){
        $cliente=Cliente::all();
        
        produto::create([
            'idCategoria' => $data['idCategoria'],
            'idFuncionario' => $data['idFuncionario'],
            'precoCompra' => $data['precoCompra'],
            'precoVenda' => $data['precoVenda'],              
            'lucro' => $data['lucro'],
            'nome' => $data['nome'], 
            'codigoBarra' => $data['codigoBarra'],  
            'placa' => $data['placa'],  
            'stoqueminimo' => $data['stoqueminimo'],  
            'stoquemaximo' => $data['stoquemaximo'],
            'stok' => $data['stok'],       
            'foto' => $data['foto'],     
            'marca' => $data['marca'],     
            'localizacao' => $data['localizacao'],                
                        
        ]);
            return view('/dashboard', compact('cliente'));      
       
    }
    public function verTodososProdutos(){
        $produto=produto::all();
        $categoria=categoria::all();  
        return view('produto/verProdutos', compact('categoria','produto'));
    }
    /*PESQUISAR TODAS AS CATEGORIAS*/

    public function store(){
        //
        $search = request('search');
        
        if($search){
            $categoria=categoria::where([
                ['nome', 'like','%'. $search.'%']
            ])->get();
            return view('produto/categoria/pesquisarC', ['search'=> $categoria, ' search'=> $search]);
        }else{
            
        }
    }
    /*LISTAR TODAS AS CATEGORIAS*/
    public function showCategoria(){
        
        $categoria=categoria::all();
        return view('produto/categoria/vercategoria', compact('categoria')); 
    }

    /*LISTAR TODAS OS PRODUTOS*/
    public function show($id){
        $produto=produto::all();
        return view('produto/verprodutos.blade', compact('produto')); 
    }

    public function edit(){

        //$cat=categoria::find($id);
        //if(isset($cat)){
            return view('produto/categoria/editarC');
        //}
        //
    }

    public function update(Request $request, $id){
        $cat=categoria::find($id);
        if(isset($cat)){
            $cat->nome=$request->imput('nome');
            $cat->save();
        }
        return redirect('/categoria-reg');
    }

    
    public function destroyCat($id){
        $cat=categoria::find($id);
        if(isset($cat)){
            $cat->delete();
        }
        return redirect('/categoria')->with('smg', 'Evento Excluido Com sucesso');
    }
}
