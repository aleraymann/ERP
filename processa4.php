<?php

include_once("conexao.php");

$empresa = $_POST['empresa_prod'];
$prod = $_POST['produto'];
$qtd = $_POST['quantidade_venda'];
$data = $_POST['data_venda'];
$total = $_POST['valor_venda'];

mysql_query("INSERT INTO venda SET empresa_vend='$empresa',prod_vend='$prod',quantidade='$qtd',data_vend='$data', total_vend='$total'");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Venda Concluída</title>
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
	<h2>Venda Concluída com Sucesso!</h2>
	<img class="log" src="imagem/logo.png">
	<a href="vender.php"><button>Novo Cadastro</button></a>
	<a href="inicio.php"><button>Início</button></a>
</div>

</body>
</html>
