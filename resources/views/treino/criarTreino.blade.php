@extends('layout.main')
@section('title', 'Cadastro - Treino')
@section('content')
    <form action="/treino" method="post">@csrf
        <div>
            <label for="aluno">Aluno:</label>
            <select name="aluno" id="aluno" class="form-select">
                @foreach ($queryAluno as $value)
                    <option value="{{$value->id}}"> {{$value->nome}}</option>
                @endforeach
            </select>
        </div>
       @include('treino.treinoA')
    </form>

@endsection