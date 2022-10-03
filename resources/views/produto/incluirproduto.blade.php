
@extends('layouts.appSis')
@section('body')

@component('componentes.veiculo')

@endcomponent
        <li class="bg_ls"> <a href="/Produto-listar">Ver Todos Produtos</a> </li>  
        <li class="bg_lb"> <a href="#">Alterar dado da Categoria</a> </li>      
        </ul>
    </div>
    </div>
</div>

    <div class="container-fluid"><hr>
        <div class="row-fluid">
            <div class="span12">
             <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
                <h5>Dados do Veículo</h5>  
            </div>
            <div class="widget-content nopadding">
                <form  method="post" action="/incluirproduto" id="form-wizard" class="form-horizontal">
                @csrf
                <div id="form-wizard-1" class="step">
                    <div class="control-group">
                        <label class="control-label">Categoria:</label>
                        <div class="controls">
                            <input id="idCategoria" type="text" class="form-control" placeholder="Categoria" name="idCategoria" value=""  list="tcat"  autocomplete="idCategoria" autofocus required>
                            <datalist id="tcat">
                                @foreach($categoria as $cat)
                                <option value="{{$cat->id}}">{{$cat->nome}}</option>
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                    <input type="hidden" name="idFuncionario" value="{{Auth::user()->id}}">
                    <div class="control-group">                 
                        <label class="control-label">Preço da Compra:</label>
                        <div class="controls">
                            <input id="precoCompra" type="Number" name="precoCompra" placeholder="Preço da Compra" />
                        </div>
                    </div>
                    <div class="control-group">
                        <br><br>
                        <label class="control-label">Preço da venda:</label>
                        <div class="controls">
                            <input id="precoVenda" type="number" name="precoVenda" placeholder="Preço da Venda" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">lucro:</label>
                        <div class="controls">
                            <input id="lucro" type="number" class="form-control" placeholder="Lucro" name="lucro" autocomplete="new-password">
                        </div>
                    </div>  
                    <div class="control-group">
                        <label class="control-label">Nome do Produto:</label>
                        <div class="controls">
                            <input id="nome" type="text" class="form-control" placeholder="Nome de Produto" name="nome" autocomplete="new-password">
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label">COR:</label>
                        <div class="controls">
                            <input id="codigoBarra" type="text" class="form-control" placeholder="Codigo de Barra" name="codigoBarra" autocomplete="new-password">
                        </div>
                    </div> 

                    
            
                    <div class="control-group">                 
                        <label class="control-label">PLACA:</label>
                        <div class="controls">
                            <input id="placa" type="text" name="placa" placeholder="Placa" />
                        </div>
                    </div>
                    <div class="control-group">
                        <br><br>
                        <label class="control-label">Stok mínimo do produto:</label>
                        <div class="controls">
                            <input id="stoqueminimo" type="number" name="stoqueminimo" placeholder="Stok mínimo do produto" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Stok Máximo:</label>
                        <div class="controls">
                            <input id="stoquemaximo" type="number" class="form-control" placeholder="Stoque máximo" name="stoquemaximo" autocomplete="new-password">
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label">Stok:</label>
                        <div class="controls">
                            <input id="stok" type="number" class="form-control" placeholder="stok" name="stok" autocomplete="new-password">
                        </div>
                    </div>  
                    
                    <div class="control-group">
                        <label class="control-label">FOTO:</label>
                        <div class="controls">
                            <input id="foto" type="text" class="form-control" name="foto" autocomplete="new-password">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Marca Da peça:</label>
                        <div class="controls">
                            <input id="marca" type="text" class="form-control" name="marca" autocomplete="new-password">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Localização:</label>
                        <div class="controls">
                            <input id="localizacao" type="text" class="form-control" placeholder="" name="localizacao" autocomplete="new-password">
                        </div>
                    </div>


                    <div class="form-actions">              
                        <!--input id="back" class="btn btn-primary" type="reset" value="Back" /-->
                        <a class="btn btn-primary" href="{{ url('/home') }}">Voltar</a>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Cadastrar') }}
                        </button>

                        <!--input id="next" class="btn btn-primary" type="submit" value="Next" /-->
                        <div id="status"></div>
                    </div>
                <div id="submitted"></div>
                
                </form>             
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
