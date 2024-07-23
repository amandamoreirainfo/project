<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipamentos</title>
</head>
<body>

    <h2>Equipamentos</h2>

    <div class="alert alert-success">
        {{ session('success') }}
    </div>

    <table>
        <thead>
            <tr>
                <td>Nome</td>
                <td>Quantidade</td>
            </tr>   
        </thead>

        <tbody>
        @foreach($equipamentos as $equipamento)
            <tr>
                <td>{{ $equipamento->name }}</td>
                <td>{{ $equipamento->amount }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>


</body>
</html>