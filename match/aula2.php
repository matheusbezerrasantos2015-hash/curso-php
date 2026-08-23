<?php

$mes = 7;

$estacao = match($mes){
    12,1,2 => "Verão",
    3,4,5 => "Outubro",
    6,7,8 => "Inverno",
    9,10,11 => "Primavera",
    default => "Mes invalido",
};

echo $estacao;