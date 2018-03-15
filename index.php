<?php
include "ClienteControle.php";
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de clientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <h2>Cadastro de Clientes</h2>
    <p>Ordenar pesquisa
        <a href="index.php" class="btn btn-primary btn-sm">ascendente</a>
        <a href="index.php?ordenacao=<?= 'descendente' ?>" class="btn btn-secondary btn-sm">descendente</a>
    </p>
    <p>Listagem de clientes</p>
    <table class="table">
        <thead>
        <tr>
            <th>Indice</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($array as $cliente) : ?>
            <tr>
                <td><?= $cliente->id ?></td>
                <td><?= $cliente->nome ?></td>
                <td><a href="detalhes.php?id=<?= $cliente->id ?>">detalhes</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>