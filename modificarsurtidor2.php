<?php 
extract($_POST);
include('conexion.php');
$sql1="Select* from surtidor where documentosur='".$documento."'";
$result1 = pg_query($conexion,$sql1);
$numrows5 = pg_numrows($result1);
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
		if  ($numrows5!=0) {
			?>
			<form method="post" action="editarsurtidor.php">
			<table id="tablas" border='1' align='center'>
				<tr>
					<td>Documento surtidor</td>
					<td>Nombre surtidor</td>
					<td>Apellido surtidor</td>
					<td>Direccion surtidor</td>
					<td>Celular surtidor</td>
					<td>Correo surtidor</td>
					<td>tipo surtidor</td>
					<td>Pais</td>
					<td>empresa surtidor</td>
					
				</tr>
			<?php
			if  ($row1 = pg_fetch_array($result1))
			{
				$doc = $row1["documentosur"];
				$nombresur = $row1["nombresur"];
				$apellidosur = $row1["apellidosur"];
				$direccionsur = $row1["direccionsur"];
				$celularsur = $row1["celularsur"];
				$correosur = $row1["correosur"];
				$tiposur = $row1["tiposur"];
				$pais = $row1["pais"];
				$empresasur = $row1["empresasur"];
			?>				 
				 <tr>
				<td >
				<input  type="text"  name="documento1"  disabled="disabled"  value=<?PHP echo $doc;?>>
				</td>
				<td >
				<input  type="text"  name="nombre"  value=<?PHP echo $nombresur;?>>
				</td>
				<td >
				<input  type="text"  name="apellido"  value=<?PHP echo $apellidosur;?>>
				</td>
				<td >
				<input  type="text"  name="direccion"  value=<?PHP echo $direccionsur;?> >
				</td>
				<td >
				<input  type="text"  name="celular"  value=<?PHP echo$celularsur;?>>
				</td>
				<td >
				<input  type="email"  name="correo"  value=<?PHP echo $correosur;?> >
				</td>
				<td >
				<input  type="text"  name="tipo"  value=<?PHP echo $tiposur;?> >
				</td>
				<td >
				<input  type="text"  name="pais"  value=<?PHP echo $pais;?> >
				</td>
				<td >
				<input  type="text"  name="empresa"  value=<?PHP echo $empresasur;?> >
				</td>
				</tr> 											
				<?PHP
			}
			?>
			</table>
			<center>
				<input  type="hidden"  name="documento"  value=<?PHP echo $doc;?> >
			<INPUT TYPE='submit' VALUE='Modificar'/>
			</form>
			<form method="post" action="eliminarsurtidor.php">
			<input  type="hidden"  name="documento"  value=<?PHP echo $doc;?> >	
			<INPUT TYPE='submit' VALUE='Eliminar'/>
			</form>
			</center>
			<?php
		}else{
			?><br><br>No se encontraron datos<?php
		}
		?>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>