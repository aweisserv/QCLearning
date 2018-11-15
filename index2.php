<!DOCTYPE HTML>
<!--
	Proyecto de título 2
	Nombre       : Allan Weisser
	Profesor guía: Juan F. Calderón
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
		<!--<title>Educa IC</title>-->
		<title>Inicio - QC Learning</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">

				<a class="logo" href="index2.php">Acerca de QC Learning / About</a>

				<!-- Referencias del login-->


				<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
				<li><a href="desconectar.php"> Cerrar Cesión </a></li>			 

				<!-- Fin referencias-->

				<nav>
					<a href="#menu">Menu</a>
				</nav>


			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Inicio</a></li>
					<li><a href="evaluaciones.html">Evaluaciones</a></li>
					<li><a href="genericopia.php">Prototipo de Evaluaciones</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>QC Learning</h1>
					<p>Plataforma educativa de introducción a la informática cuántica<br />
					Educational platform of introduction to quantum computing  </p> <br />
					Proyecto de título por Allan Weisser V.<br /><a href="https://campus.ing.unab.cl/">UNIVERSIDAD ANDRES BELLO</a></p>
				</div>
				<video autoplay loop muted playsinline src="images/particles.mp4"></video>
			</section>

		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>INICIO</h2>
						<p>Bases, conceptos y desarrollo global sobre la informática cuántica <br />
						Areas de intereses relacionados</p>
					</header>
					<div class="highlights">
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-files-o"><span class="label">Icon</span></a>
									<h3>Origen</h3>
								</header>
								<p>Historia, áreas multidisciplinarias de la informática y desarrollo tecnológico.<br /><a href="ORIGEN.php">Ver todo</a></p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-files-o"><span class="label">Icon</span></a>
									<h3>Bases y Conceptos</h3>
								</header>
								<p>Mecánica cuántica, cúbits, ordenadores cuánticos y otras terminologías.<br /><a href="#">Ver todo</a></p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-files-o"><span class="label">Icon</span></a>
									<h3>Motivación</h3>
								</header><p>Potencial explicado en detalle.<br> Ventajas y la Informática tradicional.<br /><a href="#">Ver más</a></p>								
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-paper-plane-o"><span class="label">Icon</span></a>
									<h3>Introducción a la informática cuántica</h3>
								</header><p><br> Secciones de aprendizaje.<br /><a href="section/QuantumTeleportADV.php">Ver más</a></p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-line-chart"><span class="label">Icon</span></a>
									<h3>Empresas e Instituciones</h3>
								</header>
								<p>Investigación, desarrollo y competencia global en informática cuántica por parte de distintas empresas e instituciones involucradas.<br /><a href="EMPRESAS.html">Aprenda más</a> </p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-floppy-o"><span class="label">Icon</span></a>
									<h3>Avances registrados</h3>
								</header>
								<p>Hechos y acontecimientos más importantes en el área, desde 1981. <br /><a href="#">Ver registro</a></p>
							</div>
						</section>
					</div>
				</div>
			</section>

		<!-- CTA -->
			<section id="cta" class="wrapper">
				<div class="inner">
					<h2>Visión de educación y proyecto educativo</h2>
					<p>Sobre proyecto educativo (QC Learning).</p>
				</div>
			</section>

		<!-- Testimonials -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>Docentes</h2>
						<p>Profesores y evaluadores.</p>
					</header>
					<div class="testimonials">
						<section>
							<div class="content">
								<blockquote>
									<p>Miguel Solis.<br />Profesor guía</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="images/pic01.png" alt="" />
									</div>
									<p class="credit">- <strong>Universidad Andrés Bello</strong> <span>Link.</span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>Juan Calderón.<br />Profesor evaluador hitos</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="images/pic02.png" alt="" />
									</div>
									<p class="credit">- <strong>Universidad Andrés Bello</strong> <span>Link.</span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>Ambiente académico. <br /> Sobre la UNAB</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="images/pic02.png" alt="" />
									</div>
									<p class="credit">- <strong>Universidad Andrés Bello</strong> <span>Link.</span></p>
								</div>
							</div>
						</section>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content">
						
						<section>
							<h4>Conecta QC Learning en redes sociales<br /> Connect QC Learning on social media</h4>
							<ul class="plain">
								<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
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

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>