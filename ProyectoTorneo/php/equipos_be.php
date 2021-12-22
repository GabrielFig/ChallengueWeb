<?php

include 'conexion_be.php';

$nombre = $_POST['name'];

if (empty($nombre)) {
    echo '
    <script>
        alert("Es necesario llenar el campo de nombre de equipo");
        window.location="../vistatorneo.php";
    </script>
    ';
    exit();
}

    $query = "INSERT INTO equipos(Nombre_Equipo,Id_Torneo) 
    VALUES('$nombre',23)";

    $ejecutar = mysqli_query($conexion, $query);

    $query = "SELECT * FROM equipos ";

    $ejecutar = mysqli_query($conexion, $query);

    while($rows=mysqli_fetch_array($ejecutar)){
        echo "<input type='text' value='$rows[1]' disabled><br><br>"; 
        }


    echo '
        <script>
        alert("Equipo registrado con éxito");
        window.location="../vistatorneo.php";
       </script>

        ';

    /* echo'
        <script>
        alert("hola mundo");
        window.location="php/vistatorneo.php";
        </script>
        '; */

?>