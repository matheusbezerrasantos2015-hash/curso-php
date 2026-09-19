<?php
include("./db/conexao.php");
$id = $_GET['id'];
$script = "DELETE FROM produtos WHERE id = '$id'";
$exec = mysqli_query($conn, $script);
if ($exec){
    echo "Produto deletado com sucesso!";
    echo "<br />";
    echo "<a href='./listar.php'>Voltar para Lista</a>";
} else {
    echo "Ops.. Algo deu errado!";
    echo "<br />";
    echo "<a href='./listar.php'>Voltar para Lista</a>";
}

?>