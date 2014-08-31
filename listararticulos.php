<?php 
include('conexion.php');
$sql1="select * from articulo";
   $result = pg_query($conexion,$sql1);
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
		<center>
<TABLE BORDER=1> 
      <TR><TD>Codigo</TD><TD>Nombre</TD><TD>Documento socio</TD><TD>Color</TD><TD>Tipo</TD><TD>Tipo de fabricacion</TD><TD>Costo</TD><TD>Cantidad</TD></TR> 

      <?PHP     
					while ($row1=pg_fetch_array($result)) 
							{ 
											$documento=$row1["0"];
											$nombre=$row1["1"];
											$apellido=$row1["2"];
											$direccion=$row1["3"];
											$celular=$row1["4"];
											$correo=$row1["5"];
											$eps=$row1["6"];
											$estado=$row1["7"];


											
											
											echo "<tr>";
											echo "<td >";
											echo $documento;
											echo "</td>";
											echo "<td >";
											echo $nombre;
											echo "</td>";
											echo "<td>";
											echo $apellido;
											echo "</td>";
											echo "<td>";
											echo $direccion;
											echo "</td>";
											echo "<td>";
											echo $celular;
											echo "</td>";
											echo "<td>";
											echo $correo;
											echo "</td>";
											echo "<td>";
											echo $eps;
											echo "</td>";
											echo "<td>";
											echo $estado;
											echo "</td>";
											echo "</tr>";	 
							}   
  pg_free_result($result); 
  pg_close($conexion); 
?> 
</table>
 	</center>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>
 