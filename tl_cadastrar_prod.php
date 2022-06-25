<!DOCTYPE html>
<html lang="en">
    <?php
        include("cabecalho.php");
    ?>
<body>
<div class="destaque">
    <form class="forms" name="login" action="cadastrar_prod.php" method="post"> 
        <h1>Cadastro de Produtos</h1>
        <div class="forms">
            <div>
                <label for="nome">Nome do produto:</label>
            </div>
            <div>
                <input class="form_input" type="text" id="nome" name="nome"/>
            </div>
        </div>
        <div class="forms">
            <div>
                <label for="preco">Preço:</label>
            </div>
            <div>
                <input class="form_input" type="numeric" id="preco" name="preco"/>
            </div>
        </div>
        <div class="forms">
            <div>
                <label for="endereco">Endereço da imagem:</label>
            </div>
            <div>
                <input class="form_input" type="text" id="endereco" name="endereco"/>
            </div>
        </div>
        <div class="forms">
            <div>
                <label for="destaque">Produto em Destaque?</label>
            </div>
            <div>
                <input class="form_input" list="bool_destaque" type="datalist" id="destaque" name="destaque"/>
                <datalist id="bool_destaque">
                    <option value="1" label="Sim">
                    <option value="0" label="Não">
                </datalist>
        </div>
        <div>
            <button type="submit" onMouseOver="verificar_campos_prod()">Cadastrar</button>
        </div>
    </form>
</body>
    <?php
        include("rodape.php");
    ?>
</html>