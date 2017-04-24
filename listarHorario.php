<?php
	include("conexion.php");
    $consulta=  mysql_query("select * FROM cursos WHERE idptc = '".$_SESSION['id'] ."'") or die("Fallo la conexion");
    $n_Filas=  mysql_num_rows($consulta);
	// echo '<h1>'.$_SESSION['id'].'</h1>';

//    $row = mysql_fetch_array($consulta);
	if ($n_Filas > 0) {
	    // output data of each row
		echo "<div class='row be-down'>";
	    while($row =  mysql_fetch_array($consulta)) {
			echo '

			<div class="col s12 m6">
				<div class="card blue-grey darken-1">
					<div class="card-content white-text">
						<span class="card-title">Materia: '.$row['materia'].'
					</div>
					<div class="card-action">
						<p>Horario: '.$row['horario'].' <br>
						Grupo: '.$row['grupo'].' <br>
						Cuatrimestre: '.$row['cuatrimestre'].'
						</p><a href="#!" class="secondary-content"></a>
						<a href="anadirAlumnos.php?idMateria='.$row['id'].'&cuatrimestre='.$row['cuatrimestre'].'&grupo='.$row['grupo'].'&materia= '.$row['materia'].'&idptc='.$_SESSION['id'] .' " class="btn waves-effect waves-light">Añadir alumnos</a>
					</div>
				</div>
			</div>

			';

	    }
		echo "</div>";
	}else{

		echo '
		<div class="col s6 m6 offset-s3">
			<div class="card blue-grey darken-1">
				<div class="card-content white-text">
					<span class="card-title">No tienes ninguna materia todavía
				</div>
				<div class="card-action">

				</div>
			</div>
		</div>';
	}

?>
