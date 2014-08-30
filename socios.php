<?php 
extract($_POST);
$conexion = pg_connect("host=localhost user=postgres port=5432 dbname=jhokanell password=datajunior") or die(pg_last_error()); 
$sql2="insert into socio (documentosoc, nombresoc, apellidosoc, direccionsoc, celularsoc, correosoc, epssoc, estadocivilsoc, cargosoc, fechacontratosoc) values('$documento', '$nombre','$apellidos','$direccion','$celular','$correo','$eps','$estadocivil','$cargo','$fechacontrato')";
$result = pg_query($conexion, $sql2) or die(pg_last_error());
?>