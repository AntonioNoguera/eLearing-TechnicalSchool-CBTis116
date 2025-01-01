<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
        <link rel="icon" type="image/png" href="LawZebo.png" />
        <title id="titulo">¡Crea Una Publicación!</title>
        <style>
            
            @import url('https://fonts.googleapis.com/css?family=Tomorrow&display=swap');
            
            *{
                padding:0;
                margin:0;
                font-family: 'Tomorrow', sans-serif;
                color: white;
                user-select: none;
                outline:none;
            }
            
            body{
                min-height:100vh;
                background-image: linear-gradient(black, #666666); 
                background-attachment: fixed;
                text-align:center;
                vertical-align: middle;
                user-select:none;
            }   
            
            .header{
                background-image:none;
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

            .titulo{
                font-size:50px;    
            }
            
            .titu{
                font-size:35px;
            }
            
            .zonaditesto{
                background:none;
                width: 80%;
                color:white;
                font-size: 20px;
                resize: none;
                text-align: center;
                height:400px;
                border:2px solid white;
                border-radius:20px;
                padding:20px 30px 20px 30px;
            }
            
            .pulsantes, .pulsan{
                padding-top:5px; 
                padding-bottom:5px;
                padding-left: 0px;
                background:none;
                border:none;
                transition: padding-left .25s,text-shadow .25s;
            }
        
            
            .submit{
                color:white;
                width:170px;
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
            }
            
            .submitnt{
                margin:10px 0px 0px 0px;
                width:350px;
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
            }
            
            .submit:hover,.submitnt:hover{
                background:#AFAFAF;
                color:white;
            }
            
            .option{
                font-size:20px;
            }

            .opciones{
                box-shadow: 0px 0px 15px white;
                position: fixed;
                width:15%;
                left: 2%;
                border:2px solid white;
                border-radius:20px;
                padding-left:20px; 
                padding-top:10px;
                margin-top:18px;
            }
        
            #campo{
                font-size: 20px;
                border-radius:10px;
                width: 350px;
                text-align: center;
                background: none;
                border: 2px white solid;
                font-weight: bold;
                outline: none;
                padding-top: 5px;
                padding-bottom: 5px;
                box-sizing: border-box;
                display:inline-block;
            }
            
            .media{
                position: fixed;
                box-shadow: 0px 0px 15px white;
                width:17%;
                text-align:left;
                border:2px solid white;
                border-radius:20px;
                padding-left:20px; 
                padding-top:10px;
                margin-left:2%;
            }
            
            #spam{
                display:none;
            }
        
            .pulsantes:hover{
                cursor: pointer;
                text-shadow: white 0px 0px 10px;
            }
                
            #contenido{
                color:white;
                border: 1.5px solid white;
                border-radius:10px;
                padding-top:10px;
                text-align:center;
                background:none;
                box-shadow: 0px 0px 15px 0px white;
                margin-left:22%;
                padding:10px 20px 10px 20px;
                margin-right:2%;
            }
            
            #contenido p{
                margin:10px 0px 10px 0px;
            }
            
            #content-div1,#content-div2,#content-div3,#content-div4,#content-div5,#content-div6,#content-div7,#content-div8{
              display:none;   
            }
            
            .submit-content{
                margin:10px 0px 0px 0px;
             
                color:white;
                background:none;
                border:1px white solid;
                border-radius:10px;
                padding:5px 5px 5px 5px;
                cursor:pointer;
                font-size:20px;
                transition:background .5s, color .5s,font-size .5s;
            }
            
            .submit-content:hover{
                color:white;
                background:grey;
                font-size:22px;
            }
            
            .space{
                margin-top:300px;
            }
            
            ::selection {
                color: #E24040;
                background: none;
            }
            
            .notas{
                display:none;
            }
            
            .imga{
                background-image: linear-gradient(#BEBEBE, white); 
                padding:20px 20px 20px 20px;
                box-shadow: 0px 0px 20px white;
                border-radius:10px; 
                border:2px solid white;
            }
            
            .casella{
                color:white;
                background:none;
                border:1px white solid;
                text-align:center;
                font-size:30px;
                padding:5px 10px 5px 10px;
            }
            .sscorr{
                cursor:pointer;
                
                font-size:20px;
                color:white;
                background:none;
                border:1px white solid;
                border-radius:10px;
                padding:5px 5px 5px 5px;
             
                transition:background .5s, color .5s,font-size .5s;
            }
            
            .sscorr:hover{
                color:white;
                background:grey;
                font-size:25px;
            }
            
            .bien{
                color:#82FFA9;
            }
            .mala{
                color:#E24040;
            }
            
            .headernote{
                font-size:50px;
                border:2px solid white;
                padding:10px 20px 10px 20px;
                border-radius:10px;
            }
            
            select{
                background:none;
                font-size:20px;
                width:60%;
                text-align:center;
            }
            .optione{
                background: hsl(0, 0%, 75%,0.8);
                color:white;
                font-size:15px;
                width:80%;
            }
            .acot{
                text-align:center;
                padding:0px 17% 0px 17% ;
                font-size:20px;
            }
            
            .motheracot{
                text-align:center;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="scripts/ejercicio1.js"></script>
        <script type="text/javascript" src="scripts/ejercicio2.js"></script>
        <script type="text/javascript" src="scripts/ejerciciosN.js"></script>
        <script type="text/javascript" src="scripts/progressmaker.js"></script>
        
    </head>

    <center>
    <div id="headr" class="header">
        <img src="baner.png">
    </div>
</center>
    <?php
    error_reporting(0);
    if (isset($_POST['post'])) {
        ?>
        <div class="context">
        
        </br></br></br></br></br></br>
        <form method="POST" action="vistaprevia.php">
            Título de la Publicación:
            <input type="hidden" name="utente" value="<?php echo $_REQUEST['utente']; ?>">
            <input type="hidden" name="fechayjora" value="<?php echo $_REQUEST['c'];?>">
            <input id="campo" maxlength="28" contenteditable="true" required type="text" spellcheck="false" name="titulo" autocomplete="off">
    
            <br><br>
    
            <textarea class="zonaditesto"  required name="Postt" id="testoarea" maxlength="1100" onkeydown="letras(); enters();" onkeyup="letras()"></textarea></br></br><p>Letras Disponibles: <span id="cien">1100</span>.</p>
         </br>
        <input class="submit" type="reset" name="Limpiar" Value="Limpiar">
        &nbsp;
        <input class="submit" type="submit" name="Publicar" Value="Publicar"></br>
        
        </form>
        <a href="dashboard.php"><button class="submitnt">Volver</button></a>
        
        <p>&nbsp;</p>
        </div>
        <?php
            } else if (isset($_POST['password'])) {
                
                $conexion = mysqli_connect("localhost","root","","elearningphp")or die("Error en conexión");

    mysqli_query($conexion,"update miembros
                            set ipes=''
                            where user='$_REQUEST[utente]'");

                            
        ?>
        <script>window.location.replace("http://index.php");</script>
        <?php
        
            }else if (isset($_POST['courses'])){
                
                $conexion = mysqli_connect("localhost","root","","elearningphp")or die("Error en conexión");

        $registros = mysqli_query($conexion, "select user,uno,dos,tres,cuatro,cinco,seis,siete,ocho from miembros where user='$_REQUEST[utente]'")or die("Error de Registros");


        $reg=mysqli_fetch_array($registros);
        
        if($reg){
            echo "<input id='un' type='hidden' value='". $reg['uno'] . "'>";
            echo "<input id='do' type='hidden' value='". $reg['dos'] . "'>";
            echo "<input id='tr' type='hidden' value='". $reg['tres'] . "'>";
            echo "<input id='cu' type='hidden' value='". $reg['cuatro'] . "'>";
            echo "<input id='ci' type='hidden' value='". $reg['cinco'] . "'>";
            echo "<input id='se' type='hidden' value='". $reg['seis'] . "'>";
            echo "<input id='si' type='hidden' value='". $reg['siete'] . "'>";
            echo "<input id='oc' type='hidden' value='". $reg['ocho'] . "'>";
        }
        ?>
        <input type="hidden" id="usuario" value="<?php echo $_REQUEST['utente']; ?>">
        </br></br></br></br></br></br>
        <p class="titulo">Curso básico de solfeo:</p>
        </br></br>
        <div class="media">
            <span class="option"><u>Contenido:</u></span>
            <p class="pulsantes" onclick="cambiadisp(this.id)" id="div1">» Introducción.</p>
            <p class="pulsantes" onclick="cambiadisp(this.id)" id="div2">» Teoría básica.</p>
            <p class="pulsantes" onclick="cambiadisp(this.id)" id="div3">» Práctica de notas.</p>
            <p class="pulsantes" onclick="cambiadisp(this.id)" id="div4">» Clave de Sol.</p>
            <p class="pulsantes" onclick="cambiadisp(this.id)" id="div5">» Práctica de Clave de Sol.</p>
            <p class="pulsantes" onclick="cambiadisp(this.id)" id="div6">» Clave de Fa.</p>
            <p class="pulsantes" onclick="cambiadisp(this.id)" id="div7">» Práctica de Clave de Fa.</p>
            <p class="pulsantes" onclick="cambiadisp(this.id)" id="div8">» Examen Final.</p>
            
            <br/>
        </div>
        
        <div class="media space">
            <span class="option"><u>Progreso de : <?php echo $_REQUEST['utente']; ?>.</u></span>
            <p class="pulsan">Progreso del curso: <span id="numeroprogreso"></span></p>
            <p class="pulsan"><span class="fine" id="unP">⚫ </span>Primer módulo: <span id="unD"></span>.</p>
            <p class="pulsan"><span class="fine" id="doP">⚫ </span>Segundo módulo: <span id="doD"></span>.</p>
            <p class="pulsan"><span class="fine" id="trP">⚫ </span>Tercer módulo: <span id="trD"></span>.</p>
            <p class="pulsan"><span class="fine" id="cuP">⚫ </span>Cuarto módulo: <span id="cuD"></span>.</p>
            <p class="pulsan"><span class="fine" id="ciP">⚫ </span>Cinco módulo: <span id="ciD"></span>.</p>
            <p class="pulsan"><span class="fine" id="seP">⚫ </span>Seis módulo: <span id="seD"></span>.</p>
            <p class="pulsan"><span class="fine" id="siP">⚫ </span>Siete módulo: <span id="siD"></span>.</p>
            <p class="pulsan"><span class="fine" id="ocP">⚫ </span>Ocho módulo: <span id="ocD"></span>.</p>
            <br/>
        </div>
        
        <div id="contenido">
            
            <div class="content" id="content-div1">
                
                <p class="titu">Introducción:</p>
                
                <p>Este curso fue creado como proyecto final del submodulo "Administra y configura aplicaciones de E-Learning" del equipo 6, del grupo 6BMPG del plantel CBTIS 116.</p>
                <br>
                <p>La finalidad de este proyecto es la creación de un tutorial interactivo, donde el usuario pueda registrarse en el curso, ver información, realizar ejercicios que den seguimiento con los temas y un examen que avale sus conocimientos.</p>
                <br>
                <p>El usuario podra registrar una cuenta, o continuar sin la necesidad de una, desde su computadora o dispositivo móvil.</p>
                <br>
                <p>Esperamos que el funcionamiento y su experiencia en este curso le sea satisfactorio, si tiene comentarios u opiniones le proporcionamos esta forma de contacto: michaelantonionogueraguzman@gmail.com</p>
                    
                    <p>
                            <button class="submit-content" onclick="ajax(this.id);" id="0">Concluir Tema</button>
                    </p>
                    
                
                </div>
            
            
            <div class="content" id="content-div2">
                
                <p class="titu">Conceptos básicos:</p>
                
                <h3>¿Qué es una partitura?</h3>
                
                <p>La partitura es aquel texto parcial de una composición u obra musical, en la cual se representa a uno de los instrumentos o voces que integran la obra completa, es decir, habrá tantas partituras como instrumentos y voces haya, el panista tiene la suya, el trompetista otra y así sucesivamente.</p>
                </br>
                <h3>¿Qué es el solfeo?</h3>
                
                <p>La nota musical es el elemento a partir del cual se arman las diferentes melodías y armonías en la música ya que cada una de ellas representa un sonido particular e indivisible que, puesta en conjunto con otras, arma un sonido más complejo y duradero.<p>
                </br>
                <h3>Notas Musicales.</h3>
                
                <p>Una nota es un concepto musical que sirve para expresar la altura o tono de un sonido. Concretamente, las notas son nombres para ciertas frecuencias, que permiten decir que un sonido musical corresponde a cierta nota, es una combinación de varias notas, está entre dos notas. Así una nota puede denotarse según la convención musical o mediante la expresión de su frecuencia, por ejemplo la 4 es igual a 440 hercios, o vibraciones por segundo en afinación estándar, o 444 hercios en afinación de cámara. También se suele denominar incorrectamente "nota" a los sígnos que expresan la duración del sonido, cuando en realidad éstos son las figuras. Los nombres de las notas musicales provienen del canto gregoriano himno a San Juan Bautista, popular en la Edad Media. Los sonidos musicales están representados por las NOTAS. La altura sonora se representa situando estos signos en las diferentes líneas y espacios del pentagrama. Tenemos siete notas musicales, que ordenados de grave a agudo forman la escala musical. Las notas son DO, RE, MI, FA, SOL, LA y SI.</p>
                </br>
                <h3>¿Qué es y para qué sirve el pentagrama?</h3>
                
                <p>El pentagrama es el conjunto de cinco líneas paralelas y equidistantes que se usan para escribir las notas musicales. Pentagrama es una palabra de origen griego: Penta significa cinco y grama, significa escrito. En el pentagrama se usan las líneas y los espacios para escribir las notas.</p>
                </br>
                <h3>¿Qué es una clave musical?</h3>
                </br>
                <p>La clave en notación musical es un signo cuya función es indicar la altura de la música escrita, asignando una determinada nota a una línea del pentagrama, que se toma como punto de referencia para establecer los nombres del resto de las notas.</p>
                </br>
                
                <h3>Sistema de notación musical anglosajón</h3>
                <p>El sistema de notación musical anglosajón es un tipo de notación musical con base alfabética. Es conocido también por las siguientes denominaciones:</p>
                </br>
                <p>» Cifrado inglés.</p>
                <p>» Cifrado americano (se refiere a Estados Unidos, país que lo popularizó durante el siglo XX).</p>
                <p>» Cifrado literal numérico.</p>
                </br>
                <p>Deriva de la notación griega, que nombraba las notas desde la letra alfa hasta la gamma, siendo alfa la nota la y gamma la nota sol, como se ha sabido gracias a los hallazgos de composiciones, como el epitafio de Seikilos, los tres himnos de Mesomedes de Creta y los himnos délficos. Con la llegada de la cultura latina al norte de Europa, esta nomenclatura (que ya había sido transliterada por los romanos), arraigó y con el paso de los siglos se extendería a Alemania, Inglaterra y a sus colonias.</p>
                <img src="anglosajon.png">   
                    <p>
                            <button class="submit-content" onclick="ajax(this.id);" id="1">Concluir Tema</button>
                    </p>
                    
            </div>
            
            
             <div class="content" id="content-div3">
                
                <p class="titu">Práctica de notas:</p>
                </br>
                    <p><span id="markerNotas" class="headernote">--</span></p>
                    </br>
                    <p><button id="firstbuttonn" class="sscorr" onclick="verocolpoprimon();">Clic Para Iniciar</button></p>
                    <input onkeypress="entraditeston();" onkeydown="entraditeston();" disabled onkeyup="entraditeston(); checkn();" placeholder="Ej: C" id="notin" class="casella" maxlength="1"></input>
                    
                <div class="Marker">
                    <p id="contn">Preguntas: -</p>
                    <p id="con">Correctas: -</p>
                    <p id="ern">Incorrectas: -</p>
                    <p id="T1n">Tiempo: -</p>
                    <p id="informacionn"></p>
                </div> 
                    
                    <p><button class="submit-content" style="display:none;" onclick="ajax(this.id);" id="2">Concluir Tema</button></p>
                
            </div>
            
            
            <div class="content" id="content-div4">
                
                <p class="titu">Clave de Sol:</p>
                
                <h3>¿Cuál es la función de la clave en Sol?</h3>
                <p>La función de esta clave igual que el resto de claves como la de Fa es colocar las notas en el pentagrama en una altura característica. Por ejemplo, la nota Do no está en el mismo lugar del pentagrama si este está en clave de Sol o en otra clave diferente.</p></br>
                
                <h3>¿Cuál es el significado de Clave de Sol?</h3>
                <p>Esta clave no tiene un significado más allá de situar las notas en una posición concreta del pentagrama.</p>
                </br>
                
                <h3>Las notas en clave de Sol</h3>
                <p>El orden de las notas en esta clave es la que ya conoces Do, Re, Mi, Fa, Sol, La, Si y sus repeticiones. Lo que tiene de característico esta clave es el lugar que ocupa cada una de ellas en el pentagrama, que es la segunda línea empezando por debajo. Este sol es el que corresponde a la nota Sol que está situada cuatro teclas en sentido ascendente del Do central del piano.</p>
                </br>
                <h3>Instrumentos que usan la clave de Sol</h3>
                <p>Al usarse esta clave para las tesituras altas los instrumentos que leen y escriben las notas en esta clave son: la guitarra, el violín, la flauta etc. Algunos instrumentos como el piano la usan para escribir las notas que toca una de las dos manos.</p>
                    </br>
                <img src="solkey.png">    
                    <p>
                            <button class="submit-content" onclick="ajax(this.id);" id="3">Concluir Tema</button>
                    </p>           
            </div>
            
            
            
            <div class="content" id="content-div5">
                
                <p class="titu">Práctica de Clave de Sol:</p>
                
                <div class="imagenesBox">
                    <div id="N"><img class="imga" src="imagenesS/voutoS.png"></div>
                    <div class="notas" id="DO"><img class="imga" src="imagenesS/1S.png"></div><div class="notas" id="RE"><img class="imga" src="imagenesS/2S.png"></div><div class="notas" id="MI"><img class="imga" src="imagenesS/3S.png"></div>
                    <div class="notas" id="FA"><img class="imga" src="imagenesS/4S.png"></div><div class="notas" id="SOL"><img class="imga" src="imagenesS/5S.png"></div><div class="notas" id="LA"><img class="imga" src="imagenesS/6S.png"></div>
                    <div class="notas" id="SI"><img class="imga"src="imagenesS/0S.png"></div>
                </div>
                
                <p><button id="firstbutton" class="sscorr" onclick="verocolpoprimo()">Clic Para Iniciar</button></p>
                
                <input onkeypress="entraditesto();" onkeydown="entraditesto();" disabled onkeyup="entraditesto(); check();" placeholder="Ej: Do" id="noti" class="casella" maxlength="3"></input>
                <br><br>
                
                <div class="Marker">
                    <span id="cont">Preguntas: -</span>
                    </br>
                    <p id="co">Correctas: -</p>
                    <span id="er">Incorrectas: -</span>
                    <p id="T1">Tiempo: -</p>
                    <p id="informacion"></p>
                </div>       
                
                <p>
                    <button class="submit-content" onclick="ajax(this.id);" style="display:none;" id="4">Concluir Tema</button>
                </p>
            </div>
            
            
            <div class="content" id="content-div6">
                
                <p class="titu">Clave de Fa:</p>
                
                <h3>¿Cuál es la función de la clave en Fa?</h3>
                <p>La clave de Fa es la que sitúa la nota Fa cuatro en la segunda línea del pentagrama. La principal función de esta clave es poder transcribir a la partitura las notas musicales graves de la música.</p>
                <br>
                <h3>¿Cuál es el significado de Clave de Fa?</h3>
                <p>Esta clave no tiene un significado más allá de situar las notas en una posición concreta del pentagrama.</p>
                <br>
                <h3>Las notas en clave de Fa</h3>
                <p>Usa las mismas notas que las demás claves o sea el Do, Re, Mi, Fa, Sol, La y Si. A las que se les puede añadir los correspondientes sostenidos y bemoles./p>
                <br>
                <h3>Instrumentos que usan la clave de Fa</h3>
                <p>La clave de fa es utilizada por instrumentos graves como el contrabajo, el violonchelo, el fagot, el trombón y el piano para su mano izquierda.</p>
                <img src="fakey.png">     
                    <p>
                        <button class="submit-content" onclick="ajax(this.id);" id="5">Concluir Tema</button>
                    </p>         
                    
            </div>
            
            
            <div class="content" id="content-div7">
                
                <p class="titu">Práctica de Clave de Fa:</p>
                
                <div class="imagenesBox">
                    <div id="F"><img class="imga" src="imagenesF/voutoF.png"></div>
                    <div class="notas" id="DOF"><img class="imga" src="imagenesF/1F.png"></div><div class="notas" id="REF"><img class="imga" src="imagenesF/2F.png"></div><div class="notas" id="MIF"><img class="imga" src="imagenesF/3F.png"></div>
                    <div class="notas" id="FAF"><img class="imga" src="imagenesF/4F.png"></div><div class="notas" id="SOLF"><img class="imga" src="imagenesF/5F.png"></div><div class="notas" id="LAF"><img class="imga" src="imagenesF/6F.png"></div>
                    <div class="notas" id="SIF"><img class="imga"src="imagenesF/0F.png"></div>
                </div>
                
                <p><button id="firstbuttonf" class="sscorr" onclick="verocolpoprimof()">Clic Para Iniciar</button></p>
                
                <input onkeypress="entraditestof();" onkeydown="entraditestof();" disabled onkeyup="entraditestof(); checkf();" placeholder="Ej: Do" id="notif" class="casella" maxlength="3"></input>
                <br><br>
                
                <div class="Marker">
                    <span id="contf">Preguntas: -</span>
                    </br>
                    <p id="cof">Correctas: -</p>
                    <span id="erf">Incorrectas: -</span>
                    <p id="T1f">Tiempo: -</p>
                    <p id="informacionf"></p>
                </div>       
                
                <p>
                    <button class="submit-content" onclick="ajax(this.id);" style="display:none;" id="6">Concluir Tema</button>
                </p>
    
            </div>
            
            
            <div class="content" id="content-div8">
                
                <p class="titu">Examen Final de Reforzamiento:</p>
                
                <p class="motheracot">
                    <p class="acot"><strong>Pregunta 1:</strong> ¿Qué es una nota musical?</p>
                        
                    <select id="pre1">
                        <option value="♥" selected disabled hidden>Seleccione una opción:</option>
                        <option value="A" class="optione">A) Un símbolo usado para definir un instrumento.</option>
                        <option value="B" class="optione">B) Una forma de representar el tiempo.</option>
                        <option value="C" class="optione">C) Representación de la frecuencia y duración de un sonido.</option>
                        <option value="D" class="optione">D) Forma de indicar que canción se irá a tocar.</option>
                    </select>    
                    
                </p>
                
                </br>
                
                <p class="motheracot">
                    <p class="acot"><strong>Pregunta 2:</strong> ¿Cuántas notas naturales existen? </p>
                        
                    <select id="pre2">
                        <option value="♥" selected disabled hidden>Seleccione una opción:</option>
                        <option value="A" class="optione">A) 7</option>
                        <option value="B" class="optione">B) 6</option>
                        <option value="C" class="optione">C) 8</option>
                        <option value="D" class="optione">D) 5</option>
                    </select>    
                    
                </p>
                
                </br>
                
                <p class="motheracot">
                    <p class="acot"><strong>Pregunta 3:</strong> ¿Cuáles son las notas naturales?</p>
                        
                    <select id="pre3">
                        <option value="♥" selected disabled hidden>Seleccione una opción:</option>
                        <option value="A" class="optione">A) Te, Yi, Lol, Ma, Pi, Uy, We, Ko</option>
                        <option value="B" class="optione">B) Di, No, Al, Ko, Ka</option>
                        <option value="C" class="optione">C) Ga, Ne, He, Gu, Mg, Li</option>
                        <option value="D" class="optione">D) Do, Re, Mi, Fa, Sol, La, Si</option>
                    </select>    
                    
                </p>
                
                </br>
                
                <p class="motheracot">
                    <p class="acot"><strong>Pregunta 4:</strong> ¿Para qué sirve la clave de Sol?</p>
                        
                    <select id="pre4">
                        <option value="♥" selected disabled hidden>Seleccione una opción:</option>
                        <option value="A" class="optione">A) Para transcribir a la partitura las notas musicales graves de la música.</option>
                        <option value="B" class="optione">B) Para transcribir a la partitura las notas musicales agudas de la música.</option>
                        <option value="C" class="optione">C) Para transcribir a la partitura las notas musicales largas de la música.</option>
                        <option value="D" class="optione">D) Para transcribir a la partitura las notas musicales cortas de la música.</option>
                    </select>    
                    
                </p>
                
                </br>
                
                <p class="motheracot">
                    <p class="acot"><strong>Pregunta 5:</strong> ¿Para qué sirve la clave de Fa?</p>
                        
                    <select id="pre5">
                        <option value="♥" selected disabled hidden>Seleccione una opción:</option>
                        <option value="A" class="optione">A) Para transcribir a la partitura las notas musicales graves de la música.</option>
                        <option value="B" class="optione">B) Para transcribir a la partitura las notas musicales agudas de la música.</option>
                        <option value="C" class="optione">C) Para transcribir a la partitura las notas musicales largas de la música.</option>
                        <option value="D" class="optione">D) Para transcribir a la partitura las notas musicales cortas de la música.</option>
                    </select>    
                    
                </p>
                
                </br>
                
                <p class="motheracot">
                    <p class="acot"><strong>Pregunta 6:</strong> Es un documento manuscrito o impreso que indica cómo debe interpretarse una composición musical, mediante un lenguaje propio formado por signos musicales y el llamado sistema de notación.</p>
                        
                    <select id="pre6">
                        <option value="♥" selected disabled hidden>Seleccione una opción:</option>
                        <option value="A" class="optione">A) Partirua.</option>
                        <option value="B" class="optione">B) Papiro.</option>
                        <option value="C" class="optione">C) Pergamino Musical.</option>
                        <option value="D" class="optione">D) Hoja Musical.</option>
                    </select>    
                    
                </p>
                
                </br>
                
                <p class="motheracot">
                    <p class="acot"><strong>Pregunta 7:</strong> ¿Qué es una Octava?</p>
                        
                    <select id="pre7">
                        <option value="♥" selected disabled hidden>Seleccione una opción:</option>
                        <option value="A" class="optione">A) Las distintas combinaciones que hay entre dos intrumentos.</option>
                        <option value="B" class="optione">B) La distribuacion de notas en el piano.</option>
                        <option value="C" class="optione">C) El conjunto del intervalo de ocho grados entre dos notas de la escala musical.</option>
                        <option value="D" class="optione">D) Las distintas permutaciones de notas.</option>
                    </select>    
                    
                </p>
                
                </br>
                
                <p class="motheracot">
                    <p class="acot"><strong>Pregunta 8:</strong> ¿Qué es el sistema de  notación muscial anglosajón?</p>
                        
                    <select  id="pre8">
                        <option value="♥" selected disabled hidden>Seleccione una opción:</option>
                        <option value="A" class="optione">A) Notación musical con base numérica.</option>
                        <option value="B" class="optione">B) Notación musical con base escalar.</option>
                        <option value="C" class="optione">C) Notación musical con base alfabética.</option>
                        <option value="D" class="optione">D) Notación musical con base artesanal.</option>
                    </select>    
                    
                </p>
                
                </br>
                
               <p class="motheracot">
                    <p class="acot"><strong>Pregunta 9:</strong> ¿Qué letras son usadas en el sistema de notación musical anglosajón?</p>
                        
                    <select id="pre9">
                        <option value="♥" selected disabled hidden>Seleccione una opción:</option>
                        <option value="A" class="optione">A) C, D, E, F, G, A, B.</option>
                        <option value="B" class="optione">B) E, S, D, Q, A, D, S.</option>
                        <option value="C" class="optione">C) F, G, H, L, Ñ, Q, A.</option>
                        <option value="D" class="optione">D) J, K, L, M, N, E, W.</option>
                    </select>    
                    
                </p>
                
                </br>
                
                <p class="motheracot">
                    <p class="acot"><strong>Pregunta 10:</strong> Es la Técnica de leer y dar el valor adecuado a los signos musicales de una partitura.</p>
                        
                    <select  id="pre10">
                        <option value="♥" selected disabled hidden>Seleccione una opción:</option>
                        <option value="A" class="optione">A) Fafeo.</option>
                        <option value="B" class="optione">B) Manifesto.</option>
                        <option value="C" class="optione">C) Solfeo.</option>
                        <option value="D" class="optione">D) Lalindo.</option>
                    </select>    
                    
                    </br>
                    
                </p>
                    
                    <p>
                        <button class="submit-content" id="rev" onclick="verificador();">Revisa tus respuestas.</button>    
                        <button class="submit-content" id="res" style="display:none;"  onclick="reiniciadordepregunta();">Vuelve a realizar el examen.</button>
                    </p>
                    
                    
                    
                    
                    <p>
                        <button class="submit-content" style="display:none;" onclick="ajax(this.id);" id="7">Concluir Tema</button>
                    </p>
                    
                    <p id="endermesage">
                        
                    </p>
                
            </div>
            
        </div>
        </br></br></br></br></br></br></br></br>
        
        <?php
            }else if($_REQUEST['utente']=="" || $_REQUEST['utente']=="Invitado"){
                echo "</br></br></br></br></br></br></br></br>";
                echo "Para realizar esta acción necesitarás una cuenta.<br><br>";
                echo "<a href='registro.html'>Crear Una cuenta.</a>";
            }
        ?>
        <script type="text/javascript">
        
                    var audioG = new Audio('win.mp3');
                    var audioL = new Audio('lose.mp3');
        
        
                     function verificador(){
                    if(window.XMLHttpRequest){xml = new XMLHttpRequest();}else{xml = ActiveXObject("Microsoft.XMLHTTP");}
                                
                                var checame="uno="+pre1.value+"&dos="+pre2.value+"&tres="+pre3.value+"&cuatro="+pre4.value+"&cinco="+pre5.value+"&seis="+pre6.value+"&siete="+pre7.value+"&ocho="+pre8.value+"&nueve="+pre9.value+"&diez="+pre10.value;
                                    
                                xml.onreadystatechange =function(){
                                    if(xml.readyState==4 && xml.status==200){
                                        var mensaje = xml.responseText;
                                            //resultado
                                            if(mensaje>=8){
                                                //pasó
                                                var calificac="Tu calicación ha sido: "+mensaje +"</br>¡Perfecto has concluído con el curso!";
                                                document.getElementById("7").style.display="inline-block";
                                                document.getElementById("rev").style.display="none";
                                                document.getElementById("res").style.display="none";
                                                audioG.play();
                                            }else{
                                                //no pasó
                                                var calificac="Tu calicación ha sido: "+mensaje +"</br>¡Has reprobado la prueba, prueba intentar de nuevo!";
                                                document.getElementById("rev").style.display="none";
                                                document.getElementById("res").style.display="inline-block";
                                                audioL.play();
                                            }
                                            
                                            document.getElementById("endermesage").innerHTML=calificac;
                                        
                                            
                                            i=1;
                                            
                                            do{
                                                var actualabloquear="pre"+i;
                                                document.getElementById(actualabloquear).disabled=true;
                                                
                                                i++;
                                            }while(i<=10)
                                                
                                    }
                                }
                        
                    xml.open("POST","revisador.php",true);
                    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                    xml.send(checame);
                }
                
                function reiniciadordepregunta(){
                    
                    var i=1;
                    do{
                        var actualabloquear="pre"+i;
                        
                        document.getElementById(actualabloquear).disabled=false;
                        
                        document.getElementById(actualabloquear).value="♥";
                        
                        i++;
                    }while(i<=10);
                    document.getElementById("endermesage").innerHTML="";
                    document.getElementById("res").style.display="none";
                    document.getElementById("rev").style.display="inline-block";
                }

        </script>
</html>
