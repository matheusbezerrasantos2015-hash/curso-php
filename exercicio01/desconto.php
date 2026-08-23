<?php

echo "=== 11. Desconto por Perfil de Cliente ===\n";

$tipoCliente = "Ouro"; // Bronze, Prata, Ouro, VIP
$valorCompra = 500;

$percentualDesconto = match ($tipoCliente) {
    "Bronze" => 5,
    "Prata"  => 10,
    "Ouro"   => 15,
    "VIP"    => 20,
    default  => 0,
};

$valorDesconto = $valorCompra * ($percentualDesconto / 100);
$valorFinal = $valorCompra - $valorDesconto;

echo "Cliente $tipoCliente: desconto de $percentualDesconto%\n";
echo "Valor final da compra: R$ " . number_format($valorFinal, 2, ',', '.') . "\n";
