<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAgendamentoRequest;
use App\Models\Agendamento;
use App\Models\Veiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AgendamentoController extends Controller
{

    protected $request;
    protected $repository;

    public function __construct(Request $request, Agendamento $agendamento)
    {
        $this->request = $request;
        $this->repository = $agendamento;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendamentos = $this->repository
        ->join('veiculos', 'agendamentos.veiculo_id', '=', 'veiculos.id')
        ->join('users', 'agendamentos.user_id', '=', 'users.id')
        ->select('agendamentos.*', 'veiculos.placa', 'users.name')
        ->paginate(15);

        return view('admin.pages.agendamentos.index', [
            'agendamentos'=>$agendamentos
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $veiculos = DB::select('select * from veiculos');
        return view('admin.pages.agendamentos.create', [
            'veiculos'=>$veiculos,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateAgendamentoRequest $request)
    {
        $data = $this->request->except('_token');
        $data['user_id'] = Auth::user()->id;
        $this->repository->create($data);
        return redirect()->route('agendamentos.index')
        ->with('success', 'Agendamento Cadastrado com sucesso.');
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
        $veiculos = DB::select('select * from veiculos');
        $agendamento = $this->repository->where('id', $id)->first();
        
        return view('admin.pages.agendamentos.edit', [
            'veiculos'=>$veiculos,
            'agendamento'=>$agendamento,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateAgendamentoRequest $request, $id)
    {
        $data = $this->request->except('_token');
        if(!$agendamento = $this->repository->where('id', $id)->first())
            return redirect()->back();

        $data['user_id'] = Auth::user()->id;
        $agendamento->update($data);
        return redirect()->route('agendamentos.index')
        ->with('update', 'Agendamento editado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$agendamento = $this->repository->where('id', $id)->first())
            return redirect()->back();
        $agendamento->delete();

        return redirect()->route('agendamentos.index')
        ->with('delete', 'Agendamento eliminado com sucesso.');

    }
}
