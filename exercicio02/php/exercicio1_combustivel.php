<?php
header('Content-Type: application/json; charset=utf-8');

// Pega os dados enviados via fetch (formato JSON no corpo da requisição)
$dados = json_decode(file_get_contents("php://input"), true);

$distancia = floatval($dados["distancia"]);
$combustivel = floatval($dados["combustivel"]);

if ($combustivel > 0) {
    $consumo = $distancia / $combustivel;
    echo json_encode(["erro" => false, "consumo" => number_format($consumo, 2)]);
} else {
    echo json_encode(["erro" => true, "mensagem" => "O combustível não pode ser zero."]);
}