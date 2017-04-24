<?php
	session_start();
	 if(!isset($_SESSION['usuario'])){
	 	header('Location: login.php' );
	 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido</title>
	<meta charset="utf-8">

	  <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
	  <link rel="stylesheet" href="css/style.css">
</head>
<body>


	<div class="wrapper-horario">

	  <div class="row be-down">
  		<div class="col s12 m6 offset-m3">
  			<div class="card blue-grey darken-1">
  				<div class="card-content white-text">
  					<span class="card-title">Horario</span>
  					<p>Bienvenido a tu dashboard</p>
  				</div>
  				<div class="card-action">
  					<a href="horario.php">Horario</a>
  					<?php
  			      		if($_SESSION['tipo'] != "Alumno"){
  			      			echo '<a href="Cursos.php">Registrar Curso</a>';
  			      		}
  			      	?>
  					<a href="cerrarSesion.php">Cerrar Sesion</a>
  				</div>
  			</div>
  		</div>
  	</div>


		<?php
			include('listarHorario.php');
		?>
	</div>

</body>
</html>
