<?php

echo "=== 9. Números Pares de 1 a 100 ===\n";

$contadorPares = 0;

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
        $contadorPares++;
    }
}

echo "\nTotal de números pares exibidos: $contadorPares\n\n";
