<?php
include "cabecalho-produtos.php";
session_start();
if (!isset($_SESSION['usuario'])) {
    ?>
    <script>
        alert("Não logado, efetue o login primeiro!");
        window.location.href = "./login.php";</script>
    <?php
} else {
    $user = $_SESSION['usuario'];
    if (!unserialize($_COOKIE["$user"]) > 0) {
        ?>
        <script>
            alert("Carrinho vazio!");
            window.location.href = "./produtos.php";</script>
        <?php
    }
    ?>

    <html>
        <head>
            <title>forma de pagamento</title>
        </head>
        <body>
            <form method="POST" action="finalizar.php" >
                <input type="hidden" name="produto" value="<?php echo $_POST['produto']; ?>">
                <input type="hidden" name="quantidade" value="<?php echo $_POST['quantidade']; ?>">
                <input type="hidden" name="acao" value="comprar">
                <div class="row d-flex justify-content-center">
                    <p style="font-size: 200%; padding: 2%;"> Forma de pagamento:</p>
                </div>
                <div class="w-100 input-group">
                    <div class="w-100 input-group-prepend">
                        <div class="w-100 d-flex flex-column">
                            <div class="p-3 input-group-text row d-flex justify-content-center ">
                                <input type="radio"  id="boleto" name="formaPag" value="boleto" checked>
                                <label style="font-size: 100%;"for="boleto">Boleto</label><br>
                            </div>
                            <div class="p-3 input-group-text row d-flex justify-content-center">
                                <input type="radio" id="debMaster" name="formaPag" value="debitoMaster">
                                <label style="font-size: 100%;" for="debMaster">Cartão Debito Master</label><br>
                            </div>
                            <div class="p-3 input-group-text row d-flex justify-content-center">
                                <input type="radio" id="credMaster" name="formaPag" value="creditoMaster">
                                <label style="font-size: 100%;" for="credMaster">Cartão Crédito Master</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Finalizar</button>
            </form>
        </body>
    </html>
    <?php
}

include './rodape.php';
?>