@csrf
<div class="card-body">
    <div class="form-group">
        <label for="exampleInputNome1">Nome <span class="text-danger" style="font-size: .9rem">*</span></label>
        <input type="text" name="nome" class="form-control" id="exampleInputNome1" placeholder="Nome" value="{{$servico->nome ?? ''}}">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Preço <span class="text-danger" style="font-size: .9rem">*</span></label>
        <input type="text" name="preco" class="form-control" id="exampleInputEmail1" placeholder="0.00" value="{{$servico->preco ?? ''}}">
    </div>
</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>

