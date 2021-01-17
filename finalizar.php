<?php
	
	$nome = $_POST['nome'];
	$cpf = $_POST['CPF'] ;
	$data = $_POST['data_nascimento'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$cep = $_POST['CEP'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$n = $_POST['numero'];
	$senha = md5($_POST['senha']);

	header('Location: login.php');


?>