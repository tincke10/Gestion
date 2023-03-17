<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/autogestionstyle.css">
    <link rel="modal" href="modal.js">
    <title>Login</title>
</head>
<body class="bg-image">
<br>
<br>
<br>
 <div class="container h-100 d-flex justify-content-center align-items-center">
  <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 500px;"> 
    <div class="card-body">
      <h5 class="card-title text-center font-weight-bold">OSTAMMA AUTOGESTIÓN</h5>
      <form method="post" action="auth.php">
        <div class="form-group">
          <label for="username" class="font-weight-bold text-center">D.N.I:</label>
          <input type="text" name="username" id="username" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="password" class="font-weight-bold">Contraseña:</label>
          <input type="password" name="password" id="password" class="form-control">
        </div>
        <h6 class="text-left p-1">* Su contraseña es la misma que en <span><a class="app" href="https://ostamma.org.ar/ostammaapp">OSTAMMA APP</a></span></h6>
        <div class="form-group text-center">
          <br>
          <input type="submit" value="Ingresar" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>
 </div>

 <!-- Modal de error de inicio de sesion -->
 <div class="modal fade" id="error-modal" tabindex="-1" aria-labelledby="error-modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="error-modal-label">Error de inicio de sesión</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>El D.N.I o la Contraseña son incorrectos</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<?php if (isset($_SESSION['login_error'])): ?>
  <script>
    var myModal = new bootstrap.Modal(document.getElementById('error-modal'), {
      keyboard: false
    })
    myModal.show()
  </script>
<?php unset($_SESSION['login_error']); endif; ?>
</body>
<!-- scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> 
<!-- scripts -->
</html>



