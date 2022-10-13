<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\cliente;
use App\Models\Funcionario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FuncionarioController extends Controller{
    
    public function index(){
        //
        return view('auth/register');
    }

    public function create(){
        //
    }

    public function store(Request $request){
        //
    }

    public function show(){
       $funcionario=User::all();
       return view('funcionario/mostrarFuncionario', compact('funcionario'));
       //
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
