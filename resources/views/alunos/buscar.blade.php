@extends('layout.main')
@section('title', 'Alunos')
@section('content')


@if (session()->has('msg'))
  <div class="alert alert-success" role="alert">
    {{session('msg')}}
  </div>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th  scope="col" ><h5> Nome </h5></th>
            <th  scope="col"><h5> Tel </h5></th>
            <th  scope="col" ><h5> CEP </h5></th>
            <th  scope="col" ><h5> Ação </h5></th>
        </tr>
        <tbody>
            @foreach ($dados as $key => $value)
            <tr>
                    <td>{{$value->nome}} </td>
                    <td>{{$value->tel}} </td>
                    <td>{{$value->cep}} </td>
                    <td>
                        <button type="button" onclick="openPopUp({{$value->id}})" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button>
                        <button type="button" onclick="openPopUp('{{$value->id}}','{{$value->nome}}')" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalConfirm">Excluir </button>
                    </td>
                        
            </tr>
            @endforeach
        </tbody>
    </thead>

</table>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/buscar/alunos" id="edicao" method="post">
                @csrf
                @method('put')
                <input type="text" id="idEdit" name="idEdit" value="" readonly>
                <label for="name">
                    <input type="text" name="name" placeholder="Nome" value="" onready >
                </label>
                <label for="tel">
                    <input type="text" name="tel" placeholder="Telefone" value=""> 
                </label>
                <label for="cep">
                    <input type="text" name="cep" placeholder="CEP" value=" " >
                </label>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button form="edicao"  type="submit" class="btn btn-primary"  value="Salvar">Salvar  </button>
        </div>
      </div>
    </div>
  </div>

  
  <!-- Modal Delete-->
  <div class="modal fade" id="modalConfirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Deseja excluir ?</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="delete" action="/delete/aluno" method="POST">
                @csrf
                @method('DELETE')
                <input type="text" id="idEditDel" name="idEdit" value="" hidden readonly>
               <p id="nomeDel"></p>
            </form> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" form="delete" class="btn btn-primary">Confirmar</button>
        </div>
      </div>
    </div>
  </div>
 

    
@endsection
