<!DOCTYPE html>
<html>
<head>
    <title>Minha Loja - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h1>Bem-vindo à Minha Loja</h1>
                <p class="lead">Sistema de gerenciamento de produtos e categorias</p>
                
                <div class="d-grid gap-3 mt-4">
                    <a href="{{ route('produtos.index') }}" class="btn btn-primary btn-lg">
                        📦 Gerenciar Produtos
                    </a>
                    
                    <a href="{{ route('categorias.index') }}" class="btn btn-success btn-lg">
                        📋 Gerenciar Categorias
                    </a>
                </div>

                <div class="mt-5">
                    <h3>Funcionalidades:</h3>
                    <ul class="list-unstyled">
                        <li>✅ Cadastro de produtos</li>
                        <li>✅ Listagem de produtos</li>
                        <li>✅ Cadastro de categorias</li>
                        <li>✅ Listagem de categorias</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>