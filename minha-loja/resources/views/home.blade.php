<!DOCTYPE html>
<html>
<head>
    <title>Minha Loja - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Minha Loja</a>
            <div class="navbar-nav">
                <a class="nav-link active" href="{{ url('/') }}">Home</a>
                <a class="nav-link" href="{{ route('produtos.index') }}">Produtos</a>
                <a class="nav-link" href="{{ route('categorias.index') }}">Categorias</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1>Bem-vindo à Minha Loja</h1>
                <p class="lead">Sistema de gerenciamento de produtos e categorias</p>
                
                <div class="row mt-4">
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">📦 Produtos</h5>
                                <p class="card-text">Cadastre e gerencie seus produtos</p>
                                <a href="{{ route('produtos.index') }}" class="btn btn-primary">
                                    Gerenciar Produtos
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">📋 Categorias</h5>
                                <p class="card-text">Cadastre e gerencie suas categorias</p>
                                <a href="{{ route('categorias.index') }}" class="btn btn-success">
                                    Gerenciar Categorias
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <h3>Funcionalidades:</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled text-start">
                                <li>✅ Cadastro de produtos</li>
                                <li>✅ Listagem de produtos</li>
                                <li>✅ Validação de dados</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled text-start">
                                <li>✅ Cadastro de categorias</li>
                                <li>✅ Listagem de categorias</li>
                                <li>✅ Mensagens de feedback</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>