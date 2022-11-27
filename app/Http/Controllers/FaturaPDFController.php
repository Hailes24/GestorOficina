<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Fatura;
use App\Models\Venda;
use Illuminate\Http\Request;
use PDF;

class FaturaPDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function geratePDF($id)
    {
        $total = 0;
        $linhas = Fatura::join('produtos', 'faturas.produto_id', '=', 'produtos.id')
        ->select('faturas.*', 'produtos.nome')
        ->where('venda_id', $id)
        ->get();

        foreach ($linhas as $linha => $item)
            $total +=$item->preco_total;

        $valorIVA = ($total*14)/100;
        $totalCount =$total + $valorIVA;

        $venda = Venda::where('id', $id)->first();
        $cliente = Cliente::where('id', $venda->cliente_id)->first();

       /* $cliente =  Venda::join('clientes', 'vendas.cliente_id', '=', 'clientes.id')
        ->select('vendas.*', 'clientes.nome')
        ->where('cliente_id', 3)
        ->where('vendas.id', id)
        ->get();*/

        $data = [
            'title' => 'faturas',
            'date' => date('m/d/Y'),
            'linhas' => $linhas,
            'cliente' =>$cliente,
            'venda' =>  $venda,
            'total' => $total,
            'valorIVA' => $valorIVA,
            'totalCount' => $totalCount
        ];
        $pdf = PDF::loadView('admin.pdf._fatura',$data);
        return $pdf->download('fatura.pdf');
    }
}
