<!DOCTYPE HTML>
<!--
--- Allan Weisser V.
	PT1
-->

<!-- Revisión de Login para acceso -->
	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:../index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:../admin.php");
	}
	?>
<!-- Fin revisión -->
<!-- Revisión de puntaje mínimo para acceso -->
	<?php
	if ((@!$_SESSION['user'])||($_SESSION['puntaje']<400)) {
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
	<!-- Llamado a JQuery -->	
		<script type="text/javascript" src="../JQuery/jquery.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				alert("Modules loaded correctly. Press 'OK' to continue.");
			});
		</script>
	<!-- Ancla suave -->
		<script> 
			$(document).ready(function() {
			  $('a[href^="#"]').click(function() {
			    var destino = $(this.hash);
			    if (destino.length == 0) {
			      destino = $('a[name="' + this.hash.substr(1) + '"]');
			    }
			    if (destino.length == 0) {
			      destino = $('html');
			    }
			    $('html, body').animate({ scrollTop: destino.offset().top }, 500);
			    return false;
			  });
			})
		</script>

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

			#wrapper{ margin-top: 160px; 
			}
		</style>

		<!-- Header -->
		<header id="header">
			<a class="logo" href="../index2.php">Acerca de QC Learning | About</a>
			
			<!-- Referencias del login-->
			<a class="central" href="">Bienvenido <strong><?php echo $_SESSION['user'];?> </strong> </a>
			<a class="central" href="">Puntaje: <strong><?php echo $_SESSION['puntaje'];?> </strong> </a>
			
			<!-- Fin referencias-->
		</header>

	<!-- Nav -->
		<nav id="menu">
			<ul class="links">
				<li><a href="../index2.php">Inicio</a></li>
				<li><a href="evaluaciones.html">Evaluaciones</a></li>
				<li><a href="../pruebas/genericopia.php">Prototipo de Evaluaciones</a></li>
				<li><a href="../desconectar.php"> Cerrar Cesión </a></li>
			</ul>
		</nav>

</head>

<header>

