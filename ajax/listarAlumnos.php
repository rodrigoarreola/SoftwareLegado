<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	include 'conexion.php';

	$consulta=  mysql_query("select * from usuarios") or die("Fallo la conexion");
	$n_Filas=  mysql_num_rows($consulta);

	if($n_Filas > 0){

		for($i=0;$i<$n_Filas;$i++){

			$info=mysql_fetch_array($consulta);
			print($info["nombre"]);
			print($info["apellido"]);
			print($info["matricula"]);
			print($info["cuatrimestre"]);
			print($info["email"]);
			print($info["tipo"]);
			print($info["contrasena"]);

		}
	}
 ?>
</body>
</html>
