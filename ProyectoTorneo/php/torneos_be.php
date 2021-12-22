<?php

    include 'conexion_be.php';

    //cambiar torneos por equipos
    $query = "SELECT * FROM torneos ORDER BY rand() LIMIT 2";
    $ejecutar = mysqli_query($conexion, $query);

    function calcularVs(){

    while($rows=mysqli_fetch_array($ejecutar)){
        echo "<input type='text' value='$rows[1]' disabled><br><br>"; 
        }
        
    }


?>