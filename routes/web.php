<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\pdfController;
use App\Http\Controllers\TreinoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->middleware('auth');;
Route::get('/cadastro/alunos', [AlunoController::class, 'index'])->middleware('auth');
Route::get('/buscar/alunos{id?}', [AlunoController::class, 'read'])->middleware('auth');
Route::put('/buscar/alunos', [AlunoController::class, 'update'])->middleware('auth');
Route::delete('/delete/aluno', [AlunoController::class, 'delete'])->middleware('auth');
Route::post('/cadastro/alunos', [AlunoController::class, 'store'])->middleware('auth');

Route::get('/treino', [TreinoController::class, 'show'])->middleware('auth');
Route::post('/treino', [TreinoController::class, 'store'])->middleware('auth');

Route::get('/consultar', function () {return view('treino.consultarTreino');});
Route::post('/consultar', [TreinoController::class, 'consultarTreino']);

Route::get('/treino/imprimir/{aluno}/{treino}', [TreinoController::class, 'imprimirTreino']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
