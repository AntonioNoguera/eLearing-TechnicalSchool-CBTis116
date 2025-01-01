<?php

 $utente = $_POST['cuenta'];
 $valore = $_POST['numero'];


 $conexion = mysqli_connect("localhost","root","","elearningphp")or die("Error en conexión");

mysqli_query($conexion,"update miembros
                        set $valore = '1' 
                        where user = '$utente'")or die(mysqli_error($conexion));

echo "terminada";

?>
