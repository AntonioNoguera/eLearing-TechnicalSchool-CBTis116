<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<link rel="icon" href="LawZebo.png" sizes="16x16" type="image/png">
	<title>Lawzebo! 2.0.0</title>
<style>
	@import url('https://fonts.googleapis.com/css?family=Tomorrow&display=swap');
	body{
	    min-height:100vh;
	    background-image: linear-gradient(black, #666666); 
	    background-attachment: fixed;
	    text-align:center;
	    vertical-align: middle;
	    
	}
	
	*{
		padding:0;
		margin:0;
		font-family: 'Tomorrow', sans-serif;
		color: white; 
	}

	#form{
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
		border:3px solid white;
		text-align: center;
		width:40%;
		border-radius: 30px;
		transition: box-shadow 1s;
		box-shadow: 0px 0px 20px white;
		min-width:400px;
		display:inline-block;
	}

	#form:hover{
		box-shadow: 0px 0px 50px white;
	}
	
	#usuario{
		font-size: 40px;
		width: 80%;
		text-align: center;
		background: none;
		border: 2px white solid;
		font-weight: bold;
		outline: none;
		border-radius:0px;
		padding-top: 5px;
		padding-bottom: 5px;
		box-sizing: border-box;
		display:inline-block;
	}
	
	#contrasss{
	    width:80%;
		display: none;
  		flex-wrap: nowrap;
		text-align:center;
	}
	
	.ojo{
	    font-family:none;
	    background:black;
	    max-width:50px;
	    min-width:50px;
	    height: 50px;
	    margin:auto;
	    display:inline-block;
	    color:black;
	    border: 4px solid black;
        box-shadow: inset 0px 5px 0px 10px white;
		border-radius: 100%; 
		position: relative; 
	    margin-left: 5px;
	    font-size:50px;
	    transition: box-shadow .5s;
	    cursor:pointer;
	    outline:none;
	    animation:ojoloco 2s infinite running;
	   
	}
	
	@keyframes ojoloco{
	    0%  {box-shadow:inset 5px 0px 0px 8px white;}
	    50% {box-shadow:inset -5px 0px 0px 8px white;}
        100%  {box-shadow:inset 5px 0px 0px 8px white;}
	}
	
	.ojo:hover{
	    animation:ojoloco 2s infinite paused;
	    box-shadow:inset 0px 0px 0px 8px white;
	}
	
	.ojo span {
        display: none;
    }
    
    .ojo:hover span {
        padding: 5px 20px 5px 5px;
        display: block;
        z-index: 100;
        left: 0px;
        margin-top:-62px;
        width: 200px;
        position: absolute;
        font-size:15px;
        top: 10px;
        text-decoration: none;
        background:#666666;
        border-radius:20px;
    }
	
	 #contra{
		font-size: 40px;
		text-align: center;
		background: none;
		border: 2px white solid;
		font-weight: bold;
		outline: none;
		border-radius:0px;
		display:inline-block;
	    outline:none;
		width: 100%;
		padding-top: 5px;
		padding-bottom: 5px;
	}

	hr{
		left:50px;
		right:50px;
	}

	#titolo{
		font-size: 50px;
	}

	#envii{
		width: 80%;
		color: grey;
		background: white;
		border:none;
		padding: 5px;
		font-size: 20px;
		cursor:pointer;
		outline: none;
		font-weight: bold;
		transition: box-shadow .2s;
	}

	#envii:hover{
		box-shadow: 0px 0px 10px grey;
	}

	#log{
		width: 200px;
		height:200px;
		border-radius:360px;
		transition: box-shadow .8s;
	}
	
	.logo{
		width: 200px;
		height:200px;
		border-radius:360px;
		transition: box-shadow .8s;
		animation: login 1s paused;
	}
	
	.logont{
		width: 200px;
		height:200px;
		border-radius:360px;
		transition: box-shadow .8s;
		animation: logint 1s paused;
	}

	::selection {
  		color: #E24040;
		background: none;
	}

	a{
		text-decoration:none;
	}
	a:hover{
	    text-decoration:underline;
	}
	
	#info{
		padding-top: 5px;
		padding-bottom: 5px;
		color:#E24040;

	}
	
	#spam{
	    display:none;
	}
	
	@keyframes login {
	    0% {box-shadow: 0px 0px  0px 0px white;}
	    20%{box-shadow: 0px 0px  0px 30px white;}
	    100%{box-shadow:0px 0px  0px 10px #82FFA9;}
	}
	
	@keyframes logint {
	    0% {box-shadow: 0px 0px  0px 0px white;}
	    20%{box-shadow: 0px 0px  0px 30px white;}
	    100%{box-shadow:0px 0px  0px 10px #E24040;}
	}
	
	.misscaja{
	    animation:movimientoperrondecajita .3s running;
	}
	
	@keyframes movimientoperrondecajita {
	    20% {transform: rotate(1deg);}
	    40% {transform: rotate(-2deg);}
	    60% {transform: rotate(2deg);}
	    80% {transform: rotate(-2deg);}
	    100%{transform: rotate(0deg);}
	}
	
	#forme{
	    display:none;
	}	
	
	@media screen and (max-width:500px){
            /*Portrait*/
        #form{
        position: absolute;
        min-width:0px;
		border:3px solid white;
		text-align: center;
		width:90%;
		
		border-radius: 30px;
		transition: box-shadow 1s;
		box-shadow: 0px 0px 20px white;

		display:inline-block;
        }
        #contra{
            font-size:35px;
        }
        ::placeholder{
            font-size:35px;
        }
}
</style>

