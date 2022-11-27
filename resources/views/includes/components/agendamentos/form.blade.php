@csrf
<div class="card-body">
    <div class="row">
        <div class="col-4">
            <label for="exampleInputNome1">Veiculos <span class="text-danger" style="font-size: .9rem">*</span></label>
            <select name="veiculo_id" id="" class="form-control">
                <option selected>Selecione um veiculo</option>
                @foreach ($veiculos as $veiculo)
                    <option value="{{ $veiculo->id }}">{{ $veiculo->placa }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-4">
            <label for="exampleInputtelemovel1">Data e Hora<span class="text-danger"
                    style="font-size: .9rem">*</span></label>
            <input type="datetime-local" name="data_hora" class="form-control" id="exampleInputTelemovel1"
                value="{{ $agendamento->data_hora ?? '' }}">
        </div>
    </div>

</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
