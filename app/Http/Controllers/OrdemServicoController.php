<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateOdemServicoRequest;
use App\Models\ordemDeServico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrdemServicoController extends Controller
{

    protected $request;
    protected $repository;

    public function __construct(Request $request, ordemDeServico $ordem)
    {
        $this->request = $request;
        $this->repository = $ordem;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordens = ordemDeServico::with(['veiculo', 'produto', 'cliente'])->paginate(15);
        return view('admin.pages.ordens.index', [
            'ordens' => $ordens
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
        $veiculos = DB::select('select * from veiculos');
        $produtos = DB::select('select * from produtos');

        return view('admin.pages.ordens.create', [
            'clientes' => $clientes,
            'veiculos' => $veiculos,
            'produtos' => $produtos,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateOdemServicoRequest $request)
    {
        $data = $request->except('_token');

        $data['user_id'] = Auth::user()->id;
        $data['cliente_id'] = $request->cliente;
        $data['produto_id'] = $request->produto;
        $data['veiculo_id'] = $request->veiculo;

        $this->repository->create($data);

        return redirect()->route('ordens.index')
            ->with('success', 'Ordem cadastrada com sucesso.');
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
        $clientes = DB::select('select * from clientes');
        $veiculos = DB::select('select * from veiculos');
        $produtos = DB::select('select * from produtos');
        $ordem = $this->repository->where('id', $id)->first();
        return view('admin.pages.ordens.edit', [
            'clientes' => $clientes,
            'veiculos' => $veiculos,
            'produtos' => $produtos,
            'ordem' => $ordem
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
        $data = $request->except('_token');

        if (!$ordem = $this->repository->where('id', $id)->first())
            return redirect()->back();

        $data['user_id'] = Auth::user()->id;
        $data['cliente_id'] = $request->cliente;
        $data['produto_id'] = $request->produto;
        $data['veiculo_id'] = $request->veiculo;

        $ordem->update($data);

        return redirect()->route('ordens.index')
            ->with('update', 'Ordem editada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$ordem = $this->repository->where('id', $id)->first())
            return redirect()->back();

        $ordem->delete();

        return redirect()->route('ordens.index')
            ->with('delete', 'ordem apagado com sucesso.');
    }
}
