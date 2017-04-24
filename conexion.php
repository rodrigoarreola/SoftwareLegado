<?php
	$hostname="localhost";
	$username = "root";
	$password = "";
	$dbname = "ptcsupport";
	$conexion=@mysql_connect($hostname, $username, $password);
	$basedeDatos="ptcsupport";
	//se establece la conexion
	mysql_select_db($basedeDatos,$conexion);
?>
