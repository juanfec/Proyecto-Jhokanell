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
			<form action="socios.php" method="post">
				<center>
				<h2>Socios</h2>
				<input type="number" name="documento" placeholder="documento" required><br>
				<input type="text" name="nombre" placeholder="nombre" required><br>
				<input type="text" name="apellidos" placeholder="apellidos" required><br>
				<input type="text" name="direccion" placeholder="direccion" required><br>
				<input type="tel" name="celular" placeholder="celular" required><br>
				<input type="email" name="correo" placeholder="correo" required><br>
				<input type="text" name="eps" placeholder="Eps" required><br>
				<input type="text" name="estadocivil" placeholder="Estado civil" required><br>
				<input type="text" name="cargo" placeholder="cargo" required><br>
				<input type="date" name="fechacontrato" placeholder="Fecha de el contrato" required><br>
				<input type="submit" value="enviar"><input type="reset" value="borrar"></center>
			</form>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>