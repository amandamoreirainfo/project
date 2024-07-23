<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar - Equipamentos</title>
</head>
<body>

    <form action="{{ route('equipamentos.update', $equipamento->id) }}" method="POST">
        @csrf 
        @method('PUT')
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" value="{{ $equipamento->name }}">

        <label for="amount">Quantidade:</label>
        <input type="text" name="amount" id="amount" value="{{ $equipamento->amount }}">

        <input type="submit" value="Atualizar">
    </form>
    
</body>
</html>