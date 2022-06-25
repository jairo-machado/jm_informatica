<?php
    session_start();
    $teste = $_POST["produto"];
    $conexao = mysqli_connect("localhost", $_SESSION["login"], $_SESSION["senha"]);
    mysqli_select_db($conexao, "jminformatica");
    $resultado = mysqli_query($conexao, "delete from produtos where cod_produto=".$teste);
    header("Location: produtos.php");
?>