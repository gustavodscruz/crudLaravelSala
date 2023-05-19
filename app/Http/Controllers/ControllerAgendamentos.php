<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\servicos;

class ControllerAgendamentos extends Controller
{
    //

    public function store(Request $request){

        $control = new servicos();

        $control->nome = $request->txtNome;
        $control->telefone = $request->txtTelefone;
        $control->origem = $request->txtOrigem;
        $control->data_contato = $request->dateContato;
        $control->observacao = $request->txtObservacao;

        $control->save();

        return redirect('/');

    }
}
