@csrf
<div class="card-body">
    <div class="form-group">
        <label for="exampleInputNome1">Nome <span class="text-danger" style="font-size: .9rem">*</span></label>
        <input type="text" name="nome" class="form-control" id="exampleInputNome1" placeholder="Nome" value="{{$categoria->nome ?? ''}}">
    </div>
</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
