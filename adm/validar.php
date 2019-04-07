<?php
  session_start();
  include("./conexion.php");
  $email = $_POST['email'];
  $password = $_POST['password'];
  $arrayName = array(
    'correo' => $email,
    'contraseña' => $password
  );
  // print_r($arrayName);
  $select = 'SELECT * FROM usuario WHERE correo_electronico="'.$email.'" AND password=sha2("'.$password.'",0);';
  // echo $select;
  $query = mysqli_query($conexion,$select);
  if (mysqli_num_rows($query)>0) {
    $data = mysqli_fetch_array($query);
    $_SESSION['sesvar'] = $data['nombre_usuario']."_".$data['id_usuario'];
    $_SESSION['nombre_usuario'] = $data['nombre_usuario'];
    $_SESSION['correo'] = $data['correo_electronico'];
    // echo $_SESSION['sesvar'];
    echo '
      <script type="text/javascript">
        window.location="../panel/dashboard.php";
      </script>
    ';
  }
  else{
    echo '
      <script type="text/javascript">
        window.location="../portal/login.php";
      </script>
    ';
  }
?>
