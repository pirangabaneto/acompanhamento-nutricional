<?php

namespace App\Http\Controllers;

use App\Models\Refeicao;
use Illuminate\Http\Request;

class refeicaoController extends Controller
{

    public function prepararCadastro(){
        return view("adicionar-refeicoes");
    }

    public function cadastrar(Request $request){
        $dados = $request->all();
        $dados['data-hora'] = (date('Y-m-d', strtotime($dados['data-hora'])));
        Refeicao::create($dados);
        return redirect()->back()->with('message','Refeicao Adicionada');
    }
}
