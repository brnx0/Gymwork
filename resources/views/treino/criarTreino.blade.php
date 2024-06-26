@extends('layout.main')
@section('title', 'Cadastro - Treino')
@section('content')
    <form action="/treino" method="post">@csrf
        <div>
            <label for="aluno">Aluno:</label>
            <select name="idAluno" id="aluno" class="form-select">
                @foreach ($queryAluno as $value)
                    <option value="{{$value->id}}"> {{$value->nome}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <P>Treinos:</P>
            @include('treino.treinoA')
        </div>
       <input type="submit" value="Salvar">
    </form>

@endsection