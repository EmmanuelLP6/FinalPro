<?php
  $conexion = mysqli_connect("localhost","estebanJ","12345","pueblosmagicos") or die("Error al conectarse con el servidor");
  // $conexion = mysqli_connect("localhost","user_pueblo_magico","usuariopueblomagico123","pueblosmagicos") or die("Error al conectarse con el servidor");
  mysqli_query($conexion,"SET NAMES 'utf8'");
?>
