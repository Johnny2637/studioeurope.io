<?php
session_start();
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">

		<title>image</title>

		<!-- Bootstrap core CSS -->
        <link href="dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="dist/css/main.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="starter-template.css" rel="stylesheet">
	    <script src="dist/js/fontawesome-all.js"></script>
		<link href="dist/popup/magnific-popup.css" rel="stylesheet">
	</head>

	<body data-spy="scroll" data-target="#navbarResponsive" class="menu">
		<!--social icons-->    
		<!--<div class="container-fluid info p-3" id="top-icons"> 
		    <div class="row">
			    <div class="col d-flex justify-content-between align-items-baseline flex-wrap">
				    <div class="info-icons p-2">
					    <a href="http://www.facebook.com" target="_blank" class="mr-2 primary-color"><i class="fab fa-facebook fa-2x"></i></a> 
                        <a href="http://www.instagram.com" target="_blank" class="mr-2 primary-color"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="http://www.twitter.com" target="_blank" class="mr-2 primary-color"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="http://www.google.com" target="_blank" class="mr-2 primary-color"><i class="fab fa-google fa-2x"></i></a>
                        <a href="http://www.youtube.com" target="_blank" class="mr-2 primary-color"><i class="fab fa-youtube fa-2x"></i></a>
                        <a href="http://www.pinterest.com" target="_blank" class="mr-2 primary-color"><i class="fab fa-pinterest fa-2x"></i></a>
                        <a href="http://www.linkedin.com" target="_blank" class="mr-2 primary-color"><i class="fab fa-linkedin fa-2x"></i></a>						
					</div>
					<h3 class="primary-color p-2 text-capitalize">Boulevard Edmond Machtens 139 Molembeek Saint Jean</h3>
				</div>
			</div>
        </div>-->
		
		
	<!--fin de social icons-->
	
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
		</div>
			<!--<div class="banner text-center">
				<a href="#special-items" class="btn header-link primary-color"><i class="fas fa-arrow-down"></i></a>
			</div>-->
	</header>
	
	<!--fin de header section-->
		<?php
			require_once("./navbar.php");
		?>
		
		
		<section class="py-5" id="special-items">
			<div class="col-9 col-sm-6 col-lg-6 mx-auto my-5">
				<div class="card">
					<h3 class="primary-color text-capitalize text-center"><i>Découvrez notre Hotel</i></h3>
				</div>
			</div>
			<div class="container my-6">
				<div class="row parent-container">
					<div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
						<div class="item-container">
							<a href="img/hotel1PR1581_opt.jpg" role="listbox">
								<img src="img/hotel1PR1581_opt.jpg" onclick="openModal(1);currentSlide(1)" class="pizza-btn img-fluid img-thumbnail item-img item-link px-3" alt="menu item" style="width:400px; height:265px">
							</a>
						</div>
					</div>
					<div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
						<div class="item-container">
							<a href="img/hotelLP1170267A_opt.jpg" role="listbox">
								<img src="img/hotelLP1170267A_opt.jpg" onclick="openModal(2);currentSlide(2)" class="pizza-btn img-fluid img-thumbnail item-img item-link px-3" alt="menu item" style="width:400px; height:265px">
							</a>
						</div>
					</div>
					<div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
						<div class="item-container">
							<a href="img/hotelLP1170282A_opt.jpg" role="listbox">
								<img src="img/hotelLP1170282A_opt.jpg" onclick="openModal(3);currentSlide(3)" class="pizza-btn img-fluid img-thumbnail item-img item-link px-3" alt="menu item" style="width:400px; height:265px">
							</a>
						</div>
					</div>
					<div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
						<div class="item-container">
							<a href="img/hotelPR1577A_opt.jpg" role="listbox">
								<img src="img/hotelPR1577A_opt.jpg" onclick="openModal(4);currentSlide(4)" class="pizza-btn img-fluid img-thumbnail item-img item-link px-3" alt="menu item" style="width:400px; height:265px">
							</a>
						</div>
					</div>
					<div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
						<div class="item-container">
							<a href="img/hotelPR1579A_opt.jpg" role="listbox">
								<img src="img/hotelPR1579A_opt.jpg" onclick="openModal(5);currentSlide(5)" class="pizza-btn img-fluid img-thumbnail item-img item-link px-3" alt="menu item" style="width:400px; height:265px">
							</a>
						</div>
					</div>
					<div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
						<div class="item-container">
							<a href="img/hotelPR1584A_opt.jpg" role="listbox">
								<img src="img/hotelPR1584A_opt.jpg" onclick="openModal(6);currentSlide(6)" class="pizza-btn img-fluid img-thumbnail item-img item-link px-3" alt="menu item" style="width:400px; height:265px">
							</a>
						</div>
					</div>
					<div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
						<div class="item-container">
							<a href="img/hotelPR1589A_opt.jpg" role="listbox">
								<img src="img/hotelPR1589A_opt.jpg" onclick="openModal(7);currentSlide(7)" class="pizza-btn img-fluid img-thumbnail item-img item-link px-3" alt="menu item" style="width:400px; height:265px">
							</a>
						</div>
					</div>
					<div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
						<div class="item-container">
							<a href="img/hotelPR1597A_opt.jpg" role="listbox">
								<img src="img/hotelPR1597A_opt.jpg" onclick="openModal(8);currentSlide(8)" class="pizza-btn img-fluid img-thumbnail item-img item-link px-3" alt="menu item" style="width:400px; height:265px">
							</a>
						</div>
					</div>
					<div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
						<div class="item-container">
							<a href="img/hotelPR1602A_opt.jpg" role="listbox">
								<img src="img/hotelPR1602B_opt.jpg" onclick="openModal(9);currentSlide(9)" class="pizza-btn img-fluid img-thumbnail item-img item-link px-3" alt="menu item" style="width:400px; height:265px">
							</a>
						</div>
					</div>
				</div>
				
			</div>
		</section>
		
		<hr/>
	
		<section id="reviews" class="py-5">
			<div id="slider" class="carousel slide" data-ride=carousel"">
				<div class="carousel-inner">
					
					<div class="carousel-item active">
						<div class="container">
							<div class="row">
								<div class="col-lg-8 mx-auto d-flex justify-content-between review-item py-3">
									<div class="align-self-center ml-3">
										<img src="img/hotel2PR1581_opt.jpg" alt="" class="rounded-circle review-img" style="width:280px; height:280px;">
										<img src="img/hotelLP1170267B_opt.jpg" onclick="openModal(1);currentSlide(1)" class="pizza-btn img-fluid img-thumbnail item-img" alt="menu item" style="width:360px; height:320px;>
									</div>
									<div class="review-text px-5">
										<h2 class="text-capitalize mb-3 primary-color"></h2>
										<p class="lead text-muted font">
										
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
			
					<div class="carousel-item">
						<div class="container">
							<div class="row">
								<div class="col-lg-8 mx-auto d-flex justify-content-between review-item py-3">
									<div class="align-self-center ml-3">
										<img src="img/hotelLP1170267B_opt.jpg" alt="" class="rounded-circle review-img" style="width:280px; height:280px;">
										<img src="img/hotelLP1170282B_opt.jpg" onclick="openModal(2);currentSlide(2)" class="pizza-btn img-fluid img-thumbnail item-img" alt="menu item" style="width:360px; height:320px;>
									</div>
									<div class="review-text px-5">
										<h2 class="text-capitalize mb-3 primary-color"></h2>
										<p class="lead text-muted font">
											
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
			
					<div class="carousel-item">
						<div class="container">
							<div class="row">
								<div class="col-lg-8 mx-auto d-flex justify-content-between review-item py-3">
									<div class="align-self-center ml-3">
										<img src="img/hotelLP1170282B_opt.jpg" alt="" class="rounded-circle review-img" style="width:280px; height:280px;">
										<img src="img/hotelPR1577B_opt.jpg" onclick="openModal(3);currentSlide(3)" class="pizza-btn img-fluid img-thumbnail item-img" alt="menu item" style="width:360px; height:320px;>
									</div>
									<div class="review-text px-5">
										<h2 class="text-capitalize mb-3 primary-color"></h2>
										<p class="lead text-muted font">

										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
			
					<div class="carousel-item">
						<div class="container">
							<div class="row">
								<div class="col-lg-8 mx-auto d-flex justify-content-between review-item py-3">
									<div class="align-self-center ml-3">
										<img src="img/hotelPR1577B_opt.jpg" alt="" class="rounded-circle review-img" style="width:280px; height:280px;">
										<img src="img/hotelPR1584B_opt.jpg" onclick="openModal(4);currentSlide(4)" class="pizza-btn img-fluid img-thumbnail item-img" alt="menu item" style="width:360px; height:320px;>
									</div>
									<div class="review-text px-5">
										<h2 class="text-capitalize mb-3 primary-color"></h2>
										<p class="lead text-muted font">
	
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
			
					<div class="carousel-item">
						<div class="container">
							<div class="row">
								<div class="col-lg-8 mx-auto d-flex justify-content-between review-item py-3">
									<div class="align-self-center ml-3">
										<img src="img/hotelPR1584B_opt.jpg" alt="" class="rounded-circle review-img" style="width:280px; height:280px;">
										<img src="img/hotelPR1589B_opt.jpg" onclick="openModal(5);currentSlide(5)" class="pizza-btn img-fluid img-thumbnail item-img" alt="menu item" style="width:360px; height:320px;>
									</div>
									<div class="review-text px-5">
										<h2 class="text-capitalize mb-3 primary-color"></h2>
										<p class="lead text-muted font">

										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="carousel-item">
						<div class="container">
							<div class="row">
								<div class="col-lg-8 mx-auto d-flex justify-content-between review-item py-3">
									<div class="align-self-center ml-3">
										<img src="img/hotelPR1589B_opt.jpg" alt="" class="rounded-circle review-img" style="width:280px; height:280px;">
										<img src="img/hotelPR1597B_opt.jpg" onclick="openModal(6);currentSlide(6)" class="pizza-btn img-fluid img-thumbnail item-img" alt="menu item" style="width:360px; height:320px;>
									</div>
									<div class="review-text px-5">
										<h2 class="text-capitalize mb-3 primary-color"></h2>
										<p class="lead text-muted font">

										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
			
					<div class="carousel-item">
						<div class="container">
							<div class="row">
								<div class="col-lg-8 mx-auto d-flex justify-content-between review-item py-3">
									<div class="align-self-center ml-3">
										<img src="img/hotelPR1597B_opt.jpg" alt="" class="rounded-circle review-img" style="width:280px; height:280px;">
										<img src="img/hotelPR11592_opt.jpg" onclick="openModal(7);currentSlide(7)" class="pizza-btn img-fluid img-thumbnail item-img" alt="menu item" style="width:360px; height:320px;>
									</div>
									<div class="review-text px-5">
										<h2 class="text-capitalize mb-3 primary-color"></h2>
										<p class="lead text-muted font">

										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="carousel-item">
						<div class="container">
							<div class="row">
								<div class="col-lg-8 mx-auto d-flex justify-content-between review-item py-3">
									<div class="align-self-center ml-3">
										<img src="img/hotelPR11592_opt.jpg" alt="" class="rounded-circle review-img" style="width:280px; height:280px;">
										<img src="img/hotel2PR1581_opt.jpg" onclick="openModal(8);currentSlide(8)" class="pizza-btn img-fluid img-thumbnail item-img" alt="menu item" style="width:320px; height:320px;>
									</div>
									<div class="review-text px-5">
										<h2 class="text-capitalize mb-3 primary-color"></h2>
										<p class="lead text-muted font">
										
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br/><br/>
					<ol class="carousel-indicators">
						<li data-target="#slider" data-slide-to="0" class="active"></li>
						<li data-target="#slider" data-slide-to="1"></li>
						<li data-target="#slider" data-slide-to="2"></li>
						<li data-target="#slider" data-slide-to="3"></li>
						<li data-target="#slider" data-slide-to="4"></li>
						<li data-target="#slider" data-slide-to="5"></li>
						<li data-target="#slider" data-slide-to="6"></li>
						<li data-target="#slider" data-slide-to="7"></li>
					</ol>
		
					<a href="#slider" class="carousel-control-prev" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a href="#slider" class="carousel-control-next" role="button" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
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
