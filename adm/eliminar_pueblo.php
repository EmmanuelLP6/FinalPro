<?php
  include('./conexion.php');
  $id_pueblo = $_GET['id'];
  // echo $id_pueblo;
  $delete = "DELETE FROM pueblo WHERE id_pueblo=".$id_pueblo;
  // echo $delete;
  $query = mysqli_query($conexion,$delete);
  if($query==TRUE){
    echo "
    <html>
      <head>
        <title>Eliminando</title>
      </head>
      <body style='background-image:url(../img/logo.jpeg); background-color: #F0F1F1;'>
      </body>
    </html>
    <script>
    alert('Se eliminó con éxito el Pueblo Mágico');
      window.location='../panel/pueblo_magico.php'
    </script>;
    ";
  }
  else{
    echo "
    <html>
      <head>
        <title>Error</title>
      </head>
      <body style='background-image:url(../img/logo.jpeg); background-color: #F0F1F1;'>
      </body>
    </html>
    <script>
    alert('Ocurrió un error al eliminar esté Pueblo Mágico');
      window.location='../panel/pueblo_magico.php'
    </script>;
    ";
  }
?>
