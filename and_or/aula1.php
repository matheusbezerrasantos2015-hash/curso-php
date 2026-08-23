<?php

    $nomeCompleto = "João Marcos";
    $idade = 12;
    $altura = 1.50;

    if ($idade > 18 && $altura > 1.60) {
        echo $nomeCompleto;
        echo "\n";
        echo "Voce pode entrar no clube!";
    } else {
        echo $nomeCompleto;
        echo "\n";
        echo "Ops ... não pode ter acesso!";
    }


?>