window.onload = function () {


    progresschange();

    function progresschange() {
        console.log("cargado");

        var prog = ["un", "do", "tr", "cu", "ci", "se", "si", "oc"];

        var i = 0;

        var terminados = 0;

        do {  
            
            var cheacem = prog[i]+"D";
                    
            var puntochange = prog[i]+"P";

            var scan=document.getElementById(prog[i]).value;
            if (scan == "0") {
                document.getElementById(cheacem).innerHTML = "Incompleto";
                document.getElementById(puntochange).innerHTML = "⚫ ";
            } else {
                document.getElementById(cheacem).innerHTML = "Completo";
                document.getElementById(puntochange).innerHTML = "🟢 ";
                terminados++;

            }
            i++;
        } while (i <= 7);
        numeroprogreso.innerHTML = " " + terminados + "/8!.";
        cambiadisp("div1");
    }


};

function letras() {
    document.getElementById('cien').innerHTML = (1100 - ((testoarea.value).length));

}
var entes = 0;
function enters() {

    if (event.code == "Enter") {
        if (entes >= 10) {
            alert("Has superado el limite de saltos de linea por publicación");
            return false;
        } else {
            testoarea.value = testoarea.value + "</br>"; entes = entes + 1;
        }
    }
}

function cambiatitle(nombre) {
    document.getElementById("titulo").innerHTML = nombre;
}

function cambiadisp(nome) {

    var nombre = "content-" + nome;

    var num = 1;

    do {
        var cambiante = "content-div" + num;
        var selected = "div" + num;
        if (nombre == cambiante) {
            document.getElementById(cambiante).style.display = "block";
            document.getElementById(selected).style.paddingLeft = "20px";
            document.getElementById(selected).style.fontWeight = "bold";

        } else {
            document.getElementById(cambiante).style.display = "none";
            document.getElementById(selected).style.paddingLeft = "0px";
            document.getElementById(selected).style.fontWeight = "normal";
        }

        num++;

    } while (num <= 8);
}

function ajax(numeropresionado) {

    var caselladinumeros = [un.value, document.getElementById("do").value, tr.value, cu.value, ci.value, se.value, si.value, oc.value];

    var casillareviasar = numeropresionado - 1;

    console.log(caselladinumeros[casillareviasar]);

    if (casillareviasar == "-1") {
        uptaderajax(numeropresionado);
    }
    else if (caselladinumeros[casillareviasar] == "0") {
        alert("Para continuar con el curso debera terminar el anterior bloque");
        //alomejor y luego hago algo mas visual que una alerta nomas.
    } else if (caselladinumeros[casillareviasar] == "1") {


        uptaderajax(numeropresionado);
    }

}

function uptaderajax(ncurso) {
    if (window.XMLHttpRequest) { xml = new XMLHttpRequest(); } else { xml = ActiveXObject("Microsoft.XMLHTTP"); }


    var numeroacambiar = ["uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho"];
    var info = "cuenta=" + usuario.value + "&numero=" + numeroacambiar[ncurso];
    console.log(info);

    xml.onreadystatechange = function () {
        if (xml.readyState == 4 && xml.status == 200) {
            var mensaje = xml.responseText;

            if (mensaje == "terminada") {
                location.reload();
            }

        }
    };

    xml.open("POST", "progreso.php", true);
    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send(info);
}