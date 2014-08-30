<?php 
extract($_POST);
include('conexion.php');
$sql2="insert into cliente (documentocli, nombrecli, apellidocli, tipocli, direccioncli, celularcli, correocli,  paiscli) values ('$documento', '$nombre', '$apellido', '$tipocli', '$direccion', '$celularcli',  '$correo', '$paiscli')";
$result = pg_query($conexion, $sql2) or die(pg_last_error());
header('Location: tablas.html');
 ?>