<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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
	if ((@!$_SESSION['user'])||($_SESSION['puntaje']<800)) {
		echo '<script>alert("No posees el puntaje requerido para esta sección.")</script> ';
		echo "<script>location.href='../index2.php'</script>";
	}
	?>
<!-- Fin revisión -->


<head>
	<meta charset="utf-8">
	<title>Instructivo Q#</title>
	<meta name="description" content="">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- <link rel="shortcut icon" href="img/favicon.png"> -->
	
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>
	
	<!-- Syntax Highlighter -->
	<link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shCore.css" media="all">
	<link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shThemeDefault.css" media="all">
	
	<!-- Font Awesome CSS-->
	<link rel="stylesheet" href="assets/css/main.css"/>
	<!-- Normalize/Reset CSS-->
	<link rel="stylesheet" href="css/normalize.min.css">
	<!-- Main CSS-->
	<link rel="stylesheet" href="css/main.css">
	
</head>
		<!-- Header -->
		<header id="header">
			<a class="logo" href="../index2.php">Acerca de QC Learning / About</a>
			
			<!-- Referencias del login-->
			<a class="central" href="">Bienvenido <strong><?php echo $_SESSION['user'];?> </strong> </a>
			<a class="central" href="">Puntaje: <strong><?php echo $_SESSION['puntaje'];?> </strong> </a>
			
			<!-- Fin referencias-->
		</header>

