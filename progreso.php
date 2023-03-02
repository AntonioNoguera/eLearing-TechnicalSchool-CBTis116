<?php

 $utente = $_POST['cuenta'];
 $valore = $_POST['numero'];


$conexion = mysqli_connect("localhost","id9406842_root","quesueno2121","id9406842_usuarios")or die("hola");

mysqli_query($conexion,"update miembros
                        set $valore = '1' 
                        where user = '$utente'")or die(mysqli_error($conexion));

echo "terminada";

?>
