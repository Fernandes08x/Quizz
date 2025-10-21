<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerguntaController extends Controller
{
    public function inicio()
    {
        return view('perguntas.inicio');
    }
}
