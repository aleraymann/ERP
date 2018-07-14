<?php

include_once("conexao.php");

$nome = $_POST['nome_cli'];
$cpf = $_POST['cpf_cli'];
$nasc = $_POST['nasc_cli'];
$genero = $_POST['genero_cli'];
$empresa = $_POST['empresa_cli'];

mysql_query("INSERT INTO clientes SET nome_cli='$nome' ,cpf_cli='$cpf', nasc_cli ='$nasc' ,genero='$genero', empresa_cli='$empresa'");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Concluído</title>
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
	<h2>Cliente Cadastrado com Sucesso!</h2>
	<img class="log" src="imagem/logo.png">
	<a href="clientes.php"><button>Novo Cadastro</button></a>
	<a href="inicio.php"><button>Início</button></a>
</div>

</body>
</html>
