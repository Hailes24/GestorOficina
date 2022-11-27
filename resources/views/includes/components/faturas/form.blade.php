@csrf
<div class="card-body">

    <div class="row">
        <div class="col col-lg-1">
            <label for="exampleInputNome1">Número <span class="text-danger" style="font-size: .9rem">*</span></label>
            <input type="text" name="num_fatura" id="num_fatura" placeholder="Nº" class="form-control">
        </div>
        <div class="col">
            <label for="exampleInputNome1">Nome do Cliente <span class="text-danger" style="font-size: .9rem">*</span></label>
            <select name="cliente" class="form-control">
                <option value="Cliente">Cliente 1</option>
                <option value="Cliente">Cliente 2</option>
                <option value="Cliente">Cliente 3</option>
            </select>
        </div>
        <div class="col-6">
            <label for="exampleInputNome1">Endereço <span class="text-danger" style="font-size: .9rem">*</span></label>
            <input type="text" name="enderesso" placeholder="Enderesso" class="form-control">
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col col-lg-1">
            <label for="exampleInputNome1">ID <span class="text-danger" style="font-size: .9rem">*</span></label>
            <input type="text" name="id" id="id" placeholder="ID" class="form-control">
        </div>
        <div class="col">
            <label for="exampleInputNome1">Produto <span class="text-danger" style="font-size: .9rem">*</span></label>
            <select name="produto" class="form-control">
                <option value="Teste 1">Teste 1</option>
                <option value="Teste2">Teste 2</option>
            </select>
        </div>
        <div class="col col-lg-1">
            <label for="exampleInputNome1">Quant. <span class="text-danger" style="font-size: .9rem">*</span></label>
            <input type="number" name="qtd" placeholder="0" class="form-control">
        </div>
        <div class="col col-lg-2">
            <label for="exampleInputNome1">Preço Unitário <span class="text-danger" style="font-size: .9rem">*</span></label>
            <input type="text" name="precounit" placeholder="0.00" class="form-control">
        </div>
        <div class="col col-lg-2">
            <label for="exampleInputNome1">Preço Total <span class="text-danger" style="font-size: .9rem">*</span></label>
            <input type="text" name="precototal" placeholder="0.00" class="form-control">
        </div>
        <div class="col col-lg-1">
            <label for="exampleInputNome1">opc</label>
            <button type="button" class="btn btn-info" id="btn-add">Adicionar</button>
        </div>
        <div class="col col-lg-1">
            <label for="exampleInputNome1">opc</label>
            <button type="button" class="btn btn-primary" id="btn-update">Atualizar</button>
        </div>
    </div>



</div>


<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Preço Unitário</th>
            <th>Preço Total</th>
            <th width="200px">Operações</th>
        </tr>
    </thead>

    <tbody>

    </tbody>
</table>
<div class="card-footer">
<div class="row">
    <div class="col">

            <button type="button" class="btn btn-primary" id = "btn-gravar">Guardar</button>

    </div>
    <div class="col col-lg-3">

            <input type="text" id="total" name="total" placeholder="0.00" class="form-control" disabled>

    </div>
</div>
