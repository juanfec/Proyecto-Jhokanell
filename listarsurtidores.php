<?php 
include('conexion.php');
$sql1="select * from surtidor";
   $result = pg_query($conexion,$sql1);
 ?>

 <html>
 <head>
 	<title>Listar socios</title>
 </head>
 <body background="fondo.jpg">
 <p align="center"><img src="logo.png" alt="logo" width="322" height="173"/></p>
<font color="#3399FF" size ="15" face="segoe script"><center>Jhokanell</center></font>
 <hr size="2"  />
<table borde="1" bgcolor="#66CCFF" cellpadding="8" align="center">
<td><a href="principal.html">Inicio</a></td>
<td><a href="contacto.html">Contactenos</a></td>
<td><a href="https://www.facebook.com/JHOKANELL?fref=ts">Pagina en facebook</a></td>
<td><a href="razon_social.html">Nuestra empresa</a></td>
<td><a href="Pagina_Mision_Vision.html">Misión Y Visión</a></td>
<td><a href="tablas.html">Tablas</a></td>
<td><a href="listar.html">Listar</a></td>
</table>
<hr size="2"/>
<center>
<TABLE BORDER=1> 
      <TR><TD>Documento</TD><TD>Nombre</TD><TD>Apellido</TD><TD>Direccion</TD><TD>Celular</TD><TD>Correo</TD><td>Tipo</td><TD>Pais</TD><td>Empresa</td></TR> 

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
											$cargo=$row1["8"];

											
											
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
											echo "<td>";
											echo $cargo;
											echo "</td>";
											echo "</tr>";	 
							}   
  pg_free_result($result); 
  pg_close($conexion); 
?> 
</table>
 	</center>
 </body>
 </html>