<?php
include("./db/conexao.php");

$descricao = $_POST['descricao'];
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];
$status = $_POST['status'];

$script = "INSERT INTO produtos (id, descricao, quantidade, valor, status)
        VALUES (null, '$descricao', '$quantidade', '$valor', '$status')";

 $exec = mysqli_query($conn, $script);    
 
 if ($exec){
    echo "Cadastro realizado com sucesso";
    echo "<br />";
    echo "<a href='./form-produtos.html'>Voltar</a>";
 } else {
    echo "Ops.. Algo deu errado!";
    echo "<br />";
    echo "<a href='./form-produtos.html'>Voltar</a>";
 }

?>