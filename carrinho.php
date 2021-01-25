<?php
include "cabecalho-produtos.php";
include "conexao.php";

session_start();
if (!isset($_SESSION['usuario'])) {
    ?>
    <script>
        alert("Não logado, efetue o login primeiro!");
        window.location.href = "./login.php";

    </script>
    <?php
} else {
    $con = new Conexao();
    $con = $con->conectar();

    $usuario = $_SESSION['usuario'];
    $carrinho = unserialize($_COOKIE["$usuario"]);

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
                <div class="card w-100 input-group">
                    <div style="padding-left: 1%    ;" class="row input-group-prepend">
                        
                        
                            <div style="font-size: 100%;" class="col-md-4 input-group-text"> <h1>Produto: <?php echo'' . $result['nome_produto']; ?></h1></div>
                            <div style="font-size: 100%;" class="col-md-4 input-group-text"> <h1>Preço: <?php echo '' . $result['preco_final']; ?></h1> </div>
                            <input type="hidden" name="produto" value="<?php echo $id_produto; ?>">
                            <input type="hidden" name="acao" value="deletar">
                            <div style="width: 100%; height: 100%;" class="col-md-4 input-group-text" >
                                <button type="submit">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                            </form>

                    </div>
                </div>
            </form>
        </body>
        </html>
        <?php
        echo "<br>";
    }
    ?>

    <div style="align-items: flex-end">
        <button class="btn btn-primary btn-lg btn-block">
            <a style="color: black;" href="formaPagamento.php">COMPRAR</a>
        </button>
        <button class="btn btn-primary btn-lg btn-block">
            <a style="color: black;" href="index.php">VOLTAR</a>
        </button>
    </div>
    <?php
    include './rodape.php';
}   