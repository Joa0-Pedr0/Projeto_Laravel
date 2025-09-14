<h1>Novo Produto</h1>
<form action="{{ route('produtos.store') }}" method="POST">
    @csrf
    Nome: <input type="text" name="nome"><br>
    Quantidade: <input type="number" name="quantidade"><br>
    Preço: <input type="text" name="preco"><br>
    <button type="submit">Salvar</button>
</form>
