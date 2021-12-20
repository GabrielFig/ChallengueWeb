<?php
   $conexion = mysqli_connect("localhost","root","", "login_register_db");
   session_start();
   if(!isset($_SESSION['usuario'])){
       echo '
          <script>
             alert("Por favor debes iniciar sesion");
             window.location="index.php";
          </script>

       ';

       session_destroy();
       die();
   }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TORENOS</title>
</head>
<body>
        <h1>AMOR TUMBADO</h1>

        <form action="php/registro_usuario_be.php" method="POST" class="formulario_registro">
                    <h2>Registrarse</h2>
                    <input type="text"  placeholder="Ingrese un Usuario" name="usua">
                    <input type="password"  placeholder="Ingrese una Contraseña" name="contra">
                    <button>Registrarse</button>
                       <p> <p> 
        </form>

        <form action="php/cerrar_s.php">
                <button>Cerrer Sesion</button>
        </form>


            
</body>
</html>