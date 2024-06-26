<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use Illuminate\Http\Request;

class TreinoController extends Controller{
    public function show(){
        
        $query = Alunos::select('id','nome')->get();
        
        return view('treino.criarTreino',['queryAluno' => $query]);
    }

    public function store(){
        return redirect('/')->with('msg', 'Treino Cadastrado');
    }
}
