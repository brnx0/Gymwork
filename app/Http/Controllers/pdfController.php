<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;

class pdfController extends Controller{
    
    
    public  function pdf($dados){
        $treino = $dados;
        $gerarPdf = Pdf::loadView('treino.imprimirTreino',compact('treino'));
        $gerarPdf->setPaper('A4');
        $gerarPdf->render();
        return $gerarPdf->stream("Nome.pdf");
    }
}