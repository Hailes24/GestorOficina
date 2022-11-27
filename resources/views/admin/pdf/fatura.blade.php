<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Generate PDF Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</p>

    <table class="table table-bordered">
        <tr>
            <th>Nº</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Preço Total</th>
        </tr>
        @foreach($linhas as $linha)
        <tr>
            <td>{{ $linha->num_item }}</td>
            <td>{{ $linha->nome }}</td>
            <td>{{ $linha->qtd }}</td>
            <td>{{ $linha->preco_unit }}</td>
            <td>{{ $linha->preco_total }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>
