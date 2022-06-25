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