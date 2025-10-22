<?php

namespace App\Http\Controllers;

use App\Models\Pergunta;
use Illuminate\Http\Request;

class PerguntaController extends Controller
{
    // Mostra a página inicial de boas vindas ao quizz
    public function inicio()
    {
        $total_perguntas = Pergunta::count();

        return view(
            'perguntas.inicio',
            compact('total_perguntas')
        );
    }

    // Mostra a página para responder as perguntas do quizz
    public function responder()
    {
        // Pega todas as perguntas do banco de dados
        $perguntas = Pergunta::all();

        // Retorna a view com as perguntas
        return view(
            'perguntas.responder',
            compact('perguntas')
        );
    }
}
