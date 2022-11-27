<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="card">
        <div class="card-header">
            FATURA Nº
            <strong>{{ '00' . $venda->id . '/' . date('Y') }}</strong>
            <span class="float-right"> <strong>Estado:</strong> Pago</span>
        </div>
        <div class="card-body">

            <div class="row mb-4">
                <div class="col-sm-6">
                    <h6 class="mb-3">De:</h6>
                    <div>
                        <strong>Gestor de Oficina</strong>
                    </div>
                    <div>Campus Universitário</div>
                    <div>Agostinho Neto</div>
                    <div>Email: uan@uan.com</div>
                    <div>Telefone: 222 345 678</div>
                </div>

                <div class="col-sm-6">
                    <h6 class="mb-3">Para:</h6>
                    <div>
                        <strong>{{ $cliente->nome }}</strong>
                    </div>
                    <div>{{ $venda->endereco }}</div>
                    <div>Luanda</div>
                    <div>{{ $cliente->telemovel }}</div>
                    <div>{{ $cliente->email }}</div>
                </div>
            </div>

            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="center">#</th>
                            <th>Produto</th>
                            <th class="center">Quantitade</th>
                            <th class="right">Preço Unitário</th>
                            <th class="right">Total</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($linhas as $linha)
                        <tr>
                            <td class="center">{{ $linha->num_item }}</td>
                            <td class="left">{{ $linha->nome }}</td>
                            <td class="center">{{ $linha->qtd }}</td>
                            <td class="right">{{ $linha->preco_unit }}</td>
                            <td class="right">{{ $linha->preco_total }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-5">

                </div>

                <div class="col-lg-4 col-sm-5 ml-auto">
                    <table class="table table-clear">
                        <tbody>
                            <tr>
                                <td class="left">
                                    <strong>Subtotal</strong>
                                </td>
                                <td class="right">AOA {{ $total }}</td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong>Desconto (00%)</strong>
                                </td>
                                <td class="right">AOA 00</td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong>IVA (14%)</strong>
                                </td>
                                <td class="right">AOA {{ $valorIVA }}</td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong>Total</strong>
                                </td>
                                <td class="right">
                                    <strong>AOA {{ $totalCount }}</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>
    </div>
</body>

</html>
