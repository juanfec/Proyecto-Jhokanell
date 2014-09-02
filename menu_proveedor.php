<?PHP
//Inicio la sesión
session_start();
echo "Bienvenido </br>", $_SESSION['nombre2'],"</br> soy el mejor  proveedor"; 
include("libreria.php");
   //llena  la  variable  con el titulo esperado 
     $titulo="Sistema para proveedor"; 
	 hacer_encabezado($titulo);
?>

 <br><hr> Modulo del Administrador del Sistema de la Empresa mas Impotante<hr><br>
 
 <a href="salir.php">Cerrar Sesion</a>
 </body>
 </html>