<?php 
extract($_POST);
include ('conexion.php');
$sql2="insert into surtidor (documentosur, nombresur, apellidosur, direccionsur, celularsur, correosur, tiposur, pais, empresasur) values('$documentosur', '$nombre', '$apellido','$direccion','$celular','$correo','$tipo', '$pais', '$empresa')";
$result = pg_query($conexion, $sql2) or die(pg_last_error());
 ?>