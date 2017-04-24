<?php
   include("conexion.php");
   session_start();

   if(!isset($_SESSION['usuario']))
   {
    if(isset($_POST['contrasena']))
    {
      $matricula = $_POST['matricula'];
      $pass = $_POST['contrasena'];

      $consulta=  mysql_query("select id,tipo,nombre FROM usuarios WHERE matricula = '$matricula' and contrasena = '$pass'") or die("Fallo la conexion D:");
      $n_Filas=  mysql_num_rows($consulta);

      $row = mysql_fetch_array($consulta);


      // If result matched $matricula and $mypassword, table row must be 1 row
    //    echo "<script> alert('".$n_Filas."'); </script>";
      if($n_Filas > 0) {

         $_SESSION['matricula'] = $matricula;
         $_SESSION['id'] = $row["id"];
         $_SESSION['usuario'] = $row["nombre"];
         $_SESSION['tipo'] = $row["tipo"];
         header("location: index.php");
      }
          else
          {
              echo 'alert("Datos incorrectos")';
          }
      }


   }else{
   	header("location: index.php");
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<meta charset="utf-8">

      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"/>
      <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>


    <div class="wrapper">

    <div class="row be-down">
        <div class="col s8 offset-s2">
            <form action="login.php" method="POST" class="col s12 grey lighten-5">

                <div class="input-field col s6 ">
                    <input id="matricula"  name="matricula" type="text" class="validate">
                    <label for="matricula">Matricula</label>
                </div>


                <div class="input-field col s6 ">
                    <input id="contrasena" name="contrasena" type="password" class="validate">
                    <label for="contrasena">Contraseña</label>
                </div>


                <div class="input-field col s12 offset-s5 ">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Ingresar
                    </button>
                </div>

                <div class="input-field col s6">
                    <a href="registroAlumno.php" class="btn waves-effect waves-light #4fc3f7 light-blue lighten-2">Registrar Alumno</a>
                </div>

                <div class="input-field col s6">
                    <a href="registroPTC.php" class="btn waves-effect waves-light #4fc3f7 light-blue lighten-2">Registrar PTC</a>
                </div>

            </form>
        </div>
    </div>
</div>




</body>
</html>
