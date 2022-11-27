<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateFaturaRequest;
use App\Http\Requests\StoreUpdateVendaRequest;
use App\Models\Cliente;
use App\Models\Fatura;
use App\Models\Venda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VendaController extends Controller
{
    protected $request;
    protected $repository;

    public function __construct(Request $request, Venda $venda)
    {
        $this->request = $request;
        $this->repository = $venda;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$vendas = $this->repository->paginate(15);;
        $vendas = $this->repository->join('clientes', 'vendas.cliente_id', '=', 'clientes.id')
        ->select('vendas.*', 'clientes.nome')
        ->paginate(15);

        return view('admin.pages.vendas.index', [
            'vendas' =>  $vendas,
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
        return view('admin.pages.vendas.create', [
            'clientes'=> $clientes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateVendaRequest $request)
    {
        $data = $request->except('_token');
        if (!$venda = $this->repository->latest()->get())
            $data['num_fatura'] = $venda->id+1;
        else
            $data['num_fatura'] = 1;

        $data['user_id'] = Auth::user()->id;

        $this->repository->create($data);

        $venda = Venda::latest()->first();
        $cliente = Cliente::where('id', $venda->cliente_id)->first();
        $produtos = DB::select('select * from produtos');
        return view('admin.pages.faturas._create', [
                    'produtos'=>$produtos,
                    'venda' => $venda,
                    'cliente' => $cliente,
        ]);

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
