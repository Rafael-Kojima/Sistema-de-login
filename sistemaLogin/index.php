<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "description" content = "Criando um sistema de LOGIN.">
    <meta name = "keywords" content ="aula, sistema de login, sessão, html, php, progamação web">
    <meta name="author" content="Rafael Aguilar e Daniel Costa">
    <title>Index</title>
</head>
<body>
    <?php
        require "iniciar_sessao.php";

        echo $_sessoes["InicioDoTempo"];
    ?>
    <center>
        Iniciando Sessão:
        <p><a href="formulario.html">LOGIN</a></p>
    </center>
    
</body>
</html>