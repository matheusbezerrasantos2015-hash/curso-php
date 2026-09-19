<?php include("./db/conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>
<body>
    <h2>Cadastro de Produtos</h2>
<?php
$id = $_GET['id'];
$script = "SELECT * FROM produtos WHERE id = '$id'";
$exec = mysqli_query($conn, $script);
$row = mysqli_fetch_array($exec);
$descricao = $row['descricao'];
$quantidade = $row['quantidade'];
$valor = $row['valor'];
$status = $row['status'];

?>
    <form method="post" action="atualizar.php">
        <label for="descricao">Descrição:</label><br>
<input type="text" id="descricao" name="descricao" value="<?= $descricao;?>"><br><br>

        <label for="quantidade">Quantidade:</label><br>
        <input type="number" id="quantidade" value="<?= $quantidade; ?>" name="quantidade" min="0"><br><br>

        <label for="valor">Valor:</label><br>
        <input type="number" id="valor" value="<?= $valor; ?>" name="valor" step="0.01" min="0"><br><br>

        <label for="status">Status:</label><br>
        <select id="status" name="status">
            <option value="<?= $status; ?>"><?= $status; ?></option>
            <option value="ativo">Ativo</option>
            <option value="inativo">Inativo</option>
            <option value="em_falta">Em falta</option>
        </select><br><br>
<input type="hidden" value="<?= $id; ?>" name="id" />
        <button type="submit">Enviar</button>
    </form>

    
</body>
</html>
