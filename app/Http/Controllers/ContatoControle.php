<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoControle extends Controller
{
    //
    public function index(Request $req) {
        //return view("contato");
        //return "Estou no controle !!";
        return 'nome:'.$req['nome'].'<br>senha:'.$req['senha'];
    }
}
