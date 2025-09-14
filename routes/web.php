<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProdutoController;

Route::resource('produtos', ProdutoController::class);
