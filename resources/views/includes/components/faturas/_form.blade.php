@csrf
<div class="card card card-primary">
    <div class="card-header">
        <h3 class="card-title">Dados do Cliente</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputNome1">Número</span></label>
            <input type="text" name="num_fatura" id="num_fatura" placeholder="Nº" class="form-control" value="{{'00'.$venda->id.'/'.date('Y')}}" disabled>
            <span class="text-danger error-text num_fatura_error"></span>
        </div>

        <div class="form-group">
            <label for="exampleInputNome1">Nome do Cliente</label>
                    <input type="text" name="cliente" id="cliente" placeholder="Nº" class="form-control" value="{{$cliente->nome}}" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputNome1">Email</label>
                    <input type="text" name="email" id="email" placeholder="Nº" class="form-control" value="{{$cliente->email}}" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputNome1">Telemóvel</label>
                    <input type="text" name="tel" id="tel" placeholder="Nº" class="form-control" value="{{$cliente->telemovel}}" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputNome1">Endereço</label>
            <input type="text" name="endereco" placeholder="Endereço" class="form-control" value="{{$venda->endereco}}" disabled>
            <span class="text-danger error-text endereco_error"></span>
        </div>

    </div>
    <div class="card-footer">
        
        <a class="btn btn-success" href="{{ route('fatura.pdf', $venda->id) }}">Imprimir</a>
    </div>
</div>
