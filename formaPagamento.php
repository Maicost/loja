<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    ?>
    <script> alert('Por favor efetuar login');</script>
    <?php
    header('Location: longin.php');
} else {
    ?>

    <html>
        <head>
            <title>forma de pagamento</title>
        </head>
        <body>
            <form method="POST" action="finalizar.php">
                <input type="hidden" name="acao" value="comprar">
                <p>Forma de pagamento:</p>
                <input type="radio" id="boleto" name="formaPag" value="boleto">
                <label for="boleto">Boleto</label><br>
                <input type="radio" id="debMaster" name="formaPag" value="debitoMaster">
                <label for="debMaster">Cartão Debito Master</label><br>
                <input type="radio" id="credMaster" name="formaPag" value="creditoMaster">
                <label for="credMaster">Cartão Crédito Master</label>
                <button type="submit">Finalizar</button>
            </form>
        </body>
    </html>
    <?php
}
?>