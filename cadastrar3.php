<?php
	
  if($_POST['email'] == '' || strlen($_POST['telefone']) < 11 || $_POST['telefone'] == '') {
		header('Location: cadastrar2.php?error=1');
	}

?>
<!DOCTYPE html>
<html>
	<head lang="pt_br">
		<meta charset="utf-8">
		<meta name="description" content="E-commerce Programacao web">
    	<meta name="keywords" content="Loja, e-commerce, programacao, TI">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="css/links-icones.css">
    	<link rel="stylesheet" type="text/css" href="css/estilo.css">
    	<link rel="stylesheet" type="text/css" href="font/css/all.css">
		<title>E-SHOP - Cadastrar</title>
	</head>
	<body style="background-color: #41295a">
		<a href="login.php">
			<i class="fal fa-reply text-light fa-2x mt-2 ml-2"></i>
		</a>
		<section class="container">
			<div class="row">
				<div class="col-md-12 mt-5">
					<div class="d-flex justify-content-center">
						<div style="width: 50%;background-color: #fff; padding: 10px" class="mb-5 box-shadow">
							<h4 class="text-center mt-5 mb-5 display-4">Cadastro</h4>
							<h5 class="text-center lead mb-2">Endereço</h5>
							<div class="progress mb-5">
  								<div class="progress-bar" role="progressbar" style="width: 99%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="99"></div>
							</div>
							<form method="POST" action="cadastrar4.php">
								<input type="hidden" name="nome" value="<?php echo $_POST['nome'] ?>">
								<input type="hidden" name="CPF" value="<?php echo $_POST['CPF'] ?>">
								<input type="hidden" name="data_nascimento" value="<?php echo $_POST['data_nascimento'] ?>">
								<input type="hidden" name="email" value="<?php echo $_POST['email'] ?>">
								<input type="hidden" name="telefone" value="<?php echo $_POST['telefone'] ?>">
								<div class="form-group">
    								<input type="text" class="form-control" id="ruaInput" aria-describedby="ruaInput" placeholder="rua" name="rua">
  								</div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="bairro" id="bairroInput" name="bairro">
                                </div>
  								<div class="row">
    								<div class="col">
      									<input type="text" class="form-control" id="numeroInput" aria-describedby="numeroInput" placeholder="número" name="numero">
    								</div>
    								<div class="col">
      									<input type="text" class="form-control" placeholder="CEP" id="CEPInput" name="CEP">
    								</div>
  								</div>
  								<div class="row">
    								<div class="col mt-1 mb-2">
      									<input type="text" class="form-control" placeholder="cidade" id="cidadeInput" name="cidade">
    								</div>
    								<div class="col mt-1 mb-2">
      									<input type="text" class="form-control" placeholder="estado" id="estadoInput" name="estado">
    								</div>
  								</div>
  								<button class="text-uppercase btn mb-5" type="submit" style="width: 100%;color: #fff; background-color: #41295a">
									Prosseguir
									<i class="fal fa-chevron-double-right text-light"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>