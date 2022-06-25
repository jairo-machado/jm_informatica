<?php
    session_start();
    session_unset();
    /*
    echo "<br>";
    //setcookie("user", "", time()-3600);
    echo "<p>".$_SESSION["nome_usuario"]."</p>";
    echo "<p>".$_SESSION["cod_usuario"]."</p>";
    echo "<p>".$_SESSION["menu_func"]."</p>";
    unset($_SESSION["cod_usuario"]);
    echo '<br><br><br><br><br><a href="index.php">Index</a>';
    */
    header("location: index.php");
?>