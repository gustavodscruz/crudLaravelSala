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
    public function funConsultar(){
        $consulta = new servicos();
        return view('/consultar', ['agendas' => $consulta->all()]);

    }
    public function DELETE($id){
        servicos::findOrFail($id)->delete();
        return redirect('/consultar');

    }
    public function Editar($id){
        $consulta  = servicos::findOrFail($id);
        return view('editar', ['agendas' => $consulta]);
    }
}
