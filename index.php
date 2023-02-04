<?php
session_start();
//print_r($_POST);

//-------- Restricciones----------
if(isset($_SESSION['usuarioo'])=="aprendiz"){
    
    header("location:aprendiz.php");
 }
 if(isset($_SESSION['usuarioo'])=="instructor"){
    
    header("location:instructor.php");
 }

//----------------------------------------------
if(isset($_POST['accion'])){
    require_once 'conexion.php';
     $usuario = $_POST['usuarioo'];
     $contraseña = $_POST['clave'];
    
     $respuesta = $con->query("SELECT * FROM usuarios where usuario='{$usuario}' and clave='{$contraseña}'");
    if($respuesta->num_rows==1){
    
     $datos = $respuesta->fetch_object();

    $_SESSION['usuarioo']= $datos->rol;
    $_SESSION['nombre']= $datos->nombre;
     echo $datos->clave;
     echo $datos->rol;
    // -------redireccionamos a la pagina que queremos ------------
 }
 if ($datos->rol=="A"){
   
    header("location:aprendiz.php");
}
if($datos->rol=="I"){
    header("location:instructor.php");
}
//-------------------------------------------------
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="POST">
                            <h3 class="text-center text-info">Iniciar Sesión</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Usuario:</label><br>
                                <input type="text" name="usuarioo" id="" class="form-control">
                            </div>
                            <div class="form-group ">
                                <label for="password" class="text-info">Contraseña:</label><br>
                                <input type="password" name="clave" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Recuerdame</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="accion" class="btn btn-info btn-md" value="INGRESAR">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="registrar.php" class="text-info">Registrate aqui</a>

                                <p style="color:red">
                                    <?php
                                        if(isset($_SESSION['mensaje'])){
                                            echo $_SESSION['mensaje']; //imprimo el mensaje 
                                            unset($_SESSION['mensaje']); // destrullo el mensaje 
                                        }
                                        ?>
                                    </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>

</body>
</html>