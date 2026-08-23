<?php

echo "=== 5. Classificador de DDD ===\n";

$ddd = 19;

$regiao = match ($ddd) {
    11 => "São Paulo (Capital)",
    16 => "Ribeirão Preto/São Carlos/Porto Ferreira",
    19 => "Campinas/Região",
    21 => "Rio de Janeiro",
    default => "Região não cadastrada",
};

echo "DDD $ddd -> $regiao\n\n";
