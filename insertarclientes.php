<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'head.php'; ?>
	
<title>Inicio</title>
</head>
<body>
	<div class="main-bg">
		<?php include 'cabecera.php'; ?>
		<div style="margin-letf: auto; margin-right:auto;">
			<form action="clientes.php" method="post">
				<center>
				<h2>clientes</h2>
				<input type="number" min=1 name="documento" placeholder="documento" required><br>
				<input type="text" name="nombre" placeholder="nombre" required><br>
				<input type="text" name="apellido" placeholder="apellido" required><br>
				<input type="text" name="tipocli" placeholder="tipo cliente" required><br>
				<input type="text" name="celularcli" placeholder="celular" required><br>
				<input type="text" name="direccion" placeholder="direccion" required><br>
				<input type="email" name="correo" placeholder="correo" required><br>
				<input type="text" name="paiscli" placeholder="pais" required><br>
				<center><input type="submit" value="enviar"><input type="reset" value="borrar"></center></center>
			</form>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>