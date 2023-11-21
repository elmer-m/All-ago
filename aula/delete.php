<?php
    if (!empty($_GET['id'])){
        include_once('config.php');

        $id = $_GET['id'];
        
        $sqlSelect = "SELECT * FROM clientes WHERE id=$id";
        $resultado = $conexao->query($sqlSelect);
        if($resultado->num_rows > 0){
            $sqlDelete = "DELETE FROM clientes WHERE id=$id";
            $resultadoDelete = $conexao->query($sqlDelete);

            }
                    }
 
    header('Location: sistema.php');
?>