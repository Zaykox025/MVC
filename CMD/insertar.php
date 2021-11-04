<?php
include("conexion.php");
$con=conectar();

$rutina=$_POST['id'];
$dia_lunes=$_POST['LUNES'];
$dia_martes=$_POST['MARTES'];
$dia_miercoles=$_POST['MIERCOLES'];
$dia_jueves=$_POST['JUEVES'];
$dia_viernes=$_POST['VIERNES'];
$dia_sabado=$_POST['SABADO'];
$dia_domingo=$_POST['DOMINGO'];


$sql="INSERT INTO rutina VALUES('$id','$dia_lunes','$dia_martes','$dia_miercoles','$dia_jueves','$dia_viernes','$dia_sabado','$dia_domingo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: rutina.php");
    
}else {
}
?>