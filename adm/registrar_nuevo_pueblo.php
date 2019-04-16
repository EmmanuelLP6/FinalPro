<?php
  include('./conexion.php');
  $nombre_estado = $_POST['nombre_estado'];
  $nombre_municipio = $_POST['nombre_municipio'];
  $nombre_localidad = $_POST['nombre_localidad'];
  $nombre_artesania = $_POST['nombre_artesania'];
  $materiales = $_POST['materiales'];
  $significado = $_POST['significado'];
  $img_artesania = $_FILES['img_artesania']['name'];
  $nombre_platillo = $_POST['nombre_platillo'];
  $preparacion = $_POST['preparacion'];
  $imagen_platillo = $_FILES['imagen_platillo']['name'];
  $nombre_prueblo = $_POST['nombre_prueblo'];
  $img1 = $_FILES['img1']['name'];
  $img2 = $_FILES['img2']['name'];
  $img3 = $_FILES['img3']['name'];
  $descripicion = $_POST['descripicion'];
  $fecha= date("Y-m-d");
  $hora= date("H:i:s");
  // echo $img2;
  if((move_uploaded_file($_FILES['img_artesania']['tmp_name'],"../img/".$img_artesania)) && (move_uploaded_file($_FILES['imagen_platillo']['tmp_name'],"../img/".$imagen_platillo)) && (move_uploaded_file($_FILES['img1']['tmp_name'],"../img/".$img1)) && (move_uploaded_file($_FILES['img2']['tmp_name'],"../img/".$img2)) && (move_uploaded_file($_FILES['img3']['tmp_name'],"../img/".$img3)) ){
    // echo "se movieron las fotos";
    //$id_cliente = mysqli_insert_id($conexion);
    // $insert_estado = "INSERT INTO estado VALUES(NULL,'".$nombre_estado."')";
    $insert_estado= mysqli_query($conexion,"INSERT INTO estado VALUES(NULL,'".$nombre_estado."')");
    if($insert_estado==TRUE){
      $id_estado = mysqli_insert_id($conexion);//toma el id_estado
      // echo "string".$id_estado."<br>";
      $insert_municipio= mysqli_query($conexion,"INSERT INTO municipio VALUES(NULL,'".$nombre_municipio."','".$id_estado."')");
      if ($insert_municipio==TRUE) {
        $id_municipio = mysqli_insert_id($conexion);//toma el id_estado
        $insert_localidad= mysqli_query($conexion,"INSERT INTO localidad VALUES(NULL,'".$nombre_localidad."','".$id_municipio."')");
        // echo "string".$id_municipio."<br>";
        if ($insert_localidad==TRUE) {
          $imgar = 'img/'.$img_artesania;
          $id_localidad = mysqli_insert_id($conexion);//toma el id_estado
          $insert_artesania= mysqli_query($conexion,"INSERT INTO artesania VALUES(NULL,'".$nombre_artesania."','".$materiales."','".$significado."','".$imgar."')");
          // echo "string".$id_localidad."<br>";
          if ($insert_artesania==TRUE) {
            $imagenplatillo = 'img/'.$imagen_platillo;
            $id_artesania = mysqli_insert_id($conexion);//toma el id_estado
            $insert_platillo= mysqli_query($conexion,"INSERT INTO platillo VALUES(NULL,'".$nombre_platillo."','".$preparacion."','".$imagenplatillo."')");
            // echo "string".$id_artesania."<br>";
            if ($insert_platillo==TRUE) {
              $img_1 = 'img/'.$img1;
              $img_2 = 'img/'.$img2;
              $img_3 = 'img/'.$img3;
              $id_platillo = mysqli_insert_id($conexion);//toma el id_estado
              $insert_pueblo= mysqli_query($conexion,"INSERT INTO pueblo VALUES(NULL,'".$nombre_prueblo."','".$fecha."','".$hora."',1,'".$img_1."','".$img_2."','".$img_3."','".$id_platillo."','".$id_artesania."','".$id_localidad."')");
              // echo "string".$id_platillo."<br>";
              if ($insert_pueblo==TRUE) {
                $id_pueblo = mysqli_insert_id($conexion);//toma el id_estado
                $insert_razon= mysqli_query($conexion,"INSERT INTO razon VALUES(NULL,'".$descripicion."','".$id_pueblo."')");
                // echo "string".$id_pueblo."<br>";
                if ($insert_razon==TRUE) {
                  $id_razon = mysqli_insert_id($conexion);//toma el id_estado

                  echo "
                  <html>
                    <head>
                      <title>Registrando</title>
                    </head>
                    <body style='background-image:url(../img/logo.jpeg); background-color: #F0F1F1;'>
                    </body>
                  </html>
                  <script>
                  alert('Se registró con éxito el nuevo Pueblo Mágico');
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
                  alert('Ocurrió un eror al registrar el nuevo Pueblo Mágico');
                    window.location='../panel/pueblo_magico.php'
                  </script>;
                  ";
                }
              }
            }
          }
        }
      }
    }
  }
?>
