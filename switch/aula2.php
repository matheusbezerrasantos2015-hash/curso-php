<?php

$nivel = "admin";

switch ($nivel){
    case "admin";
        echo " Seja bem-vindo admin";
        break;
    case "gerente";
        echo "Seja bem-vindo gerente";
        break;
    default:
        echo "Usuario invalido";
        break;
}