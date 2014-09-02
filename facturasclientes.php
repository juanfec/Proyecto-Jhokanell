<?php 
	extract($_POST);
	include('conexion.php');
	$sql2="insert into facturacli (codigofcli, documentosoc, documentofcli, costofcli, fechafcli) values ('$codigo', '$docsoci', '$docclien', '$costo', '$fechacli')";
	$result = pg_query($conexion, $sql2) or die(pg_last_error());
 ?>