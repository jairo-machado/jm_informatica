<head>
<meta charset="utf-8">
	<?php
		session_start();  
	?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>JM Informática (Não oficial)</title>
	<link rel="stylesheet" href="style.css">
	<scripttype="text/javascript"src="./script.js"></script>
	<script src="./script.js"></script>
	<div class="logo">
		<img class="logo_pagina" src="./Imagens/Logo_icones/imagem_logo.png">
		<?php include("menu_logar.php")?>
	</div>
	<div class="menu_naveg">
		<a href="index.php" class="botao">Página Inicial</a>
		<a href="produtos.php" class="botao">Produtos</a>
		<a href="carrinho.php" class="botao">Carrinho</a>
		<a href="ouvidoria.php" class="botao">Fale Conosco</a>
		<?php
		if(isset($_SESSION["menu_func"])){
			echo '<a href="tl_cadastrar_prod.php" class="botao">Cadastrar Produtos</a>
				  <a href="cadastrar_user.php" class="botao">Cadastrar Usuários</a>';
		}
		?>
	</div>
</head>