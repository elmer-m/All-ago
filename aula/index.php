<?php
    if(isset($_POST['submit'])){
        /* 
        print_r ('Nome: '. $_POST['nome']);
        print_r ('<br>');
        print_r ('Email:'. $_POST['email']);
        print_r ('<br>');
        print_r ('Telefone:'. $_POST['telefone']);
        print_r ('Sexo: '. $_POST['genero']);
        print_r ('<br>');
        print_r ('Data de nascimento:'. $_POST['data_nascimento']);
        print_r ('<br>');
        print_r ('Localidade:'. $_POST['localidade']);
        print_r ('<br>');
        print_r ('Endereço:'. $_POST['endereco']);
         */ 
        include_once('config.php');
        
         $nome = $_POST['nome'];
         $email = $_POST['email'];
         $senha = $_POST['senha'];
         $telefone = $_POST['telefone'];
         $genero = $_POST['genero'];
         $data_nascimento = $_POST['data_nascimento'];
         $localidade = $_POST['localidade'];
         $cidade = $_POST['cidade'];
         $endereco = $_POST['endereco'];

         $result =  mysqli_query($conexao, "INSERT INTO clientes(nome, email, senha, telefone, genero, data_nascimento, cidade, localidade, endereco) VALUES ('$nome', '$email','$senha', '$telefone', '$genero', '$data_nascimento', '$cidade', '$localidade', '$endereco')");
         header("Location: login.html");
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

    #submit{
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

    #submit:hover{
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
        <a href="home.html">Voltar</a>
    </div>
    <div class="box">
        <form action="index.php" method="POST">
            <fieldset>
                <legend>Cadastro</legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser inputBox" required>
                    <label for="email" class="labelInput">Email</label>
                </div>

                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>

                <p>Sexo:</p>
                <input type="radio" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <input type="radio" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <input type="radio" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <div class="inputBox">
                    <label for="nome"><b> Data de nascimento </b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="localidade" id="localidade" class="inputUser" required>
                    <label for="localidade" class="labelInput">Localidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <button id="submit" name="submit">Enviar</button>
            </fieldset>
        </form>
    </div>
</body>
</html>