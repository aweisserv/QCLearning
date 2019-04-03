<!DOCTYPE HTML>
<!--
--- Allan Weisser V.
	PT1
-->

<!-- Revisión de Login para acceso -->
	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>
<!-- Fin revisión -->

<html>
<head>
		<title>Inicio - QC Learning</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" /> 

<style>
body{ margin: 0px; text-align: left; }
header{margin: 0px; text-align: center; }
#pagetop{
	position: fixed;
	top: 0px;
	width:100%;
	height: 120px;
	background: #111111;
	color: #FFF;
	font-size: 18px;
	padding-top: 50px;
	transition: height 0.3s linear 0s, padding 0.3s linear 0s;
	overflow:hidden;
	text-align: left;
}

#wrapper{ margin-top: 160px; }
</style>

<script>
var pagetop, menu, yPos;
function yScroll(){
	pagetop = document.getElementById('pagetop');
	yPos = window.pageYOffset;
	if(yPos > 150){
		pagetop.style.height = "36px";
		pagetop.style.paddingTop = "2px";
		menu.style.height = "0px";
	} else {
		pagetop.style.height = "120px";
		pagetop.style.paddingTop = "50px";
		menu.style.height = "50px";
	}
}
window.addEventListener("scroll", yScroll);
</script>

</head>
<div id="pagetop">
	&nbsp;&nbsp;<a href='/academia3/index2.php'>INICIO</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Curso ADV - QC Learning 

</div>
<header>

<div id="wrapper">
	<br><br>
	<h1>Tele-transportación cuántica de estados</h1><br>
	Curso avanzado: Realización de un algoritmo cuántico para la tele-transportación de estados.<br>
	
	<a type="button" value="Comenzar" onClick="this.style.visibility= 'hidden'; document.getElementById('oculto').style.visibility='visible';document.getElementById('oculto2').style.visibility='visible'">Iniciar.</a><br> 
<br>
</div>
<div id="oculto" style="visibility:hidden"> 
<section id="main">
<div class="inner">
			<div class="content">
				<h3>Enviando un mensaje cuántico</h3>Contenidos:<br> 
				<ol>
					<li>Paso 0 - Inicio y preparación</li> 
					<li>Paso 1 - Entrelazamiento</li>
					<li>Paso 1.1 - Aplicando compuerta CNOT</li>
					<li>Paso 1.2 - Aplicando compuerta Hadamard</li>
					<li>Paso 2 - Medición </li>
				</ol>

