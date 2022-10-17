@csrf
<div class="card-body">
    <div class="form-group">
        <label for="exampleInputNome1">Nome <span class="text-danger" style="font-size: .9rem">*</span></label>
        <input type="text" name="nome" class="form-control" id="exampleInputNome1" placeholder="Nome" value="{{$cliente->nome ?? ''}}">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Endereço Email <span class="text-danger" style="font-size: .9rem">*</span></label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{$cliente->email ?? ''}}">
    </div>
    <div class="form-group">
        <label for="exampleInputtelemovel1">Telemóvel <span class="text-danger" style="font-size: .9rem">*</span></label>
        <input type="text" name="telemovel" class="form-control" id="exampleInputTelemovel1" placeholder="9XXXXXXXX" value="{{$cliente->telemovel ?? ''}}">
    </div>
</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>

