  <?php
    include("connect_db.php");
      
      $puntaje  ="";
      $user     ="";
      $email    ="";
      $password ="";

      if(isset($_POST['btn_actualizar'])){

        $puntaje    = 200;
        $user    = $_POST['user'];
        $email    = $_POST['email'];
        $password    = $_POST['password'];

        if ($user =="" || $email=="" || $password==""){
          echo "Los campos son obligatorios";
        }else{

          //ACTUALIZAR 
          $_UPDATE_SQL="UPDATE $tabla_db1 Set 
          puntaje='$puntaje', 
          user='$user',
          email='$email',
          password='$password'

          WHERE user='$user'"; 

          mysqli_query($mysqli,$_UPDATE_SQL);
        }

        echo "Los datos han sido actualizados";
      }

    include("cerrar_conexion.php");
  ?>