<?php
header('Content-Type: application/json; charset=utf-8');

$dados = json_decode(file_get_contents("php://input"), true);

$idade = intval($dados["idade"]);
$renda = floatval($dados["renda"]);

$autorizado = ($idade >= 25 || $renda > 7000.00);

echo json_encode(["autorizado" => $autorizado]);