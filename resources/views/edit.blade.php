<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Editando produto.

    <form action="/produtos/update/{{$produtos->id}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nome" value="{{$produtos['nome']}}"><br>
        <input type="text" name="categoria" value="{{$produtos['categoria']}}"><br>
        <input type="text" name="descricao" value="{{$produtos['descricao']}}"><br>
        <input type="text" name="marca" value="{{$produtos['marca']}}"><br>
        <input type="checkbox" name="importado" id="import" value="1" {{ ($produtos['importado'] == 1 ? 'checked' : '') }}><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
