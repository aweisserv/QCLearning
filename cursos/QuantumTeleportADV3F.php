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
	if ((@!$_SESSION['user'])||($_SESSION['puntaje']<600)) {
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
		<!--<script type="text/javascript">
			$(document).ready(function(){
				alert("Modules loaded correctly. Press 'OK' to continue.");
			});
		</script> -->
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

				<a class="logo" href="../index2.php">Acerca de QC Learning / About</a>

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
					<li><a href="evaluaciones.html">Evaluaciones</a></li>
					<li><a href="genericopia.php">Prototipo de Evaluaciones</a></li>
					<li><a href="desconectar.php"> Cerrar Cesión </a></li>
				</ul>
			</nav>

</head>

<header>

<br><br><br><br>
<section id="main">
	<a href="#Anchor" id="anchor0" class="button primary">Introducción</a>
	<a href="#myAnchor" id="anchor1" class="button primary">Contenidos</a>
	<a href="QuantumTeleportADV2F.php" class="button primary">Parte 1</a>
	<a href="QuantumIntro.php" class="button primary">Ver cursos</a>
	&nbsp;&nbsp;&nbsp;<a href="../index2.php" class="button">Volver a inicio</a>
	<br><br>
	<div class="inner">
		<div class="content">
			<section id="cta" class="wrapper">
				<div class="inner">
		<!--Anlca a contenidos -->
		<a name="Anchor" id="anchor0"></a>
					<h1>QC Learning </h1>
					<h2><p>Teletransportación de estados | <b>Curso avanzado</b></p></h2>
				</div>
			</section>
		<!-- <img src="images/basico.png" alt="" class="central" style="width:100%"/><br><br>-->

		<br><font size="+1">En aproximadamente <b>30</b> minutos, el estudiante sabrá lo suficiente acerca de <b>Cúbits</b>, <b>Superposición</b> y <b>Entrelazamiento cuántio</b>. Con lo anterior, podrá escribir su primer programa cuántico, y lo más importante, tener una idea razonable de lo que significa.</font><br/><br>
		
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
									
							Paso 1 - <a href="#myAnchor0" id="anchor0" class="anchorLink">Medición</a><br>
							Paso 1.1 - <a href="#myAnchor1" id="anchor1" class="anchorLink">Haciendo una medida</a><br>
							Paso 2 - <a href="#myAnchor2" id="anchor2" class="anchorLink">Realizar una operación en mi cúbit <strong>|F⟩</strong> para obtener el estado <strong>|ψ⟩</strong></a><br>
							Paso 3 - <a href="#myAnchor3" id="anchor2" class="anchorLink">Siguientes pasos</a><br>
								
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
					<h3><P align="center">1: <b>Medición</b></P></h3><br>

					<strong>Ordenando términos.<br></strong><br>
					Esta es la última vez que hacemos esto. Cuando midamos el primer y segundo cúbit, obtendremos uno de los cuatro resultados;<strong> 00,  01,  10 </strong>o un <strong>11.</strong> Actualmente, no está del todo claro cuál sería nuestro tercer cúbit para cada una de estas mediciones. Vamos a reagrupar nuestro resultado para que sepamos en qué estado se encuentra el tercer cúbit, mi cúbit <strong>|F⟩</strong>.<br><img src="images/imagenes/01.png" width="700" height="60" class="central"><br/><br/>
					Resaltemos el primer y segundo cúbit de cada término.

					<br><img src="images/imagenes/02.png" width="710" height="68" class="central"><br/><br/>
					Considere los casos donde el primer y segundo cúbit son iguales <strong>|00⟩</strong>. Si nos fijamos en este caso de forma aislada, tenemos <img src="images/imagenes/iso1.png" width="130" height="23">.
					Podemos refactorizar este término como se muestra a continuación,<br>
					<img src="images/imagenes/03.png" width="540" height="35"  class="central"><br/><br/> Y podemos hacer lo mismo para los casos <strong>| 01〉, | 10〉 y | 11〉</strong>.<br><br>
					<img src="images/imagenes/04.png" width="550" height="130" class="central"><br/><br/>
					En resumen, nuestro reagrupamiento se ve así:<br><br>
					<img src="images/imagenes/05.png" width="710" height="57" class="central"><br/><br/>
					Eso es todo.<br>
					<!--Anlca a contenidos -->
					<a name="myAnchor1"></a>
					<hr><br>
					<h3><P align="center">1.1: <b>Haciendo una medida</b></P></h3><br>
					Así es como se ve nuestro circuito con los símbolos de medición agregados. Es necesario hacer énfasis en las líneas dobles después de los símbolos de medición, no es un accidente, significa que llevan bits clásicos, que es el resultado que obtenemos después de la medición.
					<br><br><img src="images/imagenes/iso2.png" width="600" height="280" class="central"><br/><br/>

					Ahora, el emisor va a medir sus dos cúbits <strong>|G⟩</strong> y <strong>|ψ⟩</strong>. Como dijimos, puede obtener uno de los cuatro resultados; <strong>00, 01, 10</strong> o un <strong>11</strong>. Cuando medimos un cúbit, la superposición de ese cúbit en particular colapsa. Digamos que medimos el primer cúbit <strong>|ψ⟩ </strong>y obtenemos un resultado de <strong>0</strong>. La superposición colapsa, entonces ahora solo tenemos términos en los que el primer cúbit es consistente con una medida de <strong>0</strong>. Esos son:
					<br><img src="images/imagenes/06.png" width="380" height="58" class="central"><br/><br/>

					Digamos que medimos el segundo cúbit, <strong>|G⟩</strong> y obtenemos un resultado de <strong>0</strong>. La superposición colapsa, y ahora nos queda el único término consistente con el primer y segundo cúbit que tienen una medida de <strong>0</strong>. Ese es este:<br><img src="images/imagenes/08.png" width="195" height="58" class="central"><br><br/>

					Ahora sabemos en qué estado se encuentra el tercer cúbit (Mi cúbit <strong>|F⟩</strong>). Podemos observar que está en el estado:<br><img src="images/imagenes/13.png" width="120" height="30" class="central"><br/><br/>

					Si obtenemos un resultado de medición de "01", debemos mirar nuevamente nuestro resultado factorizado:<br><img src="images/imagenes/05.png" width="710" height="57" class="central"><br/><br/>


					El único término consistente con una medición de <strong>"01"</strong> es:<br>
					<img src="images/imagenes/iso3.png" width="170" height="37"><br>
					Lo que significa que mi cúbit debe ser:<br>
					<img src="images/imagenes/iso4.png" width="140" height="37"><br>Una vez más, Aplicando esta lógica, si el Emisor mide <strong>"10"</strong>, sé que el tercer cúbit será:<br>
					<img src="images/imagenes/iso5.png" width="140" height="37"><br>Y si Emisor mide <strong>"11"</strong>, entonces el tercer cúbit será:<br>
					<img src="images/imagenes/iso6.png" width="140" height="37"><br><br>

					Podemos resumirlo en la siguiente tabla:<br><br>
					<div class="row">
						<div class="col-6 col-12-medium">
							<div class="table-wrapper">
								<table class="alt">
									<thead>
										<tr>
											<th><h3>Medición</h3></th>
											<th><h3>Mi cúbit</h3></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><p style="color:#08BBE3";>00</p></td>
											<td><p style="color:#08BBE3";>(α|0⟩ + β|1⟩)</p></td>
										</tr>
										<tr>
											<td><p style="color:#6800ff";>01</p></td>
											<td><p style="color:#6800ff";>(α|1⟩ + β|0⟩)</p></td>
										<tr>
											<td><p style="color:#E800FF";>10</p></td>
											<td><p style="color:#E800FF";>(α|0⟩ - β|1⟩)</p></td>
										</tr>
										<tr>
											<td><p style="color:#038907";>11</p></td>
											<td><p style="color:#038907";>(α|1⟩ - β|0⟩)</p></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!--Anlca a contenidos -->
					<a name="myAnchor2"></a>
					<hr><br>
					<h3><P align="center">2: <b>Realizar una operación en mi cúbit <strong>|F⟩</strong> para obtener el estado <strong>|ψ⟩</strong></b></P></h3><br>
					
					Actualmente estamos en una posición donde el Emisor ha medido sus dos cúbits, y posteriormente me dijo el resultado, así que ahora sé en qué estado se encuentra mi cúbit. Recuerdemos que el estado desconocido con el que comenzamos <strong>|ψ⟩</strong> era igual a <img src="images/imagenes/13.png" width="100" height="26">. Necesitamos aplicar algunas operaciones a mi cúbit para que coincida con este estado, el estado que el Emisor quería enviarme (de lo contrario, tenemos algo muy diferente).
					Eso es algo simple para nosotros ahora. Podemos guiarnos con la tabla de arriba. <br>Si tenemos una medida de <strong>"00"</strong> y mi cúbit en el estado <img src="images/imagenes/iso7.png" width="100" height="26">, entonces podemos ver que esto es exactamente igual a <strong>|ψ⟩</strong>, por lo que no necesitamos realizar ninguna operación en él. Ese es el caso más simple.<br>

					Ahora miremos la situación donde nuestra medida es <strong>"01"</strong>, y mi cúbit está en el estado <img src="images/imagenes/iso8.png" width="100" height="26">.<br>
					Debemos tener en cuenta que en comparación con <strong>|ψ⟩</strong>, <strong>"|0⟩"</strong> y <strong>"|1⟩"</strong> se invierten. <br><br>Aquí, solo necesitamos aplicar una compuerta <strong>NO cuántica</strong> a mi cúbit, es decir, una puerta <strong>X</strong>, para obtener el resultado deseado.
					Si miramos el caso del <strong>"10"</strong>, mi cúbit estaría en el estado <img src="images/imagenes/iso9.png" width="100" height="26"> Si comparamos esto con <strong>|ψ⟩</strong>, tenemos <img src="images/imagenes/iso10.png" width="50" height="26"> pero necesitamos <img src="images/imagenes/iso11.png" width="50" height="26">. <br><br>Todo lo que tenemos que hacer es aplicar la puerta <strong>Z</strong>, que voltea el cartel.<br>Finalmente, tenemos el caso <strong>"11"</strong>, donde por cúbit es <img src="images/imagenes/iso12.png" width="100" height="26">. Aquí, se invierten <strong>|0⟩</strong> y <strong>|1⟩</strong>, y también tenemos <img src="images/imagenes/iso13.png" width="50" height="26">, pero nos gustaría que este término fuera positivo. Necesitamos aplicar una puerta <strong>X</strong>, seguida de una puerta <strong>Z</strong> para obtener el resultado deseado <img src="images/imagenes/13.png" width="100" height="26">.<br>
					Vamos a actualizar nuestra tabla con estas operaciones:<br><br>
					<div class="row">
						<div class="col-6 col-12-medium">
							<div class="table-wrapper">
								<table class="alt">
									<thead>
										<tr>
											<th><h3>Medición</h3></th>
											<th><h3>Mi cúbit</h3></th>
											<th><h3>Puertas a aplicar</h3></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><p style="color:#08BBE3";>00</p></td>
											<td><p style="color:#08BBE3";>(α|0⟩ + β|1⟩)</p></td>
											<td><p style="color:#08BBE3";></p></td>
										</tr>
										<tr>
											<td><p style="color:#6800ff";>01</p></td>
											<td><p style="color:#6800ff";>(α|1⟩ + β|0⟩)</p></td>
											<td><p style="color:#6800ff";>X</p></td>
										<tr>
											<td><p style="color:#E800FF";>10</p></td>
											<td><p style="color:#E800FF";>(α|0⟩ - β|1⟩)</p></td>
											<td><p style="color:#E800FF";>Z</p></td>
										</tr>
										<tr>
											<td><p style="color:#038907";>11</p></td>
											<td><p style="color:#038907";>(α|1⟩ - β|0⟩)</p></td>
											<td><p style="color:#038907";>X, Z</p></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<br>Observe que si el primer bit de nuestro resultado de medición es <strong>'1'</strong>, aplicamos <strong>Z</strong>, y si el segundo bit es <strong>'1'</strong>, aplicamos <strong>X</strong>. Por lo tanto, nuestro circuito final tiene este aspecto, donde agregamos la puerta <strong>Z</strong> para usar el cable superior como control y la puerta <strong>X</strong> para usar el segundo cable como control, siendo mi cúbit el objetivo para ambos (porque ese es el cúbit al que queremos aplicar las puertas).
					<br><img src="images/imagenes/12.png" width="600" height="280" class="central"><br/><br/>
					Hemos demostrado que el Emisor necesita comunicarme solo dos bits de información clásica para compartir el estado desconocido, estos son los resultados de las mediciones de <strong>|G⟩</strong> y <strong>|ψ⟩</strong>. A través del entrelazamiento, el (Emisor) puede comunicarme los valores de α y <strong>β</strong>. Lo ha hecho sin un canal de comunicaciones cuánticas, por lo que se denomina "teletransportación cuántica".
					<br>

					<!--Anlca a contenidos -->
					<a name="myAnchor3"></a>
					<hr>
					<h3><P align="center">3: <b>Siguientes pasos</b></P></h3><br>
					Por ahora, con nuestro conocimiento de los estados cúbit, las puertas cuánticas y los estados Bell, estamos un paso más cerca para abordar nuestro primer <font size="+1"><b>programa cuántico.</b></font>
					<br><br>
					<a href="../pruebas/pruebaca2.php" class='button primary'>Continuar</a><br><br>
					<a href="#">Volver arriba</a></p>

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

</body>

</html>