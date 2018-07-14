<?php

include_once("conexao.php");

$idVenda = $_GET['id'];

mysql_query("DELETE FROM venda WHERE codigo_vend = $idVenda");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Apagar Venda</title>
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
	<h2>Venda Apagado com Sucesso!</h2>
	<img class="log" src="imagem/logo.png">
	<a href="vender.php"><button>Retornar ao Cadastro</button></a>
	<a href="inicio.php"><button>Início</button></a>
</div>

</body>
</html>
