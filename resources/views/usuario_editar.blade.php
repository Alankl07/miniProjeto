<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" >
    <link href="{{asset('css/stylo.css')}}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
        $( "#datepicker" ).datepicker();} );
    </script>
    <title>Editar Usuário</title>
</head>
<body id="body">
<a class="stil" href="/home">Pagina Inicial</a>

     <div id="divl">

     </div>
    
    <form id="divm" action="{{route('usuarios.update', $usuario)}}" method="POST">
        @csrf
        @method('PUT')
        <h1 id="titulous">Editar de Usuário</h1>
        <div id="nomeus">
            <label for="nome">Nome</label>
            <input name="nome" id="name" class="form-control" type="text" value="{{$usuario->Nome}}" >
        </div>

        <div id="sexous">    
            <label for="sexo">Sexo</label>
            <select class="form-control" name="sexo" >
                <option name="sexo" > Selcione</option>
                <option name="sexo" > Masculino</option>
                <option name="sexo"> Feminino</option>
            </select>
        </div>

        <div id="dataus">    
            <p>Date: <input class="form-control" type="text" name="datepicker" id="datepicker" value="{{$usuario->Data_de_Nascimento}}"></p>
        </div>

        <div id="emailus">    
            <label for="email">E-mail</label>
            <input name="email" id="email" class="form-control" type="text" value="{{$usuario->Email}}">
        </div>

        <div id="telefoneus">
            <label for="tel">Telefone</label>
            <input name="tel" id="tel" class="form-control" type="text" value="{{$usuario->Telefone}}" >
        </div>

        <div id="loginus">
            <label for="login">Login</label>
            <input name="login" id="login" class="form-control" type="text" value="{{$usuario->Login}}">
        </div>

        <div id="senhaus">
            <label for="senha">Senha</label>
            <input name="senha" id="senha" class="form-control" type="password" value="{{$usuario->Senha}}" >
        </div>

        <div id="btnus">
            <button class="btn btn-primary">Salvar</button>
        </div>
    </form>
</body>
</html>