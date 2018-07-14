<?php

include_once("conexao.php");

$idCliente = $_GET['id'];

mysql_query("DELETE FROM clientes WHERE codigo_cli = $idCliente");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Apagado com Sucesso</title>
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

</style>

</head>
<body>
	<header id="cabecalho">
		<img class="logo" src="imagem/fundo.png">
	</header>
<div>
	<h2>Cliente Apagado com Sucesso!</h2>
	<img class="log" src="imagem/logo.png">
	<a href="clientes.php"><button>Retornar ao Cadastro</button></a>
	<a href="inicio.php"><button>Início</button></a>
</div>

</body>
</html>
