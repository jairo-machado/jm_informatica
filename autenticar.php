<?php 

include "conecta_bd.php";

session_start();

//$login = isset($_POST["login"]) ? mysql_real_escape_string($_POST["login"]) : FALSE;
//$senha = isset($_POST["senha"]) ? $_POST["senha"] : FALSE;
$login = isset($_POST["login"]) ? addslashes(trim($_POST["login"])) : FALSE;
$senha = isset($_POST["senha"]) ? trim($_POST["senha"]) : FALSE;

$consulta = "SELECT * 
FROM usuarios
WHERE login =  '$login' ";

$resultado_id = mysqli_query($conexao, $consulta);
$total = mysqli_num_rows($resultado_id);

// Caso o usuário tenha digitado um login válido o número de linhas será 1..
if($total)
{
	// Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão
	$dados = mysqli_fetch_object($resultado_id);

	// Agora verifica a senha
	if(!strcmp($senha, $dados->senha)){
		// TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário
		$_SESSION["cod_usuario"]= $dados->cod_usuario;
		$_SESSION["nome_usuario"] = stripslashes($dados->nome_usuario);
		$_SESSION["menu_func"] = $dados->funcionario;
		$_SESSION["login"] = $dados->login;
		$_SESSION["senha"] = $dados->senha;
		header("Location: index.php");
		exit;
	}
	// Senha inválida
	else
	{
	 "Senha inválida!";
	exit;
	}
}
	// Login inválido
else
{
	echo "O login fornecido por você é inexistente!";
	exit;
}


?>