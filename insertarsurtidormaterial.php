<?php 
extract($_POST);
include('conexion.php');
$sql1="Select* from surtidor ";
$sql2="Select* from material ";

$result1 = pg_query($conexion,$sql1);
$result2 = pg_query($conexion,$sql2);
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
		<div style="margin-letf: auto; margin-right:auto;">
			<form action="surtidormaterial.php" method="post">
				<center>
				<h2>Surtidor material</h2>Documento surtidor
				<select name="documentosur"><?PHP
				while($row = pg_fetch_array($result1)) { 
				//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para municipio

				$codigo = $row["documentosur"] ; //Asignamos el id del campo que quieras mostrar
				echo "<option value=".$codigo.">".$codigo."</option>"; 
				//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
				} //Cerramos el ciclo 
				?></select><br>Codigo material
				<select name="codigomat"><?PHP
				while($row = pg_fetch_array($result2)) { 
				//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para municipio

				$codigo2 = $row["codigomat"] ; //Asignamos el id del campo que quieras mostrar
				echo "<option value=".$codigo2.">".$codigo2."</option>"; 
				//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
				} //Cerramos el ciclo 
				?></select><br>
			<input type="number" min=1 name="cantidad" placeholder="cantidad" required><br>
			<center><input type="submit" value="enviar"><input type="reset" value="borrar"></center></center>
			</form>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>