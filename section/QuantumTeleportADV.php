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
		<title>Curso avanzado - QC Learning</title>
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
				<h3>Antes de empezar</h3>Contenidos:<br>>Curso básico: Introducción y puertas lógicas cuánticas<br>>Curso avanzado: Tele-transportación cuántica de datos
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
							P1.<br/><br/>

							P2.<br/><br/><br/>

							P3.<br/><br/>

							P4.<br/><br/><br/><a href="#">Curso básico: Introducción y puertas lógicas cuánticas</a></p>
							<a href="QuantumTeleportADV2.php">Curso avanzado: Tele-transportación cuántica de datos</a></p>
					</div>
				</div>
			</section>

</body>
</html>