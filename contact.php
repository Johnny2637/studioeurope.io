<?php
session_start();
?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../../../favicon.ico">

		<title>Contact</title>

		<!-- Bootstrap core CSS -->
        <link href="dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="dist/css/main.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="starter-template.css" rel="stylesheet">
	    <script src="dist/js/fontawesome-all.js"></script>
		<link href="dist/popup/magnific-popup.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		
	</head>

	<body data-spy="scroll" data-target="#navbarResponsive" class="reviews my-4">	
		
	
	<!--header section-->
	
	
	<header id="header">
	    <div class="container">
		    <div class="row height-90 align-items-center justify-content-center">
			    <div class="col">
				    <div class="banner text-center">
					    <h1 class="display-1 text-capitalize w-50 mx-auto"><small class="primary-color">Studio<br/>Europe</small></h1>
						<!--<a href="" class="btn main-btn pizza-btn my-4 text-capitalize">Découvrir nos offres</a>-->
						    
					</div>
				</div>
			</div>
		</div>
	</header>
	
	
	<!--fin de header section-->
		<?php
			require_once("./navbar.php");
		?>
	
		<section id="menu" class="py-5 my-5">
			<div class="container">
				<div class="row">
					<div class="col-md-6 my-4">
						<div class="card text-center">
							<div class="card-header">
								<h1>Contact Information</h1>
							</div>
							<div class="card-body">
								<ul class="navbar-nav mr-auto">
									<li>Vous pouvez nous contacter par téléphone </li>
									<li>au numéro: <span class="fas fa-tty"></span> 02 218 66 23</li>
									<li><span class="fas fa-times"></span> sans rendez-vous</li>
									<li><b><i><span class="fas fa-home"></span> Studio Europe </i></b></li>
									<li><span class="fas fa-map-marker"></span> Rue des Commerçants 4 1000 Bruxelles</li>
									<li>Centre-Ville, Bruxelles</li>
									<li><b>Paiment:</b> Cash 20€/H chambre sans douche, 25€/H avec douche </li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 my-4">
						<div class="card text-center">
							<div class="card-header">
								<h1>Heures d'ouvertures</h1>
							</div>
							<div class="card-body">
								
								<ul class="navbar-nav mr-auto">
									<li><span class="fas fa-clock"></span> <b>Lundi</b>   10:00-04:00</li>
									<li><span class="fas fa-clock"></span> <b>Mardi</b>   10:00-04:00</li>
									<li><span class="fas fa-clock"></span> <b>Mercredi</b>   10:00-04:00</li>
									<li><span class="fas fa-clock"></span> <b>Jeudi</b>   10:00-04:00</li>
									<li><span class="fas fa-clock"></span> <b>Vendredi</b>   10:00-04:00</li>
									<li><span class="fas fa-clock"></span> <b>Samedi</b>   10:00-04:00</li>
									<li><span class="fas fa-clock"></span> <b>Dimanche</b>   10:00-04:00</li>
									
								</ul>
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</section>
		
		<div class="col-sm-6 mx-auto my-4 pizza-btn card text-center iframe wow flipInY" data-wow-duration="3s" data-wow-delay="1s">
						
			<h1> Emplacement</h1>
			<iframe src="https://www.google.be/maps/embed?pb=!1m18!1m12!1m3!1d2518.6657198911516!2d4.351231615255369!3d50.85587416595047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c38480535bc3%3A0x4254b7dce4495711!2sRue+des+Commer%C3%A7ants+4%2C+1000+Bruxelles!5e0!3m2!1sfr!2sbe!4v1540500133856" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
						
		</div>
			
		<main role="main" class="container">


		</main>

		
		<?php
			require_once('./footer.php');
		?>
		
	</body>
</html>