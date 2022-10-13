<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller{
    
    public function create(){
        return view('auth.register');
    }

    
    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $user = User::create([
            'name' => $request->name,
            'profissao' => $request->profissao,
            'salario' => $request->salario,
            'dataNasc' => $request->dataNasc,
            'dataHora' => now()->format('Y-m-d H:i'),
            'telefone' => $request->telefone,
            'foto' => $request->foto,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])->givePermissionTo('user');

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
    public function pesquisarFuncionario(){        
        $search = request('search'); 
         if($search){
             $cliente=User::where([
                 ['name', 'like','%'. $search.'%']
             ])->get();
             return view('funcionario/PesquisarFuncionario', ['search'=> $cliente, ' search'=> $search]);
         }else{
             
             return  $search;
         }
     }


}
