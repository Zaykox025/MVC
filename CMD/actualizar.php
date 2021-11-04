<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM rutina WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Actualizar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="LUNES" placeholder="LUNES" value="<?php echo $row['LUNES']  ?>">
                                <input type="text" class="form-control mb-3" name="MARTES" placeholder="MARTES" value="<?php echo $row['MARTES']  ?>">
                                <input type="text" class="form-control mb-3" name="MIERCOLES" placeholder="MIERCOLES" value="<?php echo $row['MIERCOLES']  ?>">
                                <input type="text" class="form-control mb-3" name="JUEVES" placeholder="JUEVES" value="<?php echo $row['JUEVES']  ?>">
                                <input type="text" class="form-control mb-3" name="VIERNES" placeholder="VIERNES" value="<?php echo $row['VIERNES']  ?>">
                                <input type="text" class="form-control mb-3" name="SABADO" placeholder="SABADO" value="<?php echo $row['SABADO']  ?>">
                                <input type="text" class="form-control mb-3" name="DOMINGO" placeholder="DOMINGO" value="<?php echo $row['DOMINGO']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>