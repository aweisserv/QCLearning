<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<script>
var form = document.createElement("form"); // crear un form
with(form) {
setAttribute("name", "myform"); //nombre del form
setAttribute("action", ""); // action por defecto
setAttribute("method", "post"); // method POST }
var input = document.createElement("input"); // Crea un elemento input
with(input) {
setAttribute("name", "theInput"); //nombre del input
setAttribute("type", "hidden"); // tipo hidden
setAttribute("value", ""); // valor por defecto
}
form.appendChild(input); // añade el input al formulario
document.getElementsByTagName("body")[0].appendChild(form); // añade el formulario al documento


window.onload=function(){
var my_links = document.getElementsByTagName("a");
for (var a = 0; a < my_links.length; a++) {
if (my_links[a].name=="post") my_links[a].onclick = function() {
document.myform.action=this.href;
document.myform.theInput.value=this.title;
document.myform.submit();
return false;}
}}
<a href="registro.php" name="post" title="350" >Pulsa aquí</a>
</script>


<!--
<?php  
//	session_start();
//	if (@!$_SESSION['user']) {
//		header("Location:index.php");
//	}elseif ($_SESSION['rol']==1) {
//		header("Location:admin.php");
//	}
//
//	include("connect_db.php");
//
//      $user     ="";


	//ACTUALIZAR 
 //         mysqli_query($mysqli, $_UPDATE_SQL="UPDATE $tabla_db1 SET `puntaje` = 350 WHERE user='$user'");

?>
-->
</body>
</html>