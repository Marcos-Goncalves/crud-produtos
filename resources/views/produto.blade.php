<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{$produtos['id']}}<br>
    {{$produtos['nome']}}<br>
    {{$produtos['categoria']}}<br>
    {{$produtos['descricao']}}<br>
    {{$produtos['marca']}}<br>
    {{$produtos['importado']}}<br>
    {{$produtos['deleted_at']}}<br>

    <form action="{{route('delete.prod', $produtos->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar</button>
    </form>
    <br>

    <a href="{{route('edit.prod', $produtos->id)}}">Editar</a>

</body>
</html>