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



<!-- INICIA LA COLUMNA -->
  <br><br>
  <div class="inner">
    <div class="content">
      <div class="inner">
        

    <h1>Diagnóstico completado</h1><hr>
      <div class="row">
      <div class="highlight">
    <form method="POST" action="registro.php" >

    <div class="form-group">
      <label for="puntaje">Puntaje obtenido:</label>
      <input type="text" name="puntaje" class="form-control" id="puntaje" value="200" readonly="readonly">
    </div>

      <br><h3>Has desbloqueado una nueva sección</h3>

       <input type="submit" value="Guardar y continuar" class="btn btn-info" name="btn_actualizar">   
      <input type="submit" value="Volver sin guardar" class="btn btn-primary" name="btn_consultar">

   

  </form>

  <?php
    include("connect_db.php");
      
      $puntaje  ="";
      $user     ="";
      $email    ="";
      $password ="";

      if(isset($_POST['btn_registrar'])){     

        $puntaje    = $_POST['puntaje'];
        $user    = $_POST['user'];
        $email    = $_POST['email'];
        $password    = $_POST['password'];

        if ($user =="" || $email=="" || $password==""){
          echo "Los campos son obligatorios";
        }else{

          //INSERT
        mysqli_query($mysqli, "INSERT INTO $tabla_db1 
        (puntaje, user, email, password) 
          values 
        ('$puntaje','$user','$email','$password')");

          echo "Insersión realizada";
        }

      }


      if(isset($_POST['btn_consultar'])){

        $puntaje    = $_POST['puntaje'];
        $existe = 0;
        if ($puntaje ==""){
          echo "Debe ingresar puntaje";
        }else{

          //CONSULTAR
          $resultados = mysqli_query($mysqli,"SELECT * FROM $tabla_db1 WHERE puntaje = '$puntaje'");
          while($consulta = mysqli_fetch_array($resultados)){
            echo $consulta['user']."<br>";
            $existe++;
          } 
          if ($existe==0) {
            echo "Ningún usuario posee el puntaje ingresado<br>";
          }
          echo "Consulta realizada";
        }

      }


      if(isset($_POST['btn_actualizar'])){

        $puntaje    = $_POST['puntaje'];
        $user    = $_SESSION['user'];
     //   $email    = $_POST['email'];
    //    $password    = $_POST['password'];

  //      if ($user =="" || $email=="" || $password==""){
  //        echo "Los campos son obligatorios";
  //      }else{

          //ACTUALIZAR 
          $_UPDATE_SQL="UPDATE $tabla_db1 Set 
          puntaje='$puntaje', 
          user='$user'
         -- email='$email',
         -- password='$password'

          WHERE user='$user'"; 

          mysqli_query($mysqli,$_UPDATE_SQL);
  //      }

        echo '<script>alert("Puntaje actualizado")</script> ';
        echo "<script>location.href='index.php'</script>";
      }



      if(isset($_POST['btn_eliminar']))
      {
        echo "Presiono el boton eliminar";
      }

    include("cerrar_conexion.php");
  ?>

  </div>



<!-- TERMINA LA COLUMNA -->



  <div class="col-md-4"></div>

</div>



  
  
</body>
</html>