<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>{{$produtos['nome']}}</title>
</head>
<body>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOME</th>
      <th scope="col">CATEGORIA</th>
      <th scope="col">DESCRIÇÃO</th>
      <th scope="col">MARCA</th>
      <th scope="col">ORIGEM</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$produtos['id']}}</th>
      <td scope="row">{{$produtos['nome']}}</td>
      <td scope="row">{{$produtos['categoria']}}</td>
      <td scope="row">{{$produtos['descricao']}}</td>
      <td scope="row">{{$produtos['marca']}}</td>
      <td scope="row">{{($produtos['importado'] == 1 ? 'Importado' : 'Não Importado')}}</td>
      <td>
        <form action="{{route('delete.prod', $produtos->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
      </td>
      <td>
        <a href="{{route('edit.prod', $produtos->id)}}">Editar</a>
      </td>
      
    </tr>
  </tbody>
</table>

</body>
</html>