<?php 
extract($_POST);
include('conexion.php');
$sql1="Select* from socio where documentosoc='".$documento."'";
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
			<form method="post" action="editarsocios.php">
			<table id="tablas" border='1' align='center'>
				<tr>
					<td>Documento socio</td>
					<td>Nombre socio</td>
					<td>Apellido socio</td>
					<td>Direccion socio</td>
					<td>Celular Socio</td>
					<td>Correo socio</td>
					<td>Eps socio</td>
					<td>Estado civil</td>
					<td>Cargo socio</td>
					<td>Fecha contrato socio</td>
				</tr>
			<?php
			if  ($row1 = pg_fetch_array($result1))
			{
				$doc = $row1["documentosoc"];
				$nombresoc = $row1["nombresoc"];
				$apellidosoc = $row1["apellidosoc"];
				$direccionsoc = $row1["direccionsoc"];
				$celularsoc = $row1["celularsoc"];
				$correosoc = $row1["correosoc"];
				$epssoc = $row1["epssoc"];
				$estadocivilsoc = $row1["estadocivilsoc"];
				$cargosoc = $row1["cargosoc"];
				$fechacontratosoc = $row1["fechacontratosoc"];
				?>				 
				 <tr>
				<td >
				<input  type="text"  name="documento1"  disabled="disabled"  value=<?PHP echo $doc;?>>
				</td>
				<td >
				<input  type="text"  name="nombre"  value=<?PHP echo $nombresoc;?>>
				</td>
				<td >
				<input  type="text"  name="apellido"  value=<?PHP echo $apellidosoc;?>>
				</td>
				<td >
				<input  type="text"  name="direccion"  value=<?PHP echo $direccionsoc;?> >
				</td>
				<td >
				<input  type="text"  name="celular"  value=<?PHP echo$celularsoc;?>>
				</td>
				<td >
				<input  type="email"  name="correo"  value=<?PHP echo $correosoc;?> >
				</td>
				<td >
				<input  type="text"  name="eps"  value=<?PHP echo $epssoc;?> >
				</td>
				<td >
				<input  type="text"  name="estadocivil"  value=<?PHP echo $estadocivilsoc;?> >
				</td>
				<td >
				<input  type="text"  name="cargo"  value=<?PHP echo $cargosoc;?> >
				</td>
				<td >
				<input  type="date"  name="fecha"  value=<?PHP echo $fechacontratosoc;?> >
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
			<form method="post" action="eliminarsocios.php">
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