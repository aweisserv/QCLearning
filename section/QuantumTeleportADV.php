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
		<title>Cursos - QC Learning</title>
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
	<h1>Secciones de aprendizaje</h1>
<br>
</div>
<section id="main">
<div class="inner">
			<div class="content">
				<div id="diagnotico"></div>
				<h3>Contenidos:</h3><li>Introducción a los cursos</li><li>Curso básico: Introducción y puertas lógicas cuánticas</li><li>Curso avanzado: Tele-transportación cuántica de datos</li>
			</div>
</section>
</div>
</header>
<body>
		<section id="main">
				<div class="inner">
					<div class="content">
						<div id="diagnotico"></div>
							<h3>Introducción</h3>
							En esta sección, se presentan cursos con diferentes niveles de dificultad, que permitan comprender al estudiante algunos de los fundamentos más generales de la informática cuántica. Para esto, se recomienda realizar previamente una <a href="/academia3/genericopia.php">prueba de diagnóstico</a>, la cual servirá para definir el curso más indicado para el estudiante.<br/><br/>
							
							Cuando el estudiante finalice los cursos, deberá estar capacitado para entender de qué forma operan los algoritmos cuánticos, haciendo uso de un circuito de estilo pentagrama musical, asimismo, podrá resolver problemas del mismo tipo (cuántico), utilizando vectores para la definición de las unidades de información requeridas (Cúbits) y operadores cuánticos.<br/><br/>

							<h3>Conocimientos previos</h3>
							Los cursos deben ser útiles a quienes sólo conozcan los principios del álgebra, así como a estudiantes de ingeniería que hayan cursado los ramos de la línea de las matemáticas.
							Se espera que el estudiante posea un conocimiento básico en las siguientes materias:<br><br>
							<li>Vectores (Introducción)</li>
							<li>Independencia lineal</li>
							<li>Bases y espacios vectoriales</li>
							<li>Producto interno</li>
							<li>Introducción a la mecánica cuántica</li>							
							<br><h3>Cursos</h3>
							<a href="QuantumTeleportBASICbeta.php">Curso básico: Introducción y puertas lógicas cuánticas</a></p>
							<a href="QuantumTeleportADV2F.php">Curso avanzado: Tele-transportación cuántica de datos</a></p><br>
							<h3>Guía externa (opcional)</h3>
							Como complemento, se enlaza una guía de introducción a la informática cuántica realizada por el investigador y desarrollador de software en Microsoft, Dayton Ellwanger.
							El formato de esta guía es a través de videos ordenados y subidos a un canal de YouTube perteneciente al creador.

							<a type="button" value="Comenzar" onClick="this.style.visibility= 'hidden'; document.getElementById('oculto').style.visibility='visible';document.getElementById('oculto2').style.visibility='visible'">Mostrar Lista de reproducción.</a><br> 
							<div id="oculto" style="visibility:hidden"> 
								<iframe width="400" height="210" src="https://www.youtube.com/embed/videoseries?list=PLIxlJjN2V90w3KBWpELOE7jNQMICxoRwc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
					</div>
				</div>
			</section>

</body>
</html>