<?php 
extract($_POST);
include('conexion.php');
$sql1="Select* from cliart where codigofcli='".$codigofcli."'";
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
			<form method="post" action="editarcliart.php">
			<table id="tablas" border='1' align='center'>
				<tr>
					<td>codigo Factura</td>
					<td>codigo Articulo</td>
					<td>Documneto de socio</td>
					<td>Cantidad</td>
					
					
					
				
					
					
				</tr>
			<?php
			if  ($row1 = pg_fetch_array($result1))
			{
				$doc = $row1["codigofcli"];
				$codigoart= $row1["codigoart"];
				$documentosoc = $row1["documentosoc"];
				$cantidad = $row1["cantidad"];
				
				
				
				
				
			?>				 
				 <tr>
				<td >
				<input  type="text"  name="codigofcli"  disabled="disabled"  value=<?PHP echo $doc;?>>
				</td>
				<td >
				<input  type="text"  name="codigoart"  value=<?PHP echo $codigoart;?>>
				</td>
				
				<td >
				<input  type="text"  name="documentosoc"  value=<?PHP echo $documentosoc;?>>
				</td>
				<td >
				<input  type="text"  name="cantidad"  value=<?PHP echo $cantidad;?> >
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
			<form method="post" action="eliminarcliart.php">
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