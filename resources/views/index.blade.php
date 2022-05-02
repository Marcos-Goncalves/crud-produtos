<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Produtos</title>
</head>
<body>
    <div class="container d-flex flex-column justify-align-center align-items-center py-4">
        <h1 class="display-4">REGISTRO DOS PRODUTOS</h1>
        <p class="lead">Registre um produto no formulario abaixo:</p>
        <div class="container d-flex justify-content-between w-75 py-4">
            <div class="">
                <form action="/produtos" method="POST">
                    @csrf
                    <div class="form-group py-2">
                        <label for="formGroupExampleInput"><strong>Nome do produto:</strong></label>
                        <input type="text" class="form-control" name="nome" placeholder="Oculos Ray-Ban">
                    </div>
                    <div class="form-group py-2">
                        <label for="formGroupExampleInput2"> <strong>Categoria</strong> </label>
                        <input type="text" class="form-control" name="categoria" placeholder="Acessorios">
                    </div>
                    <div class="form-group py-2">
                        <label for="formGroupExampleInput2"> <strong>Descrição</strong> </label>
                        <input type="text" class="form-control" name="descricao" placeholder="Preto com detalhes dourado">
                    </div>
                    <div class="form-group py-2">
                        <label for="formGroupExampleInput2"><strong>Marca</strong></label>
                        <input type="text" class="form-control" name="marca" placeholder="Ray-Ban">
                    </div><br>

                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <div class="form-row">
                            <label class="btn btn-danger active">
                            <input type="radio" name="options" id="option1" value='importado' checked> Importado 🇺🇸
                        </label>
                        <label class="btn btn-success">
                            <input type="radio" name="options" id="option2"> Nacional 🇧🇷
                        </label>
                        </div>
                    </div><br>
                    <br>
                    <input class="btn btn-primary" type="submit" value="Cadastrar novo produto">
                </form>
            </div>
             <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Marca</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($data as $item)
                        <tr>
                            <td>{{$item['id']}}</td>
                            <td>{{$item['nome']}}</td>
                            <td>{{$item['categoria']}}</td>
                            <td>{{$item['marca']}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>

</body>
</html>
