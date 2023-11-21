
<?php
    $hostname = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "registro";

    $conexao = mysqli_connect ($hostname, $usuario, $senha, $bd,);
        if(!$conexao){
            die ("tem erro no erro: ". mysqli_connect_error());
        }
?>