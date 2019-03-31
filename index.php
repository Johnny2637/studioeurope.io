<?php
session_start();
?>
<!doctype html>
<html lang="fr" xml:lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width:device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../../../favicon.ico">

		<title>Menu</title>

		<!-- Bootstrap core CSS -->
        <link href="dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="dist/css/main.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="starter-template.css" rel="stylesheet">
	    <script src="dist/js/fontawesome-all.js"></script>
		<link href="dist/popup/magnific-popup.css" rel="stylesheet">
		
	</head>
	
	<body data-spy="scroll" data-target="#navbarResponsive" class="menu">
	
		<!--header section-->
	
		<header id="header">
			<div class="container">
				<div class="row height-90 align-items-center justify-content-center">
					<div class="col">
						<div class="banner text-center">
							<h1 class="display-1 text-capitalize w-50 mx-auto"><small class="primary-color">Studio<br/>Europe</small></h1>    
						</div>
					</div>
				</div>
				<div class="banner text-center">
					<a href="#special-items" class="btn header-link primary-color"><i class="fas fa-arrow-down"></i></a>
				</div>
			</div>
			
		</header>
	
		<!--fin de header section-->
		<?php
			require_once("./navbar.php");
		?>
	
		<section class="py-5" id="special-items">
			<div class="container my-5">
				<div class="row">
					<div class="col-sm-10 mx-auto d-flex justify-content-between review-item py-3 orange">
							<div class="align-self-center ml-3">
								<img src="img/img/europe.png" alt="" class="rounded-circle review-img">
							</div>
							<div class="review-text px-5 font orange">
								<h2 class="text-capitalize mb-3 primary-color"> Bienvenue</h2>
								<p class="lead">Le <b>Studio Europe</b> vous accueille dans le centre-ville de Bruxelles, au coeur historique de la capitale européenne prés de Sainte Catherine quartier très apprécié par les Bruxellois, à distance réduite de nombreux lieux d'intérêt (Grand Place, BOZAR, Musées royaux, Manneken-Pis, etc.). La présence à proximité de transports en commun est également un bon point pour cette adresse bon marché.</p>
							</div>
						
					</div>
				</div>
			</div>
				
		</section>
		
		<section class="py-5" id="special-items">
			<div class="container">
				<div class="card text-center">
					<div class="card-header font">
						<h1>Nos sérvices</h1>
						<div class="col-9 col-sm-6 col-md-6 mx-auto my-4">
							<div class="card menu">
								<div class="card-body menu">
									<h3 class="primary-color text-capitalize text-center">Boissons</h3>
								</div>
							</div>	
						</div>
						<div class="row">
							
							<div class="col-9 col-sm-6 col-lg-6 mx-auto my-4">
								<div class="card menu">
							
									<div class="card-body">
										<h3 class="primary-color text-capitalize text-center"></h3>
											<img src="img/img/télécharger.jpg" alt="" class="card-img-top">
									</div>
							
								</div>
								
							</div>
							<div class="col-9 col-sm-6 col-lg-6 mx-auto my-4">
								<div class="card menu">
							
									<div class="card-body">
										<h3 class="primary-color text-capitalize text-center"></h3>
											<img src="img/img/o-BEER-facebook.jpg" alt="" class="card-img-top">
									</div>
									
								</div>
							</div>
							
						</div>
					</div>
					<div class="banner text-center">
						<a href="next.php" class="btn main-btn pizza-btn my-4 text-capitalize">Menu en ligne</a>
					</div>
				</div>
			</div>
		</section>
		
		<main role="main" class="container">

			<div class="banner text-center">
				<a href="#special-items" class="btn header-link primary-color"><i class="fas fa-arrow-up"></i></a>
			</div>

		</main>

		
		<?php
			require_once('./footer.php');
		?>
		
	</body>
</html>
