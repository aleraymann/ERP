<?php

include_once("conexao.php");

//$idCliente = $_GET['id'];
$idCliente = isset( $_GET['id'] ) ? $_GET['id'] : 'id';
//$nome = $_POST['nome_cli'];
$nome = isset( $_POST['nome_cli'] ) ? $_GET['nome_cli'] : '';
//$cpf = $_POST['cpf_cli'];
$cpf = isset( $_POST['cpf_cli'] ) ? $_GET['cpf_cli'] : '';
//$nasc = $_POST['nasc_cli'];
$nasc = isset( $_POST['nasc_cli'] ) ? $_GET['nasc_cli'] : '';
//$genero = $_POST['genero_cli'];
$genero = isset( $_POST['genero'] ) ? $_GET['genero'] : '';
//$empresa = $_POST['empresa_cli'];
$empresa = isset( $_POST['empresa_cli'] ) ? $_GET['empresa_cli'] : '';


mysql_query("UPDATE clientes SET nome_cli='$nome' ,cpf_cli='$cpf', nasc_cli ='$nasc' ,genero='$genero', empresa_cli='$empresa' WHERE codigo_cli = $idCliente");

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
	<h2>Cliente Editado com Sucesso!</h2>
	<img class="log" src="imagem/logo.png">
	<a href="clientes.php"><button>Novo Cadastro</button></a>
	<a href="inicio.php"><button>Início</button></a>
</div>

</body>
</html>
