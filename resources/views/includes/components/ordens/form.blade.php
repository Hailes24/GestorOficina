@csrf
<div class="card-body">

    <div class="row">

        <div class="col-6">
            <label for="exampleInputNome1" class="required">Cliente <span class="text-danger" style="font-size: .9rem">*</span></label>
            <select name="cliente" id="" class="form-control">
                <option selected>Selecione um cliente</option>
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>

        </div>
        <div class="col-6">
            <label for="exampleInputNome1">Veiculo <span class="text-danger" style="font-size: .9rem">*</span></label>
            <select name="veiculo" id="" class="form-control">
                <option selected>Selecione um veiculo</option>
                @foreach ($veiculos as $veiculo)
                    <option value="{{ $veiculo->id }}">{{ $veiculo->placa }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row">

        <div class="col-6">
            <label for="exampleInputNome1">Produto <span class="text-danger" style="font-size: .9rem">*</span></label>
            <select name="produto" id="" class="form-control">
                <option selected>Selecione um produto</option>
                @foreach ($produtos as $produto)
                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-6">
            <label for="exampleInputNome1">Preço</label>
            <input type="text" name="preco" class="form-control" id="exampleInputNome1" placeholder="0.00"
                value="{{ $ordem->preco ?? '' }}">
        </div>
    </div>

    <div class="row">

        <div class="col-6">
            <label for="exampleInputNome1">Data de Revisão <span class="text-danger" style="font-size: .9rem">*</span></label>
            <input type="date" name="data_revisao" class="form-control" value="{{ $ordem->data_revisao ?? '' }}" id="">
        </div>
        <div class="col-6">
            <label for="exampleInputNome1">Data de Entrega <span class="text-danger" style="font-size: .9rem">*</span></label>
            <input type="date" name="data_entrega" class="form-control" value="{{ $ordem->data_entrega ?? '' }}" id="">
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputModelo1">Técnico responsavél <span class="text-danger" style="font-size: .9rem">*</span></label>
        <input type="text" name="tecnico" class="form-control" id="exampleInputModelo1" placeholder="Técnico"
            value="{{ $ordem->tecnico ?? '' }}">
    </div>

    <div class="form-group">
        <label for="exampleInputMarca1">Descricao</label>
        <textarea class="form-control" name="descricao" id="" cols="30" rows="5">{{ $ordem->descricao ?? '' }}</textarea>
    </div>

    <div class="form-group">
        <label for="exampleInputMarca1">Recomendações</label>
        <textarea class="form-control" name="recomendacao" id="" cols="30" rows="5">{{ $ordem->recomendacoes ?? '' }}</textarea>
    </div>


</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
