<?php
    echo '<div class="menu_logar">';
    if(isset($_SESSION["user"])) {
        //echo "Usuário: " . $_COOKIE["user"];
        echo '<div class="lolnao"> Usuário: ' . $_SESSION["user"] .  session_id() . '<\div>';
        echo '<div class="lolnao"><a id="log" href="">Logoff</a></div>';
    }else{
        echo '<div class="lolnao"><a id="log" href="tl_login.php">Logar</a></div>';
    }
    '</div>'
?>

