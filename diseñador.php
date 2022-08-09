<?php
require_once 'cdn.html';
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/logo.png" type="image/png" />
	<title>diseñador</title>
	<style>
		.navbar {
			background-color: #027180;
		}

		footer.page-footer {
			background-color: #027180;
		}
	</style>
</head>

<body>
	<!--Main Navigation-->
	<header>
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
			<div class="container text-white">
				<p>
				<header>
					<h4 class="h3-responsive text-center font-weight-bold ">Diseñador Web</h4>
				</header>
				</p>
			</div>
		</nav>
	</header>
	<!--Autor box-->
	<section>
		<hr>
		<div class="jumbotron p-5 text-center text-md-left author-box wow fadeIn" data-wow-delay="0.3s">
			<!--Name-->

			<hr>
			<div class="row">
				<!--Avatar-->
				<div class="col-12 col-md-2 mb-md-0 mb-4">
					<img src="img/yo.jpg" class="img-fluid rounded-circle z-depth-2">
				</div>
				<!--Author Data-->
				<div class="col-12 col-md-10">
					<h5 class="font-weight-bold dark-grey-text mb-3">
						<strong>Alberto De La Rosa Tovar</strong>
					</h5>
					<div class="personal-sm pb-3">

					</div>
					<h5>Universidad Tecnologica de Coahuila</h5>
					<h5>Profesor: David Lopez Belmares</h5>
					<h5>Materia: App Web Orientadas a Servicios </h5>
					<h5>Especialidad: Desarrollo de Software Multiplataforma</h5>
				</div>
			</div>
		</div>
	</section><!-- Autor box-->
	<div class=" offset-9 col-2">
		<a href="index.php" style="letter-spacing: 3px;">
			<button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark">Regresar </button>
		</a>
	</div>

	<br>
	<footer class="page-footer pt-0">

		<!--Footer Links-->
		<div class="container">

			<!--First row-->
			<div class="row">

				<!--First column-->
				<div class="col-md-12 wow fadeIn" data-wow-delay="0.3s">

					<div class="text-center d-flex justify-content-center my-4">


						<!--Twitter-->
						<a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text fa-lg pr-md-4"> </i></a>
						<!--Google +-->
						<a class="p-2 m-2 fa-lg gplus-ic"><i class="fab fa-google-plus-g white-text fa-lg pr-md-4"> </i></a>
						<!--Linkedin-->
						<a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in white-text fa-lg pr-md-4"> </i></a>
						<!--Instagram-->
						<a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram white-text fa-lg pr-md-4"> </i></a>

					</div>

				</div>
				<!--/First column-->

			</div>
			<!--/First row-->

		</div>
		<!--/Footer Links-->

		<!--Copyright-->
		<div class="footer-copyright py-3 text-center wow fadeIn" data-wow-delay="0.3s">
			<div class="container-fluid">
				©️ 2021 Copyright: <a href="https://www.despegar.com.mx/" target="_blank"> Alberto De La Rosa Tovar </a>
			</div>
		</div>
		<!--/.Copyright-->

	</footer>
	<!--/Footer-->
</body>

</html>