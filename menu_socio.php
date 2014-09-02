<?PHP
//Inicio la sesión
session_start();
echo "Bienvenido </br>", $_SESSION['nombre2'],"</br>es un  socio"; 
 include("libreria.php");
   //llena  la  variable  con el titulo esperado 
     $titulo="Sistema para socio"; 
	 hacer_encabezado($titulo);
?>

 <br><hr> Modulo del Usuario del Sistema de la Empresa mas Impotante<hr><br>
 
 <a href="salir.php">Cerrar Sesion</a>