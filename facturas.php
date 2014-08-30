<?php 
	extract($_POST);
	include('conexion.php');
	$sql2="insert into facturasur (codigofsur, documentosur, nombresur, direccionsur, costosur, fechasur) values ('$codigofac', '$docfsur', $'nombresur', $'direccionsur', $'costo',$'fechasur')";
	$result = pg_query($conexion, $sql2) or die(pg_last_error());
	header('Location: tablas.html');
?>