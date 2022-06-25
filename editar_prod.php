<?php
echo '<!DOCTYPE html>
    <html lang="en">';
    include("cabecalho.php");
echo "<body>";
    $teste = $_POST["produto"];
    $conexao = mysqli_connect("localhost", $_SESSION["login"], $_SESSION["senha"]);
    mysqli_select_db($conexao, "jminformatica");
    $resultado = mysqli_query($conexao, "select * from produtos where cod_produto=".$teste);
    $linha = mysqli_fetch_object($resultado);
echo '<div class="destaque">
        <form class="forms" name="login" action="atualizar_prod.php" method="post"> 
            <h1>Cadastro de Produtos</h1>
            <div class="forms">
                <div>
                    <label for="nome" >Nome do produto:</label>
                </div>
                <div>
                    <input class="form_input" type="text" id="nome" name="nome" value='.$linha->nome.'
                    />
                </div>
            </div>
            <div class="forms">
                <div>
                    <label for="preco">Preço:</label>
                </div>
                <div>
                    <input class="form_input" type="numeric" id="preco" name="preco" value='.$linha->preco.'
                    />
                </div>
            </div>
            <div class="forms">
                <div>
                    <label for="endereco">Endereço da imagem:</label>
                </div>
                <div>
                    <input class="form_input" type="text" id="endereco" name="endereco" value='.$linha->src_imagem.'
                    />
                </div>
            </div>
            <div class="forms">
                <div>
                    <label for="destaque">Produto em Destaque?</label>
                </div>
                <div>
                    <input class="form_input" list="bool_destaque" type="datalist" id="destaque" name="destaque" value='.$linha->destaque.'
                    />
                    <datalist id="bool_destaque">
                        <option value="1" label="Sim">
                        <option value="0" label="Não">
                    </datalist>
            </div>
            <div>
                <button type="submit" name="produto" value='.$linha->cod_produto.'>Atualizar</button>
            </div>
        </form>
    </div>
</body>';

include("rodape.php");

echo "</html>"
?>
