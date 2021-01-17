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
        <title>E-SHOP - Login</title>
    </head>
    <body style="background-color: #41295a">
        <a href="produtos.php">
            <i class="fal fa-reply text-light fa-2x mt-2 ml-2"></i>
        </a>
        <section class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="d-flex justify-content-center">
                        <div style="width: 50%;background-color: #fff; padding: 10px">
                            <h4 class="text-center mt-5 mb-5 display-4 lead">Login</h4>
                            <form method="POST" action="finalizar.php">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email-input" aria-describedby="emailHelp" placeholder="seu email" name="email" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password-input" placeholder="senha" name="senha" value="">
                                </div>
                                <input type="hidden" name="acao" value="login">
                                <button class="text-uppercase btn mb-1" type="submit" style="width: 100%;color: #fff; background-color: #41295a">Logar</button>
                            </form>
                            <a class="text-uppercase btn mb-3" href="cadastrar1.php" style="width: 100%; border: 1px solid #000">Cadastrar</a>
                            <div class="d-flex justify-content-center">
                                <a href="" class="text-dark mb-3">Redefinir senha</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>