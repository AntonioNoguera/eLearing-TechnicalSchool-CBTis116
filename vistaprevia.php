<!DOCTYPE HTML>
<html lang="es">
<head>
    <title>Confirmación</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<link rel="icon" type="image/png" href="LawZebo.png" />
<style>
		@import url('https://fonts.googleapis.com/css?family=Tomorrow&display=swap');
		body{
		    min-height:100vh;
		    background-image: linear-gradient(black, #666666); 
		    background-attachment: fixed;
		    vertical-align: middle;
		    text-align:center;
		}

		*{
			padding:0;
			margin:0;
			font-family: 'Tomorrow', sans-serif;
			color: white; 
			outline:none;
		}
		
        .publicado {
    			color:white;
    			border: 1.5px solid white;
    			border-radius:10px;
    			padding-top:10px;
    			text-align:center;
    			padding-bottom:10px;
    			padding-left:10px;
    			padding-right:10px;
    			margin:0px 10% 0px 10%;
    		}
    		
    	.heeed{
    	    font-size:50px;
    	    margin:px 0px 20px 0px;
    	}
    	
    	.header{
		    box-shadow: 0px 0px 20px white;
			border-radius:10px;	
			background-color:hsl(0, 0%, 75%,0.8);
			border:2px white solid;
			margin-top: 20px;
			position: fixed;
			z-index:99999;
			left:2%;
			right:2%;
			height:60px;
			font-size:50px;
		}
		
		img{
		    margin-top:3px;
		}
		
		.spam{
		    display:none;
		}
		.submit{
            color:white;
        	background:none;
        	border:1px white solid;
            border-radius:10px;
            padding-left:10px;
            padding-right:10px;
            padding-top:4px;
            padding-bottom:4px;
            cursor:pointer;
            font-size:38px;
            transition:background .5s, color .5s;
            margin-top:20px;
        }

        .submit:hover{
            background:#AFAFAF;
            color:white;
        }
		
</style>    
<body onload="diayhora()">
    
    <center>
	<div id="headr" class="header">
		<img src="baner.png">
	</div>
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
</center>
<p class='heeed'>Vista Previa:</p>

<p>&nbsp;</p><p>&nbsp;</p>
<?php
 $remitente = $_REQUEST['utente'];
 $titulo = $_REQUEST['titulo'];
 $contenido = $_REQUEST['Postt'];
 
 $dol=$_REQUEST['fechayjora'];
 

 
 echo $valor = "<div class=\"publicado\"><b class=\"tit brillitos\">Usuario: </b>".$remitente.".</br></br><b class=\"tit\">Título: </b>".$titulo.".</br></br>".$dol."</br></br><b class=\"tit\">Contenido: </b>".$contenido."</div>";

?>
<table style="margin-left:auto;margin-right:auto;">
        <tr>
            <th>
               <form method="post" action="centrodidatos.php">
	<input type="submit" name="post" class="submit" value="Cancelar">
	<input type="hidden" name="c" id="fechayhora">
	<input type="hidden" value="<?php echo $remitente ?>" name="utente">
    	</form> 
            </th>
            <th>&nbsp;</th>
            <th>
                <form method="post" action="post.php">
                    <input type="hidden" value="<?php echo $remitente;?>" name="remitente">
                    <input type="hidden" value="<?php echo $titulo;?>" name="titulo">
                    <input type="hidden" value="<?php echo $contenido;?>" name="dato">
                    <input type="hidden" id="fesha" name="fecha">
                    <input type="hidden" id="jora" name="hora">
                    <input type="submit" value="Verificar" class="submit">
                    </form>
            </th>
        </tr>
</table>
<script>
	function diayhora(){
		Horarios= new Date();
		/*Ni idea del porque no lleva la palabra var antes de la declaración*/
		Hora = Horarios.getHours();
		Minutos= Horarios.getMinutes();
		Segundos= Horarios.getSeconds();

		var am0pm="a.m";

		if (Hora > 12){
			Hora= Hora-12
			am0pm="p.m";
			
		}

		if(Hora < 10){
			Hora= "0" + Hora;
}
		if(Hora=="12"){
			Hora="00";
		}

		if(Minutos < 10){
			Minutos = "0" + Minutos;
		}

		if(Segundos < 10){
			Segundos = "0" + Segundos;
		}

		Horario= Hora +":"+ Minutos+":"+ Segundos +" "+ am0pm;

		/*Empiezo Con el desarollo de la fecha*/
		
		Dia = Horarios.getDate();

		var Diasem= new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");

		Mes= Horarios.getMonth();

		Year= Horarios.getFullYear();

		Mes= Mes + 1;  
		
		if(Dia < 10){
			Dia = "0" + Dia; 
		}
		if(Mes < 10){
			Mes = "0" + Mes; 
		}

		Diasem = Diasem[Horarios.getDay()];
		
		Fecha=Dia+"/"+Mes+"/"+Year+"."; 
		
		fesha.value=Fecha;
		
		jora.value=Horario;
		
		fechayhora.value="<b>Fecha:</b> "+Fecha + " <b> Hora:</b> " + Horario;
	}
</script>
    	
<button class="spam" is="
</body>

</html>