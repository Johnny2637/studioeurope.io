<html>

	<head>
		<title>
			Barre de navigation
		</title>
		<script src="dist/js/vue.js"></script>
		<link href="dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="dist/css/main.css" rel="stylesheet">
	</head>
	
		<nav class="navbar navbar-expand-lg aqua fixed-top">
			<a class="navbar-brand" href=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>

				<div class="collapse navbar-collapse col-4 col-md-4 col-md-10 mx-auto" id="navbarsExampleDefault">
					
						<ul class="navbar-nav mr-auto" style="border-radius:5px; align-items:center;">
							<li class="nav-item active" style="margin-right:80px;">
								<a class="nav-link btn btn-outline-info" href="index.php"><span class="fas fa-home fa-lg"></span>  Accueil<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item" style="margin-right:80px;">
								<a class="nav-link btn-outline-info" href="image.php"><span class="fas fa-image fa-lg"></span>  Images</a>
							</li>
							<li class="nav-item" style="margin-right:80px;">
								<a class="nav-link btn-outline-info" href="contact.php"><span class="fas fa-info-circle fa-lg"></span>  Contact</a>
							</li>
						</ul>
						
						<form class="form-inline my-2 my-lg-0">	
							<ul class="navbar-nav mr-auto">	
								<li class="nav-item" id="google_translate_element" style="margin-right:40px;">
									<span class="fas fa-language"><a class="nav-link btn-outline-info"></a></span>
								</li>
							</ul>
						</form>
						<!--<form class="form-inline my-2 my-lg-0">
							<ul class="navbar-nav mr-auto"  id="google_translate_element">
								<li class="nav-item en first" style="margin-right:25px;">
									<a class="nav-link btn-outline-primary language-link" href="/en/" xml:lang="en">EN <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item active" style="margin-right:25px;">
									<a class="nav-link btn btn-outline-primary language-link active" href="/fr/" xml:lang="fr">FR <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item nl last" style="margin-right:25px;">
									<a class="nav-link btn-outline-primary language-link" href="/nl/" xml:lang="nl">NL <span class="sr-only">(current)</span></a>
								</li>
							</ul>
						</form>-->
						
				</div>
				<span>
					<img src="img/img/hotelpourtous.jpg" class="img-thumbnail" id="header1" style="width:60px; height:60px; margin-right:80px;" /> 
				</span>
		</nav>
		
		<script type="text/javascript">
		
			function googleTranslateElementInit(){
				new google.translate.TranslateElement({ pageLanguage: 'fr' }, 'google_translate_element');
			}
		
		</script>
		
		<script type="text/javascript" src="//translate.google.fr/translate_a/element.js?cb=googleTranslateElementInit"></script>
	</body>
</html>