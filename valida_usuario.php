<?PHP
//Inicio la sesión
session_start();
//vemos si el usuario y contraseña es válido
 include("conec.php"); 
 $conn=conectarse(); 
 extract($_POST);
 //echo $conn;
$sql1="Select * from usuario  where cedula='".$cedula."' and login='".$usuario."' and clave ='".$clave."'";
//echo $sql1;
				$result1 = pg_query($conn,$sql1);
				$numrows5 = pg_numrows($result1);
				if ($numrows5==0) 
				{
				header("Location: valida1.php?errorusuario=si");
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
				
				echo $tipo_usuario1;
				if ($tipo_usuario1=='socio')
				{
				header("Location: menu_socio.php");
					exit(); 	
				}
				if ($tipo_usuario1='cliente')
				{
				header("Location:  menu_cliente.php");
               		exit(); 
				
				}
				 if ($tipo_usuario1='surtidor')
				 	{header("location: menu_surtidor");
				    exit();
				}
	


	

}
?>