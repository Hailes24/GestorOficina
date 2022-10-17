@csrf
<div class="card-body">

    <div class="row">

        <div class="col-6">
            <label for="exampleInputNome1">Nome <span class="text-danger" style="font-size: .9rem">*</span></label>
            <input type="text" name="nome" class="form-control" id="exampleInputNome1" placeholder="Nome"
            value="{{ $produto->nome ?? '' }}">
        </div>
        <div class="col-6">
            <label for="exampleInputNome1">Foto <span class="text-danger" style="font-size: .9rem">*</span></label>
            <input type="file" name="foto" class="form-control" id="">
        </div>
    </div>

    <div class="row">

        <div class="col-6">
            <label for="exampleInputNome1">Categoria <span class="text-danger" style="font-size: .9rem">*</span></label>
            <select name="categoria" id="" class="form-control">
                <option selected>Selecione uma categoria</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-6">
            <label for="exampleInputNome1">Cor</label>
            <input type="text" name="cor" class="form-control" id="exampleInputNome1" placeholder="Cor"
                value="{{ $produto->cor ?? '' }}">
        </div>
    </div>

    <div class="row">

        <div class="col-6">
            <label for="exampleInputNome1">Preço da Compra <span class="text-danger" style="font-size: .9rem">*</span></label>
            <input type="text" name="preco_compra" class="form-control" id="exampleInputNome1" placeholder="0.00"
            value="{{ $produto->preco_compra ?? '' }}"  >
        </div>
        <div class="col-6">
            <label for="exampleInputNome1">Preço da Venda <span class="text-danger" style="font-size: .9rem">*</span></label>
            <input type="text" name="preco_venda" class="form-control" id="exampleInputNome1" placeholder="0.00"
            value="{{ $produto->preco_venda ?? '' }}">
        </div>
    </div>

    <div class="row">

        <div class="col-6">
            <label for="exampleInputNome1">Quantidade em Stock <span class="text-danger" style="font-size: .9rem">*</span></label>
            <input type="number" class="form-control" name="qtd_stock" id="" value="{{$produto->qtd_stock ?? ''}}">
        </div>
        <div class="col-6">
            <label for="exampleInputNome1">Fabricante</label>
            <input type="text" name="fabricante" class="form-control" id="exampleInputNome1" placeholder="Fabricante"
            value="{{ $produto->fabricante ?? '' }}">
        </div>
    </div>

    <div class="form-group">
        <label for="exampleInputModelo1">Localização</label>
        <input type="text" name="localizacao" class="form-control" id="exampleInputModelo1" placeholder="Localização"
            value="{{ $produto->localizacao ?? '' }}">
    </div>

    <div class="form-group">
        <label for="exampleInputMarca1">Descricao</label>
        <textarea class="form-control" name="descricao" id="" cols="30" rows="5">{{ $produto->descricao ?? '' }}</textarea>
    </div>
</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
