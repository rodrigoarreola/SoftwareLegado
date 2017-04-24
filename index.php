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


      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
	  <link rel="stylesheet" href="css/style.css">
	  <meta charset="utf-8">
</head>
<body>

	<div class="wrapper-index">

		<div class="row be-down">
			<div class="col s12 m6 offset-m3">
				<div class="card blue-grey darken-1">
					<div class="card-content white-text">
						<span class="card-title">
							<?php echo $_SESSION['tipo'];?>
							- <?php echo " ".$_SESSION['usuario'].""  ?></span>
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
	</div>


</body>
</html>
