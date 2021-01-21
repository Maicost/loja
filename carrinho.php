<?php
include "cabecalho-produtos.php";
include "conexao.php";

session_start();
if (!isset($_SESSION['usuario'])) {
    ?>
    <script> alert('Por favor efetuar login');</script>
    <?php
    header('Location: longin.php');
} else {
    $con = new Conexao();
    $con = $con->conectar();

    $carrinho = unserialize($_COOKIE['carrinho']);

    foreach ($carrinho as $id_produto) {
        $query = "SELECT * FROM `produtos` WHERE id_produto = ?";
        $sth = $con->prepare($query);
        $sth->execute([$id_produto]);
        $result = $sth->fetch();
        ?>
        <!doctype html>
        <html>
            <body>
            <head> 
            </head>
            <form method="POST" action="finalizar.php">
                <input type="=number" value="1" id="<?php echo $id_produto; ?>">
                <h1>Produto: <?php echo'' . $result['nome_produto']; ?></h1>
                <h1>Preço: <?php echo '' . $result['preco_final']; ?></h1>
                <input type="hidden" name="produto" value="<?php echo $id_produto; ?>">
                <input type="hidden" name="acao" value="deletar">
                <button type="submit"> Deletar </button>
            </form>
        </body>
        </html>
        <?php
        echo "<br>";
    }
    ?>
    <button>
        <a href="formaPagamento.php">COMPRAR</a>
    </button>
    <?php
}   