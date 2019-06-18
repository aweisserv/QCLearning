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
<!-- Revisión de puntaje mínimo para acceso -->
	<?php
	if ($_SESSION['puntaje']<400) {
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

		#wrapper{ margin-top: 160px; }
		</style>

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
					<li><a href="../index2.php">Inicio</a></li>
					<li><a href="">Evaluaciones</a></li>
					<li><a href="../pruebas/diagnostico.php">Prototipo de Evaluaciones</a></li>
					<li><a href="../desconectar.php"> Cerrar Cesión </a></li>
				</ul>
			</nav>

</head>

<header>

<br><br><br><br>
<section id="main">
	<a href="#Anchor" class="button primary">Requisites</a>
	<a href=#myAnchor class="button primary">Content</a>
	<a href="QuantumTeleportBASICbeta2.php" class="button primary">Part II</a>
	<a href="QuantumIntro.php" class="button primary">Courses</a>
	&nbsp;&nbsp;&nbsp;<a href="../index2.php" class="button">Back to the start page </a>
	<br><br>
	<div class="inner">
		<div class="content">
			<section id="cta" class="wrapper">
				<div class="inner">

					<h1>QC Learning </h1>
					<h2><p>Quantum Gates - Part I <b>| Basic course</b></p></h2>
				</div>
			</section>
		<!-- <img src="images/basico.png" alt="" class="central" style="width:100%"/><br><br>-->
		<br><font size="+1">En aproximadamente <b>30</b> minutos, el estudiante sabrá lo suficiente acerca de <b>Cúbits</b>, <b>Superposición</b> y <b>Entrelazamiento cuántico</b>. Con lo anterior, podrá escribir su primer programa cuántico, y lo más importante, tener una idea razonable de lo que significa.</font><br/><br>
		
		<!--<a type="button" value="Comenzar" onClick="this.style.visibility= 'hidden'; document.getElementById('oculto').style.visibility='visible';document.getElementById('oculto2').style.visibility='visible'">Iniciar.</a><br><br> -->
		</div>
	</div>
</section>


<!--Anlca a contenidos -->
<a name="Anchor"></a>

<!--<div id="oculto" style="visibility:hidden">-->
	<section id="main">
		<div class="inner">
			<section>
				<div class ="box">
					<div class="content">
						<i><a href="../bases.php" class="icon fa-book" style='font-size:70px'><span class="label" ></span></a></i>
							<h3>Bases y Conceptos</h3>
							<p align= center>Guía de contenidos básicos para el estudiante.<br>
							Terminología y conceptos necesarios para iniciar el curso básico.<br></p>
							<br><a href="../bases.php" class="center"> Ir a sección </a>
					</div>
				</div>
			</section>
			<section>
				<!--Anlca a contenidos -->
				<a name="myAnchor" id="anchor1"></a>

				<div class ="box">
					<div class="content">
						<div class="content">
						
							<i><a href="#" class="icon fa-graduation-cap" style='font-size:70px'><span class="label">Icon</span></a></i>
							<h3>Curso básico de computación cuantica</h3><h4><b>Contenidos:</b> </h4>
									
							Inicio - <a href="#myAnchor0" id="anchor0" class="anchorLink">Volver a lo básico</a>
							Paso 1 - <a href="#myAnchor1" id="anchor1" class="anchorLink">Representing a Qubit</a>
							Paso 2 - <a href="#myAnchor2" id="anchor2" class="anchorLink">Measuring a Qubit</a><br>
							Paso 3 - <a href="#myAnchor3" id="anchor3" class="anchorLink">Puertas cuánticas</a>
							Paso 4 - <a href="#myAnchor4" id="anchor3" class="anchorLink">Puertas importantes</a>
							Paso 5 - <a href="#myAnchor5" id="anchor3" class="anchorLink">Multiple Qubits</a>
						</div>
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
						

					<h3><P align="center"><b>Back to basics</b></P></h3><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; It’s easy to forget that the programs we write are essentially just manipulating a bunch of 0s and 1s stored in our ‘classical’ computer. These are discrete, binary states.
					Quantum computers however operate on continuous states – that’s part of what makes them so powerful.
					So instead of a classical bit being ‘on’ or ‘off’ like a light switch, in a quantum computer we have qubits, which are more like a dimmer switch, being any possible combination of ‘on’ and ‘off’ in between.
					Just as bits are the fundamental object of information in classical computing, qubits (quantum bits) are the fundamental object of information in quantum computing. To understand this correspondence, let's look at the simplest example: a single qubit.<br><br><br>
					<!--Anlca a contenidos -->
					<a name="myAnchor1"></a>					
					<hr>
					<h3><P align="center">1: <b>Representing a Qubit</b></P></h3><br>
					
					While a bit, or binary digit, can have value either <font size="+1"><b>0</b></font> or <font size="+1"><b>1</b></font>, a qubit can have a value that is either of these or a quantum superposition of <font size="+1"><b>0</b></font> and <font size="+1"><b>1.</b></font><br><br>
					<img src="images/imagenesbasico/qubits.png" class="central"><br><br>

					The state of a single qubit can be described by a two-dimensional column vector of unit norm, that is, the magnitude squared of its entries must sum to <font size="+1"><b>11.</b></font> This vector, called the quantum state vector, holds all the information needed to describe the one-qubit quantum system just as a single bit holds all of the information needed to describe the state of a binary variable.<br>

					We can notate the two qubit states using Dirac notation which equates to these vectors:<br>

					<br><img src="images/imagenesbasico/image93.png" width="420" height="70" class="central"><br/>

					If we add the two states together, we can express any possible combination of <font size="+1"><b>|0〉</b></font> and <font size="+1"><b>|1〉</b></font>, and in quantum mechanics this is called a <font size="+0.5"><b>superposition.</b></font> The notation for that looks like this: <font size="+2"><P align="center"><b>|ψ⟩ = α |0〉 + β |1〉</b></P></font>
					Here <font size="+1"><b>α</b></font> and <font size="+1"><b>β</b></font> are kind of like probabilities with the minor difference that they are complex numbers. It doesn’t matter if you think of them as real numbers; however, if you do, then remember that they'll sometimes be negative, and that the sum of their squares is always <font size="+1"><b>1.</b></font><br><br>
					<!--Anlca a contenidos -->
					<a name="myAnchor2"></a>					
					<hr>

					<h3><P align="center">2: <b>Measuring a Qubit</b></P></h3><br>

					Now quantum states are weird. If you “look” at a qubit, it immediately collapses its state. This means that if we have a qubit that is in a superposition and we measure it, it’s either going to collapse to the <font size="+1"><b>|0〉</b></font> state or the <font size="+1"><b>|1〉</b></font> state (we can’t measure both at the same time!). After measurement, we effectively lose the prior values of <font size="+1"><b>α</b></font> and <font size="+1"><b>β.</b></font>
					<br/>
					Because of that, when we measure a qubit, we talk about the result we get in terms of probabilities. In general, a qubit when measured will give <font size="+1"><b>'|0〉'</b></font> with probability <font size="+1"><b>|α|²</b></font>, and <font size="+1"><b>'|1⟩'</b></font> with probability <font size="+1"><b>|β|²</b></font>. 
					<br/>
					Let’s have a look at an example - say we had the following qubit:<br>
					<img src="images/imagenesbasico/image94.png" width="260" height="140" class="central"><br>
					If we measure the qubit we are likely to get the outcome <font size="+1"><b>'0'</b></font> fifty percent of the time, because <img src="images/imagenesbasico/B1.png" width="70" height="40"> and its post-measurement state will be <font size="+1"><b>|0〉</b></font> (i.e. α=1 and β=0). Similarly, we are likely to get the outcome <font size="+1"><b>'1'</b></font> fifty percent of the time, for the same reason, and its post-measurement state will be <font size="+1"><b>|1〉</b></font> (i.e. α =0 and β=1).<br>
					<img src="images/imagenesbasico/50y50.png" width="400" height="120" class="central"><br>
					This can seem confusing at first. The main point here is that these probabilistic quantum states can be used for computation and in some cases, this is much more efficient than classical systems due to their ‘quantum weirdness’. Next, we’re going to look at how we can manipulate these qubits for computation just like you can with classical bits.<br>
					<!--Anlca a contenidos -->
					<a name="myAnchor3"></a>					
					<hr>

					<h3><P align="center">3: <b> Quantum Gates</b></P></h3><br>

					We’re back in familiar territory. In classical computing we use logic gates to operate on bits, and likewise we can use quantum gates to operate on qubits. Think of the NOT gate, which takes <font size="+1"><b>0 → 1</b></font> and <font size="+1"><b>1 → 0.</b></font> A quantum NOT gate bears some resemblance to its classical brother, as it takes <br><font size="+1"><b>|0〉 → |1〉</b></font> and <font size="+1"><b>|1〉 → |0〉.</b></font> So, a qubit in the state <font size="+1"><b>α|0〉 + β|1〉</b></font> becomes <font size="+1"><b>α|1〉 + β|0〉</b></font> after such a gate has operated on it. The not gate can be written as a matrix, <font size="+1"><b>X</b></font>, which swaps the roles of <font size="+1"><b>0</b></font> and <font size="+1"><b>1</b></font> in the state:
					<br/><br>

					<img src="images/imagenesbasico/Xgate.png" width="160" height="60" class="central"><br>
					As we can see, <font size="+1"><b>X|0〉 = |1〉</b></font> and <font size="+1"><b>X|1〉 = |0〉:</b></font><br/><br/>

					<img src="images/imagenesbasico/image98.png" width="500" height="130" class="central"><br>

					Because <font size="+1"><b>|0〉</b></font> and <font size="+1"><b>|1〉</b></font> are defined in vector form as <img src="images/imagenesbasico/image99.png" width="29" height="42"> and  <img src="images/imagenesbasico/image100.png" width="24" height="43">, you can think of the first column of X as the transformation applied to <font size="+1"><b>|0〉</b></font> and the second column as the transformation applied to <font size="+1"><b>|1〉</b></font>.<br/>

					Now this doesn’t seem all that different to what we’re used to. As have seen in the previous section, the measurement of a qubit is probabilistic. And as we know from basic statistics, all probabilities sum to one. As a result, we have the condition that <font size="+1"><b>|α|²+|β|² =1</b></font> for a quantum state <font size="+1"><b>α|0〉 + β|1〉.</b></font><br/><br/>

					A consequence of this is that there are some constraints on what gates we can have in the quantum world. And one of them is that this normalization condition on the quantum states, <font size="+1"><b>|α|²+|β|² =1</b></font>, should hold both before and after the gate has acted. In terms of matrices, this condition will hold if a matrix is unitary.<br><br>

					I’m about to tell you what unitary means in maths speak, if we read it really quickly, we can get to the next sentence. A gate is unitary if, where U†U=1, where U is obtained by transposing and then complex conjugating U, and 1 is the two by two identity matrix. In plain English, it means that the transformation doesn’t change the length of the vector. Keeping the length constant is the same as ensuring that all the probabilities add up to 100%. Having probabilities add up to 200% or 25% would make no sense and using unitary matrices guarantees at least this type of craziness is off the menu in the quantum world.<br><br>

					But we can breathe a sigh of relief – this is our only constraint. Some classical gates don’t have quantum equivalents for this reason, but there are some new ones that crop up too, and we’re going to look at some important ones next.<br><br><br>

					<!--Anlca a contenidos -->
					<a name="myAnchor4"></a>
					<hr>

					<h3><P align="center">4: <b> Important Gates: <br>Z</b> and <b>Hadamard</b></P></h3><br>

					The following gates you will see in our first quantum program. The <font size="+0.5"><i>Z</i></font> gate is nice and simple, it leaves <font size="+1"><b>|0〉</b></font> unaltered and makes <font size="+1"><b>|1〉</b></font> negative. That can be written as a matrix like this:<br>

					<img src="images/imagenesbasico/Zgate.png" width="160" height="67" class="central"><br><br>

					which transforms the qubit states from <font size="+1"><b>|0〉→|0〉</b></font> and from <font size="+1"><b>|1〉→ -|1〉.</b></font> (Remember, the first column corresponds to the transformation applied to <font size="+1"><b>|0〉</b></font>, and the second column to <font size="+1"><b>|1〉.</b></font>)<br>
					Then we also have the <font size="+0.5"><i>Hadamard</i></font> gate which creates a superposition between the <font size="+1"><b>|0〉</b></font> and <font size="+1"><b>|1〉</b></font> states, similar to those seen previously. And that can be written as a matrix like this:<br>

					<img src="images/imagenesbasico/Hgate.png" width="183" height="72" class="central"><br><br>

					<!-- Ancla para Quote Hadamard -->
					<a id="myAnchor7" class="anchorLink"></a>

					which transforms the qubit states from <img src="images/imagenesbasico/h1.png" width="90" height="42"> and <img src="images/imagenesbasico/h2.png" width="105" height="45"><br><br><br> 
					
					<a href="#myAnchor7" value="Ver más" onClick="this.style.visibility= 'hidden'; document.getElementById('oculto').style.visibility='visible';document.getElementById('oculto2').style.visibility='visible'">Further information</a>

					<div id="oculto" style="visibility:hidden;">
						<font size="+1"><b>The Hadamard gate</b></font></P>
						<img src="images/imagenesbasico/Hadamardg.png" width="183" height="72"><br>
							<div class="row">
								<font size="+0.5"><b>Qubit state transformation</b></font>
										<div class="col-3 col-12-small">
											<blockquote>
												<font size="+1"><b>|+〉 &nbsp;<img src="images/imagenesbasico/convers.png" width="35" height="15"> |0〉</b></font><br>
												<font size="+1"><b>|-〉 &nbsp;<img src="images/imagenesbasico/convers.png" width="35" height="15"> |1〉</b></font>
											</blockquote>
										</div>
										<font size="+0.5"><b>Usage</b></font>

										<div class="col-3 col-12-small">
											<blockquote>
											<b>Start of Algorithm:</b> Creates superpotition<br>
											<b>End of Algorithm (Before measurement):</b> Get phase information <br>
											e.g. distinguish <b>|+〉</b> from <b>|-〉</b>
										</div>
										</blockquote>
							</div>
						
					</div>
					<br>

					<!--Anlca a contenidos -->
					<a name="myAnchor5"></a>
					<hr>

					<h3><P align="center">5: <b> Multiple Qubits <br></b></P></h3><br>
					Time for some more familiar stuff. In the classical world we can have multiple bits, such as 00, 01, 10 and 11. In quantum computing we can similarly have <font size="+1"><b>|00〉</b></font>, <font size="+1"><b>|01〉</b></font>, <font size="+1"><b>|10〉</b></font> and <font size="+1"><b>|11〉</b></font>. We can describe the two qubits using a vector:

					<img src="images/imagenesbasico/multipleq.png" width="480" height="57" class="central"><br><br>

					Just like before, the measurement results of <font size="+1"><b>'00'</b></font> for example, occurs with probability:

					<font size="+1"><b>|α<sub>00</sub>|<sup>2</sup></b></font>, &nbsp;<font size="+1"><b>'01'</b></font> with probability <font size="+1"><b>|α<sub>01</sub>|<sup>2</sup></b></font> and so on.<br><br>

					Now say we wanted to measure the first qubit (instead of both), the measurement results of 0 occurs with probability <font size="+1"><b>|α<sub>00</sub>|<sup>2</sup> + |α<sub>01</sub>|<sup>2</sup></b></font>. And remember measurement changes the state, so afterwards the vector would now have a value of <br><br>

					<img src="images/imagenesbasico/m3.png" width="330" height="102" class="central"><br><br>
					You can see on the top line we’ve got rid of all the terms whose first bit was <font size="+1"><b>1</b></font>, since they weren’t consistent with the measurement being <font size="+1"><b>0</b></font>. The square root in the denominator renormalizes the vector so that the sum of the squared amplitudes is still <font size="+1"><b>1</b></font>, which we require for it to be a valid quantum state.
					<br><br><br>
					<font size="+1.5"><b>Continue:</b></font>
					<br/>
					<a href="../pruebas/pruebacb1.php" class='button primary'>Continuar</a><br>
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

</body>

</html>