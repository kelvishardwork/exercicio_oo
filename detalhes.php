<?php
include "ClienteControle.php";
$id = $_GET['id'];
$clienteEncontrado = '';
if ($id) {
    foreach ($array as $cliente) {
        if ($cliente->id == $id)
            $clienteEncontrado = $cliente;
    }
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
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
    <p>Detalhes de clientes</p>
    <div class="row">
        <div class="col-sm-6">
            <?php if ($clienteEncontrado): ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"># <?= $clienteEncontrado->id ?> - <?= $clienteEncontrado->nome ?></h5>
                        <p class="card-text">Id: <?= $clienteEncontrado->id ?></p>
                        <p class="card-text">Nome: <?= $clienteEncontrado->nome ?></p>
                        <p class="card-text">Sobrenome: <?= $clienteEncontrado->sobrenome ?></p>
                        <p class="card-text">CPF: <?= $clienteEncontrado->cpf ?></p>
                        <p class="card-text">Endereco: <?= $clienteEncontrado->endereco ?></p>
                        <a href="index.php" class="btn btn-primary"><b>Voltar para Lista</b></a>
                    </div>
                </div>
            <?php else: ?>
                <div class="alert alert-danger" role="alert">
                    <a href="index.php" class="btn btn-danger"><b>Voltar para Lista</b></a>
                    Cliente não encontrado!
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

</body>
</html>
