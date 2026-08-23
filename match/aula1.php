<?php

$status = 500;

$mensagem = match($status){
    200 => "ok",
    404 => "Não encontrado",
    500 => "Erro inteiro do Servidor",
    default => "Status Desconhecido",
};

echo $mensagem;