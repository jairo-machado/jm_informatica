<!DOCTYPE html>
<html lang="en">
    <?php
        include("cabecalho.php");
    ?>
<body>
<h1>Fale Conosco</h1>
    <form id="ouvidoria">
        <div>
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome"/>
        </div>
        <div>
            <label for="email">E-mail:</label><br>
            <input type="email" id="email" />
        </div>
        <div>
            <label>Tipo de Contato:</label>
            <input type="radio" id="reclamacao" name="tipo_contato" value="reclamacao">
            <label for="reclamacao">Reclamação</label>
            <input type="radio" id="elogio" name="tipo_contato" value="elogio">
            <label for="elogio">Elogio</label>
            <input type="radio" id="comercial" name="tipo_contato" value="comercial">
            <label for="comercial">Comercial</label>
        </div>
        <div>
            <label for="msg">Mensagem:</label><br>
            <textarea id="msg"></textarea>
        </div>
        <div>
            <button type="button" onclick="verificar()">Enviar sua mensagem</button>
        </div>
    </form>

</body>
<?php
    include("rodape.php"); 
?>
</html>