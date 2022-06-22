<html lang="en">
<head>
    <?php
        include("cabecalho.php");
    ?>
</head>
<body>
   
    <form class="forms" name="login" action="autenticar.php" method="post">
        <h1>Tela de Login</h1>
        <div class="forms">
            <div>
                <label for="login">Login:</label>
            </div>
            <div>
                <input class="form_input" type="text" id="login"/>
            </div>
        </div>
        <div class="forms">
            <div>
                <label for="senha">Senha:</label>
            </div>
            <div>
                <input class="form_input" type="password" id="senha"/>
            </div>
        </div>
        <div>
            <button type="submit" onMouseOver="verificar_campos()">Logar</button>
        </div>
    </form>
</body>
<?php include 'rodape.php'?>
</html>

