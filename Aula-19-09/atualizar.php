<?php include("./db/conexao.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Dados</title>
</head>

<body>
    <?php
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $valor = $_POST['valor'];
    $id = $_POST['id'];
    $status = $_POST['status'];

    $script = "UPDATE produtos SET descricao = '$descricao', quantidade = '$quantidade', valor = '$valor', status = '$status' WHERE id = '$id' ";

    $exec = mysqli_query($conn, $script);

    if($exec){
        ?>

        <script> 
            alert("Dados atualizado com sucesso!");
            window.location.href="./listar.php";
        </script>

        <?php
    } else
    {
        ?>

        <script> 
            alert("Dados não atualizado!");
            window.location.href="./listar.php";
        </script>

        <?php
    }


    ?>

    
</body>
</html>