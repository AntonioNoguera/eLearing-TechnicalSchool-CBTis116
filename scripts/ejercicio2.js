var pref=50; var co1f=0; var er1f=0;var numerotimerf=0;var notaactualf="";var actualsecondsf=0;
                
                function verocolpoprimof(){
                    pref=50;co1f=0;er1f=0;numerotimerf=0;notaactualf="";
                    document.getElementById('firstbuttonf').style.display="none";
                    document.getElementById("notif").disabled = false;
                    document.getElementById("informacionf").innerHTML="";
                    colpoprimof();
                }
        
        		function colpoprimof(){ 
        		    
        			if(numerotimerf===0){timerf();
        				notif.focus();
        			}
        
        			document.getElementById('F').style.display="none";
        
        			var aleatoriof= Math.round((Math.random()*6));
        			var notasf = ["DOF","REF","MIF","FAF","SOLF","LAF","SIF"];
        			var fi=0;
        
        			notaactualf = notasf[aleatoriof];
        
        			do{
        				if(fi==aleatoriof){
        					document.getElementById(notasf[fi]).style.display="block";
        				}else{
        					document.getElementById(notasf[fi]).style.display="none";
        				}
        				fi++;
        			}while(fi<=6);
        		}
        
        		function timerf(){
        			f = setTimeout(function(){ 
        				numerotimerf++;document.getElementById('T1f').innerHTML="Tiempo: "+actualsecondsf+" s";timerf();},10);
        			
        			actualsecondsf=Math.round(numerotimerf/100);
        			
        			if(actualsecondsf>=120){
        			    enderf();
        			}
        	    }
        	    
        		function entraditestof(){
        			notif.value=notif.value.toUpperCase();
        		}
        
        		function checkf(){
        			if(event.code=="Enter"){
        				damaf();
        			}
        		}
        
        
        		function damaf(){
        		    pref--;
        		    if(pref<=0){
            			enderf();
            			return false;
        		    }
        		
        			if((notif.value+"F")==notaactualf){
        				co1f++;document.getElementById("cof").innerHTML="Correctas: "+co1f+".";
        				document.getElementById("contf").innerHTML="Preguntas Restantes: "+pref+".";colpoprimof();notif.value="";
        			}else{
        				er1f++;document.getElementById("erf").innerHTML="Incorrectas: "+er1f+".";
        				document.getElementById("contf").innerHTML="Preguntas Restantes: "+pref+".";colpoprimof();notif.value="";
        			}
        	
        		
        		}
                
                function enderf(){
                    document.getElementById("cof").innerHTML="Correctas: 0.";
                    document.getElementById("erf").innerHTML="Incorrectas: 0.";
                    document.getElementById("contf").innerHTML="Preguntas Restantes: 50.";
                    clearTimeout(f);
                    document.getElementById('T1f').innerHTML="Tiempo: 0 s";
                    document.getElementById("notif").disabled = true;
                    notif.value="";
                    document.getElementById('firstbuttonf').style.display="inline-block";
                    
                    var fi=0;
                    
                    var desaparecerf = ["DOF","REF","MIF","FAF","SOLF","LAF","SIF","F"];
                    do{

                        
                        
                        if(fi==7){
                            document.getElementById(desaparecerf[fi]).style.display="inline-block";
                        }else{
                            document.getElementById(desaparecerf[fi]).style.display="none";
                        }
                        
                        fi++;
                    }while(fi<=7);
                    
                    
                    var porcentajef= (co1f*100/50);
                    
                    if(porcentajef >=80){
                        //pasa
                        var mensajef = "Porcentaje de aciertos: "+(co1f*100/50)+"%,"+" En un tiempo: "+actualsecondsf+"s. ¡Bien hecho!";
                        document.getElementById("6").style.display="inline-block";
                        $("#informacionf").removeClass("mala");
                        $("#informacionf").addClass("bien");
                        
                    }else{
                        //pos no
                        var mensajef = "Porcentaje de aciertos: "+(co1f*100/50)+"%,"+" En un tiempo: "+actualsecondsf+"s. Vuelve a realizar la prueba.";
                        $("#informacionf").removeClass("bien");
                        $("#informacionf").addClass("mala");
                        
                    }
    
                    document.getElementById("informacionf").innerHTML=mensajef;
                }