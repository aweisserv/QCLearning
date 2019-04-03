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
							<h2 id="quantum-teleportation-code">Quantum Teleportation: Code</h2>
							<p>We have our circuit for quantum teleportation:</p>
							<p><img src="../media/teleportation.svg?view=qsharp-preview" alt="`Teleport(msg : Qubit, there : Qubit) : Unit`" data-linktype="relative-path"></p>
							<p>We can now translate each of the steps in this quantum circuit into Q#.</p>
							<h3 id="step-0-definition">Step 0: Definition</h3>
							<p>When we perform teleportation, we must know the <strong>message</strong> we wish to send, and where we wish to send it (<strong>there</strong>). For this reason, we begin by defining a new Teleport operation that is given two qubits as arguments, <code>msg</code> and <code>there</code>:</p>
							<pre><code class="lang-qsharp">operation Teleport(msg : Qubit, there : Qubit) : Unit {
							    body (...) {
							</code></pre><p>We also need to allocate a qubit <code>here</code> which we achieve with a <code>using</code> block:</p>
							<pre><code class="lang-qsharp">        using (here = Qubit()) {
							</code></pre><h3 id="step-1-create-an-entangled-state-1">Step 1: Create an entangled state</h3>
							<p>We can then create the entangled pair between <code>here</code> and <code>there</code> by using the <a class="xref" href="/en-us/qsharp/api/prelude/microsoft.quantum.primitive.h" data-linktype="absolute-path">H</a> and <a class="xref" href="/en-us/qsharp/api/prelude/microsoft.quantum.primitive.cnot" data-linktype="absolute-path">CNOT</a> operations:</p>
							<pre><code class="lang-qsharp">            H(here);
							            CNOT(here, there);
							</code></pre><h3 id="step-2-send-the-message-1">Step 2: Send the message</h3>
							<p>We then use the next $\operatorname{CNOT}$ and $H$ gates to move our message qubit:</p>
							<pre><code class="lang-qsharp">            CNOT(msg, here);
							            H(msg);
							</code></pre><h3 id="step-3--4-measuring-and-interpreting-the-result">Step 3 &amp; 4: Measuring and interpreting the result</h3>
							<p>Finally, we use <a class="xref" href="/en-us/qsharp/api/prelude/microsoft.quantum.primitive.m" data-linktype="absolute-path">M</a> to perform the measurements and perform the necessary gate operations to get the desired state, as denoted by <code>if</code> statements:</p>
							<pre><code class="lang-qsharp">            // Measure out the entanglement
							            if (M(msg) == One)  { Z(there); }
							            if (M(here) == One) { X(there); }
							</code></pre><p>This finishes the definition of our teleportation operator, so we can deallocate <code>here</code>, end the body, and end the operation.</p>
							<pre><code class="lang-qsharp">        }
							    }
							}
							</code>
						</pre>
					</header>
				</div>
			</div>
		</section>
	</body>
</html>
