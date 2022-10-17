<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateVeiculoRequest;
use App\Models\Veiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VeiculoController extends Controller
{
    protected $repository;
    protected $request;

    public function __construct(Request $request, Veiculo $veiculo)
    {
        $this->request = $request;
        $this->repository = $veiculo;
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $veiculos = $this->repository->paginate(15);

        return view('admin.pages.veiculos.index', [
            'veiculos' => $veiculos

        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = DB::select('select * from clientes');
        return view('admin.pages.veiculos.create', [
            'clientes' => $clientes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateVeiculoRequest $request)
    {
        $data = $request->except('_token');
        $data['cliente_id'] = $request->cliente;
        $data['user_id'] = Auth::user()->id;
        /* $user_id = $request->clinte;
        if ((int)$user_id <= 0)
            return redirect()->back();
        dd($data);*/
        $this->repository->create($data);
        return redirect()->route('veiculos.index')
        ->with('success', 'Veículo Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $veiculo = $this->repository->where('id', $id)->first();
        return view('admin.pages.veiculos.edit', [
            'veiculo' => $veiculo

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = DB::select('select * from clientes');
        $veiculo = $this->repository->where('id', $id)->first();
        return view('admin.pages.veiculos.edit', [
            'veiculo' => $veiculo,
            'clientes' => $clientes
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateVeiculoRequest $request, $id)
    {
        $data = $request->except('_token');

        $veiculo = $this->repository->where('id', $id)->first();

        $data['cliente_id'] = $request->cliente;
        $data['user_id'] = Auth::user()->id;

        $veiculo->update($data);

        return redirect()->route('veiculos.index')
        ->with('update', 'Veículo Edtitado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $veiculo = $this->repository->where('id', $id)->first();
        
        $veiculo->delete();

        return redirect()->route('veiculos.index')
        ->with('delete', 'Veículo apagado com sucesso.');

    }
}
