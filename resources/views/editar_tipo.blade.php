<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/stylo.css')}}" rel="stylesheet">
    <title>Editar Tipo</title>
</head>
<body id="body">
      <a class="stil" href="/home">Pagina Inicial</a>
    <form id="divm" action="{{route('tipos.update', $tipo)}}" method="POST">
        @csrf
        @method('PUT')
        <div id="divlt">    
        </div>
            <h1>Editar tipo de Tarefa</h1>
            <label for="nome">Nome da Tarefa</label>
            <input class="form-control" type="text" id="nome" name="nome" value="{{$tipo->nome}}">
        <div id="btntip">
            <button class="btn btn-primary" >Editar</button>
        </div>
    </form>
</body>
</html>