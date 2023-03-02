var aleatorion=0;var notaactualn="";var correctas=0;var incorrectas=0;var preguntas=50;var numerotimennnn=0;var actualseconnn=0;

		function verocolpoprimon(){
		    aleatorion=0;notaactualn="";correctas=0;incorrectas=0;preguntas=50;numerotimennnn=0;actualseconnn=0;
			document.getElementById("notin").disabled=false;
			document.getElementById("firstbuttonn").style.display="none";
			document.getElementById("informacionn").innerHTML="";

			notin.focus();
			colpoprimon();
			timernn();

		}

		function timernn(){
        			n = setTimeout(function(){ 
        				numerotimennnn++;actualseconnn=Math.round(numerotimennnn/100);document.getElementById('T1n').innerHTML="Tiempo: "+actualseconnn+" s";timernn();},10);
        			
        			actualseconds=Math.round(numerotimennnn/100);

        			if(actualseconnn>=120){
        			    finale();
        			}
        	    }

		function colpoprimon(){
			var notasdel = ["DO","RE","MI","FA","SOL","LA","SI"];
			aleatorion= Math.round((Math.random()*6));
			notaactualn = notasdel[aleatorion];
			document.getElementById("markerNotas").innerHTML=notaactualn;
		}

		function entraditeston(){
			notin.value=notin.value.toUpperCase();
		}

		function checkn(){
			if(event.code=="Enter"){verificatore();}
		}

		function verificatore(){
				var translatenotes = ["C","D","E","F","G","A","B"]
				var neonotas = translatenotes[aleatorion];

				preguntas--;

				if(preguntas<=0){
					finale();
					return false;
				}

				if(neonotas == notin.value){
					colpoprimon();
					correctas++;
				}else{
					colpoprimon();
					incorrectas++;
				}

				document.getElementById("contn").innerHTML="Preguntas Restantes: "+preguntas+".";
				document.getElementById("ern").innerHTML="Incorrectas: "+incorrectas+".";
				document.getElementById("con").innerHTML="Correctas: "+correctas+".";


				notin.value="";

		}

		function finale(){
                    document.getElementById("con").innerHTML="Correctas: 0.";
                    document.getElementById("ern").innerHTML="Incorrectas: 0.";
                    document.getElementById("contn").innerHTML="Preguntas Restantes: 50.";
                    clearTimeout(n);
                    document.getElementById('T1n').innerHTML="Tiempo: 0 s";
                    document.getElementById("notin").disabled = true;
                    notin.value="";
                    document.getElementById("markerNotas").innerHTML="--";
                    document.getElementById('firstbuttonn').style.display="inline-block";
                    
                    //Desdiplay
                    
                    var porcen= (correctas*100/50);
                    
                    if(porcen >=80){
                        //pasa
                        var mennnsaje = "Porcentaje de aciertos: "+porcen+"%,"+" En un tiempo: "+actualseconnn+"s. ¡Bien hecho!";
                        document.getElementById("2").style.display="inline-block";
                        $("#informacionn").removeClass("mala");
                        $("#informacionn").addClass("bien");
                        
                    }else{
                        //pos no
                        var mennnsaje = "Porcentaje de aciertos: "+porcen+"%,"+" En un tiempo: "+actualseconnn+"s. Vuelve a realizar la prueba.";
                        $("#informacionn").removeClass("bien");
                        $("#informacionn").addClass("mala");
                        
                    }
    
                    document.getElementById("informacionn").innerHTML=mennnsaje;
                }