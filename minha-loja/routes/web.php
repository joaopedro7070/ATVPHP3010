<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;

// Página inicial SIMPLES - sem view
Route::get('/', function () {
    return '
    <!DOCTYPE html>
    <html>
    <head>
        <title>Minha Loja</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5 text-center">
            <h1>Minha Loja</h1>
            <p class="lead">Sistema de gerenciamento</p>
            
            <div class="mt-4">
                <a href="/produtos" class="btn btn-primary btn-lg">📦 Produtos</a>
                <a href="/categorias" class="btn btn-success btn-lg">📋 Categorias</a>
            </div>
        </div>
    </body>
    </html>
    ';
});

// Rotas dos Produtos
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::post('/produtos', [ProdutoController::class, 'store'])->name('produtos.store');

// Rotas das Categorias
Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');