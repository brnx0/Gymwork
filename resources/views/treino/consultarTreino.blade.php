<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/popup.js"></script>
</head>
<body id="bodyTreino" onload="nomeTreino()">
    @if (session()->has('msg'))
        <div class="alert alert-danger" role="alert">
            {{session('msg')}}
        </div>
    @endif
    <form action="/consultar" id="formBuscarTreino" method="POST" class="d-flex">@csrf
        <input type="search" name="consultar" id="buscar" placeholder="DIGITE O SEU CPF" class="form-control me-2" aria-label="Search">
    </form>
    
    @if (isset($queryTreino))
    @for ($i = 1; $i <= 3 ; $i++)
        <button class="btn btn-success" onload="nomeTreino()" id="btnTreino" >
            <a href="http://localhost:8000/treino/imprimir/{{$queryTreino["idAluno"]}}/{{$i}}" target="_blank" name="treino" rel="noopener noreferrer">{{$i}}</a>
        </button>
    @endfor     
@endif
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    



