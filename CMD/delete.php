<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

// $sql=DELETE * FROM rutina  WHERE id= $id;
$query=mysqli_query($con);

    if($query){
        Header("Location: rutina.php");
    }
?>
