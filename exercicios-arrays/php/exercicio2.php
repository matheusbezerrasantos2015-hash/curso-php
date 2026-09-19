<?php
header('Content-Type: application/json');

$transportes = ["Carro", "Avião", "Bicicleta", "Ônibus", "Trem"];
$maisUsado = $transportes[0];

echo json_encode(["maisUsado" => $maisUsado]);