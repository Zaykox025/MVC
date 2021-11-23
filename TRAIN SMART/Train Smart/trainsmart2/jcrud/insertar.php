<?php
include("conexion.php");
$con=conectar();
$id=$_POST['id'];
$tren_superior=$_POST['superior'];
$tren_inferior=$_POST['inferior'];


$sql="INSERT INTO alumno VALUES('$tren_superior','$tren_inferior')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: rituna.php");
    
}else {
}
?>