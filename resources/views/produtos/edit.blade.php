<h1>Editar Produto</h1>
<form action="{{ route('produtos.update', $produto) }}" method="POST">
    @csrf @method('PUT')
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" value="{{ $produto->nome }}"><br>
    <label for="quantidade">Quantidade:</label>
    <input type="number" name="quantidade" id="quantidade" value="{{ $produto->quantidade }}"><br>
    <label for="preco">Preço:</label>
    <input type="text" name="preco"  id= "preco" value="{{ $produto->preco }}"><br>
    <button type="submit">Salvar</button>
</form>
