<?php
//Validação dos dados da página cadastrar3.php
if ($_POST['rua'] == '' || $_POST['bairro'] == '' || $_POST['CEP'] == '') {
    if ($_POST['cidade'] == '' || $_POST['estado'] == '' || $_POST['numero'] == '')
        header('Location: cadastrar3.php?error=1');
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
                            <h5 class="text-center lead mb-4 text-success" style="font-size: 1.5em">Quase la, defina uma senha para a sua conta</h5>
                            <form method="POST" action="finalizar.php">
                                <input type="hidden" name="nome" value="<?php echo $_POST['nome'] ?>">
                                <input type="hidden" name="CPF" value="<?php echo $_POST['CPF'] ?>">
                                <input type="hidden" name="data_nascimento" value="<?php echo $_POST['data_nascimento'] ?>">
                                <input type="hidden" name="email" value="<?php echo $_POST['email'] ?>">
                                <input type="hidden" name="telefone" value="<?php echo $_POST['telefone'] ?>">
                                <input type="hidden" name="rua" value="<?php echo $_POST['rua'] ?>">
                                <input type="hidden" name="bairro" value="<?php echo $_POST['bairro'] ?>">
                                <input type="hidden" name="CEP" value="<?php echo $_POST['CEP'] ?>">
                                <input type="hidden" name="cidade" value="<?php echo $_POST['cidade'] ?>">
                                <input type="hidden" name="estado" value="<?php echo $_POST['estado'] ?>">
                                <input type="hidden" name="numero" value="<?php echo $_POST['numero'] ?>">
                                <input type="hidden" name="acao" value="cadastrar">
                                <div class="form-group">
                                    <input type="password" class="form-control" id="senhaInput" placeholder="********" minlength="8" name="senha">
                                </div>
                                <small class="text-danger mb-3">Defina uma senha de 8 caracteres ou mais</small>
                                <button class="text-uppercase btn mb-5 mt-3" type="submit" style="width: 100%;color: #fff; background-color: #41295a">
                                    Finalizar
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