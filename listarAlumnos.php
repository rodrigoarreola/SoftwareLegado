<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	include 'conexion.php';

	$consulta=  mysql_query("select * from usuarios where tipo = 'alumno' and cuatrimestre = '".$_GET['cuatrimestre'] ."'") or die("Fallo la conexion");
	$n_Filas=  mysql_num_rows($consulta);
	$idM = $_GET['idMateria'];

	if($n_Filas > 0){


		for($i=0;$i<$n_Filas;$i++){
			$info=mysql_fetch_array($consulta);
			echo "

			<div class='col s4 m3'>
				<div class='card blue-grey darken-1'>
					<div class='card-content white-text'>
						<span class='card-title'>Alumno: ".$info['nombre'] ." ". $info['apellido']."
						<button onclick='addAlumno(\"".$idM."\",\"".$info['id']."\",\"".$info['nombre']."\",\"".$info['apellido']."\",\"".$info['matricula']."\")' class='secondary-content btn waves-effect waves-light' type='submit' >Agregar
   					 </button>
					</div>
					<div class='card-action'>
						<p>
						 Matricula: ".$info['matricula']."<br>
						 Cuatrimestre: ".$info['cuatrimestre']."<br>
					  </p>

					</div>
				</div>
			</div>

			";


			/*print($info["nombre"]);
			print($info["apellido"]);
			print($info["matricula"]);
			print($info["cuatrimestre"]);
			print($info["email"]);
			print($info["contrasena"]);
			*/
		}
	}
 ?>

</body>
</html>
