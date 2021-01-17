		<?php 
			require_once("cabecalho-index.php");
		?>

		<main style="background-color: #41295a">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<h1 class="text-white text-center mt-5 display-4">E-SHOP. Seu comércio online de eletrônicos e informática</h1>
						<div class="d-flex justify-content-center">
							<a href="produtos.php" class="btn btn-outline-light text-uppercase mt-5">conheça</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="d-flex justify-content-center pb-5">
							<img src="imagens/1027.png" class="img-fluid" alt="banner-principal">
						</div>
					</div>
				</div>
			</div>
		</main>

		<section id="newsletter">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="text-center text-white lead mt-5 mb-5">Receba nossas promoções e atualizações</h3>
					</div>
					<div class="col-md-12">
						<div class="d-flex justify-content-center">
							<div style="width: 50%">
								<form class="pb-5">
									<div class="input-group">
		        						<input type="email" class="form-control" id="nw-email" placeholder="digite seu email">
		        						<div class="input-group-prepend">
	          								<button class="input-group-text" id="btn-search" type="submit">
	          									<i class="fal fa-envelope mr-1"></i>
	          									Enviar
	          								</button>
	        							</div>
		      						</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php
			require_once("rodape.php");
		?>

	</body>