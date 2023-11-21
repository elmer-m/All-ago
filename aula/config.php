<?php
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $bd = 'formulario_clientes';

    $conexao = new mysqli($host, $usuario, $senha, $bd);

    if ($conexao->connect_errno){
        echo "erro";

    } else {
        
    }
?>