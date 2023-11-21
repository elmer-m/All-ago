<?php
    include_once('config.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $data_nascimento = $_POST['data_nascimento'];
        $localidade = $_POST['localidade'];
        $cidade = $_POST['cidade'];
        $endereco = $_POST['endereco'];

        $sqlUpdate = "UPDATE clientes SET nome = '$nome', email = '$email', senha = '$senha', telefone = '$telefone', genero = '$genero', data_nascimento = '$data_nascimento', localidade = '$localidade', cidade = '$cidade', endereco = '$endereco' WHERE id = '$id'";


        $result = $conexao->query($sqlUpdate);
    }
header('Location: sistema.php')
?>