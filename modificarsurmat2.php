<?php 
extract($_POST);
include('conexion.php');
$sql1="Select* from surmat where documentosur='".$documentosur."' and codigomat='".$codigomat."'";
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
			<form method="post" action="editarsurmat.php">
			<table id="tablas" border='1' align='center'>
				<tr>
					<td>Documneto surtidor</td>
					<td>Codigo material</td>
					<td>Cantidad</td>					
						
					
					
				
					
					
				</tr>
			<?php
			if  ($row1 = pg_fetch_array($result1))
			{
				$doc = $row1["documentosur"];
				$codigomat= $row1["codigomat"];
				$cantidad = $row1["cantidad"];
				
				
				
				
				
			?>				 
				 <tr>
				<td >
				<input  type="text"  name="documentosur"  disabled="disabled"  value=<?PHP echo $doc;?>>
				</td>
				
				
				<td >
				<input  type="text"  name="codigomat"  value=<?PHP echo $codigomat;?>>
				</td>
				<td >
				<input  type="text"  name="cantidad"  value=<?PHP echo $cantidad;?>>
				</td>
					
				</tr> 											
				<?PHP
			}
			?>
			</table>
			<center>
				<input  type="hidden"  name="documentosur"  value=<?PHP echo $doc;?> >
				<input  type="hidden"  name="codigo"  value=<?PHP echo $codigomat;?> >
			<INPUT TYPE='submit' VALUE='Modificar'/>
			</form>
			<form method="post" action="eliminarsurmat.php">
			<input  type="hidden"  name="documentosur"  value=<?PHP echo $doc;?> >	
			<input  type="hidden"  name="codigomat"  value=<?PHP echo $codigomat;?> >
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