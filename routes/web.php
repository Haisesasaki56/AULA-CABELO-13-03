<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/salvar', function(){
    dd($_POST);
    return "dados recebidos." ; 
});

Route::get('/view_contatos', function (){
    return view ('view_contatos');
});

Route::post('/contato', ['uses'=>'App\Http\Controllers\ContatoControle@index'] );
