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
		<title>Inicio | QC Learning</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

		
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">

				<a class="logo" href="index2.php">Acerca de QC Learning / About</a>

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
					<li><a href="index.html">Inicio</a></li>
					<li><a href="evaluaciones.html">Evaluaciones</a></li>
					<li><a href="genericopia.php">Prototipo de Evaluaciones</a></li>
					<li><a href="desconectar.php"> Cerrar Cesión </a></li>
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
				<!--<video autoplay loop muted playsinline src="images/particles.mp4"></video>-->
			</section>

			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>INICIO</h2>
						<p>Bases, conceptos y desarrollo global sobre la informática cuántica <br/>
						Areas de intereses relacionados</p>
						
					</header>

		<!--<div class="highlights">-->
					<div class ="highlights">
						<section>		
							<div class ="box">
							 <div class="content">

									<i><a href="#" class="icon fa-university" style='font-size:70px'><span class="label"></span></a></i>
									<h6>1</h6>
									<h3>Origen</h3><br>
								
								<p align=left>Introducción a la informática cuántica</p>
								<ul><br>
									<p align=left><li>Origen</li>
									<li>Motivación</li> 
									<li>Avances registrados</li>
									<a href="ORIGEN.php">Ver todo</a>
									
								</ul></p>
							 </div>
							</div>
						</section>
						<section>
							<div class ="box">
							 <div class="content">
								
									<i><a href="#" class="icon fa-book" style='font-size:70px'><span class="label" ></span></a></i>
									<h6>2</h6>
									<h3>Bases y Conceptos</h3>
								
								<p align=left>Guía de contenidos básicos para el estudiante.<br>
									<br>Terminología y conceptos necesarios para iniciar el curso básico.<br></p>
							 </div>
							</div>
						</section>
						<section>
							<div class ="box">
							 <div class="content">
								<header>
									<i><a href="#" class="icon fa-graduation-cap" style='font-size:70px'><span class="label"></span></a></i>
									<h6>3</h6>
									<h3>Cursos y pruebas de aprendizaje</h3><h4>Parte 1</h4>
								</header>
								<p><ul align=left>
									<li align=left><a href="section/QuantumTeleportADV.php">Introducción a cursos</a></li> 
									<li align=left>Curso básico: puertas lógicas*</li> 
									<li align=left>Prueba de contenidos*</li>
									<li>*Puntaje requerido: <a href="ORIGEN.php"> 400 puntos</a></li>
									
								</ul></p>								
							 </div>
							</div>
						</section>
						<section>
							<div class ="box">
							 <div class="content">
								<header>
									<i><a href="#" class="icon fa-graduation-cap" style='font-size:70px'><span class="label">Icon</span></a></i>
									<h6>4</h6>
									<h3>Cursos y pruebas de aprendizaje</h3><h4>Parte 2</h4>
								</header>
									<p><ul align=left>
										 <li align=left>Curso avanzado: Tele-transportación cuántica de estados*</li> 
										 <li align=left>Prueba de contenidos*</li>
										 <li>*Puntaje requerido: <a href="ORIGEN.php"> 600 puntos</a>
										 </li>
									 </ul><a href="genericopia2.php">TEST</a></p>	
							 </div>
							</div>
						 </section>
						<section>
							<div class ="box"> 
							 <div class="content">
								<header>
									<i><a href="#" class="icon fa-cogs" style='font-size:70px'><span class="label"></span></a></i>
									<h6>5</h6>
									<h3>Prueba Blockly!</h3>
								</header>
								<p>Herramienta basada en los conocimientos adquiridos en los cursos básico y avanzado. Consta de puzzles con algoritmos desordenados que el estudiante deberá ordenar.<br /><a href="EMPRESAS.html">Ir a Blockly<br>*Puntaje requerido: <a href="ORIGEN.php"> 800 puntos</a> </p>
							 </div>
							</div>
						</section>
						<section>
							<div class ="box">
							 <div class="content">
								<header>
									<i><a href="#" class="icon fa-paper-plane-o" style='font-size:70px'><span class="label">Icon</span></a></i>
									<h6>6</h6>
									<h3>Simuladores</h3><h4>Parte 2</h4>
								</header>
									<p><ul align=left>
										 <li align=left><srong>IBM Q Experience</srong></li> 
										 <li align=left>Mirosoft Q# Development</li>
										 <li>*Puntaje requerido: <a href="ORIGEN.php"> 600 puntos</a></li>
									 </ul><a href="genericopia2.php">Ver registro</a></p>	
							 </div>
							</div>
						 </section>
						<!--<section>
							<div class ="box">
							 <div class="content">
								<header>
									<i><a href="#" class="icon fa-paper-plane-o" style='font-size:70px'><span class="label"></span></a></i>
									<h6><br>6</h6>
									<h3>Simuladores</h3>
								</header>
								<p><ul align=left>
										 <li align=left><srong>IBM Q Experience</srong></li> 
										 <li align=left>Mirosoft Q# Development</li>
										 <li>*Puntaje requerido: <a href="ORIGEN.php"> 600 puntos</a></li>
									 </ul><a href="genericopia2.php">Ver registro</a></p>
							 </div>
							</div>
						</section>-->
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
									<p>Profesora Sarita González C.<br />Profesor guía</p>
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
									<p>Romina Torres<br />Directora de carrera</p>
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
									<p>Ambiente académico. <br /> </p>
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