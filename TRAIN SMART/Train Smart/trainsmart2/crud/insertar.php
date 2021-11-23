<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];


$sql="INSERT INTO rutina VALUES('$id,'$nombres','$apellidos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: rutina.php");
    
}else {
}
?>