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
			<form action="facturas.php" method="post">
				<center>
				<h2>Facturas</h2>
				<input type="number" min=1 name="codigofac" placeholder="codigo factura surtidor" required><br>
				<input type="number" min=1 name="docfsur" placeholder="documento surtidor" required><br>
				<input type="text" name="nombresur" placeholder="nombre surtidor" required><br>
				<input type="text" name="direccionsur" placeholder="direccion surtidor" required><br>
				<input type="number" min=1 name="costo" placeholder="costo" required><br>
				<input type="date" name="fechasur" placeholder="" required><br>
				<center><input type="submit" value="enviar"><input type="reset" value="borrar"></center></center>
			</form>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>