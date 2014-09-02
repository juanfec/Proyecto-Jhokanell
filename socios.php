<?php 
extract($_POST);
	include('conexion.php');
$sql2="insert into socio (documentosoc, nombresoc, apellidosoc, direccionsoc, celularsoc, correosoc, epssoc, estadocivilsoc, cargosoc, fechacontratosoc) values('$documento', '$nombre','$apellidos','$direccion','$celular','$correo','$eps','$estadocivil','$cargo','$fechacontrato')";
$result = pg_query($conexion, $sql2) or die(pg_last_error());
?>