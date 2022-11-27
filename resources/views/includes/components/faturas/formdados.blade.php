@csrf
<div class="card-body">
    <div class="form-group">
        <label for="exampleInputNome1">Nome <span class="text-danger" style="font-size: .9rem">*</span></label>
        <select name="cliente_id" class="form-control" id="cliente">
            <option selected>Selecione um cliente</option>
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Endereço Email <span class="text-danger" style="font-size: .9rem">*</span></label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" disabled>
    </div>
    <div class="form-group">
        <label for="exampleInputtelemovel1">Telemóvel <span class="text-danger" style="font-size: .9rem">*</span></label>
        <input type="text" name="telemovel" class="form-control" id="telemovel" placeholder="9XXXXXXXX" disabled>
    </div>

    <div class="form-group">
        <label for="exampleInputNome1">Endereço <span class="text-danger" style="font-size: .9rem">*</span></label>
        <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Endereço" required>
    </div>
</div>

<div class="card-footer">
    <button type="submit" class="btn btn-next btn-primary btn-icon-split btn-sm">
        <span class="icon text-white-50">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </span>
        <span class="text">Próximo</span>
    </button>
</div>
