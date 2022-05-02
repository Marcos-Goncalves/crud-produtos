<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">REGISTRO DOS PRODUTOS</h1>
            <p class="lead">Registre o produto com os dados abaixo</p>
        </div>
    </div>

    <form action="/produtos" method="POST">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">NOME</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">CATEGORIA</label>
            <input type="text" class="form-control" name="categoria" placeholder="Categoria">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">DESCRIÇÃO</label>
            <input type="text" class="form-control" name="descricao" placeholder="Descrição">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">MARCA</label>
            <input type="text" class="form-control" name="marca" placeholder="Marca">
        </div><br>

        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary active">
                <input type="radio" name="options" id="option1" value='importado' checked> Importado
            </label>
            <label class="btn btn-secondary">
                <input type="radio" name="options" id="option2"> Nacional
            </label>
        </div><br>
        <br>
        <input class="btn btn-primary" type="submit" value="Enviar">
    </form>
    <br>

    @foreach($data as $item) 
        <p>{{$item['id']."-".$item['nome']}}</p>
    @endforeach
</body>
</html>