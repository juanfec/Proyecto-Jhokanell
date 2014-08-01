<?php 
$codigo1 = $_POST["codigo"];

$nombre1 = $_POST["nombre"];

$direccion1 = $_POST["direccion"];

$correo1 = $_POST["correo"];

$tipo1 = $_POST["tipo"];

$nacimiento1= $_POST["nacimiento"];
$conexion = pg_connect("host=localhost user=postgres port=5432 dbname=jhokanell password=datajunior") or die(pg_last_error()); 
$sql2="insert into surtidor (codigo, nombre, direccion, correo, tipo) values('$codigo1', '$nombre1','$direccion1','$correo1','$tipo1')";
$result = pg_query($conexion, $sql2) or die(pg_last_error());
	echo $_POST['codigo']." <br>".$_POST['nombre']." <br>".$_POST['direccion']." <br>".$_POST['tipo']." <br>".$_POST['correo'];
 ?>