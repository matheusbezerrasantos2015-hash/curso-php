<?php

echo "=== 3. Fila Prioritária da Balsa ===\n";

$idadeMotorista = 65;
$tempoEsperaMin = 40;

if ($idadeMotorista >= 60 && $tempoEsperaMin > 30) {
    echo "Acesso liberado à fila prioritária de embarque.\n\n";
} else {
    echo "Acesso não liberado à fila prioritária.\n\n";
}
