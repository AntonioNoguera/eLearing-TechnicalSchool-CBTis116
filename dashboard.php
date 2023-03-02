<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
		<link rel="icon" type="image/png" href="LawZebo.png" />
		<title>DashBoard!</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Tomorrow&display=swap');
		body{
		    min-height:100vh;
		    background-image: linear-gradient(black, #666666); 
		    background-attachment: fixed;
		    vertical-align: middle;
		}

		*{
			padding:0;
			margin:0;
			font-family: 'Tomorrow', sans-serif;
			color: white;
			user-select: none;
			outline:none;
			scroll-behavior: smooth;
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
		
		.uno span,.dos span,.tres span{
		    display:none;
		    background:white;
		    color:black;
		    left:20px;
		    padding:2px 5px 2px 5px;
		    font-size:11px;
		    border:1px black solid;
            width:250px;
            text-align:center;
            position:absolute;
            margin-left:50px;
            z-index:999999999999;
            border-radius:10px;
		}
		.uno:hover span{
		    display:block;
		    position:absolute;
		}
		
		.dos:hover span{
		    display:inline-block;
		    position:absolute;
		}    
		
		.tres:hover span{
		    display:inline-block;
		    position:absolute;
		}  

		.opciones{
		    box-shadow: 0px 0px 15px white;
			position: fixed;
			width:15%;
		    left: 2%;
			border:2px solid white;
			border-radius:20px;
			padding-left:20px; 
			padding-bottom:15px;
			padding-top:10px;
			margin-top:18px;
		}

		.pulsantes, .pulsan{
			padding-top:5px; 
			padding-bottom:5px;
			padding-left: 0px;
			background:none;
			border:none;
			transition: padding-left .25s,text-shadow .25s;
		}
		
		.media{
    		position: fixed;
    		box-shadow: 0px 0px 15px white;
    		width:15%;
    		border:2px solid white;
    		border-radius:20px;
    		padding-left:20px; 
    		padding-bottom:15px;
    		padding-top:10px;
    		margin-left:2%;
    		margin-top:220px;
    	}
    	
    	.disbled{
    	    color:grey;
    	    cursor:no-drop;
    	    text-decoration:line-through;
    	    
    	}
    	
		.pulsan{
		    font-size:17px;
		    user-select:none;
		}

		.pulsan:hover{
			padding-left: 8px;
			cursor: pointer;
			text-shadow: white 0px 0px 10px;
		}


		a{
			text-decoration: none;
		}

		.option{
			font-size:20px;
		}

		.publicontent,.menudeutilidades{
		 text-align: center;
		 font-size: 26px;
		}
		
		.menudeutilidades{
    display:none;
}
		
		.publicado{
		color:white;
		border: 1.5px solid white;
		border-radius:10px;
		padding-top:10px;
		text-align:center;
		background:none;
		box-shadow: 0px 0px 15px 0px white;
		margin-left:20%;
		padding:10px 20px 10px 20px;
		margin-right:2%;
		opacity:0;
		transform: rotate(2deg);
		transition:opacity 2s, transform 1s;
		will-change: transform, opacity;
		}
		
		img{
		    margin-top:3px;
		}
		.is-visible{
		    opacity:1;
		    transform: rotate(0deg);
		}
		
		
		@media screen and (max-width:500px){
            /*Portrait*/
        .giff{
           display:none;
        }
        .lawzebo{
            width:325px;
        }
       .opciones,.media{
           display:none;
       }
 
       .publicado{
           position:absolute
           width:100%;
           margin:0px;
       }

       .eltodo{
           width:96%;
           left:2%;
           right:2%;
           position:absolute;
           text-align:center;
       }
}

@media screen and (max-height:370px){
    *{
    	/*Landscape*/
    }
    
    .publicado{
        display:none;
       }
    .recient{
        display:none;   
    }
    .opciones{
        margin-top:0px;
        width:20%;
        height:150px;
        margin-left:23%;
        position: absolute;
    }
    .saltt{
        display:none;
    }
    .media{
        height:150px;
		position: absolute;
		box-shadow: 0px 0px 15px white;
		width:20%;
		border:2px solid white;
		margin-left:50%;
		border-radius:20px;
		padding-left:20px; 
		padding-top:10px;
		margin-top:0px;
	}
	.menudeutilidades{
	    display:block;
	}
	.publicontent{
	    display:none;
	}
	.hola{
	    display:none;
	}
}
</style>

<script type="text/javascript">
	
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

		document.getElementById("mediaDay").innerHTML="Fecha: "+Fecha;
		setTimeout("diayhora()",1000)
		
		fechayjora.value="<b>Fecha:</b> "+Fecha + " <b> Hora:</b> " + Horario;

		document.getElementById("mediaTime").innerHTML="Hora: " + Horario;

		document.getElementById("mediaDei").innerHTML="Día: "+Diasem+".";
	}

	function ventana(){
		var pestana = window.open("","","width=500, height=500, left=50%, top=50%");
		pestana.document.write("<p>Acerca de LAWZEBO!</p>");
	}
	
    function audio() {
      var audio = new Audio('audio.mp3');
      audio.play();
    }
</script>
</head>
<body oncontextmenu="return false" onload="diayhora()">
	<?php
	error_reporting(0);
	$usuario = $_REQUEST['nomediconta'];
	
	$conexion = mysqli_connect("localhost","id9406842_root","quesueno2121","id9406842_usuarios")or die("hola");

    mysqli_query($conexion,"update miembros
                            set ipes='$_REQUEST[ip]'
                            where user='$_REQUEST[nomediconta]'")or die("Errore".mysqli_error($conexion));
	
    $aipi= $_SERVER['REMOTE_ADDR'];
	    
	    $registros = mysqli_query($conexion, "select user from miembros where ipes='$aipi'")or die("Error de Registros");
	    
	    $reg=mysqli_fetch_array($registros);
	    
	    if($reg){
	         $usuario = $reg['user'];
	    }
	
	if(empty($usuario)){
	    $usuario="Invitado";
	}
	?>
<center>
	<a href="#oldest"><div id="headr" class="header">
		<img class="lawzebo" src="baner.png">
	</div>   
	</a>
</center>

<div id="oldest"></br ></br></br></br></br></div>
<div class="eltodo">
    <p class="saltt">&nbsp;</p>
<div   class="publicontent">
	Contenido Publicado:
</div>
<div class="menudeutilidades">
	Menú de Utilidades:
</div>
<span class="saltt"></br></span></br>
<center><a href="#newest"><span class="recient">↓ Recientes ↓ </span></a></center>

<div class="opciones">
	<span class="option"><u>Opciones:</u></span>
	    <form method="post" action="centrodidatos.php">
	<p class="pulsantes"><?php echo "Usuario: ".$usuario.".";?></p>
	<?php
	if($usuario != "Invitado"){?>
	<p><input type="submit" name="post" class="pulsan" value="Crea un Post."></p>
	<p><input type="submit" name="courses" class="pulsan" value="Curso."></p>
	<p><input type="submit" name="password" class="pulsan" value="Cerrar Sesión."></p>
	<input type="hidden" value="<?php echo $usuario ?>" name="utente">
    	</form>
    	<?php
	}else{
	    ?>
	    <p class="pulsantes disbled uno">Crea un Post.<span>Para poder crear un post deberá iniciar sesión.</span></p>
    	<p class="pulsantes disbled dos">Curso.<span>Para poder ingresar al curso deberá iniciar sesión en una cuenta.</span></p>
    	<p class="pulsantes disbled tres">Cerrar Sesión.<span>Para poder cerrar sesion deberá iniciar sesión en una cuenta.</span></p>
	    <?php
	}
    	?>
</div>

<div class="media">
    <input type="hidden" name="c" id="fechayjora">
	<span class="option"><u>Fecha y Hora:</u></span>
	<p class="pulsantes" id="mediaDay">Fecha: -----</p>
	<p class="pulsantes" id="mediaDei">Día: -----</p>
	<p class="pulsantes" id="mediaTime">Hora: ----</p>
</div>

<form class="hola">
</br><?php

$connect=mysqli_connect("localhost","id9406842_root","quesueno2121","id9406842_usuarios") or die("Problemas de conexión");

$registros = mysqli_query($connect,"select contenuto from comentarios") or die ("Problemas de Selección de Datos.");

while ($reg=mysqli_fetch_array($registros))
{
	
	
	echo $reg['contenuto'];
	echo "</br></br>";
	

} 

mysqli_close($connect);
?>
</form>
<center><a href="#oldest" id="newest"><span class="recient">↑ Volver Inicio ↑</span></a></center>
	</div>
</br></br>
</div>
<script type="text/javascript">
	var scroll = window.requestAnimationFrame ||
            function(callback){ window.setTimeout(callback, 1000/60)};

            var elementsToShow = document.querySelectorAll('.scrolleable');
    function loop() {

  elementsToShow.forEach(function (element) {
    if (isElementInViewport(element)) {
      element.classList.add('is-visible');
    } else {
      element.classList.remove('is-visible');
    }
  });

  scroll(loop);
}

loop();

function isElementInViewport(el) {
  // special bonus for those using jQuery
  if (typeof jQuery === "function" && el instanceof jQuery) {
    el = el[0];
  }
  var rect = el.getBoundingClientRect();
  return (
    (rect.top <= 0
      && rect.bottom >= 0)
    ||
    (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.top <= (window.innerHeight || document.documentElement.clientHeight))
    ||
    (rect.top >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
  );
}

</script>
</html>