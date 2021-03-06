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
                            <h5 class="text-center lead mb-2">Identificação</h5>
                            <div class="progress mb-5">
                                <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <?php if (isset($_GET['error']) && $_GET['error'] == 1) { ?>
                                <div class="d-flex justify-content-center mb-5">
                                    <small class="text-danger">Há campos que não foram preenchidos corretamente!</small>
                                </div>
                            <?php } ?>
                            <form method="POST" action="cadastrar2.php">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nameInput" aria-describedby="nameInput" placeholder="nome" name="nome">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="CPFInput" aria-describedby="CPFInput" placeholder="CPF" maxlength="11" name="CPF">
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" id="dataInput" name="data_nascimento" placeholder="ddmmaaaa">
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