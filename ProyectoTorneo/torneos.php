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
   $user = $_SESSION['usuario'];
   $validar_usuario=mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$user'");
   $row=mysqli_fetch_row($validar_usuario);
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5bd33a9240.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="homeStyle.css">
    <title>Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" id="navig">
     <div class="container">
        <a class="navbar-brand" href="/">
             <img src="img/logohome.png" alt="Logo" style="width: 5%;"> ChallengeWeb
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            </li>
            <li class="nav-item">
                <a class="nav-link" href="php/cerrar_s.php">Cerrar Sesion</a>
            </li>
          </ul>
        </div>
     </div>
    </nav>
    
   <div class="usuario-content">
   </div>
<main>
    <header class="main-header">
        <div class="background-overlay text-white py-5">      
            <div class="container">
                <div class="row mt-5">  
                    <div class="col-md-6 m-auto">
                        <img src="img/podio.png" alt=""
                        class="img-fluid rounded mx-auto d-block" style="width: 60%;">
                    </div>                                        
                    <div class="col-md-6 text-center justify-content-center align-self-center">    
                        <h1>¿Quieres Crear Tu Torneo?</h1>
                        <p>Usa el boton de abajo para ir a la pestaña de creacion de torneo</p>
                        <a href="#torneo" class="btn btn-outline-dark btn-lg text-white">               
                            Crear Torneo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <secction class="teamr" id="torneo">
        <div class="container">
        <h3 class="title">Registro de Torneo</h1>

            <div class="team-form row">
                <div class="form-field col-md-12">
                <form action='php/torneos_be.php' method='post' enctype='multipart/form-data'>
                    <input type="text" class="input-text" name="titulo" id="name">
                    <label for="nombreEquipo" class="label">Título del Torneo</label>
                </div>
                <div class="form-field col-md-12">
                    <input type="text" class="input-text" name="categoria" id="categoria">
                    <label for="nombrecategoria" class="label">categoría</label>
                </div>
                <div class="form-field col-md-12">
                    <input type="date" class="input-text" name="fecha" id="fecha" > 
                    <label for="fecha" class="label">Fecha de Inicio</label>
                </div>
                <div class="form-field col-lg-12">
                    <button class="submit-btn"  name=""> Registrar </button>
                </form>
                </div>
            </div>
        </div>
    </secction>


</main>
                
            
</body>
</html>