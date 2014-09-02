<?php 
extract($_POST);
include('conexion.php');
$sql1="Select* from cliente where documentocli='".$documento."'";
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
			<form method="post" action="editarcliente.php">
			<table id="tablas" border='1' align='center'>
				<tr>
					<td>Documento cliente</td>
					<td>Nombre cliente</td>
					<td>Apellido cliente</td>
					<td>tipo cliente</td>
					<td>Direccion cliente</td>
					<td>Celular cliente</td>
					<td>Correo cliente</td>
					
					<td>Pais</td>
					
					
				</tr>
			<?php
			if  ($row1 = pg_fetch_array($result1))
			{
				$doc = $row1["documentocli"];
				$nombrecli = $row1["nombrecli"];
				$apellidocli = $row1["apellidocli"];
				$tipocli = $row1["tipocli"];
				$direccioncli = $row1["direccioncli"];
				$celularcli = $row1["celularcli"];
				$correocli = $row1["correocli"];
			    $paiscli = $row1["paiscli"];
				
				
				
			?>				 
				 <tr>
				<td >
				<input  type="text"  name="documento1"  disabled="disabled"  value=<?PHP echo $doc;?>>
				</td>
				<td >
				<input  type="text"  name="nombrecli"  value=<?PHP echo $nombrecli;?>>
				</td>
				
				<td >
				<input  type="text"  name="apellidocli"  value=<?PHP echo $apellidocli;?>>
				</td>
				<td >
				<input  type="text"  name="tipocli"  value=<?PHP echo $tipocli;?> >
				</td>
				<td >
				<input  type="text"  name="direccioncli"  value=<?PHP echo $direccioncli;?> >
				</td>
				<td >
				<input  type="text"  name="celularcli"  value=<?PHP echo$celularcli;?>>
				</td>
				<td >
				<input  type="email"  name="correocli"  value=<?PHP echo $correocli;?> >
				</td>				
				<td >
				<input  type="text"  name="paiscli"  value=<?PHP echo $paiscli;?> >
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
			<form method="post" action="eliminarcliente.php">
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