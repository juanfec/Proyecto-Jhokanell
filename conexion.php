<?php 
	ini_set('display_errors', 'On');
	ini_set('display_errors', 1);
	$conexion = pg_connect("host=localhost user=postgres port=5432 dbname=jhokanell password=datajunior") or die(pg_last_error()); 
 ?>