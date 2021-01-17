<?php
	//Busca os produtos no banco de dados
	class BuscaProdutos {
		private $conexao;

		public function __construct($conexao) {
			$this->conexao = $conexao->conectar();
		}

		public function recuperarProdutos() {
			$query = 'select 
						produtos.nome_produto, produtos.preco_final, imagens.nome_imagem
					 from 
					 	produtos
					 inner join
					 	imagens on produtos.id_imagem = imagens.id_imagem;';

			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}
	}
?> 
	

