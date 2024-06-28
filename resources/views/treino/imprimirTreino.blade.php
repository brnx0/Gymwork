
<body>
    <table  class="table-primary" style="font-size: 8px">
        <thead>
            <tr>
                <th>Exercicio</th>
                <th>Carga</th>
                <th>Repetição</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($treino as $exercicios)
                @foreach ($exercicios as $exercicio)
                    <tr>
                        <td>{{$exercicio}}</td>
                        <td></td>
                        <td></td>
                    </tr>
                  
                @endforeach
            @endforeach
          
            
    
        </tbody>
    </table>
</body>
    

