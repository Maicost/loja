<?php
include "cabecalho-produtos.php";
?>

<section>
    <div class="container mt-5">
        <div class="row">

            <?php
            include "conexao.php";

            $conexao = new Conexao();
            $conexao = $conexao->conectar();

            if (!isset($_GET['busca'])) {
                $query = 'select * from produtos inner join '
                        . 'imagens on produtos.id_imagem = imagens.id_imagem;';
                $stmt = $conexao->prepare($query);
                $stmt->execute();
                $produtos = $stmt->fetchAll(PDO::FETCH_OBJ);
            } else {
                $pesquisa = $_GET['busca'];
                $query = "select * from	produtos inner join imagens on "
                        . "produtos.id_imagem = imagens.id_imagem where"
                        . "produtos.nome_produto like '%$pesquisa%';";

                $stmt = $conexao->prepare($query);
                //$stmt->bindValue(':?', $pesquisa);
                $stmt->execute();
                $count = $stmt->rowCount();
                $produtos = $stmt->fetchAll(PDO::FETCH_OBJ);

                if (!$count) {
                    echo "<h3 class='text-danger lead mt-5 mb-5' style='margin-left: 30%'>
				Ops! Não conseguimos encontrar sua busca :/
			</h3>";
                }
            }
            ?>

            <?php foreach ($produtos as $indice => $produto) { ?>
                <div class="col-md-4 col-sm-6 pb-5">
                    <div class="d-flex justify-content-center">
                        <a href="produto.php?item=<?php echo $produto->id_produto ?>" class="text-dark">
                            <div class="card" style="width: 17rem">
                                <img src="produtos/<?php echo $produto->nome_imagem ?>" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title lead" style="font-size: 14px"><?php echo $produto->nome_produto ?></h5>
                                    <h6><strong><?php echo 'R$' . $produto->preco_final ?></strong></h6>
                                    <a href="finalizar.php?item=<?php echo $produto->id_produto;?>&acao=inProdCar">
                                        <i class="fal fa-shopping-cart text-dark mt-3"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
<?php } ?>
        </div>
    </div>
</section>

<?php
require_once("rodape.php");
?>