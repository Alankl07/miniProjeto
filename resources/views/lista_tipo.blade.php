<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/stylo.css')}}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <a class="stil" href="/home">Pagina Inicial</a>
    <div>
        <table class="table table-striped">
            <thead>
                <th scope="col">Nome</th>
            </thead>
            <tbody>
                @foreach($tipos as $tipo)
                    <tr>       
                        <td>{{$tipo->nome}}</td>
                        <td>
                        <form action = "{{route('tipos.destroy', $tipo)}}" method = "POST">
                            @csrf
                            <a class = "btn btn-success" href="{{route('tipos.edit', $tipo)}}">Editar</a>
                            @method('DELETE')
                            <button type = "submit" class = "btn btn-danger">Excluir</button>
                        </form>  
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>