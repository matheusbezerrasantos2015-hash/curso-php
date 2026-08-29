<?php

$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];
$op = $_POST['operacao'];

switch($op){
    case 'soma';
        $soma = $num1 + $num2;
        echo "<h3>Resultado da soma: $soma. </h3>";
        echo "<a href= ' ./index.html'> Voltar </a>";
        break;

    case 'sub';
        $sub = $num1 - $num2;
        echo "<h3> Resultado da subtração: $sub </h3>";
        echo "<a href= ' ./index.html'> Voltar </a>";
        break;

    case 'mult';
        $mult = $num1 - $num2;
        echo "<h3> Resultado da Multiplicação: $mult. </h3>";
        echo "<a href= ' ./index.html'> Voltar </a>";
        break;

    case 'div';
    if ($num2 == 0){
        echo "<h3> Não dividi-se por 0 </h3>";
        echo "<a href= ' ./index.html'> Voltar </a>";
    } else {
        $div = $num1 / $num2;
        echo "<h3> Resultado da Divisão: $div. </h3> ";
        }
        break;
}