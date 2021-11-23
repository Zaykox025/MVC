<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo/estilo.css">
</head>
<body>
    <form method="post">
    	<h1>¡Suscribete!</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
        <input type="passaword" name="passaword" placeholder="Contraseña">
    	<input type="email" name="email" placeholder="Email">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("trainsmart2/vista2/registrar.php");
        ?>
</body>
</html>