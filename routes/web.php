<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;


Route::resource('produtos', ProdutoController::class);
Route::resource('categorias', CategoriaController::class);

