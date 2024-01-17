<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $nome = "Daniel";
    $idade = 24;


    return view('welcome',
    [
        'nome' => $nome,
        'idade' => $idade,

    ]);
});

Route::get('/contatos', function () {
    return view('contact');
});


Route::get('/produtos', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});


Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});
