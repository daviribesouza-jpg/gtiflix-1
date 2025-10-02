<?php

use App\Models\Ator;
use App\Models\Genero;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Guilherme', function() {
    return 'olá Guilherme';
});

Route::get('/filmes/{filme}', function($filme) {
    return 'Acessando dados do filme: '.$filme;
});

Route::view('/conheca','sobre');

Route::get('/generos', function() {
    $minhaVariavel = Genero::all();
    dd($minhaVariavel);
});

Route::get('/atores', function() {
    $minhaVariavel = Ator::all();
    dd($minhaVariavel);
});