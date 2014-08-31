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
			<form action="fabricado.php" method="post">
				<center>
				<h2>Fabricado</h2>
				<input type="number" min=1 name="codigomat" placeholder="codigo material" required><br>
				<input type="number" min=1 name="codigoart" placeholder="codigo articulo" required><br>
				<center><input type="submit" value="enviar"><input type="reset" value="borrar"></center>
			</form>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>