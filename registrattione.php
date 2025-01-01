<?php

echo $uttente=$_POST['usera'];
echo $nome=$_POST['namea'];
echo $eta=$_POST['agea'];
echo $paese=$_POST['countrya'];
echo $codice=$_POST['passworda'];
echo $validattione=$_POST['passss'];
echo $aipi= $_SERVER['REMOTE_ADDR'];

$conexion = mysqli_connect("localhost","root","","elearningphp")or die("Error en conexión");

$registros = mysqli_query($conexion, "select user from miembros where user='$uttente'")or die("Error de Registros");

$reg=mysqli_fetch_array($registros);

if($validattione==0){
//primer movimiento
            if($reg){
            $validattione=1;
            echo "usado()";  
            }           
            else{
            mysqli_query($conexion,"insert into miembros(user,name,age,county,conta,ipes,uno,dos,tres,cuatro,cinco,seis,siete,ocho) values 
			('$uttente','$nome','$eta','$paese','$codice','$aipi','0','0','0','0','0','0','0','0')")
			or die("Problemas de Insert".mysqli_error($conexion));
            }  
    }
?>