<?php
	session_start();
	 if(!isset($_SESSION['usuario'])){
	 	header('Location: login.php' );
	 }
?>
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right  hide-on-med-and-down">
      	<?php
      		if($_SESSION['tipo'] != "alumno"){
      			echo '<li><a href="">Registrar Curso</a></li> ';
      		}
      	?>
        <li><a href="">Horario</a></li>
        <li><a href="cerrarSesion.php">Cerrar sesión</a></li>
      </ul>
    </div>
  </nav>