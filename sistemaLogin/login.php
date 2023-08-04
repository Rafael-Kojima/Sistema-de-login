<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rafael Aguilar e Daniel Costa">
    <title>Login</title>
</head>
<body>
    <?php
        if ($_POST["nomedeusuario"] == "rafael" && $_POST["senha"] == "daniel"){
            session_start();
            $_SESSION['Login'] = "Sim";
            echo "<h1>Usuario e senha esta correto, você esta logado</h1>";
            echo "<p><a href='./pagina_restrita.php'>Link para o arquivo restrito</a></p>";
        } else {
            session_start();
            $_SESSION['Login'] = "Não";
            echo "<h1>Usuario e senha esta incorreto, você não esta logado</h1>";
            echo "<p><a href='./pagina_restrita.php'>Link para o arquivo restrito</a></p>";
        }
    ?>
    
</body>
</html>