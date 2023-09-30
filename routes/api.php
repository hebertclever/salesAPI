<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Rota padrão para usuários autenticados
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rotas para Vendas
Route::resource('sales', 'API\SaleController');

// Rotas para Clientes
Route::resource('clients', 'API\ClientController');

// Rotas para Detalhes de Venda
Route::resource('sale-details', 'API\SaleDetailController');

// Rotas para Trabalhadores
Route::resource('workers', 'API\WorkerController');

// Rotas para Artigos
Route::resource('articles', 'API\ArticleController');

// Rotas para Detalhes de Compra
Route::resource('purchase-details', 'API\PurchaseDetailController');
