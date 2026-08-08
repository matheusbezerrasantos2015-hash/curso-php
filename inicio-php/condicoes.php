<?php

    $num1 = 3;
    $num2 = 3;

    $soma = $num1 + $num2;

    if ($soma <= 10) {
        echo "$soma menor/igual a 10";
    } else {
        echo "$soma maior que 10";
    }

// -----------------------------------------------
    echo "<br />";
    $liga = true;

    if($liga){
        echo "Lampada ligada";
    } else {
        echo "Lampada desligada";
    }

// -----------------------------------------------
    echo "<br />";
    echo "<br />";
    
    $valor = 32;

    if($valor <= 10){
        echo "Valor menor/igual a 10";
    } else if ($valor <= 20){
        echo "valor menor/igual a 20";
    } else if ($valor <= 30){
        echo "valor menor/igual a 30";
    } else {
        echo "valor maior!";
    }

// ------------------------------------------------------
    echo "<br />";
    $comida = "macarrao";

    if($comida == "macarrao"){
        $restaurante = "Gerola";

        if($restaurante == "Muralhar"){
            echo "Vamos no Muralha";
        } else {
            echo "Vamos no Gerola";
        }



    } else if ($comida == "oriental"){
        $restaurante = "jintae";

        if($restaurante == "jintae"){
            echo "Vamos no jintae";
        } else {
            echo "Vamos ficar com Fome";
        }

    }

?>