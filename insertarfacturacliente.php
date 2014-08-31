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
			<form action="facturaSclientes.php" method="post">
				<center>
				<h2>Factura cliente</h2>
				<input type="number" min=1 name="codigo" placeholder="codigo" required><br>
				<input type="number" min=1 name="docclien" placeholder="documento cliente" required/><br>
				<input type="number" min=1 name="docsoci" placeholder="documento socio" required/><br>
				<input type="number" min=1 name="costo" placeholder="costo" required><br>
				<input type="date" name="fechacli" placeholder="" required><br>
				<center><input type="submit" value="enviar"><input type="reset" value="borrar"></center></center>
			</form>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>