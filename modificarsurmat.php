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
			<form action="modificarsurmat2.php" method="post">
				<center>
				<h2>Ingrese Codigo de Factura a modificar</h2>
				<input type="number" name="documentosur" placeholder="Documento de surtidor" required><br>
				<input type="number" name="codigomat" placeholder="codigo de material" required><br>
				<input type="submit" value="enviar"><input type="reset" value="borrar"></center>
			</form>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>