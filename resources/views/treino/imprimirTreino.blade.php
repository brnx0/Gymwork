<html>
<head>
    <title>Impressão</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="{{ public_path('css/pdf.css') }}" type="text/css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <style>
       
    </style>
    <header>
        <h6>Academia G-Fit</h6>
        <p>Ficha de treino</p>
    </header>
    <table class="table" style="font-size: 6px">
        <thead >
            <tr >
                <th id="indice" scope="col">Exercicio</th>
                <th id="indice" scope="col" >Carga</th>
                <th id="indice" scope="col" >Repetição</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($treino as $exercicios)
                @foreach ($exercicios as $exercicio)
                    <tr>
                        <td class="valores">{{$exercicio}}</td>
                        <td class="valores">8/10</td>
                        <td class="valores">3/12</td>
                    </tr>
                  
                @endforeach
            @endforeach
          
            
    
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

<!DOCTYPE html>
</body>
</html>

