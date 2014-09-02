<?PHP
//Inicio la sesión
session_start();
//vemos si el usuario y contraseña es válido
 include("conec.php"); 
 $conn=conectarse(); 
 extract($_POST);
 //echo $conn;
$sql1="Select * from usuario  where cedula='".$cedula."' and clave ='".$clave."'";
//echo $sql1;
				$result1 = pg_query($conn,$sql1);
				$numrows5 = pg_numrows($result1);
				if ($numrows5==0) 
				{
				?><!DOCTYPE html>
				<html lang="en">
				<head>
					<?php include 'head.php'; ?>
					
				<title>Error</title>
				</head>
				<body>
					<div class="main-bg">
						<?php include 'cabecera.php'; ?>
						<center><br><br><br>
						Erro de usuario o contraseña
					</div>
					<?php include 'footer.php'; ?>
				</body>
				</html><?php
				}
				else 
				{
				$row1 = pg_fetch_array($result1);
				$tipo_usuario1 = $row1["tipo_usuario"];
				$nombre1 = $row1["nombre"];
				$_SESSION["cedula1"] =$cedula; 
				$_SESSION["usuario1"]= $usuario;
				$_SESSION["clave1"]=$clave;
				$_SESSION["nombre2"]=$nombre1;
				$_SESSION["tipouser"]=$tipo_usuario1;
				header("Location: menu.php");
				}
?>