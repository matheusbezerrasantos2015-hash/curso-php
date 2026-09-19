<?php
header('Content-Type: application/json');

$temperaturas = [22, 18, 30, 25];
$lista = [];

for ($i = 0; $i < count($temperaturas); $i++){
    $lista[] = "Posição " . $i . ": " . $temperaturas[$i] . "°C";
}

echo json_encode(["temperaturas" => $lista]);