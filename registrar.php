<?php
  
if(isset($_POST['accion'])){
    require_once 'conexion.php';
    if($_POST['accion']=="Registrar"){
        $nombre =$_POST['nombre'];
        $rol =$_POST['rol'];
        $usuario=$_POST['usuario'];
        $contraseña = $_POST['clave'];
           
    }
    
    if($usuario==""){
        $registro =" primero debe ingresar los datos ";
    }else{
        $sql="INSERT INTO `usuarios`(`nombre`, `usuario`, `clave`, `rol`) 
    VALUES ('$nombre','$usuario','$contraseña','$rol')";
    $datos= $con->query($sql);
       $error = "se registro correctamente";
       
       ?>
      
    <?php
    }
 
}

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estiloR.css">
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/validacion.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="POST" class="needs-validation" novalidate id="forms" >
                            <h3 class="text-center text-info">Registrar usuario:</h3>
                            <div class="form-group">
                                <label for="nombre" class="text-info">Nombre completos:</label><br>
                                <input type="text" name="nombre" id="nombre" class="form-control" required>
                                <div class="valid-feedback">
                                    Valido!
                                </div>
                                <div class="invalid-feedback">
                                    Por favor complete el campo nombre
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Rol:</label><br>
                                <input type="text" name="rol" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Usuario:</label><br>
                                <input type="text" name="usuario" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Contraseña:</label><br>
                                <input type="password" name="clave" id="" class="form-control">  
                                
                            </div>
                           
                            <div class="form-group">
                               
                                <input type="submit" name="accion" class="btn btn-info btn-md" value="Registrar"><br>
                                <a href="index.php" >Ir al inicio de sesion. </a>
                            </div>

                                <p style="color:red">
                                    <?php
                                        
                                            //echo @$registro,@$error;
                                             
                                            
                                        
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


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="/validacion.js"></script>


