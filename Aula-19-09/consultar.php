<?php include("./db/conexao.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
</head>

<body>
    <?php
    $id = $_GET['id'];
    $script = "SELECT * FROM produtos WHERE id = '$id'";

    $exec = mysqli_query($conn, $script);
    $row = mysqli_fetch_assoc($exec);
    
    $descricao = $row['descricao'];
    $quantidade = $row['quantidade'];
    $valor = $row['valor'];
    $status = $row['status'];

    if ($status == 1){
        $nomeStatus = "Ativo";
    } else if($status == 0){
        $nomeStatus = "Inativo";
    } else {
        $nomeStatus  = "Em falta";
    }


    ?>

    <div class="card">
        <h2><?= $descricao; ?></h2>
        <p>Qtde: <?= $quantidade; ?></p>
        <p>Valor: R$ <?= $valor; ?></p>
        <p>Status: <?= $nomeStatus; ?></p>
    </div>
    
    <a href="./listar.php">Voltar</a>
</body>
</html>