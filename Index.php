<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="Agência dos Mares - Comunicação Digital." />
		<meta name="keywords" content="Código Limpo, Desenvolvimento Web, HTML5, Desenvolvimento Ágil" />
		<meta name="author" content="Agência dos Mares" />
		<meta name="reply-to" content="contato@agenciadosmares.com.br" />
		<title>Mercatos Pizzaria</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/my-style.css" />	    
	</head>
	<body>
		<div class="row">
			<div class="container">

				<!-- ********* Chamada do header.PHP ********* -->
				<?php include("header.php"); ?>

				<div class="row-fluid">
					<section class="my-section">
						<article class="row">
							<div class="thumbnail">
								<h2>Pizzas</h2>
								<img src="img/Pizza.png" alt="slide - Pizzas">
							</div>
							<div class="thumbnail">
								<h2>Self Service</h2>
								<img src="img/Pizza.png" alt="slide - Pizzas">
							</div>
							<div class="thumbnail">
								<h2>Sanduiches</h2>
								<img src="img/Pizza.png" alt="slide - Pizzas">
							</div>
						</article>

						<article class="article3 row">
							<div class="span4 my-sociais">
								<h2>Siga-nos</h2>
								<a href="#"><img src="img/twiter.png" alt="Logo do Twiter" /></a>
								<a href="#"><img src="img/facebook.png" alt="Logo do Facebook" /></a>
							</div>
							<div class="span8">
								<div id="map"></div>
							</div>
						</article>
					</section>
				</div>
			</div>
		</div>

		<!-- ********* Chamada do footer.PHP ********* -->
		<?php include("footer.php"); ?>
		
	</body>
</html>