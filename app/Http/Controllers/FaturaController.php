<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateFaturaRequest;
use App\Models\Cliente;
use App\Models\Fatura;
use App\Models\Venda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;

class FaturaController extends Controller
{
    protected $repository;
    public function __construct(Fatura $fatura)
    {
            $this->repository = $fatura;
            $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $faturas = $this->repository->latest()->get();
        $clientes = DB::select('select * from clientes');
        $produtos = DB::select('select * from produtos');
        $venda = Venda::latest()->first();

        if ($request->ajax()) {
            //data = Fatura::where('venda_id', $venda->id)->latest()->get();
            $data = $this->repository
            ->join('produtos', 'faturas.produto_id', '=', 'produtos.id')
            ->select('faturas.*', 'produtos.nome')
            ->where('venda_id', $venda->id)
            ->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editBook">Edit</a>';
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteBook">Delete</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('faturas', [
            'faturas'=>$faturas,
            'clientes'=>$clientes,
            'produtos'=>$produtos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return redirect()->route('vendas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateFaturaRequest $request)
    {
        $data = $request->except('_token');
        if ($linha = $this->repository->where('venda_id', $request->venda_id)
        ->where('produto_id', $request->produto_id)
        ->first()) {
                    $data['num_item'] = $linha->num_item;
                    $data['produto_id'] = $request->produto_id;
                    $data['qtd'] = $linha->qtd + $request->qtd;
                    $data['preco_unit'] = $linha->preco_unit + $request->preco_unit;
                    $data['preco_total'] = $linha->preco_preco_totalunit + $request->preco_total;
                    $linha->update($data);
        }
        elseif($linha = $this->repository->where('id', $request->book_id)->first()){
           $linha->update([
                'produto_id' => $request->produto_id,
                'preco_unit' => $request->preco_unit,
                'preco_total' => $request->preco_total,
                'num_item' => $request->num_item,
                'qtd' => $request->qtd,
                'venda_id' => $request->venda_id,

            ]);

        }
        else
        {
             $this->repository->Create([
                 'produto_id' => $request->produto_id,
                 'preco_unit' => $request->preco_unit,
                 'preco_total' => $request->preco_total,
                 'num_item' => $request->num_item,
                 'qtd' => $request->qtd,
                 'venda_id' => $request->venda_id,

             ]);
        }
        return response()->json(['success'=>'Book saved successfully.']);

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
        $fatura = Fatura::where('id', $id)->first();
        return response()->json($fatura);
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
        $this->repository->find($id)->delete();
        return response()->json(['success'=>'Linha excluida com sucesso.']);
    }

}
