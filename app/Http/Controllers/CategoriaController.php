<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateCategoriaRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{

    protected $request;
    protected $repository;
    public function __construct(Request $request, Categoria $produto)
    {
        $this->request = $request;
        $this->repository = $produto;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = $this->repository->paginate(15);
        return view('admin.pages.categorias.index', [
            'categorias' => $categorias
        ])
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateCategoriaRequest $request)
    {
        $data = $request->except('_token');
        $this->repository->create($data);

        return redirect()->route('categorias.index')
        ->with('success', 'Categoria Cadastrada com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = $this->repository->where('id', $id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = $this->repository->where('id', $id)->first();
        return view('admin.pages.categorias.edit', [
            'categoria' => $categoria
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateCategoriaRequest $request, $id)
    {
        $data = $request->except('_token');
        if (!$categoria = $this->repository->where('id', $id)->first())
            return redirect()->back();

        $categoria->update($data);
        return redirect()->route('categorias.index')
            ->with('update', 'Categotia Edtitada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$categoria = $this->repository->where('id', $id)->first())
            return redirect()->back();

        if ($produto = DB::select('select * from produtos where categoria_id = ?', [$id]))
            return redirect()->back()->with('delete', 'Não foi possivel apagar está categoria existe um produto associado a ela.');

        $categoria->delete();
        return redirect()->route('categorias.index')
        ->with('delete', 'Categoria apagada com sucesso.');
    }
}
