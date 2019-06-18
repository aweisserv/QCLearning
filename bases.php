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
	if ((@!$_SESSION['user'])||($_SESSION['puntaje']<200)) {
		echo '<script>alert("No posees el puntaje requerido para esta sección.")</script> ';
		echo "<script>location.href='../index2.php'</script>";
	}
	?>
<!-- Fin revisión -->

<html>
	<head>
		<!--<title>Capa intermedia de pruebas>-->
		<title>Bases y conceptos de la informática cuántca</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">QC Learning</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Inicio</a></li>
					<li><a href="elements.html">Elements</a></li>
					<li><a href="generic.html">Plataforma de pruebas</a></li>
				</ul>
			</nav>

		<!-- Heading -->
			<div id="heading" >
				<h1>Bases y conceptos de la <br> Informática cuántica</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">


<body>
<div class="col-6 col-12-medium">
	<h3>Conceptos de física en mecánica cuántica<br><br>
	Algoritmos cuánticos: <br>
	Cantidad, complejidad de uso y ejemplos clásicos <br>
	Plataformas disponibles <br><br></h3>

	<ul class="actions">
		<li><a href="index2.php" class="button primary">Volver</a></li>
	</ul>

</div>
</body>
</html>
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