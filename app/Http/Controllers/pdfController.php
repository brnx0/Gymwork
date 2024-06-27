<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;

class pdfController extends Controller{
    
    public  function pdf($dados){

    $gerarPdf = Pdf::loadView('treino.imprimirTreino', ['dados' => $dados]);
    $gerarPdf->setPaper('A8');
    $gerarPdf->render();
    return $gerarPdf->stream();
    
    }
    }
