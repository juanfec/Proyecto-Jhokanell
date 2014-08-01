<?php 
$codigo1 = $_POST["codigo"];

$tipo1 = $_POST["tipo"];

$costo1 = $_POST["costo"];

$nacimiento1= $_POST["nacimiento"];
$conexion = pg_connect("host=localhost user=postgres port=5432 dbname=jhokanell password=datajunior") or die(pg_last_error()); 
$sql2="insert into articulos (codigo, tipo, costo) values('$codigo1','$tipo1', '$costo1')";
$result = pg_query($conexion, $sql2) or die(pg_last_error());

	echo $_POST['codigo']." <br>".$_POST['tipo']." <br>".$_POST['costo'];
 ?>