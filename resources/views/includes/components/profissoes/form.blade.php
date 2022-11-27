@csrf
<div class="card-body">

        <div class="form-group">
            <label for="exampleInputNome1">Nome <span class="text-danger" style="font-size: .9rem">*</span></label>
            <input type="text" name="nome" class="form-control" id="exampleInputNome1" placeholder="Nome"
            value="{{ $profissao->nome ?? '' }}">
        </div>


    <div class="form-group">
        <label for="exampleInputMarca1">Descricao</label>
        <textarea class="form-control" name="descricao" id="" cols="30" rows="5">{{ $profissao->descricao ?? '' }}</textarea>
    </div>
</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
