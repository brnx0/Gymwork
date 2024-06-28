@extends('layout.main')
@section('title', 'Cadastro - Treino')
@section('content')
    <form action="/treino" method="post">@csrf
        <div>
            <label for="aluno"><h5>Aluno:</h5></label>
            <select name="idAluno" id="aluno" class="form-select">
                @foreach ($queryAluno as $value)
                    <option value="{{$value->id}}"> {{$value->nome}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <h5>Treinos:</h5>
            @include('treino.treinoA')
        </div>
        <div>
            <input type="submit" value="Salvar" class="btn btn-success">
        </div>
       
    </form>

@endsection