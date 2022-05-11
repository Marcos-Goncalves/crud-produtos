<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Editando</title>
</head>
<body>
    <div class="container d-flex flex-column justify-align-center align-items-center w-75 py-4">
        <h1 class="display-4">EDITANDO PRODUTO</h1>
        <p class="lead">Edite o registro do produto abaixo:</p>
        <div class="container d-flex justify-content-center py-4">
                <form action="/produtos" class="w-50" method="POST">
                    @csrf
                    <div class="form-group py-2">
                        <label for="formGroupExampleInput"><strong>Nome do produto:</strong></label>
                        <input type="text" class="form-control" name="nome" value="{{$produtos['nome']}}">
                    </div>
                    <div class="form-group py-2">
                        <label for="formGroupExampleInput2"> <strong>Categoria</strong> </label>
                        <input type="text" class="form-control" name="categoria" value="{{$produtos['categoria']}}">
                    </div>
                    <div class="form-group py-2">
                        <label for="formGroupExampleInput2"> <strong>Descrição</strong> </label>
                        <input type="text" class="form-control" name="descricao" value="{{$produtos['descricao']}}">
                    </div>
                    <div class="form-group py-2">
                        <label for="formGroupExampleInput2"><strong>Marca</strong></label>
                        <input type="text" class="form-control" name="marca" value="{{$produtos['descricao']}}">
                    </div><br>

                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <div class="form-row">
                            <label class="btn btn-danger active">
                            <input type="radio" name="options" id="option1" value='importado' {{ ($produtos['importado'] == 1 ? 'checked' : '') }}> Importado 🇺🇸
                        </label>
                        <label class="btn btn-success">
                            <input type="radio" name="options" id="option2" {{ ($produtos['importado'] == 0 ? 'checked' : '') }}> Nacional 🇧🇷
                        </label>
                        </div>
                    </div><br>
                    <br>

                    <div class="form-row">
                        <input class="btn btn-primary" type="submit" value="Salvar alterações">
                    </div>
                </form>


    </div>
</body>
</html>
