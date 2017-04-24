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

	  <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
</head>
<body>
	<script type="text/javascript">

	function addAlumno(idM, idA,nombre, apellido, matricula) {

		  var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		  	if (xhttp.readyState == XMLHttpRequest.DONE) {
		  		var aux = xhttp.responseText;
		  		var b = "sucess";
		        console.log(aux);
		        if(aux.localeCompare(b)){
		    		alert("se ha guardado alumno")
		    	}else{
		    		alert("no se pudo guardar")
		    	}
		    }

		  };
		  xhttp.open("GET", "addAlumnoBD.php?idM="+idM+"&idA="+idA+"&nombre="+nombre+"&apellido="+apellido+"&matricula="+matricula, true);
		  xhttp.send(null);

	}
	</script>
	<nav>
	    <div class="nav-wrapper blue-grey darken-1">
	      <a href="horario.php" class="brand-logo left">Volver</a>
	    </div>
	  </nav>
	<main>
		<?php
			include('listarAlumnos.php');
		?>

	</main>
</body>
</html>
