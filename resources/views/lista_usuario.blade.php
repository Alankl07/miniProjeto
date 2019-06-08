<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>Lista de Usuários</title>
</head>
<body>
<a class="stil" href="/home">Pagina Inicial</a>
    <h1>Lista de Usuários</h1>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Sexo</th>
      <th scope="col">Data de Nascomento</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
    </tr>
  </thead>
  <tbody>
    @foreach($usuarios as $usu)
        <tr>       
            <td>{{$usu->Nome}}</td>
            <td>{{$usu->Sexo}}</td>
            <td>{{$usu->Data_de_Nascimento}}</td>
            <td>{{$usu->Email}}</td>
            <td>{{$usu->Telefone}}</td>
            <td>
            <form action = "{{route('usuarios.destroy', $usu)}}" method = "POST">
                @csrf
                <a class = "btn btn-success" href="{{route('usuarios.edit', $usu)}}">Editar</a>
                @method('DELETE')
                <button type = "submit" class = "btn btn-danger">Excluir</button>
            </form>  
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>