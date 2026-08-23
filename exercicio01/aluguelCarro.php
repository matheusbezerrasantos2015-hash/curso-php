<?php

echo "=== 4. Aluguel de Carro Executivo ===\n";

$idadeCliente = 22;
$rendaMensal = 8000;

if ($idadeCliente >= 25 || $rendaMensal > 7000) {
    echo "Locação da categoria luxo autorizada.\n\n";
} else {
    echo "Locação da categoria luxo não autorizada.\n\n";
}
