<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$LUNES=$_POST['LUNES'];
$MARTES=$_POST['MARTES'];
$MIERCOLES=$_POST['MIERCOLES'];
$JUEVES=$_POST['JUEVES'];
$VIERBES=$_POST['VIERNES'];
$SABADO=$_POST['SABADO'];
$SABADO=$_POST['DOMINGO'];

$sql="UPDATE alumno SET  id='$id',LUNES='$LUNES',MARTESs='$MARTES' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: rutina.php");
    }
?>