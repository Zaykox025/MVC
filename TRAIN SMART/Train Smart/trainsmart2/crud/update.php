<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['id'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="UPDATE alumno SET  nombres='$nombres',apellidos='$apellidos' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: rutina.php");
    }
?>