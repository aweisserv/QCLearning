<html>
<!-- Revisión de Login para acceso -->
  <?php
  session_start();
  if (@!$_SESSION['user']) {
    header("Location:index.php");
  }elseif ($_SESSION['rol']==1) {
    header("Location:admin.php");
  }
  ?>

<head>
  <title>Detalles</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="assets/css/main.css" />
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
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

<!-- Revisión de puntaje mínimo para acceso -->
  <?php
  if ((@!$_SESSION['user'])||($_SESSION['puntaje']<200)) {
    echo '<script>alert("No posees el puntaje requerido para esta sección.")</script> ';
    echo "<script>location.href='../index2.php'</script>";
  }
  ?>
<!-- Fin revisión -->

<!-- INICIA LA COLUMNA -->
  <br><br>
  <div class="inner">
    <div class="content">
      <div class="inner">
        

        <h1>Diagnóstico completado</h1><hr>
          <div class="row">
          <div class="highlight">
        <form method="POST" action="obt_puntaje1.php" >

        <div class="form-group">
          <label for="puntaje">Puntaje obtenido:</label>
          <input type="text" name="puntaje" class="form-control" id="puntaje" value="400" readonly="readonly">
        </div>

          <br><h3>Has desbloqueado una nueva sección</h3>

           <input type="submit" value="Guardar y continuar" class="button primary" name="btn_actualizar">   
          <input type="submit" value="Volver sin guardar" class="btn btn-primary" name="btn_consultar">

       

      </form>

      <?php
        include("../connect_db.php");
          
          $puntaje  ="";
          $user     ="";
          $email    ="";
          $password ="";


          //Actualizar
          if(isset($_POST['btn_actualizar'])){

            $puntaje    = $_POST['puntaje'];
            $user    = $_SESSION['user'];

          //ACTUALIZAR 
            $_UPDATE_SQL="UPDATE $tabla_db1 Set 
            puntaje='$puntaje', 
            user='$user'
            WHERE user='$user'"; 

            mysqli_query($mysqli,$_UPDATE_SQL);
            echo '<script>alert("Puntaje actualizado")</script> ';
            echo "<script>location.href='../index.php'</script>";

          }

          if(isset($_POST['btn_consultar'])){
            echo '<script>alert("El puntaje no se ha actualizado")</script> ';
            echo "<script>location.href='../index2.php'</script>";
          }

        include("../cerrar_conexion.php");
      
      ?>

  </div>

</div>

</body>
</html>