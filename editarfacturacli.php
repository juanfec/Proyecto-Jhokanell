<?php 
extract($_POST);
include('conexion.php');
$sql1="UPDATE facturacli SET documentosoc='".$documentosoc."',documentofcli='".$documentofcli."',costofcli='".$costofcli."',fechafcli='".$fechafcli."' where codigofcli='".$codigofcli."'";
$result1 = pg_query($conexion,$sql1) or die(pg_last_error());
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'head.php'; ?>
	
<title>Inicio</title>
</head>
<body>
	<div class="main-bg">
		<?php include 'cabecera.php'; ?>
		<?php 
		if ($result1== false) {
			?><center><br><br>Los datos no se pudieron modificar</center><?php
		}else{
			?><center><br><br>Los datos se modificaron exitosamente</center><?php
		}
		?>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>