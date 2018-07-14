<?php

include_once("conexao.php");

//$prod = $_POST['prod'];
$prod = isset( $_POST['prod'] ) ? $_GET['prod'] : '';
//$desc = $_POST['descricao'];
$desc = isset( $_POST['descicao'] ) ? $_GET['descricao'] : '';
//$qtd = $_POST['quantidade'];
$qtd = isset( $_POST['quantidade'] ) ? $_GET['quantidade'] : '';
//$valor = $_POST['valor'];
$valor = isset( $_POST['valor'] ) ? $_GET['valor'] : '';
//$empresa = $_POST['empresa_prod'];
$empresa = isset( $_POST['empresa_prod'] ) ? $_GET['empresa_prod'] : '';
//$idProduto = $_GET['id'];
$idProduto = isset( $_GET['id'] ) ? $_GET['id'] : 'id';

mysql_query("UPDATE produto SET prod='$prod',descricao='$desc',quantidade='$qtd',valor_pro='$valor', empresa_pro='empresa' WHERE codigo_pro = $idProduto");


?>
<!DOCTYPE html>
<html>
<head>
	<title>Edição Concluída</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
div{
    position: relative;
    display: block;
    border:solid black;
    margin-left: 25%;
    width: 400px;
    padding: 20px;
    margin-top: 20px;
    background-color: white;
}
button{
    padding: 10px;
    margin-left: 65px;
    margin-top: 10px;
   }
.log{
 	margin-left: 80px;
 	height: 200px;
 }
 body{
	background-color: #A2b5cd;
}

</style>

</head>
<body>
	<header id="cabecalho">
		<img class="logo" src="imagem/fundo.png">
	</header>
<div>
	<h2>Produto Editado com Sucesso!</h2>
	<img class="log" src="imagem/logo.png">
	<a href="produtos.php"><button>Novo Cadastro</button></a>
	<a href="inicio.php"><button>Início</button></a>
</div>

</body>
</html>
