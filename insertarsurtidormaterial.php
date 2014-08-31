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
			<form action="surtidormaterial.php" method="post">
				<center>
				<h2>Surtidor material</h2>
			<input type="number" min=1 name="documentosur" placeholder="documento surtidor" required><br>
			<input type="number" min=1 name="codigomat" placeholder="codigo material" required><br>
			<input type="number" min=1 name="cantidad" placeholder="cantidad" required><br>
			<center><input type="submit" value="enviar"><input type="reset" value="borrar"></center></center>
			</form>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>