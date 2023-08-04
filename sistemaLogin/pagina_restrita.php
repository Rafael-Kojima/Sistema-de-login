<?php
 session_start();

 if($_SESSION["Login"] != "Sim"){
    header("Location: formulario.html");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rafael Aguilar e Daniel Costa">
    <title>Página restritra</title>
</head>
<body>
    <h1>Você está em um arquivo restrito!</h1>

    <p>Permitido somente para usuários autorizados.</p>
    <p><a href="logoff.php">LOGOFF</a></p>
</body>
</html>