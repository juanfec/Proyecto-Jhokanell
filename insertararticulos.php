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
			<form action="articulos.php" method="post">
				<center>
				<h2>Articulos</h2>
				<input type="number" min=1 name="codigo" placeholder="codigo" required><br>
				<input type="text" name="nombre" placeholder="nombre" required><br>
				<input type="number" min=1 name="documentosocio" placeholder="documento socio" required><br>
				<input type="text" name="color" placeholder="color" required><br>
				<input type="text" name="tipo" placeholder="tipo" required><br>
				<input type="text" name="tipofab" placeholder="tipo de fabricacion" required><br>
				<input type="number" min=1 name="costo" placeholder="costo" required><br>
				<input type="number" min=1 name="cantidad" placeholder="cantidad" required><br>
				<center><input type="submit" value="enviar"><input type="reset" value="borrar"></center></center>
			</form>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>