<?php

$name = $_POST['name'];
$passaword = $_POST['passaword'];
session_start();
$_SESSION['name']=$name;

$conex=mysqli_connect("localhost", "root", "", "train_smart");

$consulta = "SELECT*FROM datos where name = '$name' and passaword = '$passaword'";
$resultado = mysqli_query($conex, $consulta);

$filas = mysqli_num_rows($resultado);

if($filas){
	header("location:home.php");
} else {
	?>
	<?php
	include("login.php");
	?>

 
	<h1>ERROR DE AUTENTIFICACION</h1>
   <?php

}

mysqli_free_result($resultado);
mysqli_close($conex);

?>