<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Categorias</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-4xl mx-auto mt-10 bg-white shadow p-6 rounded">
    <h1 class="text-2xl font-bold mb-4">Categorias</h1>



    <a href="{{ route('categorias.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Nova Categoria
    </a>
        <a href="{{ route('produtos.index') }}" class="text-blue-600 hover:underline">Voltar</a>
    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mt-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full mt-6 border">
        <thead>
        <tr class="bg-gray-200">
            <th class="p-2 border">ID</th>
            <th class="p-2 border">Nome</th>
            <th class="p-2 border">Ações</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($categorias as $categoria)
            <tr>
                <td class="border p-2">{{ $categoria->id }}</td>
                <td class="border p-2">{{ $categoria->nome }}</td>
                <td class="border p-2 text-center space-x-2">

                    <a href="{{ route('categorias.edit', $categoria) }}"
                       class="text-blue-600 hover:underline">
                        Editar
                    </a>

                    <form action="{{ route('categorias.destroy', $categoria) }}"
                          method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600 hover:underline"
                                onclick="return confirm('Excluir categoria?')">
                            Excluir
                        </button>
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
