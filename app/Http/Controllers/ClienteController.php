<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    protected $request;
    protected $repository;
    public function __construct(Request $request, Cliente $cliente)
    {
        $this->request = $request;
        $this->repository = $cliente;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clientes = $this->repository->paginate(15);
        return view('admin.pages.clientes.index', [
            'clientes' => $clientes
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd(Auth::user()->id);
        return view('admin.pages.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateClienteRequest $request)
    {
        $data = $request->except('_token');
        $data['user_id'] = Auth::User()->id;
        $this->repository->create($data);
        return redirect()->route('clientes.index')
            ->with('success', 'Cliente Cadastrado com sucesso.');
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

        $cliente = $this->repository->where('id', $id)->first();
        return view('admin.pages.clientes.edit', [
            'cliente' => $cliente
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateClienteRequest $request, $id)
    {
        $cliente = $this->repository->Where('id', $id)->first();
        $data = $request->except('_token');
        $data['user_id'] = Auth::user()->id;
        $cliente->update($data);

        return redirect()->route('clientes.index')
            ->with('update', 'Cliente Edtitado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (!$cliente = $this->repository->where('id', $id)->first())
            return redirect()->back();

        if ($veiculo = DB::select('select * from veiculos where cliente_id = ?', [$id]))
                return redirect()->back()->with('delete', 'Não foi possivel apagar este cliente existe um veiculo associado a ele.');

        $cliente->delete();

        return redirect()->route('clientes.index')
            ->with('delete', 'Cliente Apagado com sucesso.');
    }
}
