<?php

include_once("conexao.php");

//$empresa = $_POST['empresa_prod'];
$empresa = isset( $_POST['empresa_prod'] ) ? $_GET['empresa_prod'] : '';
//$prod = $_POST['produto'];
$prod = isset( $_POST['produto'] ) ? $_GET['produto'] : '';
//$qtd = $_POST['quantidade_venda'];
$qtd = isset( $_POST['quantidade_venda'] ) ? $_GET['quantidade_venda'] : '';
//$data = $_POST['data_venda'];
$data = isset( $_POST['nome_cli'] ) ? $_GET['nome_cli'] : '';
//$total = $_POST['valor_venda'];
$total = isset( $_POST['valor_venda'] ) ? $_GET['valor_venda'] : '';
//$idVenda = $_GET['id'];
$idVenda = isset( $_GET['id'] ) ? $_GET['id'] : 'id';

mysql_query("UPDATE venda SET empresa_vend='$empresa',prod_vend='$prod',quantidade='$qtd',data_vend='$data', total_vend='$total' WHERE codigo_vend = $idVenda");


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
	<h2>Venda Editada com Sucesso!</h2>
	<img class="log" src="imagem/logo.png">
	<a href="vender.php"><button>Novo Cadastro</button></a>
	<a href="inicio.php"><button>Início</button></a>
</div>

</body>
</html>
