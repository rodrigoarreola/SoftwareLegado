
<?php

$hostname="localhost";
$username = "root";
$password = "";
$dbname = "ptcsupport";
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$contrasena= $_POST['contrasena'];
$matricula= $_POST['matricula'];
$cuatrimestre= $_POST['cuatrimestre'];
$email= $_POST['email'];



// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);
//include("conexion.php");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO usuarios (nombre,apellido,matricula,cuatrimestre,email,tipo,contrasena) values ('$nombre','$apellido','$matricula','$cuatrimestre','$email','Alumno', '$contrasena')";

if ($conn->query($sql) === TRUE) {
    echo "<script> alert('Registro exitoso'); </script>";
    header('Location: login.php');
} else {

	echo "<script> alert('Registro fallido'); </script>";
	header('Location: registroAlumno.php');
}

$conn->close();
?>
