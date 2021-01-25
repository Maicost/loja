<?php

try {
    include "conexao.php";
    session_start();
    $con = new Conexao();
    $con = $con->conectar();

    $id_produto = "id_produto"; //id dos produtos na tabela produtos

    switch ($_POST['acao']) {
        case 'comprar':
            switch ($_POST['formaPag']) {
                case 'boleto':
                    session_start();
                    $usuario = $_SESSION['usuario'];
                    $carrinho = unserialize($_COOKIE["$usuario"]);
                    foreach ($carrinho as $index => $produto) {
                        $count = 0;
                        foreach ($carrinho as $ind => $prod) {
                            if ($produto == $prod) {
                                $count++;
                                unset($carrinho[$ind]);
                            }
                        }

                        $sql = "SELECT * FROM produtos WHERE $id_produto = $produto";
                        $sth = $con->prepare($sql);
                        $sth->execute();
                        $resultProduto = $sth->fetch(PDO::FETCH_OBJ);

                        session_start();
                        $nome = $_SESSION['usuario'];
                        $sql = "SELECT cpf FROM clientes WHERE nome = \"$nome\"";
                        $sth = $con->prepare($sql);
                        $sth->execute();
                        $resultUsuario = $sth->fetch(PDO::FETCH_OBJ);

                        if ($count > 0) {
                            $status = "pendente";
                            $forma_pagamento = "boleto";
                            $sql = "INSERT INTO `pedidos` (`id_pedido`, `id_cliente`, `id_produto`, `quantidade_prod`, `status`, `forma_pagamento`) "
                                    . "VALUES (NULL, $resultUsuario->cpf, $resultProduto->id_produto, $count, \"$status\", \"$forma_pagamento\")";

                            $sth = $con->prepare($sql);
                            $sth->execute();
                        }
                    }
                    unset($_COOKIE[$usuario]);
                    setcookie($usuario, null, -1);
                    header("Location: index.php");
                    break;

                case 'debitoMaster':
                    session_start();
                    $usuario = $_SESSION['usuario'];
                    $carrinho = unserialize($_COOKIE["$usuario"]);
                    foreach ($carrinho as $index => $produto) {
                        $count = 0;
                        foreach ($carrinho as $ind => $prod) {
                            if ($produto == $prod) {
                                $count++;
                                unset($carrinho[$ind]);
                            }
                        }

                        $sql = "SELECT * FROM produtos WHERE $id_produto = $produto";
                        $sth = $con->prepare($sql);
                        $sth->execute();
                        $resultProduto = $sth->fetch(PDO::FETCH_OBJ);

                        session_start();
                        $nome = $_SESSION['usuario'];
                        $sql = "SELECT cpf FROM clientes WHERE nome = \"$nome\"";
                        $sth = $con->prepare($sql);
                        $sth->execute();
                        $resultUsuario = $sth->fetch(PDO::FETCH_OBJ);

                        if ($count > 0) {
                            $status = "pendente";
                            $forma_pagamento = "debito_master";
                            $sql = "INSERT INTO `pedidos` (`id_pedido`, `id_cliente`, `id_produto`, `quantidade_prod`, `status`, `forma_pagamento`) "
                                    . "VALUES (NULL, $resultUsuario->cpf, $resultProduto->id_produto, $count, \"$status\", \"$forma_pagamento\")";

                            $sth = $con->prepare($sql);
                            $sth->execute();
                        }
                    }
                    unset($_COOKIE[$usuario]);
                    setcookie($usuario, null, -1);
                    header("Location: index.php");
                    break;
                case 'creditoMaster':
                                        session_start();
                    $usuario = $_SESSION['usuario'];
                    $carrinho = unserialize($_COOKIE["$usuario"]);
                    foreach ($carrinho as $index => $produto) {
                        $count = 0;
                        foreach ($carrinho as $ind => $prod) {
                            if ($produto == $prod) {
                                $count++;
                                unset($carrinho[$ind]);
                            }
                        }

                        $sql = "SELECT * FROM produtos WHERE $id_produto = $produto";
                        $sth = $con->prepare($sql);
                        $sth->execute();
                        $resultProduto = $sth->fetch(PDO::FETCH_OBJ);

                        session_start();
                        $nome = $_SESSION['usuario'];
                        $sql = "SELECT cpf FROM clientes WHERE nome = \"$nome\"";
                        $sth = $con->prepare($sql);
                        $sth->execute();
                        $resultUsuario = $sth->fetch(PDO::FETCH_OBJ);

                        if ($count > 0) {
                            $status = "pendente";
                            $forma_pagamento = "credito_master";
                            $sql = "INSERT INTO `pedidos` (`id_pedido`, `id_cliente`, `id_produto`, `quantidade_prod`, `status`, `forma_pagamento`) "
                                    . "VALUES (NULL, $resultUsuario->cpf, $resultProduto->id_produto, $count, \"$status\", \"$forma_pagamento\")";

                            $sth = $con->prepare($sql);
                            $sth->execute();
                        }
                    }
                    unset($_COOKIE[$usuario]);
                    setcookie($usuario, null, -1);
                    header("Location: index.php");
                    break;
            }
            break;
        case 'deletar':
            $usuario = $_SESSION['usuario'];
            $carrinho = unserialize($_COOKIE["$usuario"]);
            $count = 0;
            foreach ($carrinho as $index => $produto) {
                $count++;
                if ($produto == $_POST['produto']) {
                    unset($carrinho[$index]);
                }
                setcookie($usuario, serialize($carrinho), time() + (86400 * 7));
                header('Location: carrinho.php');
            }
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
                    session_start();
                    $usuario = $_SESSION['usuario'];
                    if (isset($_COOKIE["$usuario"])) {
                        $carrinho = unserialize($_COOKIE["$usuario"]);
                        $carrinho[] = $_GET['item'];
                        setcookie($usuario, serialize($carrinho), time() + (86400 * 7));
                        header('Location: carrinho.php');
                    } else {
                        $carrinho[] = $_GET['item'];
                        setcookie($usuario, serialize($carrinho), time() + (86400 * 7));
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