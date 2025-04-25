<?php

     //toda vez que formos trabalhar com sessão, temos que inicializar a sessão?
     //importar a classe:
     require "Contato.class.php";
     //checar se foi clicado no botão enviar dados
    

?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body>

    <div class="centraliza">
        <div class="formulario interna">
            <h3>Cadastrar</h3>
            <form action="teste.php" method="post">
                Nome:
                <input type="text" name = "nome" required class="i1">
                Email:
                <input type="text" name = "email" required class="i1">
                Senha:
                <input type="password" name = "senha" required class="i1">
                <div class=centra>
                    <input type="submit" name = "botao" value = "Enviar Dados" class = "otao">
                </div>
            </form>
        </div>
    </div>    
</body>
</html>