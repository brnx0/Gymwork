@extends('layout.main')
@section('title', 'Cadastro - Alunos')
@section('content')
    
   
        <form action="/cadastro/alunos" method="post">
            @csrf
            
            <label for="name">
                <input type="text" name="name" placeholder="Nome" value="" >
            </label>
            <label for="tel">
                <input type="text" name="tel" placeholder="Telefone" value=""  > 
            </label>
            <label for="cep">
                <input type="text" name="cep" placeholder="CEP" value=" " >
            </label>
        
            <input type="submit" value="Salvar">
        </form>
       
      
            
        
    
    @endsection