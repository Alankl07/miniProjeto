<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="{{asset('css/stylo.css')}}" rel="stylesheet">
        <title>Tarefas</title>
    </head>
    <body id="body">
    <a class="stil" href="/home">Pagina Inicial</a>
        <form action="{{route('tarefas.store')}}" method="POST">
                    @csrf
                    <div class="divl">
                </div>
            <div class="divb">
            <h1 id="titulo">Tarefas</h1>
            
                <div>
                    <label for="titulo">Titulo</label>
                    <input class="form-control" type="text" name="titulo" id="titulo">
                </div>

                <div>
                    <label for="usuario">Usuario</label>
                    <input class="form-control" type="text" name="usuario" id="usuario" value="{{Auth::user()->email}}" >
                </div>

                <div id="priv">
                    <label for="privaciadade">Privacidade</label>
                    <select class="form-control" name="privacidade">
                        <option name="privacidade"> Privado</option>
                        <option name="privacidade"> Público</option>
                    </select>
                </div>
                <div class="stat">
                    <label for="status">Status</label>
                    <select class="form-control" name="status">
                        <option name="status"> A Fazer</option>
                        <option name="status">Fazendo</option>
                        <option name="status">Feito</option>
                    </select>
                </div>

                <div class="descri">
                    <label for="descricao"> Descrição</label>
                    <input class="form-control" type="text" name="descricao" id="descricao">
                </div>

                <div class="tipo">
                    <label for="tipo">Tipo de Tarefa</label>
                    <select class="form-control" name="tipo">
                        @foreach($tipos as $tip)
                            <option value="tipo">{{$tip->nome}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="conc">
                    <p>Data da Conclusão: <input class="form-control" type="date" name="datepicker" id="datepicker"></p>
                </div>

                <div class="btn">
                    <button class="btn btn-primary">Criar</button>
                </div>
            </div>  
        </form>
    </body>
</html>