<?php

$query = "select produtos.nome_produto, produtos.preco_final, imagens.nome_imagem
    from produtos inner join imagens on produtos.id_imagem = imagens.id_imagem
    limit 10;";
$subquery = "select produtos.nome_produto, produtos.preco_final, imagens.nome_imagem
    from produtos inner join imagens on produtos.id_imagem = imagens.id_imagem;";

$stmt = $conexao->prepare($query);
$stmt->execute();
$produtos = $stmt->fetchAll(PDO::FETCH_OBJ);

$stmt2 = $conexao->prepare($subquery);
$stmt2->execute();
$count = $stmt2->rowCount();

$i = 1;
$calculate = ceil(($count / 100) * 10);
if (isset($_GET['page']) == $i) {
    $url = $_GET['page'];
    $mody = $url * 10 - 10;
    $subquery = "select produtos.nome_produto, produtos.preco_final, imagens.nome_imagem
        from produtos inner join imagens on produtos.id_imagem = imagens.id_imagem
        limit 10 OFFSET $mody;";
    $stmt2 = $conexao->prepare($subquery);
    $stmt2->execute();
}
?>