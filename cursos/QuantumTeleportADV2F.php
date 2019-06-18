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
<!-- Revisión de Login & puntaje mínimo para acceso -->
	<?php
	if ((@!$_SESSION['user'])||($_SESSION['puntaje']<600)) {
		echo '<script>alert("No posees el puntaje requerido para esta sección.")</script> ';
		echo "<script>location.href='../index2.php'</script>";
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

<!-- Header -->
			<header id="header">

				<a class="logo" href="../index2.php">Acerca de QC Learning / About</a>

				<!-- Referencias del login-->


				<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
				<li><a href="">Puntaje: <strong><?php echo $_SESSION['puntaje'];?></strong> </a></li>
				
				<!-- Fin referencias-->

				<nav>
					<a href="#menu">Menu</a>
				</nav>


			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="../index2.php">Inicio</a></li>
					<li><a href="evaluaciones.html">Evaluaciones</a></li>
					<li><a href="genericopia.php">Prototipo de Evaluaciones</a></li>
					<li><a href="desconectar.php"> Cerrar Cesión </a></li>
				</ul>
			</nav>

</head>

<header>

<br><br><br><br>
<section id="main">
	<a href="#Anchor" class="button primary">Introducción</a>
	<a href="#myAnchor" id="anchor1" class="button primary">Contenidos</a>
	<a href="QuantumTeleportADV3F.php" class="button primary">Parte 2</a>
	<a href="QuantumIntro.php" class="button primary">Ver cursos</a>
	&nbsp;&nbsp;&nbsp;<a href="../index2.php" class="button">Volver a inicio</a>
	<br><br>
	<div class="inner">
		<div class="content">
			<section id="cta" class="wrapper">
				<div class="inner">

					<h1>QC Learning </h1>
					<h2><p>Teletransportación de estados | <b>Curso avanzado</b></p></h2>
				</div>
			</section>
		<!-- <img src="images/basico.png" alt="" class="central" style="width:100%"/><br><br>-->
		<br><font size="+1">En aproximadamente <b>30</b> minutos, el estudiante sabrá lo suficiente acerca de <b>Cúbits</b>, <b>Superposición</b> y <b>Entrelazamiento cuántio</b>. Con lo anterior, podrá escribir su primer programa cuántico, y lo más importante, tener una idea razonable de lo que significa.</font><br/><br>
		
		<!--<a type="button" value="Comenzar" onClick="this.style.visibility= 'hidden'; document.getElementById('oculto').style.visibility='visible';document.getElementById('oculto2').style.visibility='visible'">Iniciar.</a><br><br> -->
		</div>
	</div>
</section>



<!--<div id="oculto" style="visibility:hidden">-->
	<section id="main">
		<div class="inner">
			<section>
				<div class ="box">
					<div class="content">
						<i><a href="#" class="icon fa-book" style='font-size:70px'><span class="label" ></span></a></i>
							<h3>Bases y Conceptos</h3>
							<p align= center>Guía de contenidos básicos para el estudiante.<br>
							Terminología y conceptos necesarios para iniciar el curso básico.<br></p>
							<br><a href="#" class="center"> Ir a sección </a>
					</div>
				</div>
			</section>
			<section>
				<div class ="box">
					<div class="content">
						<!--Anlca a contenidos -->
						<a name="myAnchor" id="anchor1"></a>
							<i><a href="#" class="icon fa-graduation-cap" style='font-size:70px'><span class="label">Icon</span></a></i>
							<h3>Enviando un mensaje cuántico</h3>Contenidos:<br> 
							<li>Inicio - Preparación</li> 
							<li> 1 - Entrelazamiento</li>
							<li> 1.1 - Aplicando compuerta CNOT</li>
							<li> 1.2 - Aplicando compuerta Hadamard</li>
							<li> 2 - Medición </li>
		
					 </div>
				</div>
			</section>

		</div>
	</section>
</div> 
							
<body>

	<div id="oculto2" style="visibility:visible;"> 
		<section id="main">
			<div class="inner">
				<div class="content" style="text-align: left;">
					
					<h3><P align="center"><b>Inicio y preparación del algoritmo</b></P></h3><br>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Para realizar el siguiente algoritmo cuántico, es necesario que el emisor del mensaje y el receptor(yo) del mismo, tengamos preparado previamente un <strong>estado de Bell</strong>; donde él posee un cúbit <strong>|G⟩</strong> que está entrelazado con mi cúbit, <strong>|F⟩</strong>. Si deseo alejarme del emisor, no importa a qué distancia nos separemos, ya sea de un país a otro, de todo el mundo o el universo, estos cúbits seguirán entrelazados.<br/>Recordemos la propiedad del entrelazado: Los resultados de medición están correlacionados. Si el emisor mide su cúbit, afectará a mi cúbit (a pesar de la distancia). Vamos a explotar esta propiedad en los siguientes pasos.<br/>
					<hr>
					<h3><P align="center">1: <b>Entrelazar Cúbit del emisor con <font size="+1"><b>|ψ⟩</b></font></b></P></h3><br>
					<img src="images/imagenes/001.png" width="600" height="300" class="central"></h3><br/>

					Podemos utilizar este circuito cuántico para describir nuestro punto de partida inicial. En la parte superior izquierda tenemos la fuente de todo el esfuerzo, un cúbit |ψ⟩, que el emisor desea enviarme. Este se encuentra en un estado desconocido que podemos representar de la siguiente manera:
					<br/><br/>
					<img src="images/imagenes/002.png" width="210" height="60" class="central"><br/>

					Además, el emisor posee un cúbit |G⟩, que, como acabamos de describir, ahora está entrelazado con mi cúbit, |F⟩ (ilustrado con línea ondulada). Ahora ambos se encuentran en un estado de Bell:
					<br/><br/>
					<img src="images/imagenes/003.png" width="230" height="90" class="central">
					<br/>

					Comenzaremos por entrelazar el cúbit del emisor |G⟩, con el estado |ψ⟩. El motivo por el que se realiza esto será evidenciado en breve, para esto requerimos de su confianza. En el curso básico, aprendimos que podemos entrelazar dos cúbits aplicando una puerta CNOT y luego una puerta Hadamard. Podemos describir esto utilizando un circuito cuántico, como se muestra a continuación.
					<br/><br/><hr>

					<h3><P align="center">1.1: <b>Aplicar compuerta cuántica CNOT </b></P></h3><br>
					<img src="images/imagenes/004.png" width="600" height="300" class="central"></h3>
							
					Este es nuestro circuito una vez que hemos agregado la compuerta CNOT a la mezcla. El estado de entrada de la compuerta CNOT se puede escribir como |ψ⟩ |G⟩, donde la primera entrada corresponde al cable superior y la segunda entrada corresponde al cable central. Reemplazando |ψ⟩ y |G⟩ con sus definiciones, tenemos
					<br/><br/>
					<img src="images/imagenes/005.png" width="520" height="60" class="central"><br/>
					Podemos multiplicar los paréntesis, como se muestra a continuación:<br/><br/>
					<img src="images/imagenes/006f.png" width="520" height="140" class="central"><br/>
					Esto nos da la entrada <img src="images/imagenes/007.png" width="250" height="25">.Cada uno de estos términos es operado por la puerta CNOT. Recordemos que la puerta "CNOT" opera en dos cúbits. Notarás que cada uno de nuestros términos |000〉, |011〉, |100〉 y |111〉 tienen tres cúbits. En este caso, los dos primeros cúbits se utilizan como control y destino, como se muestra a continuación:<br/>
					<img src="images/imagenes/008.png" width="265" height="240" class="central"><br/>
					Cuando el valor de control es |1〉, el qubit objetivo se invierte. Esto significa que el estado |100〉, se convierte en |110〉, y |111〉  se convierte en |101〉. Todos los demás estados siguen siendo los mismos.<br/><br/><br/>
					<img src="images/imagenes/009.png" width="470" height="180" class="central"><br/>
					Una vez que la puerta CNOT ha operado, obtenemos el resultadobr/><br/><br/>
					<img src="images/imagenes/010.png" width="400" height="40" class="central"><br/><br/><hr>

					<h3><P align="center">1.2: <b>Aplicar compuerta Hadamard</b></P></h3><br>

					El siguiente paso para entrelazar |G⟩ con el estado |ψ⟩ es aplicar la puerta de Hadamard al primer cúbit. Podemos ver cómo se ve en el circuito cuántico a continuación.</b><br/>
					<img src="images/imagenes/011.png" width="600" height="300" class="central"><br/>
					Recordemos que la compuerta de Hadamard, transforma |0⟩ y |1⟩, a los siguientes estados:<br/>
					<img src="images/imagenes/012.png" width="300" height="200" class="central"><br/><br/>
					La salida de la puerta CNOT fue <img src="images/imagenes/010.png" width="250" height="25">.Es hora de aplicar la puerta de Hadamard al primer cúbit de cada término. Lo que viene no se ve bonito, pero respira hondo, esta es nuestra salida:<br/><br/>
					<img src="images/imagenes/013.png" width="600" height="200" class="central"><br/><br/>
					Así, nuestro resultado queda como se muestra a continuación:<br/><br/>
					<img src="images/imagenes/014.png" width="600" height="55" class="central"><br/><br/><br/>
					<h3>Ordenando términos</h3>
					Vamos a poner esto en orden. Si observamos el primer término: 
					<img src="images/imagenes/015.png" width="100" height="35">, notarán que tenemos dos factores de √2, los sacaremos de sus fracciones y los multiplicaremos como<br/><br/>
					<img src="images/imagenes/016.png" width="600" height="75" class="central"><br/><br/><br/>
					Aplicando la misma lógica a los términos restantes, obtenemos <img src="images/imagenes/017.png" width="100" height="30">,<img src="images/imagenes/018.png" width="100" height="28"> y <img src="images/imagenes/019.png" width="100" height="26">. Notará que el factor ½ es común para cada uno de ellos, por lo que podemos tomarlo fuera de los corchetes dando el resultado colectivo:<br/><br/><img src="images/imagenes/020.png" width="700" height="62" class="central"><br/>
					Ahora vamos a expandir los corchetes con el fin de facilitar el próximo paso. Primeramente, ampliamos <img src="images/imagenes/021.png" width="115" height="25">, como ejemplo.
					<br><br><img src="images/imagenes/022.png" width="550" height="38" class="central"><br/>Dejaremos los restantes "como ejercicio", sin embargo, dejamos los resultados a continuación:
					<br><br><img src="images/imagenes/023.png" width="600" height="160" class="central"><br/>
					Reuniéndolos todos juntos, obtenemos el siguiente resultado:<br><img src="images/imagenes/024.png" width="700" height="62" class="central"><br/><br/><hr>

					<h3><P align="center">2: <b>Efectuar medición</b></P></h3><br>

					Ahora que hemos entrelazado el cúbit <strong>|G⟩</strong> del emisor con el cúbit<strong>|ψ⟩</strong>  del receptor, vamos a medir a ambos. Pero antes de hacerlo, debemos obtener nuestros resultados en un formato que sea más fácil de interpretar.

					<br/><h3><br/>Siguiente</p></h3><a href="QuantumTeleportADV3.php">Curso avanzado: Tele-transportación cuántica de datos</a></p>	
					<a href="../pruebas/pruebaca1.php" class='button primary'>Continuar</a><br><br>
					<a href="#">Go top of the page</a></p>

				</div>
			</div>
		</section>
	</div> 
<!-- Footer -->
	<footer id="footer">
		<div class="inner">
			<div class="content">
				<section>
					<h4>Conecta QC Learning en redes sociales<br /> Connect QC Learning on social media</h4>
					<ul class="plain">
						<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
						<li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
					</ul>
				</section>
			</div>
			<div class="copyright">
			&copy; ## <a href="https://##">#</a>, # <a href="https://##">##</a>.
			</div>
		</div>
	</footer>

</body>

</html>