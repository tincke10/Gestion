<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<?php
require 'db.php';
// require 'modal.js';
// session_start();

// Comprueba si se han enviado los datos del formulario
if (isset($_POST['username']) && isset($_POST['password'])) {
  // Verifica que se hayan ingresado ambos campos
  if(empty($_POST['username']) || empty($_POST['password'])){
    echo '<div class="alert alert-danger text-center" role="alert">Debe ingresar su D.N.I y su Contraseña</div>';
      exit;
  }
    // Validar el nombre de usuario
    $username = trim($_POST['username']);
    if (!preg_match("/^[a-zA-Z0-9]+$/", $username)) {
      echo '<div class="alert alert-danger text-center" role="alert">El D.N.I solo puede contener números</div>';
        exit;
    }
    
  // Recupera los datos del formulario
  $username = $_POST['username'];
  $password = $_POST['password'];

    // Consulta a la base de datos para comprobar si existe un usuario con ese nombre 
    $query = "SELECT * FROM public.usuariosapp WHERE nombusua = $1";
    $result = pg_prepare($conexion, "", $query);
    $result = pg_execute($conexion, "", array($username));
    // Comprueba si se ha encontrado un usuario con ese nombre
    if (pg_num_rows($result) > 0) {
    	$row = pg_fetch_assoc($result);
    	// Codifica la contraseña en base64
      $string_base64 = "LjEyNzEu";
      $password_codificado = base64_encode($password);
      $string_codificado = $string_base64.$password_codificado;
        if($row['contraseña'] === $string_codificado){
            // El usuario y la contraseña son correctos, inicia sesión y redirige al usuario a la página intermediaria
            $_SESSION['username'] = $username;
            // echo $_SESSION['username'];
             $_SESSION['logged_in'] = true;
            header('Location: gestion.php');
            exit;
        } else {
        // El usuario o la contraseña son incorrectos, redirige al usuario a la página de inicio de sesión
        $_SESSION['login_error'] = true;
        header('Location: index.php');
        exit;
    }
  }
 }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> 
</html>
