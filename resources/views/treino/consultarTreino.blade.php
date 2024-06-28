<form action="/consultar" method="POST">@csrf
    <input type="search" name="consultar" id="" placeholder="Digite o seu CPF">
</form>

@if (isset($queryTreino))



    @for ($i = 1; $i <= 3 ; $i++)
        <button>
            <a href="http://localhost:8000/treino/imprimir/{{$queryTreino["idAluno"]}}/{{$i}}" target="_blank" rel="noopener noreferrer">{{$i}}</a>
        </button>
    @endfor 
        
@endif
<table>
    <thead>
        <tr>
            <td>Exercicios</td>
        </tr>
    </thead>
  
    <tbody>
       
        {{-- @foreach ( $queryTreino; as $treino => $exercicios) 
           "Exercícios do {{$treino}}:<br>";
            @if (is_array($exercicios)) 
                @foreach ($exercicios as $exercicio) 
                     {{$exercicio}} . "<br>";
                @endforeach
            @else 
                "Nenhum exercício encontrado para $treino<br>";

                
            @endif
        @endforeach
        --}}
        
    </tbody>
    
</table>
   
    



