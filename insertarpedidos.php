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
			<form action="pedido.php" method="post">
				<center>
				<h2>Pedido</h2>
			<input type="number" min=1 name="codigoart" placeholder="codigo articulo" required><br>
			<input type="number" min=1 name="codigofact" placeholder="codigo factura" required><br>
			<input type="number" min=1 name="documentosoc" placeholder="documento de el socio" required><br>
			<input type="number" min=1 name="cantidad" placeholder="cantidad" required><br>
			<center><input type="submit" value="enviar"><input type="reset" value="borrar"></center></center>
			</form>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>