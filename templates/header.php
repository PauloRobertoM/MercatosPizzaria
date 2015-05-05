<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="Agência dos Mares - Comunicação Digital." />
		<meta name="keywords" content="Código Limpo, Desenvolvimento Web, HTML5, Desenvolvimento Ágil" />
		<meta name="author" content="Agência dos Mares" />
		<meta name="reply-to" content="contato@agenciadosmares.com.br" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/my-style.css" />	    
	</head>
	<body>
		<div class="row-fluid">
			<header>
				<div class="span5 my-logo">
					<a href="index.php"><img src="img/Logo.png" alt="Logo - Mercatos Pizzaria" /></a>
				</div> <!-- Close DIV LOGO -->
				<div class="my-pedido">
					<p>Peça Agora</p>
					<p class="my-numero-pedido">2226-8702</p>
				</div>
				<div class="span7">
					<nav class="my-menu">
						<ul class="nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="mercatos.php">Mercatos</a></li>
							<li><a href="cardapio.php">Cardápio</a></li>
							<li><a href="contato.php">Contato</a></li>
						</ul>
					</nav>
				</div> <!-- Close DIV MENU -->
			</header> <!-- Close header -->
		</div> <!-- Close row-fluid -->

		<div class="row-fluid">
			<section class="my-section">
				<article class="article1 row">
					<div class="span8">
						<div id="my-carousel" class="carousel slide">
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="active item">
									<img class="my-slide" src="img/Pizza.png" alt="slide - Pizza">
								</div>
								<div class="item">
									<img class="my-slide" src="img/Logo.png" alt="slide - Pizza">
								</div>
								<div class="item">
									<img class="my-slide" src="img/Pizza.png" alt="slide - Pizza">
								</div>
							</div>									
						</div> <!-- Carousel -->
					</div>
					
					<div class="span4 my-promocoes">
						<p>Confira nossas</p>
						<p class="my-p-promocoes">Promoções</p>

						<div class="my-dialogo1 row">
							<div class="span2">
								<h1>01</h1>
							</div>
							<div class="span10">
								<p>lorem ipisum lorem ipisum lorem ipisum</p>
							</div>
						</div>
						<div class="my-dialogo2 row">
							<div class="span2">
								<h1>02</h1>
							</div>
							<div class="span10">
								<p>lorem ipisum lorem ipisum lorem ipisum</p>
							</div>
						</div>
						<div class="my-dialogo3 row">
							<div class="span2">
								<h1>03</h1>
							</div>
							<div class="span10">
								<p>lorem ipisum lorem ipisum lorem ipisum</p>
							</div>
						</div>
					</div>
				</article>
			</section>
		</div>

		<!-- ************ Scripts ********** -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>  		
  		<script type="text/javascript" src="js/gmaps.js"></script>
  		<script type="text/javascript" src="js/my-functios.js"></script>
  		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script>
	        $('#my-carousel').carousel({interval: 3000})
	    </script>
	</body>
</html>