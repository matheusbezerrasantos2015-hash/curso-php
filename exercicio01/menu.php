<?php

echo "=== 10. Menu de Comandos do Servidor ===\n";

$comando = "restart"; // start, stop, restart, status

switch ($comando) {
    case "start":
        echo "Servidor iniciado com sucesso.\n\n";
        break;
    case "stop":
        echo "Servidor parado.\n\n";
        break;
    case "restart":
        echo "Servidor reiniciado com sucesso.\n\n";
        break;
    case "status":
        echo "Status: servidor em execução.\n\n";
        break;
    default:
        echo "Comando não reconhecido.\n\n";
}
