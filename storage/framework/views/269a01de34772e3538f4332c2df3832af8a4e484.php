<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Produto - <?php echo e($produtos['nome']); ?></title>
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
      <th scope="row"><?php echo e($produtos['id']); ?></th>
      <td scope="row"><?php echo e($produtos['nome']); ?></td>
      <td scope="row"><?php echo e($produtos['categoria']); ?></td>
      <td scope="row"><?php echo e($produtos['descricao']); ?></td>
      <td scope="row"><?php echo e($produtos['marca']); ?></td>
      <td scope="row"><?php echo e(($produtos['importado'] == 1 ? 'Importado' : 'Nacional')); ?></td>
      <td>
        <form action="<?php echo e(route('delete.prod', $produtos->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn btn-danger">Deletar</button>
        </form>
      </td>
      <td>
        <a href="<?php echo e(route('edit.prod', $produtos->id)); ?>"><button class="btn btn-info">Editar</button></a>
      </td>
      
    </tr>
  </tbody>
</table>

</body>
</html><?php /**PATH /home/malxg/Documentos/projetos/laravel-test/crud-produtos/resources/views/produto.blade.php ENDPATH**/ ?>