<?php

function abrirBanco()
{
    // localhost é um endereço local do meu computador.
    $conexao = new mysqli("localhost", "root", "", "crud");
    return $conexao;
}