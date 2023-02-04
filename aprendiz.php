<?php
session_start();
if(!isset($_SESSION['usuarioo'])){
    $_SESSION['mensaje']= "Primero debe iniciar session.";
    header("location:index.php");
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    APRENDIZ

    <p>
        <?php
        echo"Usuario actual: ".$_SESSION['nombre']." :".$_SESSION['usuarioo'];
        
        ?>
    </p>
    <p>
        <a href="logaut.php">
            Salir
        </a>
    </p>
</body>
</html>