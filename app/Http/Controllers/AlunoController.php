<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index(){
        return view('alunos.cadastro');
    }

    public function store(Request $request){
        $aluno = new Alunos();
        $aluno->nome = $request->name;
        $aluno->tel = $request->tel;
        $aluno->cep = $request->cep;
        $aluno->save();
        return redirect('/')->with('msg', 'Aluno Cadastrado Com Sucesso');
    }
    public function read(){
        return view('alunos.buscar',['dados' => Alunos::all()]);
    }

    public function update(Request $request){
         Alunos::where('id', $request->idEdit)->update(['nome'=> $request->name, 'tel' => $request->tel, 'cep' => $request->cep]);
        return redirect('/buscar/alunos')->with('msg', 'Cadastro Atualizado');
    }

    public function delete(Request $request){
        Alunos::where('id', $request->idEdit)->delete();
        return redirect('/buscar/alunos')->with('msg', 'Cadastro removido com sucesso');
    }

}
