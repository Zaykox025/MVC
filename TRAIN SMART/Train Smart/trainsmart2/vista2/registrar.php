<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['passaword']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $passaword = trim($_POST['passaword']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(name, email, passaword, fecha_reg) VALUES ('$name','$email', '$passaword', '$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>