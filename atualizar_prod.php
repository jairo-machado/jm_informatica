<?php
    session_start();
    $teste = $_POST["produto"];
    $conexao = mysqli_connect("localhost", $_SESSION["login"], $_SESSION["senha"]);
    mysqli_select_db($conexao, "jminformatica");
    $dest = addslashes(trim($_POST["destaque"]));
    echo "".$dest."";
    $update = 'UPDATE produtos 
    SET nome ="'.$_POST["nome"].'", preco = '.$_POST["preco"].', src_imagem ="'.$_POST["endereco"].'", destaque = '.$dest.' 
    WHERE cod_produto = '.$teste.'';
    $resultado = mysqli_query($conexao, $update);
    header("Location: produtos.php");
?>

