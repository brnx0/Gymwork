<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
    <header>
        <p>Academia G-Fit</p>
        <p>Ficha de treino</p>
    </header>
  
    <table  class="table table-striped" style="font-size: 6px">
        <thead>
            <tr>
                <th scope="col">Exercicio</th>
                <th scope="col" >Carga</th>
                <th scope="col" >Repetição</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($treino as $exercicios)
                @foreach ($exercicios as $exercicio)
                    <tr>
                        <td>{{$exercicio}}</td>
                        <td>8/10</td>
                        <td>3/12</td>
                    </tr>
                  
                @endforeach
            @endforeach
          
            
    
        </tbody>
    </table>
</body>
    

