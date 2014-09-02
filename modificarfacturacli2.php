<?php 
extract($_POST);
include('conexion.php');
$sql1="Select* from facturacli where codigofcli='".$codigofcli."'";
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
			<form method="post" action="editarfacturacli.php">
			<table id="tablas" border='1' align='center'>
				<tr>
					<td>codigo Factura</td>
					<td>Documneto de socio</td>
					<td>Documento Cliente</td>					
					<td>Costo</td>
					<td>Fecha de factura</td>
					
					
					
				
					
					
				</tr>
			<?php
			if  ($row1 = pg_fetch_array($result1))
			{
				$doc = $row1["codigofcli"];
				$documentosoc= $row1["documentosoc"];
				$documentofcli = $row1["documentofcli"];
				$costofcli = $row1["costofcli"];
				$fechafcli = $row1["fechafcli"];
				
				
				
				
				
			?>				 
				 <tr>
				<td >
				<input  type="text"  name="codigofcli"  disabled="disabled"  value=<?PHP echo $doc;?>>
				</td>
				
				
				<td >
				<input  type="text"  name="documentosoc"  value=<?PHP echo $documentosoc;?>>
				</td>
				<td >
				<input  type="text"  name="documentofcli"  value=<?PHP echo $documentofcli;?>>
				</td>
				<td >
				<input  type="text"  name="costofcli"  value=<?PHP echo $costofcli;?> >
				</td>
				<td >
				<input  type="text"  name="fechafcli"  value=<?PHP echo $fechafcli;?> >
				</td>		
				</tr> 											
				<?PHP
			}
			?>
			</table>
			<center>
				<input  type="hidden"  name="codigofcli"  value=<?PHP echo $doc;?> >
			<INPUT TYPE='submit' VALUE='Modificar'/>
			</form>
			<form method="post" action="eliminarfacturacli.php">
			<input  type="hidden"  name="codigofcli"  value=<?PHP echo $doc;?> >	
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