<script>

</script>
</head>


    <?php
    $aipi= $_SERVER['REMOTE_ADDR'];
	    
	$conexion = mysqli_connect("localhost","root","","elearningphp")or die("Error en conexión");
	    
	    $registros = mysqli_query($conexion, "select user from miembros where ipes='$aipi'")or die("Error de Registros");
	    
	    $reg=mysqli_fetch_array($registros);
	    
	    if($reg){
	         $usuario = $reg['user'];
	    }
	?>
	    
		<div id="form">
		<br/>
			<img id="log" src="LawZebo.png"><br/>
			<br/>
			<p id="titolo">Acceder:</p><br/>
    			<input type="text" id="usuario" class="cajas" maxlength="10" spellcheck="false" placeholder="Ingrese Cuenta" onkeypress="validaenter()" onkeyup="letteraprimo()" onkeydown="letteraprimo()" autocomplete="off">
			
			<div id="contrasss">
			    <input type="password" id="contra" class="cajas" maxlength="10" spellcheck="false" placeholder="Contraseña" onkeypress="validaenter()">
			
			    <button class="ojo" onmousedown="mostrapass()" onmouseup="mostrapass()" 
			    onmouseenter="desbuger()" onmouseleave="desbuger()"><span>Haga clic para mostrar su contraseña.</span></button>
			
		</div>
			
			<form id="forme" method="post" action="dashboard.php">
			    <input id="testodiconta" name="nomediconta" type="text" value="<?php echo $usuario; ?>">
			    <input id="ip" name="ip" type="text" value="<?php echo $aipi; ?>">
			</form>
	
			<br/>
			<p id="info"></p>
			<input type="submit" id="envii" onmouseup="ajax()" value="Siguiente"><br/><br/>
			<p><a id="enlace" href="http://localhost/eLearing-TechnicalSchool-CBTis116/dashboard.php">Continua Sin Cuenta</a> ó <a href="http://localhost/eLearing-TechnicalSchool-CBTis116/registro.html">Crea Una Cuenta</a><br/><br/></p>
		</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
	    function jsfunction(){
		   document.getElementById("forme").submit();
		}
	
		var xml;
		var result = document.getElementById('info');

        var passiff=0;
        
		function ajax(){
		    if(window.XMLHttpRequest){xml = new XMLHttpRequest();}else{xml = ActiveXObject("Microsoft.XMLHTTP");}

			var conto = document.getElementById('usuario').value;
			var pass = document.getElementById('contra').value;
			
			var info = "account="+conto+"&newpass="+pass+"&passif="+passiff;
			

			xml.onreadystatechange =function(){
				if(xml.readyState==4 && xml.status==200){
					var mensaje = xml.responseText;
					
					if(mensaje=="accertare()"){
					    //Existe Usuario
					    
					    document.getElementById("usuario").style.display="none";
                        document.getElementById("contrasss").style.display="inline-flex";
                        
                        result.innerHTML = "";
                        
                        corretto();
                        
                        passiff=1;
                        
                        contra.focus();
                        
                        var cuenta= document.getElementById("testodiconta");
					       
					       var containgresada=document.getElementById("usuario");
					       
					       cuenta.value= containgresada.value;
                        
					}
					else if(mensaje=="Ingrese la cuenta."||mensaje=="Cuenta inexistente, por favor ingrese de nuevo."){
    					//No Existe Usuario
    					
    					result.innerHTML = mensaje;
					    
                        scorretto();
					}
					else{
					    //Contraseña Responde
					    
					    if(mensaje=="Contraseña incorrecta, ingrese de nuevo."){
					       result.innerHTML = mensaje;
					       scorretto();
					    }else{
					
					       corretto();
					       document.getElementById("forme").submit();
					    }
					    
					}
				}
			}

			xml.open("POST","esistente.php",true);
			xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xml.send(info);
		}

		function validaenter(){if(event.code=="Enter"){ajax();}}
		
		function corretto(){
		    $("#log").addClass("logo");
		    
		    $(".cajas").css("borderColor", "white");
		    
		    document.getElementById("log").style.boxShadow="0px 0px  0px 10px #82FFA9";
            document.getElementById("log").style.animationPlayState="running";
		}
		
        function scorretto(){
            $("#log").addClass("logont");
            
            $(".cajas").addClass("misscaja");
            $(".cajas").css("animation-play-state", "running");
            
            $(".cajas").css("borderColor", "#E24040");
            
            
            
            document.getElementById("log").style.boxShadow="0px 0px  0px 10px #E24040";
            document.getElementById("log").style.animationPlayState="running";
            
            $(document).ready(function(){ $("#usuario").select();});
            $(document).ready(function(){ $("#contra").select();});
        }
        
        document.getElementById("log").addEventListener("animationend", ressetto);
        
        usuario.addEventListener("animationend",lol);
        
        contra.addEventListener("animationend",lol);
        
        
        function lol(){
            usuario.style.animationPlayState="paused";
            usuario.classList.remove("misscaja");
            
            contra.style.animationPlayState="paused";
            contra.classList.remove("misscaja");
            
        }
        
        function ressetto(){
            
		    document.getElementById("log").classList.remove("logont");
		    document.getElementById("log").classList.remove("logo");
		    
		    $("#log").addClass("logo");
		    document.getElementById("log").style.animationPlayState="paused";
		    document.getElementById("log").classList.remove("logo");
		    
		    $("#log").addClass("logont");
		    document.getElementById("log").style.animationPlayState="paused";
		    document.getElementById("log").classList.remove("logont");
		    
		    $(".cajas").css("animation-play-state", "paused");
		}
		
		passs=0;
		var varpass= document.getElementById("contra");
		
		function mostrapass(){
		    
		    if(passs==0){
		        varpass.type="text";
		        passs=1;
		    }
		    else if(passs==1){
		        varpass.type="password";
		        passs=0;
		    }
		}
		
		pasasa=0;
		    
		function desbuger(){
		    
		    if(pasasa==0){
		        pasasa=1;
		    }else if(pasasa==1){
		        pasasa=0;
		        if(varpass.type=="text"){ varpass.type="password"; passs=0;}
		    }
		    
		}
		
		function letteraprimo(){
			var upperfirstvalue= (usuario.value).length;
			if(upperfirstvalue==1){usuario.value= usuario.value.toUpperCase();}
		}
		
		function send(){
		    document.getElementById("forme").submit();
		}
	</script>
	<?php
	    if($reg){
	        ?>
	        <script>send();</script>
	        <?php
	    }
	    
	    ?>

</html>