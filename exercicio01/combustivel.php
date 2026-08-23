<?php

echo "=== 2. Consumo de Combustível ===\n";
    
    $distanciaKm = 450;
    $combustivelLitros = 30;
    
    $consumoMedio = $distanciaKm / $combustivelLitros;
    
echo "Consumo médio: " . round($consumoMedio, 2) . " km/l\n\n";