</section>
</div> 
</header>
<body>

	<div id="oculto2" style="visibility:hidden"> 
		<section id="main">
			<div class="inner">
				<div class="content">
						

					<h3>Paso - <b>0: Inicio y preparación del algoritmo</b> </h3>

					Para realizar el siguiente algoritmo cuántico, es necesario que el emisor del mensaje y el receptor(yo) del mismo, tengamos preparado previamente un <strong>estado de Bell</strong>; donde él posee un cúbit <strong>|G⟩</strong> que está entrelazado con mi cúbit, <strong>|F⟩</strong>. Si deseo alejarme del emisor, no importa a qué distancia nos separemos, ya sea de un país a otro, de todo el mundo o el universo, estos cúbits seguirán entrelazados.<br/>Recordemos la propiedad del entrelazado: Los resultados de medición están correlacionados. Si el emisor mide su cúbit, afectará a mi cúbit (de nuevo, a pesar de la distancia). Vamos a explotar esta propiedad en los siguientes pasos.<br/><hr>

					<h3>Paso - <b>1: Entrelazar Cúbit del emisor con |ψ⟩</b><br/>
					<img src="images/imagenes/001.png" width="600" height="300"></h3><br/>

					Podemos utilizar este circuito cuántico para describir nuestro punto de partida inicial. En la parte superior izquierda tenemos la fuente de todo el esfuerzo, un cúbit |ψ⟩, que el emisor desea enviarme. Este se encuentra en un estado desconocido que podemos representar de la siguiente manera:
					<br/><br/>
					<img src="images/imagenes/002.png" width="210" height="60"><br/>

					Además, el emisor posee un cúbit |G⟩, que, como acabamos de describir, ahora está entrelazado con mi cúbit, |F⟩ (ilustrado con línea ondulada). Ahora ambos se encuentran en un estado de Bell:
					<br/><br/>
					<img src="images/imagenes/003.png" width="230" height="90">
					<br/>

					Comenzaremos por entrelazar el cúbit del emisor |G⟩, con el estado |ψ⟩. El motivo por el que se realiza esto será evidenciado en breve, para esto requerimos de su confianza. En el curso básico, aprendimos que podemos entrelazar dos cúbits aplicando una puerta CNOT y luego una puerta Hadamard. Podemos describir esto utilizando un circuito cuántico, como se muestra a continuación.
					<br/><br/><hr>

					<h3>Paso - <b>1.1: Aplicar compuerta cuántica CNOT </b><br/>
					<img src="images/imagenes/004.png" width="600" height="300"></h3>
							
					Este es nuestro circuito una vez que hemos agregado la compuerta CNOT a la mezcla. El estado de entrada de la compuerta CNOT se puede escribir como |ψ⟩ |G⟩, donde la primera entrada corresponde al cable superior y la segunda entrada corresponde al cable central. Reemplazando |ψ⟩ y |G⟩ con sus definiciones, tenemos
					<br/><br/>
					<img src="images/imagenes/005.png" width="520" height="60"><br/>
					Podemos multiplicar los paréntesis, como se muestra a continuación:<br/><br/>
					<img src="images/imagenes/006.png" width="550" height="410"><br/>
					Esto nos da la entrada <img src="images/imagenes/007.png" width="250" height="25">.Cada uno de estos términos es operado por la puerta CNOT. Recordemos que la puerta "CNOT" opera en dos cúbits. Notarás que cada uno de nuestros términos |000〉, |011〉, |100〉 y |111〉 tienen tres cúbits. En este caso, los dos primeros cúbits se utilizan como control y destino, como se muestra a continuación:<br/>
					<img src="images/imagenes/008.png" width="265" height="240"><br/>
					Cuando el valor de control es |1〉, el qubit objetivo se invierte. Esto significa que el estado |100〉, se convierte en |110〉, y |111〉  se convierte en |101〉. Todos los demás estados siguen siendo los mismos.<br/><br/><br/>
					<img src="images/imagenes/009.png" width="470" height="180"><br/>
					Una vez que la puerta CNOT ha operado, obtenemos el resultadobr/><br/><br/>
					<img src="images/imagenes/010.png" width="400" height="40"><br/><br/><hr>

					<h3>Paso - <b>1.2: Aplicar compuerta Hadamard</b></h3>

					El siguiente paso para entrelazar |G⟩ con el estado |ψ⟩ es aplicar la puerta de Hadamard al primer cúbit. Podemos ver cómo se ve en el circuito cuántico a continuación.</b><br/>
					<img src="images/imagenes/011.png" width="600" height="300"><br/>
					Recordemos que la compuerta de Hadamard, transforma |0⟩ y |1⟩, a los siguientes estados:<br/>
					<img src="images/imagenes/012.png" width="300" height="200"><br/><br/>
					La salida de la puerta CNOT fue <img src="images/imagenes/010.png" width="250" height="25">.Es hora de aplicar la puerta de Hadamard al primer cúbit de cada término. Lo que viene no se ve bonito, pero respira hondo, esta es nuestra salida:<br/><br/>
					<img src="images/imagenes/013.png" width="600" height="200"><br/><br/>
					Así, nuestro resultado queda como se muestra a continuación:<br/><br/>
					<img src="images/imagenes/014.png" width="600" height="55"><br/><br/><br/>
					<h3>Ordenando términos</h3>
					Vamos a poner esto en orden. Si observamos el primer término
					<img src="images/imagenes/015.png" width="100" height="35">, notarán que tenemos dos factores de √2, los sacaremos de sus fracciones y los multiplicaremos como<br/><br/>
					<img src="images/imagenes/016.png" width="600" height="75"><br/><br/><br/>
					Aplicando la misma lógica a los términos restantes, obtenemos <img src="images/imagenes/017.png" width="100" height="30">,<img src="images/imagenes/018.png" width="100" height="28"> y <img src="images/imagenes/019.png" width="100" height="26">. Notarás que el factor ½ es común para cada uno de ellos, por lo que podemos tomarlo fuera de los corchetes dando el resultado colectivo:<br/><br/><img src="images/imagenes/020.png" width="700" height="62"><br/>
					Ahora vamos a expandir los corchetes con el fin de facilitar el próximo paso. Primeramente, ampliamos <img src="images/imagenes/021.png" width="115" height="25">, como ejemplo.
					<br><br><img src="images/imagenes/022.png" width="550" height="38"><br/>Dejaremos los restantes "como ejercicio", sin embargo, dejamos los resultados a continuación:
					<br><br><img src="images/imagenes/023.png" width="600" height="160"><br/>
					Reuniéndolos todos juntos, obtenemos el siguiente resultado:<br><img src="images/imagenes/024.png" width=700" height="62"><br/><br/><hr>

					<h3>Paso - <b>2: Efectuar medición</b></h3>

					Ahora que hemos entrelazado el cúbit <strong>|G⟩</strong> del emisor con el cúbit<strong>|ψ⟩</strong>  del receptor, vamos a medir a ambos. Pero antes de hacerlo, debemos obtener nuestros resultados en un formato que sea más fácil de interpretar.

					<br/><h3><br/>Siguiente</p></h3><a href="QuantumTeleportADV3.php">Curso avanzado: Tele-transportación cuántica de datos</a></p>
				</div>
			</div>
		</section>
	</div> 
<!-- Footer -->
<footer id="footer">

	<div class="inner">
		<div class="content">
			<section>
				<h3>Acerca de</h3>
				<p>Fuentes:
				-, -, -.</p>
			</section>

			<section>
				<h4>Redes</h4>
				<ul class="plain">
					<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
					<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
					<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
					<li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
				</ul>
			</section>
		</div>
	</div>
</footer>

</body>

</html>