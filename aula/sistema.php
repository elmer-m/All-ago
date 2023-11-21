<?php
session_start();
include_once('config.php');
if ((!isset($_SESSION['email'])) && (!isset($_SESSION['senha']))) {
    header('Location: login.html');
}

$logado = $_SESSION['email'];

$sql = "SELECT * FROM clientes ORDER BY id DESC";

$result = $conexao->query($sql);

// print_r($result);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Sistema</title>
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        color: white;
        text-align: center;
      }

      .custom-navbar {
        background-color: dodgerblue;
        color: white;
      }

      .navbar-brand {
        color: white;
        text-align: center;
      }

     table{
        background: rgba(0,0,255,0.5);
        border-radius:10px;
        padding: 10px;
     }

     .box-search{
      display:flex;
      justify-content: center;
      gap: .1%;
     }
      
    </style>
  </head>
  <body>
    <nav class="navbar custom-navbar">
      <div class="container-fluid">
        <a class="navbar-brand">Dados</a>
        <div class="d-flex">
          <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
      </div>
    </nav>
    <br> <?php
        echo "<h1>Bem vindo<u>$logado</u></h1>";
    ?> 
      <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button class="btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
      </div>
    <div class="m-5">
    <table class="table text-white table-bg table-dark rounded">

        <thead>
          <tr>
            <th scope="col">Registro</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Sexo</th>
            <th scope="col">Data de nascimento</th>
            <th scope="col">Cidade</th>
            <th scope="col">Localidade</th>
            <th scope="col">Endereço</th>
            <th scope="col">...</th>
          </tr>
        </thead>
        <tbody>
            <?php
                while($user_data = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>". $user_data['id']."</td>";
                    echo "<td>". $user_data['nome']."</td>";
                    echo "<td>". $user_data['email']."</td>";
                    echo "<td>". $user_data['telefone']."</td>";
                    echo "<td>". $user_data['genero']."</td>";
                    echo "<td>". $user_data['data_nascimento'];
                    echo "<td>". $user_data['cidade'];
                    echo "<td>". $user_data['localidade'];
                    echo "<td>". $user_data['endereco'];
                    echo "<td>
                     <a class='btn btn-sm btn-primary d-inline-block' href='edit.php?id=$user_data[id]'>
                     <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
  <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
</svg>
</a>

<a class='btn btn-sm btn-danger mt-2 d-inline-block' href='delete.php?id=$user_data[id]'>
<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
<path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
</svg>

</a>
                    </td>";
                    echo "</tr>";
                    
                }
            ?>
        </tbody>
      </table>
    </div>
  </body>
</html>