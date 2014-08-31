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
			<form action="materiales.php" method="post">
				<center>
				<h2>Materiales*</h2>
				<input type="number" min=1 name="codigo" placeholder="codigo material" required><br>
				<input type="text" name="nombre" placeholder="nombre material" required><br>
				<input type="text" name="tipo" placeholder="tipo de material" required><br>
				<input type="text" name="color" placeholder="color" required><br>
				<input type="number" name="costo" placeholder="costo" required><br>
				<center><input type="submit" value="enviar"><input type="reset" value="borrar"></center>
			</form></center>
			</form>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>