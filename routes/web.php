<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/cadastro/alunos', [AlunoController::class, 'index']);
Route::get('/buscar/alunos{id?}', [AlunoController::class, 'read']);
Route::put('/buscar/alunos', [AlunoController::class, 'update']);
Route::delete('/delete/aluno', [AlunoController::class, 'delete']);

Route::post('/cadastro/alunos', [AlunoController::class, 'store']);
