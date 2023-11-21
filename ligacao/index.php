<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>interface</title>
    <link rel="stylesheet" href="style.css">
<style>
    *{
    margin: 0;
    padding: 0;;
}

body{
    background-color: black;
    background-image: url(areia.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100%;
    overflow-y: hidden;
}

ul{
    list-style-type: none;
}

.maior{
    text-align: center;
    padding: 10%;
}

.div1{
    margin-top: 2%;
    
}

.botao{
    margin-top: 2%;
}

button{
    height: 50px;
    width: 100px;
    border-radius: 15px;
    background-color: transparent;
    outline: none;
    border: 1px solid white;
    font-size: 15pt;
    color: white;
}

button:hover{
    border: 1px solid pink;
    color: white;
}

input{
    border-radius: 15px;
    text-align: center;
    height: 50px;
    font-size: 20pt;      
    border: 2px solid silver;
    outline: none;
    background-color: transparent;
    color: white;
}

input:hover{
    border: 2px solid silver;
    color: white;
}

input:hover::placeholder{
    color: white;
}

input:focus{
    border: 2px solid silver;
    color: white;

}

input:focus::placeholder{
    color: white;
}
.texto{

    font-size: 50pt;
    color: white;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

::placeholder{
    color: white;
}

.form{

    
}

legend{
    border: 1px solid red;
}
</style>
</head>
<body>



    <form action="processar.php" method="POST">
    <div class="maior">
        <div class="form">
            <fieldset>
                <legend>Cadastro!</legend>
            <ul>
                <div class="div1">
                    <li>
                        <input type="text" name="nome" placeholder="Nome">
                    </li>
                </div>

                
                <div class="div1">
                    <li>
                        <input type="number" name="idade" placeholder="Idade">
                    </li>
                </div>

                
                <div class="div1">
                    <li>
                        <input type="email" name="email" placeholder="Email">
                    </li>
                </div>

                
                <div class="div1">
                    <li>
                        <input type="password" name="senha" placeholder="Senha">
                    </li>
                </div> 

                <div class="botao">
                    <li>
                        <button type="submit" name="enviar">Enviar</button>
                    </li>
                </div>

                
            </ul>
            </fieldset>
        </div>
    </div>
    </form>
    
</body>
</html>