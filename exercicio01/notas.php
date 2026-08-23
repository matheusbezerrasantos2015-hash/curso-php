<?php

echo "=== 8. Conversor de Notas Conceito ===\n";

$conceito = "B";

$feedback = match ($conceito) {
    "A" => "Excelente! Desempenho excepcional.",
    "B" => "Muito bom! Continue assim.",
    "C" => "Satisfatório, mas pode melhorar.",
    "D" => "Abaixo do esperado, atenção redobrada.",
    "F" => "Reprovado, é necessário revisar o conteúdo.",
    default => "Conceito inválido.",
};

echo "Conceito $conceito -> $feedback\n\n";
