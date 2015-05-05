<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="Agência dos Mares - Comunicação Digital." />
		<meta name="keywords" content="Código Limpo, Desenvolvimento Web, HTML5, Desenvolvimento Ágil" />
		<meta name="author" content="Agência dos Mares" />
		<meta name="reply-to" content="contato@agenciadosmares.com.br" />
		<title>Contato</title>
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
						<article class="article-contato row">
							<h2>Fale Conosco!</h2>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.</p>
							<div class="my-contato-form">
								<form action="#" method="post">
									<label for="nome">Nome: </label>
									<input type="text" name="nome" id="nome" />
									
									<label for="email">E-mail: </label>
									<input type="text" name="email" id="email" />
									
									<label for="tel">Telefone: </label>
									<input type="tel" name="tel" id="tel" />
									<em>(xx) xxxx-xxxx</em>

									<label for="assunto">Assunto: </label>
									<input type="text" name="assunto" id="assunto" />

									<label for="mensagem">Mensagem: </label>
									<textarea name="mensagem" cols="40" rows="10" id="mensagem"></textarea>

									<input type="submit" name="enviar" value="Enviar" class="botao" onclick="alert('Dados enviados com sucesso!')" />
									<input type="reset" name="limpar" value="Limpar" class="botao" onclick="limparForm()" />
								</form>
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