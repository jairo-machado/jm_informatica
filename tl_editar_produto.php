<?php
    include("cabecalho.php");
    $teste = $_POST["produto"];
    $conexao = mysqli_connect("localhost", $_SESSION["login"], $_SESSION["senha"]);
    mysqli_select_db($conexao, "jminformatica");
    $resultado = mysqli_query($conexao, "select * from produtos where cod_produto=".$teste);
    $linha = mysqli_fetch_object($resultado);
    echo '<div class="quadrado">
                <div class="imagem"><img class="produtos" src="' . $linha->src_imagem . '" alt="Foto SSD"></div>
                <div class="lol"><p>' . $linha->nome . '</p></div>
                <div class="rsrs"><p>R$' .$linha->preco . '</p></div>
            </div>';
    echo '<div class="botao_edit">
            <div>
                <form action="editar_prod.php" method="post">
                    <button name="produto" type="submit" value= '. $linha->cod_produto . '>Editar</button>
                </form>
            </div>
            <div>
                <form action="remover_prod.php" method="post">
                    <button name="produto" type="submit" value= '. $linha->cod_produto . '>Remover</button>
                </form>
            </div>
        </div>';
?>