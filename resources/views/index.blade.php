<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Página dos produtos.

    <form action="/produtos" method="post">
        @csrf
        <input type="text" name="nome"><br>
        <input type="text" name="categoria"><br>
        <input type="text" name="descricao"><br>
        <input type="text" name="marca"><br>
        <input type="checkbox" name="importado" id=""><br>
        <button type="submit">Enviar</button>
    </form>

    @foreach($data as $item) 
        <p>{{$item['nome']}}</p>
    @endforeach
</body>
</html>