<!DOCTYPE html>
<html>
<head>
    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Minha Loja</a>
            <div class="navbar-nav">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
                <a class="nav-link active" href="{{ route('produtos.index') }}">Produtos</a>
                <a class="nav-link" href="{{ route('categorias.index') }}">Categorias</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Cadastro de Produtos</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            <div class="col-md-6">
                <h3>Novo Produto</h3>
                <form method="POST" action="{{ route('produtos.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição:</label>
                        <textarea class="form-control" id="descricao" name="descricao"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="preco" class="form-label">Preço:</label>
                        <input type="number" step="0.01" class="form-control" id="preco" name="preco" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>

            <div class="col-md-6">
                <h3>Lista de Produtos</h3>
                @if($produtos->count() > 0)
                    <ul class="list-group">
                        @foreach($produtos as $produto)
                            <li class="list-group-item">
                                <strong>{{ $produto->nome }}</strong><br>
                                {{ $produto->descricao }}<br>
                                R$ {{ number_format($produto->preco, 2, ',', '.') }}
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>Nenhum produto cadastrado.</p>
                @endif
            </div>
        </div>
    </div>
</body>
</html>