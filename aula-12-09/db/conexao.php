<?php
$host = "127.0.0.1"; // localhost
$user = "root"; // Usuário Banco de dados
$pass = ""; // Senha do banco de dados
$banco = "loja"; // Nome do banco de dados

$conn = mysqli_connect($host, $user, $pass, $banco);

if(!$conn){
  echo "Banco de dados não conectado";
}


?>