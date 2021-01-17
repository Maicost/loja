	<?php 
		include "cabecalho-produtos.php";
		include "conexao.php";

		$conexao = new Conexao();
		$conexao = $conexao->conectar();

		if(isset($_GET['item'])) {
			$id_produto = $_GET['item'];

			$query = "select 
					* 
				 from 
				 	produtos
				 inner join
					imagens on produtos.id_imagem = imagens.id_imagem
				 where 
					produtos.id_produto = $id_produto;";

		}else {
			$categoria = $_GET['cat'];

			$query = "select 
					* 
				 from 
				 	produtos
				 inner join
					imagens on produtos.id_imagem = imagens.id_imagem
				 where 
					categoria = $categoria;";
		}

		$stmt = $conexao->prepare($query);
		$stmt->execute();
		$produtos = $stmt->fetchAll(PDO::FETCH_OBJ);

	?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h5 class="mt-5 mb-5 ml-5 text-center"><strong><?php echo $produtos[0]->nome_produto ?></strong></h5>
					<div class="d-flex justify-content-center">
						<img src="produtos/<?php echo $produtos[0]->nome_imagem ?>">
					</div>
					<h5 class="mt-5 mb-5 ml-5 text-center"><strong>Descrição</strong></h5>
					<pre style="font-size: 14px;overflow-y: hidden" class="mb-5">
						<?php echo $produtos[0]->descricao ?>
					</pre>
				</div>
				<div class="col-md-4">
					<?php if($produtos[0]->preco_final > 100) { ?>
						<span class="text-success" style="margin-left: 40%">
							<i class="fal fa-truck mt-5 mb-5 mr-2"></i> Frete Grátis
						</span>
					<?php } else { ?>
						<h5 style="color: #41295a;margin-left: 50%; font-size: 36px;" class="mt-5 mb-5"><strong><?php echo 'R$ ' . $produtos[0]->preco_final ?></strong></h5>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>