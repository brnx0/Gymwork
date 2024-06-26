<?php

namespace App\Http\Controllers;

use App\Models\Treino;

use App\Models\Alunos;
use Illuminate\Http\Request;

class TreinoController extends Controller{
    public function show(){
        return view('treino.criarTreino',['queryAluno' => Alunos::select('id','nome')->get()]);
    }

    public function store(Request $request){
        $treino = new Treino;
        $treino->idAluno = $request->idAluno;
        $treino->treinoA = $request->treinoA;
        isset($request->treinoA)?:$treino->treinoA = $request->treinoA;
        isset($request->treinoB)?:$treino->treinoB = $request->treinoB;
        isset($request->treinoC)?:$treino->treinoC = $request->treinoC;
        $treino->save();
        return redirect('/')->with('msg', 'Treino Cadastrado');
    }
}
