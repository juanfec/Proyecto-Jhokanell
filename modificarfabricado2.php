<?php 
extract($_POST);
include('conexion.php');
$sql1="Select* from fabricado where codigomat='".$codigomat."' and codigoart='".$codigoart."'";
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
			<form method="post" action="editarfabricado.php">
			<table id="tablas" border='1' align='center'>
				<tr>
					<td>Codigo material</td>
					<td>Codigo articulo</td>
					
								
						
					
					
				
					
					
				</tr>
			<?php
			if  ($row1 = pg_fetch_array($result1))
			{
				$doc = $row1["codigomat"];
				$codigoart= $row1["codigoart"];
				
				
				
				
				
				
			?>				 
				 <tr>
				<td >
				<input  type="text"  name="codigomat"  disabled="disabled"  value=<?PHP echo $doc;?>>
				</td>
				
				
				<td >
				<input  type="text"  name="codigoart"  value=<?PHP echo $codigoart;?>>
				</td>
				
					
				</tr> 											
				<?PHP
			}
			?>
			</table>
			<center>
				<input  type="hidden"  name="codigoart"  value=<?PHP echo $doc;?> >
				<input  type="hidden"  name="codigomat"  value=<?PHP echo $codigomat;?> >
			<INPUT TYPE='submit' VALUE='Modificar'/>
			</form>
			<form method="post" action="eliminarfabricado.php">
			<input  type="hidden"  name="codigomat"  value=<?PHP echo $doc;?> >	
			<input  type="hidden"  name="codigoart"  value=<?PHP echo $codigoart;?> >
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