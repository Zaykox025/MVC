<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="DELETE FROM rutina WHERE id='$id";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: rutina.php");
    }
?>
