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
		<title>Origen</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index2.php">QC Learning</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Inicio</a></li>
					<li><a href="evaluaciones.html">Evaluaciones</a></li>
					<li><a href="generic.html">Prototipo de Evaluaciones</a></li>
				</ul>
			</nav>

		<!-- Heading -->
			<div id="heading" >
				<h1>Origen</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">

						<h1>Informática cuántica</h1>

						<hr />
						<h3>Introducción</h3>
	
							Una partícula clásica, si se encuentra con un obstáculo, no puede atravesarlo y rebota. Pero con los electrones, que son partículas cuánticas y se comportan como ondas, existe la posibilidad de que una parte de ellos pueda atravesar las paredes si son los suficientemente delgadas; de esta manera la señal puede pasar por canales donde no debería circular. Por ello, el chip deja de funcionar correctamente.<br/><br/>

							En consecuencia, la computación digital tradicional no tardaría en llegar a su límite, puesto que ya se ha llegado a escalas de sólo algunas decenas de nanómetros. Surge entonces la necesidad de descubrir nuevas tecnologías y es ahí donde la computación cuántica entra en escena.<br/><br/><br/>

							La idea de computación cuántica surge en 1981, cuando Paul Benioff expuso su teoría para aprovechar las leyes cuánticas en el entorno de la computación. En vez de trabajar a nivel de voltajes eléctricos, se trabaja a nivel de cuanto. En la computación digital, un bit sólo puede tomar dos valores: 0 o 1. En cambio, en la computación cuántica, intervienen las leyes de la mecánica cuántica, y la partícula puede estar en superposición coherente: puede ser 0, 1 y puede ser 0 y 1 a la vez (dos estados ortogonales de una partícula subatómica). Eso permite que se puedan realizar varias operaciones a la vez, según el número de cúbits.<br/><br/>

							El número de cúbits indica la cantidad de bits que pueden estar en superposición. Con los bits convencionales, si se tenía un registro de tres bits, había ocho valores posibles y el registro sólo podía tomar uno de esos valores. En cambio, si se tenía un vector de tres cúbits, la partícula puede tomar ocho valores distintos a la vez gracias a la superposición cuántica. Así, un vector de tres cúbits permitiría un total de ocho operaciones paralelas. Como cabe esperar, el número de operaciones es exponencial con respecto al número de cúbits.<br/><br/>

							Para hacerse una idea del gran avance, un computador cuántico de 30 cúbits equivaldría a un procesador convencional de 10 teraflops (10 millones de millones de operaciones en coma flotante por segundo), cuando actualmente las computadoras trabajan en el orden de gigaflops (miles de millones de operaciones).</p>

							<ul class="actions">
								<li><a href="index2.php" class="button primary">Volver</a></li>
							</ul>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
							<h3>Acerca de</h3>
							<p>Fuantes:
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

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>