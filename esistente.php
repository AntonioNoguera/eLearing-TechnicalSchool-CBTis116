<?php
$conto = $_POST['account'];
$ciave = $_POST['newpass'];
$validacione = $_POST['passif'];


$conexion = mysqli_connect("localhost","id9406842_root","quesueno2121","id9406842_usuarios")or die("hola");

$registros = mysqli_query($conexion, "select user,conta from miembros where user='$conto'")or die("Error de Registros");


$reg=mysqli_fetch_array($registros);

    if($validacione==0){

            if($reg){  $validacione=1;    echo "accertare()";  }           
            
            else if(empty($conto)){ echo "Ingrese la cuenta."; }
            
            else{  echo "Cuenta inexistente, por favor ingrese de nuevo."; }  
            
    }
else if($validacione==1){
    if($reg['conta']==$ciave){
       echo "Contraseña Correcta.";
       
    }else{
       echo "Contraseña incorrecta, ingrese de nuevo.";
    }
}
?>