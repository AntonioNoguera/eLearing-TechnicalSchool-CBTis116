<?php

$remitente = $_REQUEST['remitente'];
$titulo = $_REQUEST['titulo'];
$contenido= $_REQUEST['dato'];

$fe=$_REQUEST['fecha'];
$ho=$_REQUEST['hora'];


 $valor = "<div class=\"publicado scrolleable\"><b class=\"tit\">Usuario: </b>".$remitente.".</br></br><b class=\"tit\">Título: </b>".$titulo.".</br></br><b>Fecha: </b> ".$fe."&nbsp;<b> Hora: </b>".$ho."</br></br><b class=\"tit\">Contenido: </b>".$contenido."</div>";

 $conexion = mysqli_connect("localhost","root","","elearningphp")or die("Error en conexión");

mysqli_query($conexion,"insert into comentarios(contenuto) value ('$valor') ")or die ("El texto supera la cantidad de caracteres.");

header("Location:dashboard.php");

?>