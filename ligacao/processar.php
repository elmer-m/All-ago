<?php
    include("conectar.php");

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO dados(nome, idade, email ,senha) VALUES ('$nome', $idade, '$email', '$senha')";
    if (mysqli_query($conexao, $sql) == true) {
            echo "cadastrado";
            header("Location: /ligacao/success.php");
            echo $html;
    } else {
        echo "erro: ". mysqli_connect_error($conexao);
    }

    mysqli_close ($conexao);
?>

