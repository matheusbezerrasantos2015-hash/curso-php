<?php
header('Content-Type: application/json');

$cidades = [
    "São Paulo",
    "Rio de Janeiro",
    "Belo Horizonte",
    "Curitiba",
    "Porto Alegre"
];

$favorita = $cidades[1];

echo json_encode(["favorita" => $favorita]);