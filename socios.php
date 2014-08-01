<?php 
$codigo1 = $_POST["codigo"];

$documento1 = $_POST["documento"];

$nombre1 = $_POST["nombre"];

$apellidos1 = $_POST["apellidos"];

$direccion1 = $_POST["direccion"];

$telefono1 = $_POST["telefono"];

$cargo1 = $_POST["cargo"];

$nacimiento1= $_POST["nacimiento"];
$conexion = pg_connect("host=localhost user=postgres port=5432 dbname=jhokanell password=datajunior") or die(pg_last_error()); 
$sql2="insert into socios (codigo, documento, nombre, apellidos, direccion, cargo) values('$codigo1','$documento1', '$nombre1','$apellidos1','$direccion1','$telefono1','$cargo1')";
$result = pg_query($conexion, $sql2) or die(pg_last_error());
echo $_POST['codigo']." <br>".$_POST['documento']." <br>".$_POST['nombre']." <br>".$_POST['apellidos']." <br>".$_POST['direccion']." <br>".$_POST['cargo'];
 ?>