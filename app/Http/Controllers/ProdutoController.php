<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProdutoRequest;
use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Veiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProdutoController extends Controller
{

    protected $request;
    protected $repository;
    public function __construct(Request $request, Produto $produto)
    {
        $this->request = $request;
        $this->repository = $produto;
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$produtos =$this->repository->paginate(15);
        $produtos = Produto::with('categorias')->paginate(15);

        return view('admin.pages.produtos.index', [
            'produtos' => $produtos
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = DB::select('select * from categorias');
        return view('admin.pages.produtos.create', [
            'categorias' => $categorias
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUpdateProdutoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateProdutoRequest $request)
    {
        $data = $request->except('_token');

        if ($request->hasFile('foto') && $request->foto->isValid()) {
            $fotoFile = $request->nome . '.' . $request->foto->extension();
            $request->foto->storeAs('produtos', $fotoFile);
            $data['foto'] = $fotoFile;
            $data['categoria_id'] = $request->categoria;
            $data['lucro'] = $request->preco_venda - $request->preco_compra;
        }
        $this->repository->create($data);

        return redirect()->route('produtos.index')
            ->with('success', 'Produto Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = $this->repository->where('id', $id)->first();
        $categoria = DB::select('select * from categorias where id = ?', $produto->id);

        return view('admin.pages.produtos.show', [
            'produto' => $produto,
            'categoria' => $categoria
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
        $produto = $this->repository->where('id', $id)->first();
        //$categoria = DB::select('select * from categorias where id = ?', [$produto->categoria_id]);
        $categorias = DB::select('select * from categorias');
        return view('admin.pages.produtos.edit', [
            'produto' => $produto,
            'categorias'=>$categorias
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreUpdateProdutoRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateProdutoRequest $request, $id)
    {
        $data = $request->except('_token');
        if (!$produto = $this->repository->where('id', $id)->first())
            return redirect()->back();

        if ($produto->foto && Storage::exists($produto->foto)) {
            Storage::delete($produto->foto);
        }

        if ($request->hasFile('foto') && $request->foto->isValid()) {
            $fotoFile = $request->nome . '.' . $request->foto->extension();
            $request->foto->storeAs('produtos', $fotoFile);
            $data['foto'] = $fotoFile;
            $data['categoria_id'] = $request->categoria;
            $data['lucro'] = $request->preco_venda - $request->preco_compra;
        }
        $produto->update($data);

        return redirect()->route('produtos.index')
            ->with('update', 'Produtos Edtitado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$produto = $this->repository->where('id', $id)->first())
            return redirect()->back();

        if ($produto->foto && Storage::exists($produto->foto))
            Storage::delete($produto->foto);
        $produto->delete();

        return redirect()->route('produtos.index')
            ->with('delete', 'Produto excluido com sucesso.');
    }

    /**
     * GetDataProduto .
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getDataProduto(Request $request)
    {
        $produto = $this->repository->where('id', $request->id)->first();
        return response()->json($produto);
    }
}
