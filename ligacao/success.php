<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="maior">
        <div class="texto">
            Suas informações:
        </div>
      

                <table border="1">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // Conectei com a base de dados
                            include("conectar.php");
                            // Selecionei os utilizadores aplicando comando SQL
                            $result = mysqli_query($conexao,"SELECT * FROM dados");
                            // Criei um loop para sempre repetir a linha "<tr>" do tbody a cada vez que tiver u,a linha nova
                            while($row = mysqli_fetch_assoc($result)){

                        ?>
                            <tr>
                                <td><?php echo $row["nome"]?></td>
                                <td><?php echo $row["email"]?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
        
    </div>
    
</body>
</html>