<br><br><br><br>
<section id="main">
	<a href="#Anchor" class="button primary">Introducción</a>
	<a href="#myAnchor" id="anchor1" class="button primary">Contenidos</a>
	<a href="QuantumTeleportBASICbeta.php" class="button primary">Parte 1</a>
	<a href="QuantumIntro.php" class="button primary">Ver cursos</a>
	&nbsp;&nbsp;&nbsp;<a href="../index2.php" class="button">Volver a inicio</a>
	<br><br>
	<div class="inner">
		<div class="content">
			<section id="cta" class="wrapper">
				<div class="inner">

					<h1>QC Learning </h1>
					<h2><p>Puertas cuánticas - parte 2 | <b>Curso básico</b></p></h2>
				</div>
			</section>
		  <!-- <img src="images/basico.png" alt="" class="central" style="width:100%"/><br><br>-->
			<br>
					<!--Anlca a contenidos -->
					<a name="Anchor"></a>
			<font size="+1">En aproximadamente <b>30</b> minutos, el estudiante sabrá lo suficiente acerca de <b>Cúbits</b>, <b>Superposición</b> y <b>Entrelazamiento cuántico</b>. Con lo anterior, podrá escribir su primer programa cuántico, y lo más importante, tener una idea razonable de lo que significa.</font><br/><br>
		
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
							<h3>Curso básico de computación cuantica</h3><h4><b>Contenidos:</b> </h4>
									
							Inicio - <a href="#myAnchor0" id="anchor0" class="anchorLink">Another important gate</a>
							Paso 1 - <a href="#myAnchor1" id="anchor1" class="anchorLink">Bell State</a>
							Paso 2 - <a href="#myAnchor2" id="anchor2" class="anchorLink">Writing a Quantum Program</a><br>
							Paso 3 - <a href="#myAnchor3" id="anchor3" class="anchorLink">Next Steps</a>
							Paso 4 - <a href="#myAnchor3" id="anchor3" class="anchorLink">Before ending</a>
							Paso 5 - <a href="#myAnchor3" id="anchor3" class="anchorLink">Multiple Qubits</a>
									
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
				<!--Anlca a contenidos -->
				<a name="myAnchor0"></a>				
				<div class="content" style="text-align: left;">

					<h3><P align="center">1: <b>Another Important Gate</b></P></h3><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You’ve seen the NOT gate, next up we’ve got the <font size="+0.5"><b>CNOT</b></font> gate, which stands for <i>controlled-NOT</i>. It takes two input qubits, the first is the control qubit, and the second is the target qubit. As you might have guessed, if the control is <font size="+1"><b>|0〉</b></font>, then the target qubit is unchanged. If the control is <font size="+1"><b>|1〉</b></font>, then a <font size="+0.5"><b>NOT</b></font> is performed on the target qubit.<br>
					There are a few ways to think of <font size="+0.5"><i>CNOT</i></font>. Like <font size="+0.5"><i>X, Z and H,</i></font> we can show it in matrix form, U.<br>

					<img src="images/imagenesbasico/CM.png" width="330" height="170" class="central"><br><br>
					Mirando las columnas de la matriz, podemos ver que corresponden a las siguientes transformaciones, <b>| 00〉 → | 00〉, | 01〉 → | 01〉, | 10〉 → | 11〉 y | 11〉 → | 10〉.</b> Al igual que con las otras matrices que hemos visto <img src="images/imagenesbasico/C1.png" width="40" height="40"> es unitaria, es decir, <img src="images/imagenesbasico/C2.png" width="130" height="35"><br> También se puede dibujar así, donde el cúbit de control está en la parte superior y el cúbit de destino en la parte inferior:<br><br>
					<img src="images/imagenesbasico/C4.png" width="375" height="100" class="central"><br><br>
					<!--Anlca a contenidos -->
					<a name="myAnchor1"></a>					
					<hr>
					<h3><P align="center">2: <b>Bell State</b></P></h3><br>
					
					
					<!-- <img src="images/imagenesbasico/qubits.png" width="180" height="120" class="central"><br><br> -->

					Estos obtienen una sección entera para sí mismos. Los estados de Bell son cuatro. Verás que uno de ellos <b>(| ϕ +⟩)</b> aparece en el programa cuántico un poco más tarde, así que aquí está<br>

					<br><img src="images/imagenesbasico/CNOT1.png" width="245" height="85" class="central"><br/><br>
					Supongamos que midiéramos el primer qubit, obtendremos <font size="+1"><b>|0〉</b></font> con probabilidad <img src="images/imagenesbasico/B1.png" width="70" height="40"> dejando el estado posterior a la medición <font size="+1"><b>|ψ'〉 = |00〉 </b></font>, o <font size="+1"><b>|1〉</b></font> con la misma probabilidad, <b>0.5</b>, y un estado posterior a la medición <font size="+1"><b>|ψ'〉 = |11〉 </b></font>. En caso de que estuviera interesado, aquí está el conjunto completo de cuatro Estados de Bell (que representan los ejemplos más simples de entrelazamiento cuántico):<br>
					<br><img src="images/imagenesbasico/CNOT2.png" width="515" height="90" class="central"><br/><br>
					Supongamos que en vez de haber medido el segundo cúbit, utilizando la misma lógica dejaría el estado posterior a la medición <font size="+1"><b>|00〉</b></font> o <font size="+1"><b>|11〉</b></font>. Si luego decidimos medir el primer qubit, la probabilidad ya no es la mitad, vamos a obtener <font size="+1"><b>|0〉</b></font> con probabilidad <font size="+1"><b>1</b></font> o <font size="+1"><b>0</b></font> dependiendo del estado posterior a la medición. El punto clave aquí es que estos resultados están correlacionados. Esto fue observado por primera vez por <a href="https://en.wikipedia.org/wiki/Albert_Einstein"> Einstein </a>, Podolsky y Rosen (por lo que es posible que los vea llamados pares de <font size="+0.5"><b>EPR</b></font>), con el progreso realizado por John Bell.<br><br>
					Podemos generar estados de Bell utilizando una combinación de una puerta <b><i>Hadamard</b></i> seguida de un <b><i>CNOT</i></b>. Yo pienso que esto es genial. Hadamard transforma el primer qubit al colocarlo en una superposición, que luego es utilizado por el <b><i>CNOT</b></i> como control para modificar el qubit objetivo. Esto se describe claramente en el siguiente diagrama de circuito:<br><br>
					<div class="row">
						<div class="table-wrapper">
							<table class="alt">
								<thead>
									<tr>
										<th>In</th>
										<th>Out</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><font size="+1"><b>|00〉</b></font></td>
										<td>Ante turpis integer aliquet porttitor.</td>
									</tr>
									<tr>
										<td><font size="+1"><b>|01〉</b></font></td>
										<td>Vis ac commodo adipiscing arcu aliquet.</td>
									</tr>
									<tr>
										<td><font size="+1"><b>|10〉</b></font></td>
										<td>Morbi faucibus arcu accumsan lorem.</td>
									</tr>
									<tr>
										<td><font size="+1"><b>|11〉</b></font></td>
										<td>Vitae integer tempus condimentum.</td>
											
									</tr>
								</tbody>
							</table>
						</div><img src="images/imagenesbasico/B4.png" width="320" height="150">
					</div>
					<br/><br><br/>
					

					<!--Anlca a contenidos -->
					<a name="myAnchor3"></a>
					<hr>
					</a>
					<h3><P align="center">3: <b>Siguientes pasos</b></P></h3><br>
					Por ahora, con nuestro conocimiento de los estados cúbit, las puertas cuánticas y los estados Bell, estamos un paso más cerca para abordar nuestro primer <font size="+1"><b>programa cuántico.</b></font>
					<br><br>
					<a href="../pruebas/pruebacb2.php" class='button primary'>Continuar</a><br><br>
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

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>