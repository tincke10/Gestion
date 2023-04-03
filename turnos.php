<?php
// session_start();

$numero = "";
$admin = 1;
$dia = "";
$mes = "";
$año = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Obtener los valores enviados por el formulario
    $numero = $_POST['numero'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $año = $_POST['año'];
}

$url = "http://www.maradonasalud.com.ar/turnos/login2.php" .
       "?txtusuario=" . urlencode($numero) .
       "&txtdia=" . urlencode($dia) .
       "&txtmes=" . urlencode($mes) .
       "&txtanio=" . urlencode($año) .
       "&autoadmin=" . urlencode($admin);

       header("Location: " . $url);
       exit;       
  ?>

<!DOCTYPE html>
	<html lang="en" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>AUTOGESTION</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		    <link rel="stylesheet" href="styles/autogestionstyle.css">
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			<!-- Header -->
			<header class="default-header">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						  <a class="navbar-brand" href="gestion.php">
						  	 <img src="img/ostamma.jpg" alt=""> 
						  </a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav">
								<li><a href="http://localhost/www/autogestion/gestion.php">Inicio</a></li>
								<li><a href="http://localhost/www/autogestion/credencial.php">Credencial</a></li>
								<li><a href="http://localhost/www/autogestion/factura.php">Descargar Factura</a></li>
								<li><a href="#Reintegros">Reintegros</a></li>		
								<li><a href="http://localhost/www/autogestion/logout.php">Salir</a></li>					
						    </ul>
						  </div>						
					</div>
				</nav>
			</header>

			<!-- Turnos y Historia Clinica -->
			<section class="fashion-area section-gap" id="fashion">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Turnos Y Estudios</h1>
                    <h5>Coloca la fecha de nacimiento y D.N.I de la persona que va a asistir al turno o ver los estudios.</h5>
                </div>
            </div>
        </div> 
        <div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-5 col-md-6 single-fashion"> 
      <form method="POST" action="$url">
        <div class="form-group">
          <label for="fechaNacimiento">Fecha de nacimiento:</label>
          <div class="row">
            <div class="col">
              <input type="number" class="form-control" id="Dia" name="dia" placeholder="Dia">
            </div>
            <div class="col">
              <input type="number" class="form-control" id="Mes" name="mes" placeholder="Mes">
            </div>
            <div class="col">
              <input type="number" class="form-control" id="Año" name="año" placeholder="Año">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="numero">Número D.N.I:</label>
          <input type="text" class="form-control" id="numero" name="numero" placeholder="D.N.I">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>
</div>
    </div>	
</section>
</body>