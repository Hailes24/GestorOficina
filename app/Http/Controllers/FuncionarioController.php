<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Models\Profissao;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FuncionarioController extends Controller
{

    protected $request;
    protected $repository;
    public function __construct(Request $request, Funcionario $funcionario)
    {
        $this->repository = $funcionario;
        $this->request = $request;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = $this->repository->paginate(15);
        return view('admin.pages.funcionarios.index', [
            'funcionarios' => $funcionarios
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profissoes = Profissao::all();
        return view('admin.pages.funcionarios.create', [
            'profissoes' => $profissoes,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token', '_method', 'id',]);
        $dataUser = $request->only(['nome', 'email']);
        $user = null;
        if ($request->hasFile('foto') && $request->foto->isValid()) {
            if ($request->acesso == 'on') {

                $dataUser['name'] = $request->nome;
                $dataUser['email'] = $request->email;
                $dataUser['password'] = bcrypt('12345678');
                User::create($dataUser);
                $user = User::get()->last();

                $fotoFile = $request->nome . '.' . $request->foto->extension();
                $request->foto->storeAs('users', $fotoFile);
                $data['foto'] = $fotoFile;
                $data['user_id'] = $user->id;
                $data['num_funcionario'] = 'FUNC' . '00' . $user->id;
                $this->repository->create($data);
            } else {
                $fotoFile = $request->nome . '.' . $request->foto->extension();
                $request->foto->storeAs('users', $fotoFile);
                $user = User::get()->last();
                $data['user_id'] = 0;
                $data['foto'] = $fotoFile;
                $data['num_funcionario'] = 'FUNC' . '00' . $user->id + 1;
                $this->repository->create($data);
            }

            return redirect()
                ->route('funcionarios.index')
                ->with('sucess', 'os dados foram atualizados com sucesso!');
        }
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
        $profissoes = DB::select('select * from profissaos');
        $funcionario = $this->repository->where('id', $id)->first();
        return view('admin.pages.funcionarios.edit', [
            'profissoes' => $profissoes,
            'funcionario' => $funcionario,
        ]);
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

        $data = $request->except(['_token', '_method', 'id',]);
        $dataUser = $request->only(['nome', 'email']);

        if (!$funcionario = $this->repository->where('id', $id)->first())
            return redirect()->back();

        if ($funcionario->foto && Storage::exists($funcionario->foto))
            Storage::delete($funcionario->foto);

        if ($request->hasFile('foto') && $request->foto->isValid()) {
            if ($request->acesso == 'on') {
                if (!$user = User::where('id', $id)->first())
                    return redirect()->back();
                $dataUser['name'] = $request->nome;
                $dataUser['email'] = $request->email;
                $dataUser['password'] = bcrypt('12345678');
                $user->update($dataUser);
                $user = User::where('id', $id)->first();

                $fotoFile = $request->nome . '.' . $request->foto->extension();
                $request->foto->storeAs('users', $fotoFile);
                $data['foto'] = $fotoFile;
                $data['user_id'] = $user->id;
                $data['num_funcionario'] = 'FUNC' . '00' . $user->id;
                $this->repository->create($data);
            } else {
                $fotoFile = $request->nome . '.' . $request->foto->extension();
                $request->foto->storeAs('users', $fotoFile);
                $user = User::get()->last();
                $data['user_id'] = 0;
                $data['foto'] = $fotoFile;
                $data['num_funcionario'] = 'FUNC' . '00' . $user->id + 1;
                $funcionario->update($data);
            }

            return redirect()
                ->route('funcionarios.index')
                ->with('sucess', 'os dados foram atualizados com sucesso!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$funcionario = $this->repository->where('id', $id)->first())
            return redirect()->back();
        if ($funcionario->foto && Storage::exists($funcionario->foto))
            Storage::delete('users/' . $funcionario->foto);
        $funcionario->delete();
        if ($user = User::where('id', $funcionario->user_id)->first())
            $user->delete();

        return redirect()->route('funcionarios.index')
            ->with('delete', 'Funcionario excluido com sucesso.');
    }
}
