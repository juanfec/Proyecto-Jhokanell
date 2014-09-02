  <?PHP
//Inicio la sesión
session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'head.php'; ?>
	
<title>Inicio</title>
</head>
<body>
	<div class="main-bg">
		<?php include 'cabecera.php'; ?>
		<?php echo "<br><br>Bienvenido </br>", $_SESSION['nombre2'],"</br> Es un ", $_SESSION['tipouser']; 
				 ?>
				 <a href="salir.php">Cerrar Sesion</a>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>