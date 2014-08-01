<?php 
$codigo1 = $_POST["codigo"];

$nombre1 = $_POST["nombre"];

$tipo1 = $_POST["tipo"];

$cantidad1 = $_POST["cantidad"];

$color1 = $_POST["color"];

$costo1 = $_POST["costo"];

$nacimiento1= $_POST["nacimiento"];
$conexion = pg_connect("host=localhost user=postgres port=5432 dbname=jhokanell password=datajunior") or die(pg_last_error()); 
$sql2="insert into materiales (codigo, nombre, tipo, cantidad, color, costo) values('$codigo1', '$nombre1','$tipo1','$cantidad1','$color1','$costo1')";
$result = pg_query($conexion, $sql2) or die(pg_last_error());
	echo $_POST['codigo']." <br>".$_POST['nombre']." <br>".$_POST['tipo']." <br>".$_POST['cantidad']." <br>".$_POST['color']." <br>".$_POST['costo']." <br>";
 ?>