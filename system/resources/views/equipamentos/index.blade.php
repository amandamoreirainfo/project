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
                <td>Editar</td>
                <td>Deletar</td>
            </tr>   
        </thead>

        <tbody>
        @foreach($equipamentos as $equipamento)
            <tr>
                <td>{{ $equipamento->name }}</td>
                <td>{{ $equipamento->amount }}</td>
                <td><a href="{{ route('equipamentos.edit', $equipamento->id) }}" class="btn">Editar</a></td>
                <td>
                    <form action="{{ route('equipamentos.destroy', $equipamento->id) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir este item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn">Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


</body>
</html>