<?PHP
//Inicio la sesión
session_start();
 //echo $conn;
?>
				

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'head.php'; ?>
	
<title>Inicio</title>
</head>
<body>
	<div class="main-bg">
		<?php include 'cabecera.php'; 
		//if (isset($_SESSION["usuario1"]))
		//{
		//	header("location: valida_usuario.php")
		//}else{ ?>
		<section class="login">
		<div class="titulo">Iniciar Sesion</div>
		<form action="valida_usuario.php" method="post">
	    	<input type="text" name="cedula" arequired title="Cedula requerido" placeholder="Cedula" data-icon="U">
	        <input type="password" name="clave" required title="Contraseña requerida" placeholder="Contraseña" data-icon="x">
	        <input type="submit" value="Iniciar">
	    </form>
		</section>
		//<?php

		//}
			?>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>