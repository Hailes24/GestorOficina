@csrf
<div class="card-body">
    <div class="row">

        <div class="col-6">
            <label for="exampleInputNome1">Cliente <span class="text-danger" style="font-size: .9rem">*</span></label>
            <select name="cliente" id="" class="form-control">
                <option selected>Selecione um cliente</option>
                @foreach ($clientes as $cliente )
                   <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-6">
            <label for="exampleInputNome1">Placa <span class="text-danger" style="font-size: .9rem">*</span></label>
            <input type="text" name="placa" class="form-control" id="exampleInputNome1" placeholder="Placa"
                value="{{ $veiculo->placa ?? '' }}">
        </div>
    </div>

    <div class="form-group">
        <label for="exampleInputModelo1">Modelo</label>
        <input type="text" name="modelo" class="form-control" id="exampleInputModelo1" placeholder="Modelo"
            value="{{ $veiculo->modelo ?? '' }}">
    </div>

    <div class="form-group">
        <label for="exampleInputMarca1">Marca</label>
        <input type="text" name="marca" class="form-control" id="exampleInputMarca1" placeholder="Marca"
            value="{{ $veiculo->marca ?? '' }}">
    </div>
    <div class="form-group">
        <label for="exampleInputCombustivel">Combustivel</label>
        <input type="text" name="combustivel" class="form-control" id="exampleInputCombustivel" placeholder="combustivel"
            value="{{ $veiculo->combustivel ?? '' }}">
    </div>
    <div class="form-group">
        <label for="exampleInputCor1">Cor</label>
        <input type="text" name="cor" class="form-control" id="exampleInputCor1" placeholder="Cor"
            value="{{ $veiculo->cor ?? '' }}">
    </div>
</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
