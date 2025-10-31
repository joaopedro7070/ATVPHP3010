<!DOCTYPE html>
<html>
<head>
    <title>Categorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Minha Loja</a>
            <div class="navbar-nav">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
                <a class="nav-link" href="{{ route('produtos.index') }}">Produtos</a>
                <a class="nav-link active" href="{{ route('categorias.index') }}">Categorias</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Cadastro de Categorias</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            <div class="col-md-6">
                <h3>Nova Categoria</h3>
                <form method="POST" action="{{ route('categorias.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição:</label>
                        <textarea class="form-control" id="descricao" name="descricao"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </form>
            </div>

            <div class="col-md-6">
                <h3>Lista de Categorias</h3>
                @if($categorias->count() > 0)
                    <ul class="list-group">
                        @foreach($categorias as $categoria)
                            <li class="list-group-item">
                                <strong>{{ $categoria->nome }}</strong><br>
                                {{ $categoria->descricao }}
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>Nenhuma categoria cadastrada.</p>
                @endif
            </div>
        </div>
    </div>
</body>
</html>