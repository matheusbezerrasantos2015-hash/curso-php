<?php

echo "Escolher o menu: \n";
echo "\t1 - Cadastrar \n";
echo "\t2 - Consultar \n";
echo "\t3 - Atualizar \n";
echo "\t4 - Excluir \n";

$escolha = 1;
switch($escolha){
    case 1:
        echo "Cadastrar usuario";
        break;
    case 2:
        echo "Consultar usuario";
        break;
    case 3: 
        echo "Atualizar usuario";
        break;
    case 4:
        echo "Excluir usuario";
        break;
    default:
        echo "Opção inválida";
}