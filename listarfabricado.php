<?php 
include('conexion.php');
$sql1="select * from fabricado";
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
      <TR><TD>Codigo material</TD><TD>Codigo articulo</TD></TR> 

      <?PHP     
					while ($row1=pg_fetch_array($result)) 
							{ 
											$documento=$row1["0"];
											$nombre=$row1["1"];


											
											
											echo "<tr>";
											echo "<td >";
											echo $documento;
											echo "</td>";
											echo "<td >";
											echo $nombre;
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