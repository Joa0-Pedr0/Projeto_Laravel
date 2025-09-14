<h1>Estoque</h1>
<a href="{{ route('produtos.create') }}">Novo Produto</a>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th><th>Nome</th><th>Qtd</th><th>Preço</th><th>Ações</th>
    </tr>
    @foreach($produtos as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->nome }}</td>
        <td>{{ $p->quantidade }}</td>
        <td>R$ {{ $p->preco }}</td>
        <td>
            <a href="{{ route('produtos.edit', $p) }}">Editar</a>
            <form action="{{ route('produtos.destroy', $p) }}" method="POST" style="display:inline">
                @csrf @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
