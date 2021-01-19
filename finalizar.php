<?php

try {
//
//variaveis teste
//    $nome = "maico";
//    $cpf = "78459831035";
//    $data = "1987-04-28";
//    $email = "maico@gmail.com";
//    $telefone = "999999999";
//    $rua = "Rua 8";
//    $bairro = "centro";
//    $cep = "97190000";
//    $cidade = "Cidade dos loco";
//    $estado = "Rio Grande do Sul";
//    $n = "1234";
//    $senha = md5("123");

    include "conexao.php";
    session_start();
    $con = new Conexao();
    $con = $con->conectar();

    switch ($_POST['acao']) {
        case 'inProdCar':

            break;
        case 'login':
            $senha = md5($_POST['senha']);
            $email = $_POST['email'];
            echo "<script>alert(email: ' . $email .'||| Senha: '.$senha);<\script>";

            $query = "SELECT * FROM clientes WHERE email = ?";
            $sth = $con->prepare($query);
            $sth->execute([$email]);
            $result = $sth->fetch();
            if ($result['senha_cliente']) {
                $_SESSION['usuario'] = $result['nome'];
                header('Location: produtos.php');
            } else {
                $_SESSION['erroLogin'] = true;
                header('Location: login.php');
            }
            break;
        case 'cadastrar':
            $nome = $_POST['nome'];
            $cpf = $_POST['CPF'];
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

            $query = "SELECT * FROM clientes WHERE cpf = ? or email = ?";
            $sth = $con->prepare($query);
            $sth->execute([$cpf, $email]);
            $result = $sth->fetch();
            if (!$result) {
                $query = "INSERT INTO `clientes` (`cpf`, `nome`, `nascimento`, `email`, `telefone`, `cep`, `senha_cliente`) 
                     VALUES (?, ?, ?, ?, ?, ?, ?)";
                $sth = $con->prepare($query);
                if ($sth->execute([$cpf, $nome, $data, $email, $telefone, $cep, $senha])) {
                    header('Location: login.php');
                    unset($_POST['falha']);
                    $_POST['hasCadastrado'] = true;
                }
            } else {
                $_POST['falha'] = true;
                header('Location: login.php');
            }
            break;
        default :
            switch ($_GET['acao']) {
                case 'inProdCar':
//
//                    $query = "INSERT INTO `pedidos` (`id_pedido`, `valor_total`,"
//                            . " `quantidade`, `data_pedido`, `status_pedido`,"
//                            . " `forma_pagamento`) VALUES (NULL, '58', '1',"
//                            . " '2021-01-18', 'carrinho', 'boleto');";
//
//                    $query = "INSERT INTO pedidos (`id_pedido`, `valor_total`,"
//                            . " `quantidade`, `data_pedido`, `status_pedido`,"
//                            . " `forma_pagamento`) VALUES (NULL, ?, ?, ?, ?, ?)";
//
//                    $sth = $con->prepare(['']);
//
//                    $query = "SELECT * FROM produtos WHERE id_produto = " . $_GET['item'];
//                    $sth = $con->prepare();
//                    $sth->execute();
//                    $result->fech();
//
//                    

                    if (isset($_COOKIE['carrinho'])) {
                        $carrinho = unserialize($_COOKIE['carrinho']);
                        $carrinho[] = $_GET['item'];
                        setcookie('carrinho', serialize($carrinho), time() + (86400 * 7));
                        header('Location: carrinho.php');
                    } else {
                        $carrinho[] = $_GET['item'];
                        setcookie('carrinho', serialize($carrinho), time() + (86400 * 7));
                        header('Location: carrinho.php');
                    }

                    
                    break;
                default :
                    echo 'não deveria estar aqui, isso é um erro no switch case vacilão';
                    header('Location: index.php');
                    break;
            }
            break;
    }
} catch (Exception $e) {
    echo "Erro: " . $e;
}
