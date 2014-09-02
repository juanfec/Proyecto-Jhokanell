<?php 
extract($_POST);
include('conexion.php');
$sql1="Select* from articulo where codigoart='".$codigoart."'";
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
			<form method="post" action="editararticulo.php">
			<table id="tablas" border='1' align='center'>
				<tr>
					<td>codigo articulo</td>
					<td>Nombre articulo</td>
					<td>Documento socio</td>
					
					<td>color articulo</td>
					<td>tipo articulo</td>
					<td>Tipo de fabricacion</td>
					<td>Costo</td>
					<td>Cantidad</td>
					
				
					
					
				</tr>
			<?php
			if  ($row1 = pg_fetch_array($result1))
			{
				$doc = $row1["codigoart"];
				$nombreart = $row1["nombreart"];
				$documentosoc = $row1["documentosoc"];
				$colorart = $row1["colorart"];
				$tipoart = $row1["tipoart"];
				$tipofabricacionart = $row1["tipofabricacionart"];
				$costo = $row1["costo"];
			    $cantidad = $row1["cantidad"];
				
				
				
			?>				 
				 <tr>
				<td >
				<input  type="text"  name="codigoart"  disabled="disabled"  value=<?PHP echo $doc;?>>
				</td>
				<td >
				<input  type="text"  name="nombreart"  value=<?PHP echo $nombreart;?>>
				</td>
				
				<td >
				<input  type="text"  name="documentosoc"  value=<?PHP echo $documentosoc;?>>
				</td>colorart
				<td >
				<input  type="text"  name="colorart"  value=<?PHP echo $colorart;?> >
				</td>
				<td >
				<input  type="text"  name="tipoart"  value=<?PHP echo $tipoart;?> >
				</td>
				<td >
				<input  type="text"  name="tipofabricacionart"  value=<?PHP echo$tipofabricacionart;?>>
				</td>
				<td >
				<input  type="email"  name="costo"  value=<?PHP echo $costo;?> >
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
				<input  type="hidden"  name="codigoart"  value=<?PHP echo $doc;?> >
			<INPUT TYPE='submit' VALUE='Modificar'/>
			</form>
			<form method="post" action="eliminararticulo.php">
			<input  type="hidden"  name="codigoart"  value=<?PHP echo $doc;?> >	
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