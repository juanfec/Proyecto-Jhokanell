<?php 
	extract($_POST);
	include('conexion.php');
	$sql2="insert into fabricado (codigomat, codigoart) values ('$codigomat', '$codigoart')";
	$result = pg_query($conexion, $sql2) or die(pg_last_error());
	header('Location: tablas.html');
?>