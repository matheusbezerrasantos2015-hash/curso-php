<?php

$nome = "Elieser";
$idade = 45;
$qtdeFilhosNoCarro = 2;

if ($idade >= 55 || $qtdeFilhosNoCarro >= 3) {
    echo "Isenção de Tarifa Concedida";
} else {
    echo "Tarifa padrão cobrada!";
}