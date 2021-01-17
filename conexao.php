<?php

class Conexao {

	private $host = 'localhost';
	private $dbname = 'loja';
	private $user = 'admin';
	private $pass = '1';

	public function conectar() {
		try {

			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);

			return $conexao;


		} catch (PDOException $e) {
			echo '<p>'.$e->getMessege().'</p>';
		}
	}
}

?>