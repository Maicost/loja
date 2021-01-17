<?php
	class Cliente {

		private $nome;
		private $cpf;
		private $data;
		private $email;
		private $telefone;
		private $rua;
		private $bairro;
		private $cep;
		private $cidade;
		private $estado;
		private $n;
		private $senha;


		public function __get($atributo) {
			return $this->$atributo;
		}

		public function __set($atributo, $valor) {
			$this->$atributo = $valor;
			return $this;
		}

	}

?>