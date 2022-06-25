<?php
    echo '<div class="menu_logar">';
    if(isset($_SESSION["nome_usuario"])) {
        //echo "Usuário: " . $_COOKIE["user"];
        echo '<div class="lolnao"> Usuário: ' . $_SESSION["nome_usuario"] .'</div>';
        echo '<div class="lolnao"><a id="log" href="tl_logoff.php">Logoff</a></div>';
    }else{
        echo '<div class="lolnao"><a id="log" href="tl_login.php">Logar</a></div>';
    }
    echo '</div>'
?>

