<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Editar Produto</h1>
<form class="form" action="{{ route('produtos.update', $produto) }}" method="POST">
    @csrf @method('PUT')
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" value="{{ $produto->nome }}"><br>
    <label for="quantidade">Quantidade:</label>
    <input type="number" name="quantidade" id="quantidade" value="{{ $produto->quantidade }}"><br>
    <label for="preco">Preço:</label>
    <input type="text" name="preco"  id= "preco" value="{{ $produto->preco }}"><br>
    <button type="submit">Salvar</button>
    <a href="{{ route('produtos.index') }}">Voltar</a>
</form>

</body>
</html>


