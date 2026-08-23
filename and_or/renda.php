<?php

    $nome = "Alberto";
    $rendaMensal = 500.00;
    $idade = 24;

    if ($idade >= 21 && $rendaMensal >= 3000.00){
        echo "Olá $nome";
        echo "\n";
        echo "sua renda: $rendaMensal";
        echo "\n";
        echo "Sua idade: $idade";
        echo "\n";
        echo "\t\t";
        echo "Financiamento Aprovado!";
    }else{
        echo "Olá $nome";
        echo "\n";
        echo "sua renda: $rendaMensal";
        echo "\n";
        echo "Sua idade: $idade";
        echo "\n";
        echo "\t\t";
        echo "Financiamento Não Aprovado!";
        $faltaQuanto = 3000 - $rendaMensal;
        echo "\n";
        echo "Falta para aceitar: $faltaQuanto";
    }

?>