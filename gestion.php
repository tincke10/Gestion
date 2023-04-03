<?php 
// session_set_cookie_params(3600, '/', 'http://localhost/www/autogestion/', true, true);
session_start();
?>
<!DOCTYPE html>
	<html lang="es" class="no-js">
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
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
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
								<li><a href="gestion.php">Inicio</a></li>
								<li><a href="credencial.php">Credencial</a></li>	
								<li><a href="http://localhost/www/autogestion/turnos.php">Turnos Y Estudios</a></li>
								<li><a href="http://localhost/www/autogestion/factura.php">Descargar Factura</a></li>
								<li><a href="#Reintegros">Reintegros</a></li>		
								<li><a href="http://localhost/www/autogestion">Salir</a></li>					
						    </ul>
						  </div>						
					</div>
				</nav>
			</header>

			<!-- Start fashion Area -->
			<section class="fashion-area section-gap" id="fashion">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">GESTIONES</h1>
								<h5>Todas tus gestiones en un mismo lugar. <br> Podes descargar tu credencial, sacar turnos online, descargar factura, chequear tus estudios realizados en nuestros centros médicos y solicitar reintegros.</h5>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-2 col-md-6  mx-auto single-fashion">
                            <a href="credencial.php">
							<img class="img-fluid" src="img/creden.png" alt="">			
                            </a>					
						</div>
						<div class="col-lg-2 col-md-6  mx-auto single-fashion">
                        <a href="http://localhost/www/autogestion/turnos.php">
							<img class="img-fluid" src="img/turnosyestudio.png" alt="">	
                            </a>							
						</div>
						<div class="col-lg-2 col-md-6  mx-auto single-fashion">
                        <a href="http://localhost/www/autogestion/factura.php">
							<img class="img-fluid" src="img/Factura.png" alt="">	
                            </a>							
						</div>
						<!-- <div class="col-lg-2 col-md-6  mx-auto single-fashion">
                        <a href="">
							<img class="img-fluid " src="img/Estudios.png" alt="">
                            </a>
						</div>						 -->
						<div class="col-lg-2 col-md-6  mx-auto single-fashion">
                        <a href="">
							<img class="img-fluid " src="img/Reintegros.png" alt="">
                            </a>
						</div>	
					</div>
				</div>	
			</section>
			<!-- End fashion Area -->

			<!-- start footer Area -->		
			<!-- <footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget">
								<h6>Top Products</h6>
								<ul class="footer-nav">
									<li><a href="#">Managed Website</a></li>
									<li><a href="#">Manage Reputation</a></li>
									<li><a href="#">Power Tools</a></li>
									<li><a href="#">Marketing Service</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6  col-md-12">
							<div class="single-footer-widget newsletter">
								<h6>Newsletter</h6>
								<p>You can trust us. we only send promo offers, not a single spam.</p>
								<div id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="form-group row" style="width: 100%">
											<div class="col-lg-8 col-md-12">
												<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
												<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
											</div> 
										
											<div class="col-lg-4 col-md-12">
												<button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
											</div> 
										</div>		
										<div class="info"></div>
									</form>
								</div>		
							</div>
						</div>
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Instragram Feed</h6>
								<ul class="instafeed d-flex flex-wrap">
									<li><img src="img/i1.jpg" alt=""></li>
									<li><img src="img/i2.jpg" alt=""></li>
									<li><img src="img/i3.jpg" alt=""></li>
									<li><img src="img/i4.jpg" alt=""></li>
									<li><img src="img/i5.jpg" alt=""></li>
									<li><img src="img/i6.jpg" alt=""></li>
									<li><img src="img/i7.jpg" alt=""></li>
									<li><img src="img/i8.jpg" alt=""></li>
								</ul>
							</div>
						</div>						
					</div>

					<div class="row footer-bottom d-flex justify-content-between">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<!-- <p class="col-lg-8 col-sm-12 footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p> -->
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<!-- <div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>  -->
			<!-- End footer Area -->		
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
			<!-- <script src="js/vendor/jquery-2.2.4.min.js"></script> -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/parallax.min.js"></script>			
			<script src="js/owl.carousel.min.js"></script>		
			<script src="js/jquery.magnific-popup.min.js"></script>				
			<script src="js/jquery.sticky.js"></script>
			<script src="js/main.js"></script>	
		</body>
	</html>