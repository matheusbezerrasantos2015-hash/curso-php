<?php

$idade = 10;

switch(true){
    case ($idade < 12):
        echo "Criança";
        break;

    case ($idade >= 12 && $idade < 18):
        echo "Adolecente";
        break;

    case ($idade >= 18 && $idade < 60):
        echo "Adulto";
        break;
    
    default:
        echo "Idoso";
        break;
}