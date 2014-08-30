<?php 
	extract($_POST);
	include('conexion.php');
	$sql2="insert into surmat (documentosur, codigomat, cantidad) values ('$documentosur', '$codigomat', $'cantidad')";
	$result = pg_query($conexion, $sql2) or die(pg_last_error());
	header('Location: tablas.html');
 ?>