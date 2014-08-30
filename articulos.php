<?php 
include('conexion.php');
extract($_POST); 
$sql2="insert into articulo (codigoart, nombreart, documentosoc, colorart, tipoart, tipofabricacionart, costo, cantidad) values('$codigo','$nombre', '$documentosocio', '$color','$tipo','$tipofab','$costo','$cantidad')";
$result = pg_query($conexion, $sql2) or die(pg_last_error());
 ?>