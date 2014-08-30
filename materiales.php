<?php 
extract($_POST);
$conexion = pg_connect("host=localhost user=postgres port=5432 dbname=jhokanell password=datajunior") or die(pg_last_error()); 
$sql2="insert into material (codigomat, nombremat, tipomat, colormat, costomat) values('$codigo', '$nombre','$tipo','$color','$costo')";
$result = pg_query($conexion, $sql2) or die(pg_last_error());
?>