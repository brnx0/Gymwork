<?php

namespace App\Http\Controllers;

use App\Models\Treino;
use App\Http\Controllers\pdfController;
use App\Models\Alunos;
use Barryvdh\DomPDF\Facade\Pdf;
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
    public function buscarAluno($cpf){
       $query =  Alunos::select('id')->where('cpf', $cpf)->get();
       return $query;
    }

    public function consultarTreino(Request $request){
        $cpfAluno = TreinoController::buscarAluno($request->consultar);
        $queryTreino = Treino::select('treinoA','treinoB','treinoC')->where('idAluno', $cpfAluno[0]->id)->get();
        return view('treino.consultarTreino', ['queryTreino' => json_decode($queryTreino[0],true)]);
    }
    public function imprimirTreino($iDaluno, $treino){
        $aluno = TreinoController::buscarAluno($iDaluno);
        // $treino  = Treino::select('treinoA')->where('idAluno', $aluno->id)->get();
        return redirect('/')->with('msg',$aluno);
        
        // $gerarPDF = new pdfController();
        // $gerarPDF->pdf($treino);
    }

}
