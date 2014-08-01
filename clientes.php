<?php 

$documento1 = $_POST["documento"];

$nombre1 = $_POST["nombre"];

$apellidos1 = $_POST["apellido"];

$direccion1 = $_POST["direccion"];

$telefono1 = $_POST["telefono"];

$correo1 = $_POST["correo"];

$nacimiento1= $_POST["nacimiento"];
$conexion = pg_connect("host=localhost user=postgres port=5432 dbname=jhokanell password=datajunior") or die(pg_last_error()); 
$sql2="insert into clientes (documento, nombre, apellido, telefono, direccion, correo) values('$documento1', '$nombre1','$apellidos1','$telefono1','$direccion1','$correo1')";
$result = pg_query($conexion, $sql2) or die(pg_last_error());
	echo $_POST['documento']." <br>".$_POST['nombre']." <br>".$_POST['apellido']." <br>".$_POST['telefono']." <br>".$_POST['direccion']." <br>".$_POST['correo']." <br>";
 ?>