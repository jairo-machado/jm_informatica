<?php
    session_start();

    $conexao = mysqli_connect("localhost", $_SESSION["login"], $_SESSION["senha"]);
    mysqli_select_db($conexao, "jminformatica");
    
    $nome = ($_POST["nome"]);
    $preco = ($_POST["preco"]);
    $endereco = ($_POST["endereco"]);
    $destaque = ($_POST["destaque"]);
    
    $sql = "INSERT INTO `produtos`
            (nome, preco, src_imagem, destaque)
            VALUES ('$nome','$preco', '$endereco', '$destaque')";

    $resultado = mysqli_query($conexao, $sql);
    header("Location: index.php");
    //echo '<a href="tl_cadastrar_prod.php">Voltar</a>';
?>