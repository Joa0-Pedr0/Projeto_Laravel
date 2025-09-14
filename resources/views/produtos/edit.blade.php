<h1>Editar Produto</h1>
<form action="{{ route('produtos.update', $produto) }}" method="POST">
    @csrf @method('PUT')
    Nome: <input type="text" name="nome" value="{{ $produto->nome }}"><br>
    Quantidade: <input type="number" name="quantidade" value="{{ $produto->quantidade }}"><br>
    Preço: <input type="text" name="preco" value="{{ $produto->preco }}"><br>
    <button type="submit">Salvar</button>
</form>