<body id="welcome">
	
	<aside class="left-sidebar">
		<div class="logo">
			<a href="#welcome">
				<img src="img/logo.png" alt="">
			</a>
		</div>
		<nav class="left-nav">
			<ul id="nav">
				<li class="current"><a href="#welcome">Introducción</a></li>
				<li><a href="#installation">Instalación y requisitos de sistema</a></li>
				<li><a href="#tmpl-structure">Teletransportación cuántica: Resumen</a></li>
				<li><a href="#css-structure">Teletransportación cuántica: Código</a></li>
				<li><a href="#credit">Fuentes</a></li>
			</ul>
		</nav>
	</aside>
	
	<div id="main-wrapper">
		<div class="main-content">
			<section id="welcome">
				<div class="welcome">
					
					<h1>QC Learning </h1><br><h2><p>Escribiendo un programa en <b>Q#</b> <br>| <b>Instructivo</b></p></h2><br>
					16‎/‎06‎/‎2019
					| 20 minutos para leer<br>
					Por: Allan Weisser V.
					<hr><br><h2 class="twenty">Introducción</h2><br><p align="justify"><font size="+1">En esta sección, el estudiante podrá aprender a escribir su primer programa cuántico, aplicando el aprendizaje y los conceptos adquiridos en los cursos básico y avanzado.
					Para lo anterior, será necesario descargar un <b>entorno de programación</b> con la capacidad de leer y ejecutar algoritmos cuánticos.</p></font>
				</div>
				
				<div class="features">
					<p align="justify"><font size="+1">Actualmente, existen distintos lenguajes de programación orientados a la informática cuántica. El más reciente proviene de <b>Microsoft</b>, que ha presentado su nuevo lenguaje <b>Q#</b> (pronunciado "Q sharp", haciendo referencia al popular lenguaje de programación C# de la compañía) junto a un conjunto de herramientas que ayudan a los desarrolladores a usarlo para crear software. Éste se suma a QCL y Quipper, los otros lenguajes de programación cuántica de alto nivel más conocidos.</p></font>
					<p align="justify"><font size="+1">Estos nuevos lenguajes son necesarios para sustituir a los que están escritos para los ordenadores actuales, que no funcionarán en las futuras computadoras cuánticas, ya que las computadoras clásicas codifican la información en forma binaria, con secuencias de unos y ceros, y como ya hemos visto anteriormente, las computadoras cuánticas usan bits cuánticos, o "cúbits".</font></p>
					<p align="justify"><font size="+1">Q# es descrito como un lenguaje de programación específico usado para expresar algoritmos cuánticos.<br>
					Ha sido creado para ser usado al escribir subprogramas que se ejecuten en un procesador cuántico, bajo el control de un ordenador y programa clásico. Q# está integrado con <b>Microsoft Visual Studio.</b><br>
					<p align="justify"><font size="+1">Con el kit se puede trabajar con un simulador cuántico local que puede simular hasta 30 qubits, aunque por ahora, nos centraremos en cómo implementar lo aprendido en los cursos vistos anteriormente.<br><br>
				</div>
			</font><center><img src="DiagramaQ.png" width="500" height="230"></center>
			</section>
			
			<section id="installation"><br><br>
				
				<hr><br><h2 class="twenty">Instalación y requisitos de sistema</h2><br>
				
				<div class="section-content">
					<font size="+1">					
					<ul>
						<li>Descarga de Microsoft Visual Studio Code</li>
						<li>Microsoft Quantum Development Kit para Visual Studio Code*</li>
						<li>Instalación y actualización de IQ#</li>
						*Se requiere sistema operativo compatible con arquitectura de 64 bits.
					</ul></font>
				</div>
			</section>

			<section id="tmpl-structure"><br><br>
				
				<hr><br><h2 class="twenty">Teletransportación cuántica: Resumen</h2><br>
				
				<p class="fifteen">
					En el curso avanzado, vimos cómo aplicar los conceptos aprendidos en un algoritmo cuántico; La teletransportación de estados.<br>
					A continuación se muestra un circuito cuántico en un libro de texto que implementa la teletransportación. 
					Moviéndose de izquierda a derecha puedes ver:<br>
					<div class="section-content">
							<font size="+1">					
							<ul>
								<li> Entrelazar cúbits 'aquí' y 'allá', o Emisor y Receptor ('here' & 'there') aplicando una puerta de Hadamard y una puerta CNOT.</li>
								<li> Enviar el mensaje utilizando una puerta CNOT y una puerta Hadamard.</li>
								<li> Tomar una medida al primer y segundo cúbit, 'mensaje' y 'aquí' ('msg' & 'here').</li>
								<li> Aplicar una puerta 'NO' ('X') o una puerta 'Z', según el resultado de la medición en el paso 3.</li>
							</ul></font>
						</div>

					<br>Finalmente, teníamos nuestro circuito para la teletransportación cuántica:<br><br>
					<img src="circuitoqlisto2.png"><br><br><br>
					Ahora podemos traducir cada uno de los pasos en este circuito cuántico a Q#.</p><br>
				          
				</pre>
			</section>
			<section id="css-structure"><br><br>
				
				<hr><br><h2 class="twenty">Teletransportación cuántica: Código</h2>
				
				<p class="fifteen"><br><strong>Definición</strong><br><br>
					
					Cuando realizamos la teletransportación, debemos conocer el mensaje que deseamos enviar, y dónde deseamos enviarlo; en este caso, a <b>'there'</b> ('allá''). Por esta razón, comenzamos por definir una nueva operación de Teleport que recibe dos cúbits como argumentos, <b>'msg'</b> (mensaje) y <b>'there'</b> ('allá'):<br>

					<blockquote>Q#<br><br><code>operation Teleport(msg : Qubit, there : Qubit) : Unit { </code><br><br></blockquote><br>
					
					<br>
					También necesitamos asignar un cúbit <code>here</code> ('aquí'), que logramos con el siguiente bloque: <code> using</code><br>

					<blockquote>Q#<br><br><code>using (here = Qubit()) { </code><br><br></blockquote><br>

				</p>
				<p class="fifteen"><br><strong>Crear un estado de Bell (o un estado entrelazado).</strong><br><br>

					Luego podemos crear el par entrelazado entre <code>here</code> & <code>there</code> utilizando las operaciones <b>H</b> y <b>CNOT</b>:

					<blockquote>Q#<br><br><code>H(here);</code><br><br>
        			<code>CNOT(here, there);</code></blockquote><br>
        		</p>
        		<p class="fifteen"><br><strong>Enviar el mensaje</strong><br><br>

					Luego usamos las puertas <b>CNOT</b> y <b>H</b> puertas para mover nuestro cúbit <code>msg</code>: 

					<div class="row">
						<div class="col-md-4">
							<div class="single-defination">

					<blockquote>Q#<br>
<pre><code>CNOT(msg, here);
H(msg);</code></pre></blockquote><br>
							</div>
						</div>
					</div>
        		</p>
        		<p class="fifteen"><br><strong>
					Medición e interpretación del resultado</strong><br><br>

					
					Finalmente, usamos <code><b>M</b></code> para realizar las mediciones y  operaciones de puertas necesarias para obtener el estado deseado, como se denota por las declaraciones <code>if</code>: 
					<div class="row">
							<div class="col-md-4">
								<div class="single-defination">

					<blockquote>Q#<br>
<pre><code>// Measure out the entanglement
	if (<b>M</b>(msg) == One)  { Z(there); }
	if (<b>M</b>(here) == One) { X(there); }</code></pre></blockquote><br>
					
					</div></div></div>
        			Esto termina la definición de nuestro operador de teletransportación, por lo que podemos cerrar la asignación <br><br><code>here</code>: finalizar el cuerpo y finalizar la operación.

        			<blockquote><br><br>
        			<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</code><br><br>
        			<code>}</code></blockquote><br>

        			<a href="../pruebas/pruebaqs.php">Siguiente</a>

        		</p>
        		<br>
			<section id="credit"><br><br>
				
				<hr><br><h2 class="twenty">Fuentes</h2><br>
				
				<p>
					<ul>
						<li><a target="_blank" href="https://www.technologyreview.es/s/9890/la-computacion-cuantica-busca-los-nuevos-lenguajes-que-la-programaran-en-un-futuro">MIT Technology Review</a></li>
						<li><a target="_blank" href="https://docs.microsoft.com/es-es/quantum">Microsoft Quantum Techniques</a></li>
						<li><a target="_blank" href="https://docs.microsoft.com/en-us/quantum/language/?view=qsharp-preview">Microsoft Q#</a></li>
						<li><a target="_blank" href="https://developer.ibm.com/open/projects/qiskit/">IBM Qskit</a></li>
						
					</ul><br><br><br><br><br><br><br><br><br><br><br>
				</p>
			</section>
		</div>
	</div>
	
	
	<!-- Essential JavaScript Libraries
	==============================================-->
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.nav.js"></script>
	<script type="text/javascript" src="syntax-highlighter/scripts/shCore.js"></script>
	<script type="text/javascript" src="syntax-highlighter/scripts/shBrushXml.js"></script>
	<script type="text/javascript" src="syntax-highlighter/scripts/shBrushCss.js"></script>
	<script type="text/javascript" src="syntax-highlighter/scripts/shBrushJScript.js"></script>
	<script type="text/javascript" src="syntax-highlighter/scripts/shBrushPhp.js"></script>
	<script type="text/javascript">
	SyntaxHighlighter.all()
	</script>
	<script type="text/javascript" src="js/custom.js"></script>
	
</body>
</html>