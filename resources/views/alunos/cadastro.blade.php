@extends('layout.main')
@section('title', 'Cadastro - Alunos')
@section('content')
    <form action="/cadastro/alunos" method="post" class="container-full">@csrf  
        <div class="g-2 align-items-center">
            <div class="col-auto">
                <label for="dadosPrincipais" class="col-form-label">Nome:</label>
            </div>
            <div class="col-5">
                <input type="text" id="dadosPrincipais" class="form-control" name="nome">
            </div>

            <div class="col-auto">CPF:</div>
            <div class="col-2">
                <input type="text" id="dadosPrincipais" class="form-control" name="cpf">
            </div>

            <div class="col-auto"> Telefone:</div>
            <div class="col-2 ">
                <input type="text" id="dadosPrincipais" class="form-control" name="tel">
            </div>
            <div class="col-auto"> CEP:
                
            </div>
        </div>
        <div class="row g-2 align-items-center">
            <div class="col-auto">
                <label for="logradouro" class="col-form-label"></label>
            </div>
            <div class="col-auto">
                <input type="text" id="logradouro" class="form-control" name="cep" onblur="buscaCep()">
            </div>

            <div class="col-auto">Logradouro:</div>
            <div class="col-auto">
                <input type="text" id="logradouro" class="form-control" name="logradouro"disabled readonly>
            </div>

            <div class="col-auto">Bairro:</div>
            <div class="col-auto">
                <input type="text" id="logradouro" class="form-control" name="bairro" disabled readonly>
            </div>
            <div class="col-auto">Nº</div>
             <div class="col-1">
                <input type="number" id="logradouro" class="form-control" name="numero">
            </div>
            <p >Tipo de Acesso:</p>
            <div class="form-check">
                
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="Plano" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Plano Convencional
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="gympass">
                <label class="form-check-label" for="exampleRadios2">
                  GymPass
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="totalPass" >
                <label class="form-check-label" for="exampleRadios3">
                    TotalPass
                </label>
              </div>
              <div>

              </div>
              <div>
                <input type="submit" value="Salvar" class="btn btn-success">
              </div>
            
        </form>
       
      
            
        
    
    @endsection