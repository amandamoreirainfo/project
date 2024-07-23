<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar - Equipamentos</title>
</head>
<body>

    <form action="{{ route('equipamentos.store') }}" method="POST">
        @csrf 
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name">

        <label for="amount">Quantidade:</label>
        <input type="text" name="amount" id="amount">

        <input type="submit" value="Salvar">
    </form>
    
</body>
</html>