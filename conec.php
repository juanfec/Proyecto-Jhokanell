<?PHP
function conectarse() 
{ 
   if (!($conn=pg_connect("host=localhost user=postgres port=5432 dbname=jhokanell password=datajunior")or die(pg_last_error()))) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   
  if (!pg_dbname()) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   //retornar la conexión 
  return $conn; 
 
} 
  
?>
