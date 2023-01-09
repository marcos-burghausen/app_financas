<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DespesasController extends Controller
{
    public function listarDespesas()
    {
        $despesas = [
            'luz',
            'agua',
            'internet',
            'telefone'
        ];
        return view('despesas.despesas',)->with('despesas', $despesas);
    }

    public function adicionarDespesa()
    {
        return view('despesas.adicionar');
    }
}
