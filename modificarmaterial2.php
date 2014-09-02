<?php 
extract($_POST);
include('conexion.php');
$sql1="Select* from Material where codigomat='".$codigomat."'";
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
			<form method="post" action="editarmaterial.php">
			<table id="tablas" border='1' align='center'>
				<tr>
					<td>codigo Material</td>
					<td>Nombre Material</td>
					<td>Tipo de material</td>
					<td>color Material</td>
					<td>Costo</td>
					
					
				
					
					
				</tr>
			<?php
			if  ($row1 = pg_fetch_array($result1))
			{
				$doc = $row1["codigomat"];
				$nombremat = $row1["nombremat"];
				$tipomat = $row1["tipomat"];
				$colormat = $row1["colormat"];
				$costomat = $row1["costomat"];
				
				
				
				
			?>				 
				 <tr>
				<td >
				<input  type="text"  name="codigomat"  disabled="disabled"  value=<?PHP echo $doc;?>>
				</td>
				<td >
				<input  type="text"  name="nombremat"  value=<?PHP echo $nombremat;?>>
				</td>
				
				<td >
				<input  type="text"  name="tipomat"  value=<?PHP echo $tipomat;?>>
				</td>colorart
				<td >
				<input  type="text"  name="colormat"  value=<?PHP echo $colormat;?> >
				</td>
				<td >
				<input  type="text"  name="costomat"  value=<?PHP echo $costomat;?> >
				</td>
				
				</tr> 											
				<?PHP
			}
			?>
			</table>
			<center>
				<input  type="hidden"  name="codigomat"  value=<?PHP echo $doc;?> >
			<INPUT TYPE='submit' VALUE='Modificar'/>
			</form>
			<form method="post" action="eliminarmaterial.php">
			<input  type="hidden"  name="codigomat"  value=<?PHP echo $doc;?> >	
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