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
		<!--<title>Capa intermedia de pruebas>-->
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


	</head>
	<body class="is-preload">
		
		<!-- Header -->
			<header id="header">
				<a class="logo" href="../index2.php">QC Learning</a>
		<!-- Referencias del login-->
				<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
				<li><a href="../desconectar.php"> Cerrar Cesión </a></li>			 
		<!-- Fin referencias-->
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index2.php">Inicio</a></li>
					<li><a href="evaluaciones.html">Evaluaciones</a></li>
					<li><a href="generic.html">Prototipo de Evaluaciones</a></li>
				</ul>
			</nav>

		<!-- Heading -->
			<div id="heading" >
				<h1>Prueba de diagnóstico</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<header>
							<h2>Prototipo de evaluación de diagnóstico<br /> </h2>En esta sección, podrá realizar un test de diagnóstico que evaluará sus conocimientos en Informática cuántica. Al finalizar el test, Obtendrá un puntaje de acuerdo a la cantidad de preguntas respondidas correctamente. El puntaje obtenido lo ayudará a escoger una sección de aprendizaje adecuada según sus conocimientos en el área.

<!--Anlca a contenidos -->
<a name="Anchor"></a>

					<!-- Ancla -->	
							<div id="diagnotico"></div>
							<hr/> 
						<!--
							<button onclick = "this.style.visibility= 'hidden'; renderQuestion()">Comenzar Test</button>
						-->	<a href="#Anchor" class="button primary"onclick = "this.style.visibility= 'hidden'; renderQuestion()">Comenzar prueba</a> 
						<!--	<a href="#diagnotico" onclick = "this.style.visibility= 'hidden'; renderQuestion()">Comenzar prueba</a> -->
					<!-- Fin ncla -->	
						</header>

						<h2 id="test_status"></h2>
						<div id="test"></div>

					<!-- Test Javascript -->	

						<script>

							var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0, puntaje = 0;
							var questions = [
							    [ "¿Qué es un 'Cúbit'?", "¿Cúbit?", "La unidad de información más pequeña en la computación cuántica", "Un estado entrelazado de información", "B" ],
								[ "¿Cuál es el principio cuántico que implica dos estados simultáneos?", "Hadamard Gate", "Entrelazamiento cuántico", "Superposición cuántica", "C" ],
								[ "¿Cual es el principio cuántico que aplica la puerta CNOT?", "Entrelazamiento cuántico", "Superposición cuántica", "Decoherencia de estados", "A" ],
								[ "¿Cual de las siguientes puertas cuánticas aplica el principio de Superposición?", "Z", "X", "Hadamard", "C" ]
							];

							function _(x){
								return document.getElementById(x);
							}

							function renderQuestion(){
								test = _("test");
								if(pos >= questions.length && correct <= questions.length/3){
									test.innerHTML = "<h2> Has obtenido "+correct+" de "+questions.length+" preguntas correctas</h2><br> <h2> Tu puntaje obtenido es: "+puntaje*100+" </h2> 											 <h3>Te sugerimos empezar por la <a href='section/QuantumTeleportADV.php'>sección de aprendizaje para principiantes</a> </h3> <hr /><h3>Curso básico<br></h3>" + "<a href='/section/QuantumTeleportBASICbeta.php'>Continuar</a>";
									
																	
									_("test_status").innerHTML = "Prueba completada";


									puntaje = correct;
									pos = 0;
									correct = 0;
									return false;
									

								}else if (pos >= questions.length && correct > questions.length/3){
									test.innerHTML = "<h3> Has obtenido "+correct+" de "+questions.length+" preguntas correctas</h3><br><hr/>" + "<a href='obt_puntaje.php' class='button primary'>Continuar</a>";

								_("test_status").innerHTML = "Prueba completada";

									pos = 0;
									correct = 0;
									return false;
								}
								
								_("test_status").innerHTML = "Pregunta "+(pos+1)+" de "+questions.length;
								question = questions[pos][0];
								chA = questions[pos][1];
								chB = questions[pos][2];
								chC = questions[pos][3];
								test.innerHTML = "<h3>"+question+"</h3>";

								
								test.innerHTML += "<input type='radio' id='radio-alpha' name='choices' value='A'><label for='radio-alpha'>  "+chA+" </label><br><br>";
								test.innerHTML += "<input type='radio' id='radio-beta' name='choices' value='B'><label for='radio-beta'>    "+chB+"</label><br><br>";
								test.innerHTML += "<input type='radio' id='radio-gamma' name='choices' value='C'><label for='radio-gamma'>  "+chC+" </label><br><br>";
								test.innerHTML += "<button onclick='checkAnswer()'>Enviar respuesta</button>";
							}


							function checkAnswer(){
								choices = document.getElementsByName("choices");
								for(var i=0; i<choices.length; i++){
									if(choices[i].checked){
										choice = choices[i].value;
									}
								}
								if(choice == questions[pos][4]){
									correct++;
									puntaje = correct;
								}
								pos++;
								renderQuestion();
							}


						//window.addEventListener("load", renderQuestion, false);
						</script>
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