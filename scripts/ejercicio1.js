var pre = 50; var co1 = 0; var er1 = 0; var numerotimer = 0; var notaactual = "";

function verocolpoprimo() {
	pre = 50; co1 = 0; er1 = 0; numerotimer = 0; notaactual = "";
	document.getElementById('firstbutton').style.display = "none";
	document.getElementById("noti").disabled = false;
	document.getElementById("informacion").innerHTML = "";
	colpoprimo();
}

function colpoprimo() {

	if (numerotimer === 0) {
		timer();
		noti.focus();
	}

	document.getElementById('N').style.display = "none";

	var aleatorio = Math.round((Math.random() * 6));
	var notas = ["DO", "RE", "MI", "FA", "SOL", "LA", "SI"];
	var i = 0;

	notaactual = notas[aleatorio];

	do {
		if (i == aleatorio) {
			document.getElementById(notas[i]).style.display = "block";
		} else {
			document.getElementById(notas[i]).style.display = "none";
		}
		i++;
	} while (i <= 6);
}

function timer() {
	t = setTimeout(function () {
		numerotimer++; document.getElementById('T1').innerHTML = "Tiempo: " + actualseconds + " s"; timer();
	}, 10);

	actualseconds = Math.round(numerotimer / 100);

	if (actualseconds >= 120) {
		ender();
	}
}

function entraditesto() {
	noti.value = noti.value.toUpperCase();
}

function check() {
	if (event.code == "Enter") {
		dama();
	}
}


function dama() {
	pre--;
	if (pre <= 0) {
		ender();
		return false;
	}

	if (noti.value == notaactual) {
		co1++; document.getElementById("co").innerHTML = "Correctas: " + co1 + ".";
		document.getElementById("cont").innerHTML = "Preguntas Restantes: " + pre + "."; colpoprimo(); noti.value = "";
	} else {
		er1++; document.getElementById("er").innerHTML = "Incorrectas: " + er1 + ".";
		document.getElementById("cont").innerHTML = "Preguntas Restantes: " + pre + "."; colpoprimo(); noti.value = "";
	}
}

function ender() {
	document.getElementById("co").innerHTML = "Correctas: 0.";
	document.getElementById("er").innerHTML = "Incorrectas: 0.";
	document.getElementById("cont").innerHTML = "Preguntas Restantes: 50.";
	clearTimeout(t);
	document.getElementById('T1').innerHTML = "Tiempo: 0 s";
	document.getElementById("noti").disabled = true;
	noti.value = "";
	document.getElementById('firstbutton').style.display = "inline-block";

	var i = 0;

	var desaparecer = ["DO", "RE", "MI", "FA", "SOL", "LA", "SI", "N"];
	do {

		if (i == 7) {
			document.getElementById(desaparecer[i]).style.display = "inline-block";
		} else {
			document.getElementById(desaparecer[i]).style.display = "none";
		}

		i++;
	} while (i <= 7);


	var porcentaje = (co1 * 100 / 50);

	if (porcentaje >= 80) {
		//pasa
		var mensaje = "Porcentaje de aciertos: " + (co1 * 100 / 50) + "%," + " En un tiempo: " + actualseconds + "s. ¡Bien hecho!";
		document.getElementById("4").style.display = "inline-block";
		$("#informacion").removeClass("mala");
		$("#informacion").addClass("bien");

	} else {
		//pos no
		var mensaje = "Porcentaje de aciertos: " + (co1 * 100 / 50) + "%," + " En un tiempo: " + actualseconds + "s. Vuelve a realizar la prueba.";
		$("#informacion").removeClass("bien");
		$("#informacion").addClass("mala");

	}

	document.getElementById("informacion").innerHTML = mensaje;
}