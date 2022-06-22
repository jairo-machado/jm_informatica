<!DOCTYPE html>
<html lang="en">
    <?php
        include("cabecalho.php");
    ?>
<body>
<div class="destaque">
		<h1>Produtos em Destaque:</h1>
        <div class="tabela">
            <?php 
                include("exibe_produto.php")
            ?>
        </div>
</body>
    <?php
        include("rodape.php");
    ?>
</html>

<!--
            <div class="quadrado">
                <div class="imagem"><img class="produtos" src="./Imagens/Produtos/SSD/ssd_kingston.jpg" alt="Foto SSD"></div>
                <div class="lol"><p>SSD Kingston</p></div>
                <div class="add_to"><a href="">Adicionar ao Carrinho</a></div>
            </div>
            <div class="quadrado">
                <div class="imagem"><img class="produtos" src="./Imagens/Produtos/Fone_ouvido/fdo_tranya_t20.jpg" alt="Foto Fone de Ouvido Bluetooth"></div>
                <div class="lol"><p>Fone de Ouvido Bluetooth Tranya 20</p></div>
                <div class="add_to"><a href="">Adicionar ao Carrinho</a></div>
            </div>
            <div class="quadrado">
                <div class="imagem"><img class="produtos" src="./Imagens/Produtos/Cx_som/cxs_multilaser.jpg" alt="Foto Caixa de Som"></div>
                <div class="lol"><p>Caixa de Som com Subwoofer Multillaser</p></div>
                <div class="add_to"><a href="">Adicionar ao Carrinho</a></div>
            </div>
        </div>
-->