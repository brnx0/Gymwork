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
        try {
            $cpfAluno = TreinoController::buscarAluno($request->consultar);
            $queryTreino = Treino::select('idTreinos', 'idAluno')->where('idAluno', $cpfAluno[0]->id)->get();
            return view('treino.consultarTreino', ['queryTreino' => json_decode($queryTreino[0],true)]);
        } catch (\Throwable $th) {
            return redirect('/consultar')->with('msg', 'Dados Invalido. Tente novamente ou entre em contato com algum instrutor.');
        }
        
    }
    public function imprimirTreino($iDaluno, $treino){
        try {
            if($treino == 1){
                $treino = "treinoA"; 
            }elseif($treino == 2){
                $treino = "treinoB"; 
            }elseif($treino == 3 ){
                $treino = "treinoC"; 
            }
            else{
                return redirect('/')->with('msg', 'Treino Ainda não cadastrado');
            }
            $treino  = Treino::select($treino)->where('idAluno', $iDaluno)->get();
            $treino = json_decode($treino[0], true);
            $pdf = new pdfController;
            return $pdf->pdf($treino);
        }catch (\Throwable $th) {
            return redirect('/consultar')->with('msg', 'Erro ao Imprimir. Contate um instrutor');
        }
        

    }
}
