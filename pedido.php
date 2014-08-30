<?php 
	extract($_POST);
	include('conexion.php');
	$sql2="insert into cliart (codigofcli, codigoart, documentosoc, cantidad) values ('$codigofact', '$codigoart', '$documentosoc', '$cantidad')";
	$result = pg_query($conexion, $sql2) or die(pg_last_error());
	header('Location: tablas.html');
 ?>