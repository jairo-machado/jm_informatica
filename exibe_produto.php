<?php 

$conexao = mysqli_connect("localhost", "consulta", "12345");

mysqli_select_db($conexao, "jminformatica");
$pag_atual = "$_SERVER[REQUEST_URI]";
//echo "Link atual: " . $pag_atual . "<br>";
if($pag_atual == "/jminformatica/produtos.php"){
    $resultado = mysqli_query($conexao, "select * from produtos");
}else{
    $resultado = mysqli_query($conexao, "select * from produtos where destaque = 1");
}
$total = mysqli_num_rows($resultado);
//echo "Total de registros " . $total . "<br>";
for($i=0;$i<$total;$i++){
    $linha = mysqli_fetch_object($resultado);
    echo '<div class="quadrado">
            <div class="imagem"><img class="produtos" src="' . $linha->src_imagem . '" alt="Foto SSD"></div>
            <div class="lol"><p>' . $linha->nome . '</p></div>
            <div class="rsrs"><p>R$' .$linha->preco . '</p></div>
            <div class="add_to"><a href="paloma">Adicionar ao Carrinho</a></div>
        </div>';
    }

mysqli_close($conexao);
?>