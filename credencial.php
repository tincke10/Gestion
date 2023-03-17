<?php
 require 'db.php';
// session_set_cookie_params(3600, '/', 'http://localhost/www/autogestion/', true, true);
session_start();
 $_SESSION['username'];

$query = pg_prepare($conexion, "", "SELECT * FROM afiliados_todos WHERE nrodocumento = $1");
$query = pg_execute($conexion, "", array($_SESSION['username']));
$row = pg_fetch_assoc($query);
// $_SESSION['afiliado_data'] = $row
$_SESSION['afiliado'] = $row['afiliado'];
$_SESSION['nrodocumento'] = $row['nrodocumento'];
$_SESSION['descloca'] = $row['descloca'];

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
								<li><a href="#Turnos">Turnos</a></li>
								<li><a href="http://localhost/www/autogestion/factura.php">Descargar Factura</a></li>
								<li><a href="#Estudios">Estudios Realizados</a></li>
								<li><a href="#Reintegros">Reintegros</a></li>		
								<li><a href="http://localhost/www/autogestion/logout.php">Salir</a></li>					
						    </ul>
						  </div>						
					</div>
				</nav>
			</header>

			<!-- Credencial -->
			<section class="fashion-area section-gap" id="fashion">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="menu-content pb-70 col-lg-8">
        <div class="title text-center">
          <h1 class="mb-10">Credencial</h1>
          <h5>Aquí podes descargar tu credencial</h5>
        </div>
      </div>
    </div> 

    <div class="row">
      <div class="col-lg-5 col-md-6 mx-auto single-fashion">
        <img class="img-fluid" src="img/credencial1.png" alt="">  
        <table id='cred' class="table">
          <tr>
            <td>D.N.I:</td>
            <td><?php echo $_SESSION['nrodocumento'];?></td>
          </tr>
          <tr>
            <td>Afiliado:</td>
            <td><?php echo $_SESSION['afiliado'];?></td>
          </tr>
          <tr>
            <td>Localidad:</td>
            <td><?php echo $_SESSION['descloca'];?></td>
          </tr>
        </table>
      </div>

      <div class="col-lg-5 col-md-5 mx-auto single-fashion ">
        <img class="img-fluid" src="img/credencial2.png" alt="">							
      </div>
    </div>

    <div class="row" id="des">
      <div class="col-lg-10 col-md-10 mx-auto text-center"> 
        <a class="btn btn-primary" href="image.php">Descargar</a>
      </div>
    </div>
  </div>	
</section>

		</body>