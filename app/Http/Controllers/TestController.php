<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($nome)
    {
        return view('teste/index', ['nome'=>$nome]);
        //return "<html><head><title>Olá</title></head><body> Olá $nome</body><html>";
        //return "olá $nome, Seja bem Vinda!!";
    }

    public function notas()
    {
        $notas = [
            0 => 'anotação 1',
            1 => 'anotação 2',
            2 => 'anotação 3',
            3 => 'anotação 4',
            4 => 'anotação 5',

        ];
        
        return view('teste/notas', compact('notas'));
    }

}
