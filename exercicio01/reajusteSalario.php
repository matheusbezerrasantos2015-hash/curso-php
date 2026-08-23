<?php
echo "=== 7. Reajuste Salarial ===\n";

$salarioBase = 3000;
$percentualBonus = 15; // em %

$valorAumento = $salarioBase * ($percentualBonus / 100);
$salarioFinal = $salarioBase + $valorAumento;

echo "Novo salário com reajuste: R$ " . number_format($salarioFinal, 2, ',', '.') . "\n\n";
