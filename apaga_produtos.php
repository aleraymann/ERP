<?php

include_once("conexao.php");

$idProduto = $_GET['id'];

mysql_query("DELETE FROM produto WHERE codigo_pro = $idProduto");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Apagar Produto</title>
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
	<h2>Produto Apagado com Sucesso!</h2>
	<img class="log" src="imagem/logo.png">
	<a href="produtos.php"><button>Retornar ao Cadastro</button></a>
	<a href="inicio.php"><button>Início</button></a>
</div>

</body>
</html>
