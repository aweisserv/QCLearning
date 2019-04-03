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
	</head>
	<body class="is-preload">
		
		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">QC Learning</a>
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
					<li><a href="index2.php">Inicio</a></li>
					<li><a href="evaluaciones.html">Evaluaciones</a></li>
					<li><a href="generic.html">Prototipo de Evaluaciones</a></li>
				</ul>
			</nav>

		<!-- Heading -->
			<div id="heading" >
				<h1>Capa intermedia de pruebas <br />de conocimiento y aprendizaje</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<header>
							<h2>Fundamentos de programación cuántica<br /> </h2><h3> En esta sección podrá hacer uso de una herramienta que le permita poner a prueba los conocimientos adquiridos.</h3>
							Se presentan alternativas con distintas partes de código que deberá analizar. Solo puede seleccionar una alternativa por respuesta, y una sola será la correcta.
					<!-- Ancla -->	
							<div id="diagnotico"></div>
							<hr/> 
						<!--
							<button onclick = "this.style.visibility= 'hidden'; renderQuestion()">Comenzar Test</button>
						-->	
							<a href="#diagnotico" onclick = "this.style.visibility= 'hidden'; renderQuestion()">Comenzar prueba</a> 
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
								[ "Pregunta 3?", "<code>msg</code>", "incorrecta", "incorrecta", "A" ],
								[ "Pregunta 4?", "incorrecta", "incorrecta", "<code>operation Teleport(msg : Qubit, <strong>|ψ⟩</strong> : Qubit) : Unit {body (...) {</code>", "C" ]
							];

							function _(x){
								return document.getElementById(x);
							}

							function renderQuestion(){
								test = _("test");
								if(pos >= questions.length && correct <= questions.length/3){
									test.innerHTML = "<h2> Has obtenido "+correct+" de "+questions.length+" preguntas correctas</h2><br> <h2> Tu puntaje obtenido es: "+puntaje*100+" </h2> 											 <h3>Te sugerimos empezar por la <a href='index.html'>sección de aprendizaje para principiantes</a> </h3> <hr /><h3>Sección Principiantes<br><p>Origen y conceptos clave.</h3></p></h3>";

									
									_("test_status").innerHTML = "Prueba completada";

									puntaje = correct;
									pos = 0;
									correct = 0;
									return false;


								}else if (pos >= questions.length && correct > questions.length/3){
									test.innerHTML = "<h2> Has obtenido "+correct+" de "+questions.length+" preguntas correctas</h2><br> <h2> Tu puntaje obtenido es: "+puntaje*100+" </h2><hr/><h3><a href='#'>Seguir aprendiendo</a></h3>";
									

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

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
