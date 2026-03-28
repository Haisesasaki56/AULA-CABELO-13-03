<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoControle extends Controller
{
    public function salvarDados(Request $req) {
        $contatos = [
            ["nome"=> $req['nome'], "cel"=> $req['cel']]  
        ];
        return view("contatos.index",compact('contatos'));
    }
    public function index() {
$contatos = [
[ "nome"=>"maria", "cel"=>"998881121"],
[ "nome"=>"joao", "cel"=>"977881111"] ];
return view("contatos.index",
compact('contatos'));
    }
}
