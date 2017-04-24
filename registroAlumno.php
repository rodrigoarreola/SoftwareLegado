<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="UTF-8">
	 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/registro.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="wrapper-alumno">

    <div class="row be-down form">
        <form class="" id="forma" class="col s6" action="registrarAlumnoBD.php" method="post">
          <div class="row">
          	<div class="input-field col s6">
              <input autocomplete="off" required id="nombre" type="text" class="validate" name="nombre">
              <label class="active" for="nombre">Nombre</label>
            </div>
            <div class="input-field col s6">
              <input autocomplete="off" required id="apellido" type="text" class="validate" name="apellido">
              <label class="active" for="apellido">Apellido</label>
            </div>
            <div class="input-field col s6">
              <input autocomplete="off" required id="contrasena" type="password" class="validate" name="contrasena">
              <label class="active" for="contrasena">Contraseña</label>
            </div>
            <div class="input-field col s6">
              <input autocomplete="off" required id="matricula" type="number" class="validate" name="matricula">
              <label class="active" for="matricula">Matricula</label>
            </div>
            <div class="input-field col s6">
              <input autocomplete="off" required id="email" type="email" class="validate" name="email">
              <label class="active" for="email">E-mail</label>
            </div>
            <div class="input-field col s6">
              <input autocomplete="off" required id="cuatrimestre" type="number" class="validate" name="cuatrimestre">
              <label class="active" for="cuatrimestre">Cuatrimestre</label>
            </div>
          </div><br>
          <center>
            <button class="btn waves-effect waves-light" >Registrar Alumno
                <i class="material-icons right">send</i>
            </button>
            </center>
        </form>

      </div>
  </div>

</body>
</html>
