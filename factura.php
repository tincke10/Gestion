<?php
require 'db.php';
require 'adminis.php';

// session_start();
$username = $_SESSION['username'];

// En  la variable de sesion traigo el dni del afiliado asi obtengo los datos del mismo
$socio = "SELECT * from public.afiliados where nrodocumento= $1";
$result1 = pg_prepare($conexion, "get_socio", $socio);
$result1 = pg_execute($conexion, "get_socio", array($username));
$row = pg_fetch_assoc($result1);
echo $row['nrodocumento'];

// Con los datos del afiliado, traigo el dni del titular del grupo familiar para la query en db adminis
$tituafil = "select * from afiliados where tituafil = $1";
$result2 = pg_prepare($conexion, "get_tituafil", $tituafil);
$result2 = pg_execute($conexion, "get_tituafil", array($row['tituafil']));
$row = pg_fetch_assoc($result2);
// echo $row['nrodocumento'];
$_SESSION['socio'] = $row['nrodocumento'];
$_SESSION['apellido'] = $row['apellido'];
$_SESSION['nombres'] = $row['nombres'];
$_SESSION['apellido'] = $row['apellido'];


// Ejecuto en db adminis la query para traer el ordesoci del titular y asi buscar los movivent
$sociotitu = "select * from socios where nrodocumento = $1";
$result3 = pg_prepare($conexion2, "get_sociotitu", $sociotitu);
$result3 = pg_execute($conexion2, "get_sociotitu", array($_SESSION['socio']));
$row = pg_fetch_assoc($result3);
echo $row ['ordesoci'];
$_SESSION['ordesoci'] = $row['ordesoci'];
$_SESSION['email'] = $row['email'];

// Traigo los movivent del titular y los recojo en un array
$movivent = "select * from movivent where ordesoci = $1 order by fechmovivent desc";
$result4 = pg_prepare($conexion2, "get_movivent", $movivent);
$result4 = pg_execute($conexion2, "get_movivent", array($_SESSION['ordesoci']));
$facturas = pg_fetch_all($result4);

// $ordemovivent = pg_fetch_result($result4, 0, "ordemovivent");



// foreach ($facturas as $row) {
//     echo '<pre>';
//     echo $row['fechmovivent']." ".$row['numemovivent']." ".$row['impomovivent']." ".$row['saldmovivent'];
//     echo '</pre>';
// }

// Con los ordemovivent traigo los detalles de las mismas (esta consulta la utilizare para generar el pdf de la factura en el futuro)
// $detmovivent = "select * from detavent where ordemovivent = $1";
// $result = pg_prepare($conexion2, "get_detmovivent", $detmovivent);
// $result = pg_execute($conexion2, "get_detmovivent", array($movimiento['ordemovivent']));
// $row = pg_fetch_all($result);
// echo $row;

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

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha384-6AUoUZnBvck4WmbcKzgOkTYBj5X5vS8Wmk5Mla1mKkUJh1It+h8Vz3uq3+Q/7Xyv" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/autogestionstyle.css">
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<!-- <link rel="stylesheet" href="styles/autogestionstyle.css"> -->
		</head>
		<body>

			<!-- Start Header Area -->
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
								<li><a href="http://localhost/www/autogestion/credencial.php">Credencial</a></li>
								<li><a href="#Estudios">Estudios Realizados</a></li>
								<li><a href="#Reintegros">Reintegros</a></li>		
								<li><a href="http://localhost/www/autogestion/logout.php">Salir</a></li>					
						    </ul>
						  </div>						
					</div>
				</nav>
			</header>

			<!-- Table inicio -->
			<section class="fashion-area section-gap" id="fashion">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Resumen de Cuenta</h1>
								<h5>Aquí podes ver tu resumen de cuenta y descargar tu factura</h5>
							</div>
						</div>
					</div>		
                    <div>
					<!-- Muestro los datos del titular -->
					<div class="encabezados"> 
					<h5 class="dni">
					D.N.I : <?php echo $row['nrodocumento']; ?>
					</h5>
					<h5 class="afiliado">
					Afiliado : <?php echo $row['nombres']. ' '. $row['apellido'];?>
					</h5>
                    </div>
					<br>
                    <table class="table">
                      <thead>
                        <tr>
                         <th scope="col">Fecha</th>
                         <th scope="col">Nro Factura</th>
                         <th scope="col">Importe</th>
                         <th scope="col">Debe</th>
                        </tr>
                      </thead>
               <tbody>
			   <?php 
  $saldo = 0;
  $i = 0;
  while ($i < count($facturas)) {
	$row = $facturas[$i];
	$saldo += $row['saldmovivent'];
	$ordemovivent = $row['ordemovivent'];
  ?>
  <tr>
  <td><?php echo $row['fechmovivent']; ?></td>
  <td><?php echo $row['numemovivent']; ?></td>
  <td><?php echo $row['impomovivent']; ?></td>
  <td><?php echo $row['saldmovivent']; ?></td>
  <td>
	<form  method='POST' action='http://www.amma.org.ar/adminis/martin/cupon.php' target='_blank'>
	     <input type='hidden' value='<?php echo $ordemovivent; ?>' name='ordemovivent'  class="btn btn-lg"/>
		  <button id="descarga" type="submit" class="btn btn-primary">Descargar</button> 
	</form>
  </td>
</tr>
<?php
$i++;
}
?>

<tr>
<td colspan="2"></td>
<th scope="row">Debe Total :</th>
<td><?php echo $saldo; ?></td>
</tr>
</tbody>
</table>
</div>	

<!-- Abro el modal para actualizar el email -->
<div>
	<h5>Todos los meses se envia la factura digital a : <?php echo $_SESSION['email']?>, Si desea cambiar el mail presione <span> <a href=""  data-toggle="modal" data-target="#updateEmailModal" >aquí</a></span></h5>
</div>


<div class="modal fade" id="updateEmailModal" tabindex="-1" role="dialog" aria-labelledby="updateEmailModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateEmailModalLabel">Actualizar correo electrónico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="updatemail.php">
          <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo electrónico">
          </div>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- <br>
<br>
<div class="text-center"> 
<h1 class="btn btn-info"><a href="#">Descargar</a></h1>
</div> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNVQ8ew" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</section>