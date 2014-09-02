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
			<form action="modificarfabricado2.php" method="post">
				<center>
				<h2>Ingrese datos a modificar</h2>
				<input type="number" name="codigomat" placeholder="Codigo de material" required><br>
				<input type="number" name="codigoart" placeholder="codigo de articulo" required><br>
				<input type="submit" value="enviar"><input type="reset" value="borrar"></center>
			</form>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>