<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Lista de Tarefas</title>
</head>
<body>
<a class="stil" href="/home">Pagina Inicial</a>
    <h1>Lista de Tarefas</h1>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Titulo</th>
      <th scope="col">Usuario</th>
      <th scope="col">Status</th>
      <th scope="col">Privacidade</th>
      <th scope="col">Descrição</th>
      <th scope="col">Tipo</th>
      <th scope="col">Data De Conclusão</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tarefa as $cat)
      @if(Auth::user()->email == $cat->Usuario or $cat->Privacidade == 'Público')
          <tr>       
            <td>{{$cat->Titulo}}</td>
            <td>{{$cat->Usuario}}</td>
            <td>{{$cat->Status}}</td>
            <td>{{$cat->Privacidade}}</td>
            <td>{{$cat->Descricao}}</td>
            <td>{{$cat->tipo_de_tarefas}}</td>
            <td>{{$cat->Data_da_conclusão}}</td>
            <td>
            <form action = "{{route('tarefas.destroy', $cat)}}" method = "POST">
                @csrf
                <a class = "btn btn-success" href="{{route('tarefas.edit', $cat)}}">Editar</a>
                @method('DELETE')
                <button type = "submit" class = "btn btn-danger">Excluir</button>
            </form>  
            </td>
          </tr>
      @endif
    @endforeach
  </tbody>
</table>
</body>
</html>