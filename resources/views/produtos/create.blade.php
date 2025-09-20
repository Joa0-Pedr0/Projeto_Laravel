<h1>Novo Produto</h1>
<form action="{{ route('produtos.store') }}" method="POST">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome"><br>

    <label for="quantiddade">Quantidade:</label>
    <input type="number" id="quantidade" name="quantidade"><br>
    
    <label for="preco">Preço:</label>
    <input type="text" id="preco" name="preco"><br>
    <button type="submit">Cadastrar</button>
</form>
