<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/stylo.css')}}" rel="stylesheet">

    <title>Tipo de Tarefa</title>
</head>
<body id="body">
<a class="stil" href="/home">Pagina Inicial</a>
    <div id="divlt">

    </div>
    <form id="divm" action="{{route('tipos.store')}}" method="POST">
        @csrf
        <h1>Tipo de Tarefa</h1>
        <label for="nome">Nome da Tarefa</label>
        <input class="form-control" type="text" id="nome" name="nome">
        <div id="btntip">
            <button class="btn btn-primary" type="submit" >Cadastrar</button>
        </div>
    </form>
</body>
</html>