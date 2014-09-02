<?php 
extract($_POST);
include('conexion.php');
$sql1="Select* from articulo ";
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
			<form action="fabricado.php" method="post">
				<center>
				<h2>Fabricado</h2>
				Seleccione codigo material
				<select name="codigomat"><?PHP
				while($row = pg_fetch_array($result2)) { 
				//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para municipio

				$codigo = $row["codigomat"] ; //Asignamos el id del campo que quieras mostrar
				echo "<option value=".$codigo.">".$codigo."</option>"; 
				//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
				} //Cerramos el ciclo 
				?></select><br>
				Seleccione codigo articulo
				<select name="codigoart"><?PHP
				while($row = pg_fetch_array($result1)) { 
				//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para municipio

				$codigo2 = $row["codigoart"] ; //Asignamos el id del campo que quieras mostrar
				echo "<option value=".$codigo2.">".$codigo2."</option>"; 
				//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
				} //Cerramos el ciclo 
				?></select>
				<center><input type="submit" value="enviar"><input type="reset" value="borrar"></center>
			</form>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>