<?php 
extract($_POST);
include('conexion.php');
$sql1="Select* from facturasur where codigofsur='".$codigofsur."'";
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
			<form method="post" action="editarfacturasur.php">
			<table id="tablas" border='1' align='center'>
				<tr>
					<td>codigo Factura</td>
					<td>Documneto de surtidor</td>
					<td>Nombre surtidor</td>					
					<td>Direccion surtidor</td>
					<td>Costo</td>
					<td>fecha de factura</td>
					
					
					
				
					
					
				</tr>
			<?php
			if  ($row1 = pg_fetch_array($result1))
			{
				$doc = $row1["codigofsur"];
				$documentosur= $row1["documentosur"];
				$nombresur = $row1["nombresur"];
				$direccionsur = $row1["direccionsur"];
				$costofsur = $row1["costofsur"];
				$fechafsur = $row1["fechafsur"];
				
				
				
				
			?>				 
				 <tr>
				<td >
				<input  type="text"  name="codigofcli"  disabled="disabled"  value=<?PHP echo $doc;?>>
				</td>
				
				
				<td >
				<input  type="text"  name="documentosur"  value=<?PHP echo $documentosur;?>>
				</td>
				<td >
				<input  type="text"  name="nombresur"  value=<?PHP echo $nombresur;?>>
				</td>
				<td >
				<input  type="text"  name="direccionsur"  value=<?PHP echo $direccionsur;?> >
				</td>
				<td >
				<input  type="text"  name="costofsur"  value=<?PHP echo $costofsur;?> >
				</td>
				<td >
				<input  type="text"  name="fechafsur"  value=<?PHP echo $fechafsur;?> >
				</td>		
				</tr> 											
				<?PHP
			}
			?>
			</table>
			<center>
				<input  type="hidden"  name="codigofsur"  value=<?PHP echo $doc;?> >
			<INPUT TYPE='submit' VALUE='Modificar'/>
			</form>
			<form method="post" action="eliminarfacturasur.php">
			<input  type="hidden"  name="codigofsur"  value=<?PHP echo $doc;?> >	
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