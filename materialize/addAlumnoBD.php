 <?php
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//variables POST  
//idM, idA,nombre, apellido, matricula
  $idM = $_POST['idM']; 
  $idA = $_POST['idA'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido']; 
  $matricula = $_POST['matricula']; 
 
//registra los datos del empleados
  $sql="INSERT INTO alumnoscursos (idmateria, idalumno,nombre, apellido, matricula) VALUES ('$idM', '$idA','$nombre','$apellido','$idA')";

if ($conn->query($sql) === TRUE) {
  echo "sucess";
} else {
  echo "fail";
}

$conn->close();
 
?>