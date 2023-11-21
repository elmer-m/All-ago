<?php
    if(!empty($_GET['id']))

        include_once('config.php');

        $id = $_GET['id'];
        
        $sqlSelect = "SELECT * FROM clientes WHERE id=$id";
        $resultado = $conexao->query($sqlSelect);
        if($resultado->num_rows > 0){
            while ($user_data = mysqli_fetch_assoc($resultado)){
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $senha = $user_data['senha'];
            $telefone = $user_data['telefone'];
            $genero = $user_data['genero'];
            $data_nascimento = $user_data['data_nascimento'];
            $localidade = $user_data['localidade'];
            $cidade = $user_data['cidade'];
            $endereco = $user_data['endereco'];

            }
                    }
        else{
            header('Location: siste,a.php');
        }        


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

   <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        color: white;
    }
    .box{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.6);
        padding: 10px;
        border-radius: 15px;
    }
    fieldset{
        border: 3px solid dodgerblue;
        border-radius: 10px;
    }

    legend{
        border: 1px solid dodgerblue;
        text-align: center;
        padding: 10px;
        border-radius: 8px;
        background-color: dodgerblue;

    }

    .inputBox{
        position: relative;
    }
    .inputUser{
        background: none;
        border: none;
        border-bottom: 1px solid white;
        outline: none;
        color: white;
        font-size: 12pt;
        width: 100%;
        letter-spacing: 2px;
    }

    .labelInput{
        position: absolute;
        top: 0;
        left: 0;
        pointer-events: none;
        transition: .5s;

    }
    .inputUser:focus ~ .labelInput, 
    .inputUser:valid ~ .labelInput{
        top: -25px;
        font-size: 8pt;
        color: dodgerblue;
    }

    #data_nascimento{
        padding: 8px;
        font-size: 10pt;
    }

    #update{
        background-color: dodgerblue;
        width: 100%;
        border: none;
        border-radius: 8px;
        color: white;
        font-size: 12pt;
        padding: 8px;
        cursor: pointer;
        transition: .5s;
}

    #update:hover{
        background: rgb(255, 5, 241);
        font-size:15pt;
    }

    a{
        text-decoration: none;
        color: white;
    }

    .voltar{
        color: white;
        font-size: 14pt;
        background-color: dodgerblue;
        padding: 3px;
        border-radius: 8px;
        transition: 0.5s;
        width: 5%;
        text-align:center;
    }

    .voltar:hover{
        background-color: purple;
    }
</style>
</head>
<body>
        
    <div class="voltar">
        <a href="sistema.php">Voltar</a>
    </div>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend>Editar</legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" value="<?php echo $email ?>" class="inputUser inputBox" required>
                    <label for="email" class="labelInput">Email</label>
                </div>

                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" value="<?php echo $senha ?>" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" value="<?php echo $telefone ?>" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>

                <p>Sexo:</p>
                <input type="radio" name="genero" value="<?php echo ($genero == 'feminino') ? 'checked': '' ?>" value="feminino" required>
                <label for="feminino">Feminino</label>
                <input type="radio" name="genero" value="masculino" <?php echo ($genero == 'masculino') ? 'checked': '' ?>>
                <label for="masculino">Masculino</label>
                <input type="radio" name="genero" value="outro" required value="<?php echo ($genero == 'outro') ? 'checked': '' ?>">
                <label for="outro">Outro</label>
                <br><br>
                <div class="inputBox">
                    <label for="nome"><b> Data de nascimento </b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nascimento ?>" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade"value=" <?php echo $cidade ?>" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="localidade" id="localidade" value="<?php echo $localidade ?>" class="inputUser" required>
                    <label for="localidade" class="labelInput">Localidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" value="<?php echo $endereco ?>" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type= "hidden" name="id" value= "<?php echo $id?>">
                <button id="update" name="update">Enviar</button>
            </fieldset>
        </form>
    </div>
</body>
</html>