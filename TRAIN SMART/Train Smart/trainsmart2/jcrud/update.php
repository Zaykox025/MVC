<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombres=$_POST['superior'];
$apellidos=$_POST['inferior'];

$sql="UPDATE rutina SET superior='$superior', inferior='$inferior' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: rutina.php");
    }
?>