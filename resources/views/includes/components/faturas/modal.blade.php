<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="bookForm" name="bookForm" class="form-horizontal">
                   <input type="hidden" name="book_id" id="book_id">
                   <input type="hidden" name="produto_id" id="produto_id">
                   <input type="hidden" name="venda_id" id="venda_id" value="{{$venda->id}}">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">ID</label>
                        <div class="col-sm-12">
                            <input type="text" name="num_item" id="id_linha" placeholder="ID" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Produtos</label>
                        <div class="col-sm-12">
                            <select name="produto" class="form-control" id="produto">
                                <option selected>Selecione um produto</option>
                                @foreach ($produtos as $produto)
                                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Quantidade</label>
                        <div class="col-sm-12">
                            <input type="number" name="qtd" placeholder="0" id="qtd" class="form-control" required >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Preço Unitário</label>
                        <div class="col-sm-12">
                            <input type="text" name="preco_unit" id="precoUnit" placeholder="0.00" class="form-control" required disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Preço Total</label>
                        <div class="col-sm-12">
                            <input type="text" name="preco_total" id="precoTotal" placeholder="0.00" class="form-control" disabled>
                        </div>
                    </div>

                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
