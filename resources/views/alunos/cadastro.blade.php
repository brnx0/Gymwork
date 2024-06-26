@extends('layout.main')
@section('title', 'Cadastro - Alunos')
@section('content')
    <form action="/cadastro/alunos" method="post" class="container-full">@csrf  
        <div class="row g-2 align-items-center">
            <div class="col-auto">
                <label for="nomeAluno" class="col-form-label">Nome:</label>
            </div>
            <div class="col-auto">
                <input type="text" id="nomeAluno" class="form-control" name="nome">
            </div>
            <div class="col-auto">
                <label for="telAluno" class="col-form-label">Telefone:</label>
            </div>
            <div class="col-auto">
                <input type="text" id="telAluno" class="form-control" name="tel">
            </div>
        </div>
        <div class="row g-2 align-items-center">
            <div class="col-auto">
                <label for="logradouro" class="col-form-label">CEP:</label>
            </div>
            <div class="col-auto">
                <input type="text" id="logradouro" class="form-control" name="cep" onblur="buscaCep()">
            </div>
            <div class="col-auto">
                Logradouro:
            </div>
            <div class="col-auto">
                <input type="text" id="logradouro" class="form-control" name="logradouro"disabled readonly>
            </div>
            <div class="col-auto">
               Bairro:
            </div>
            <div class="col-auto">
                <input type="text" id="logradouro" class="form-control" name="bairro" disabled readonly>
            </div>
            <div class="col-auto">
                Nº
            </div>
             <div class="col-auto">
                <input type="number" id="logradouro" class="form-control" name="numero">
            </div>
        </div>
        
        


        
            <input type="submit" value="Salvar">
        </form>
       
      
            
        
    
    @endsection