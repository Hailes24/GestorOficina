<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServicoController extends Controller
{

    protected $request;
    protected $repository;
    public function __construct(Request $request, Servico $servico)
    {
        $this->request = $request;
        $this->repository = $servico;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicos = $this->repository->paginate(15);
        return view('admin.pages.servicos.index', [
            'servicos' => $servicos
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.servicos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['user_id'] = Auth::user()->id;

        $this->repository->create($data);

        return redirect()->route('servicos.index')
            ->with('success', 'Serviço cadastrado com sucesso.');
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
        $servico = $this->repository->where('id', $id)->first();

        return view('admin.pages.servicos.edit', [
            'servico' => $servico,
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
        if (!$servico = $this->repository->where('id', $id)->first())
            return redirect()->back();

        $data['user_id'] = Auth::user()->id;

        $servico->update($data);

        return redirect()->route('servicos.index')
            ->with('update', 'Servico edtitado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$servico = $this->repository->where('id', $id)->first())
            return redirect()->back();

        $servico->delete();

        return redirect()->route('servicos.index')
        ->with('delete', 'Serviço apagado com sucesso.');
    }
}
