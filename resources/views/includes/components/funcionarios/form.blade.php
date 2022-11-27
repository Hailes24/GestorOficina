@csrf
<div class="card-body">

    <div class="row">
        <div class="col-6">
            <label for="exampleInputNome1">Nome <span class="text-danger" style="font-size: .9rem">*</span></label>
            <input type="hidden" name="id" value="{{$funcionario->id ?? ''}}">
            <input type="text" name="nome" class="form-control" id="exampleInputNome1" placeholder="Nome"
                value="{{ $funcionario->nome ?? '' }}">
        </div>

        <div class="col-6">
            <label for="exampleInputNome1">Foto <span class="text-danger" style="font-size: .9rem">*</span></label>
            <input type="file" name="foto" class="form-control" id="exampleInputNome1">
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="exampleInputEmail1">Endereço Email <span class="text-danger"
                    style="font-size: .9rem">*</span></label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"
                value="{{ $funcionario->email ?? '' }}">
        </div>
        <div class="col-6">
            <label for="exampleInputNome1">Profissão <span class="text-danger" style="font-size: .9rem">*</span></label>
            <select name="profissao_id" id="" class="form-control">
                <option selected>Selecione uma Profissão</option>
                @foreach ($profissoes as $profissao)
                    <option value="{{ $profissao->id }}">{{ $profissao->nome }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="exampleInputtelemovel1">Telemóvel 1 <span class="text-danger"
                    style="font-size: .9rem">*</span></label>
            <input type="text" name="telemovel" class="form-control" id="exampleInputTelemovel1"
                placeholder="9XXXXXXXX" value="{{ $funcionario->telemovel ?? '' }}">
        </div>
        <div class="col-6">
            <label for="exampleInputtelemovel1">Telemóvel 2</label>
            <input type="text" name="telefone" class="form-control" id="exampleInputTelemovel1"
                placeholder="9XXXXXXXX" value="{{ $funcionario->telefone ?? '' }}">
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <label for="exampleInputtelemovel1">Salário<span class="text-danger"
                    style="font-size: .9rem">*</span></label>
            <input type="text" name="salario" class="form-control" id="exampleInputTelemovel1" placeholder="0,00"
                value="{{ $funcionario->salario ?? '' }}">
        </div>
        <div class="col-4">
            <label for="exampleInputtelemovel1">Subsidios<span class="text-danger"
                    style="font-size: .9rem">*</span></label>
            <input type="text" name="subsidio" class="form-control" id="exampleInputTelemovel1" placeholder="0,00"
                value="{{ $funcionario->subsidio ?? '' }}">
        </div>
        <div class="col-4">
            <label for="exampleInputtelemovel1">Data de Nascimento<span class="text-danger"
                    style="font-size: .9rem">*</span></label>
            <input type="date" name="data_nasc" class="form-control" id="exampleInputTelemovel1"
            max="2003-12-31" value="{{ $funcionario->data_nasc ?? '' }}">
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <label for="exampleInputtelemovel1">Endereço<span class="text-danger"
                    style="font-size: .9rem">*</span></label>
            <input type="text" name="endereco" class="form-control" id="exampleInputTelemovel1" placeholder="Endereço"
                value="{{ $funcionario->endereco ?? '' }}">
        </div>
        <div class="col-4">
            <label for="exampleInputtelemovel1">Província<span class="text-danger"
                    style="font-size: .9rem">*</span></label>
            <input type="text" name="provincia" class="form-control" id="exampleInputTelemovel1" placeholder="Província"
                value="{{ $funcionario->provincia ?? '' }}">
        </div>
        <div class="col-4">
            <label for="exampleInputtelemovel1">Nacionalidade<span class="text-danger"
                    style="font-size: .9rem">*</span></label>
            <input type="text" name="nacionalidade" class="form-control" id="exampleInputTelemovel1"
                value="{{ $funcionario->nacionalidade ?? '' }}" placeholder="Nacionalidade">
        </div>
    </div>
    <div class="form-check">
        <input type="checkbox" name="acesso" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Permitir acesso ao sistena</label>
    </div>

</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
