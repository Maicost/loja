<?php
  require_once "config.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<!--General MetaTags-->
    	<meta name="description" content="E-commerce Programacao web">
    	<meta name="keywords" content="Loja, e-commerce, programacao, TI">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<!--Bootstrap CSS-->
    	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    	<!--My CSS-->
    	<link rel="stylesheet" type="text/css" href="css/estilo.css">
    	<link rel="stylesheet" type="text/css" href="css/links-icones.css">
    	<link rel="stylesheet" type="text/css" href="css/dropdown.css">
    	<link rel="stylesheet" type="text/css" href="css/rodape.css">
    	<link rel="stylesheet" type="text/css" href="css/media_query.css">
    	<link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-32x32.png">
    	<script type="text/javascript" src="js/dropdown.js"></script>
    	<!--Font Awesome local-->
        <link rel="stylesheet" type="text/css" href="font/css/all.css">
    	<!--JQuery-->
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js" integrity="sha512-1lagjLfnC1I0iqH9plHYIUq3vDMfjhZsLy9elfK89RBcpcRcx4l+kRJBSnHh2Mh6kLxRHoObD1M5UTUbgFy6nA==" crossorigin="anonymous"></script>
		<title><?php echo $titulo ?></title>
	</head>
	<body>
		<header>
			<nav>
				<div class="container-fluid">
					<div class="row">
					<!--DEFINIÇÕES DE LAYOUT PARA DISPOSITIVOS PEQUENOS-->
						<!--MENU DROPDOWN-->
						<div class="col-2 col-sm-2" id="sm-menu-dropdown">
							<div class="d-flex justify-content-center mt-1">
								<div id="hamburguer" style="margin-top: 0">
									<div class="menu-overlay"></div>
									<a href="#" class="menu-open">
  										<i class="fal fa-bars text-light fa-2x mt-2"></i>
									</a>
									<div class="side-menu-wrapper">
										<a href="#" class="menu-close">×</a>
										<ul>
											<li style="margin: 15px 0">
												<img src="imagens/logo-branco.png" width="150">
											</li>
											<li><a href="produto.php?cat=armazenamento">Armazenamento</a></li>
											<li><a href="produto.php?cat=memorias" >Memórias</a></li>
											<li><a href="produto.php?cat=pendrives" >Pendrives</a></li>
											<li><a href="produto.php?cat=placa_video" >Placa de vídeo</a></li>
				  							<li><a href="produto.php?cat=processadores" >Processadores</a></li>
										</ul>
										<div class="d-flex justify-content-center" style="margin-top: -100px;margin-left: -55px;">
											<a href="http://www.facebook.com" title="facebook" target="_blank">
												<i class="fab fa-facebook fa-2x"></i>
											</a>
											<a href="http://www.instagram.com" title="instagram" target="_blank">
												<i class="fab fa-instagram fa-2x ml-3 mr-3"></i>
											</a>
											<a href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo $whatsapp ?>" target="_blank">
												<i class="fab fa-whatsapp fa-2x"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!--LOGO-->
						<div class="col-6 col-sm-6" id="sm-logo">
							<div class="d-flex justify-content-center mb-2 mt-2">
								<a href="produtos.php">
									<img src="imagens/logo-branco.png" width="150">
								</a>
							</div>
						</div>

						<!--BOTÃO DO CARRINHO-->
						<div class="col-2 col-sm-2" id="sm-cart">
							<div class="d-flex justify-content-center mt-4">
								<a href="carrinho.php">
									<i class="fal fa-shopping-cart text-light"></i>
								</a>
							</div>
						</div>

						<!--BOTÃO DE LOGIN-->
						<div class="col-2 col-sm-2" id="sm-login">
							<div class="d-flex justify-content-center mt-4">
								<a href="login.php">
									<i class="fal fa-user text-light"></i>
								</a>
							</div>
						</div>

						<!--BARRA DE PESQUISA-->
						<div class="col-12 col-sm-12 pb-2" id="sm-search">
							<div class="d-flex justify-content-center">
								<div style="width: 100%">
									<form method="GET" action="produtos.php">
		    							<div class="input-group">
		        							<input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Busque seus produtos" name="busca">
		        							<div class="input-group-prepend">
	          									<button class="input-group-text" type="submit" style="border: none;background-color: #fff">
	          										<i class="fal fa-search icon"></i>
	          									</button>
	        								</div>
		      							</div>
	      							</form>
								</div>
							</div>
						</div>
					<!--FIM DOS DISPOSITIVOS PEQUENOS-->

					<!--DEFINIÇÃO DE LAYOUT PARA DISPOSITIVOS MEDIOS E GRANDES-->
						<!--AREA DE MENSAGEM
						<div class="col-md-12 col-lg-12 pt-1 pb-1" style="background-color: #37155a" id="topo">
							<div class="container">
								<div class="row">
									<div class="col-md-8 col-lg-8">
										<h4 class="text-center">Frete grátis em compras acima de R$ 150,00</h4>
									</div>
									<div class="col-md-4 col-lg-4">
										<div class="d-flex justify-content-center mt-1">
											<a href="http://www.facebook.com" title="facebook" target="_blank">
												<i class="fab fa-facebook text-white"></i>
											</a>
											<a href="http://www.instagram.com" title="instagram" target="_blank">
												<i class="fab fa-instagram text-white ml-3 mr-3"></i>
											</a>
											<a href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo $whatsapp ?>" target="_blank" title="whatsapp">
												<i class="fab fa-whatsapp text-white"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>-->

						<!--LOGO-->
						<div class="col-md-3 col-lg-3" id="md-logo">
							<div class="d-flex justify-content-center mt-3">
								<a href="produtos.php">
									<img src="imagens/logo-branco.png" width="150">
								</a>
							</div>
						</div>

						<!--MENU DROPDOWN-->
						<div class="col-md-1 col-lg-1" id="md-menu-dropdown">
							<div class="d-flex justify-content-center mt-3">
								<div class="btn-group">
  									<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    									<i class="fal fa-bars text-light fa-2x"></i>
  									</button>
  									<div class="dropdown-menu dropdown-menu-right">
    									<a class="dropdown-item btn">Armazenamento</a>
    									<a class="dropdown-item btn">Memórias</a>
    									<a class="dropdown-item btn">Placas de vídeo</a>
    									<a class="dropdown-item btn">Pendrives</a>
    									<a class="dropdown-item btn">Processadores</a>
  									</div>
								</div>
							</div>
						</div>


						<!--BARRA DE PESQUISA-->
						<div class="col-md-5 col-lg-5" id="md-search">
							<div class="d-flex justify-content-center mt-3">
								<div style="width: 100%">
									<form method="GET" action="produtos.php">
		    							<div class="input-group">
		        							<input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Busque seu produtos" name="busca">
		        							<div class="input-group-prepend">
	          									<button class="input-group-text" id="btn-search" type="submit" style="border: none;background-color: #fff">
	          										<i class="fal fa-search mr-2 icon"></i>
	          									</button>
	        								</div>
		      							</div>
	      							</form>
								</div>
							</div>
						</div>

						<!--BOTÕES DE CARRINHO E LOGIN-->
						<div class="col-md-3 col-lg-3" id="md-cart_login">
							<div class="d-flex justify-content-center mt-3">
								<a href="login.php" class="nav-link text-light">
									<i class="fal fa-user text-light mr-1"></i>
									Entrar
								</a>
								<a href="carrinho.php" class="nav-link">
									<i class="fal fa-shopping-cart text-light ml-3"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</header>

		<script type="text/javascript" src="js/dropdown.js"></script>

		<!--JQuery, Popper, Bjs
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		-->