<?php

include "cabecalho-produtos.php";
include "conexao.php";

$con = new Conexao();
$con = $con->conectar();

$carrinho = unserialize($_COOKIE['carrinho']);

foreach ($carrinho as $id_produto){
    $query = "SELECT * FROM `produtos` WHERE id_produto = ?";
    $sth = $con->prepare($query);
    $sth->execute([$id_produto]);
    $result = $sth->fetch();
    echo " Nome: " .$result['nome_produto'];
    echo " Preço: ".$result['preco_final'];
    ?>
    <!doctype html>
    <html>
        <body>
        <header> 
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        </header>
            <input type="=number" value="1">
            <button id="<?php echo $id_produto; ?>">
                Deletar
                <script>
                    //captura id do botão clicado para deletar
                    $("button").click(function(){
                     var t = $(this).attr('id');
                     deletarProduto();
                    });
                </script>
            </button>
        </body>
    </html>
<?php
    echo "<br>";
    
    function deletarProduto(){
        
    }
}