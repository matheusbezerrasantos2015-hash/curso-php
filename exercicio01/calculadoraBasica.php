<?php

echo "=== 1. Calculadora Básica ===\n";
    
    $num1 = 10;
    $num2 = 5;
    $operador = "+"; 
    
    switch ($operador) {
        case "+":
            $resultado = $num1 + $num2;
            break;
        case "-":
            $resultado = $num1 - $num2;
            break;
        case "*":
            $resultado = $num1 * $num2;
            break;
        case "/":
            $resultado = $num2 != 0 ? $num1 / $num2 : "Erro: divisão por zero";
            break;
        default:
            $resultado = "Operador inválido";
    }
    
echo "Resultado: $resultado\n\n";
