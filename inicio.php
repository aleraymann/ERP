<!DOCTYPE html>
<html>
<head>
	<title>Pagina Inicial</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilo.css">
<style>

#clientes{
	display: block;
	position: relative;
	margin-left: 350px;
	margin-top: 50px;
}
#produtos{
	display: block;
	position: relative;
	margin-left: 600px;
	margin-top: -206px;
}
#vendas{
	display: block;
	position: relative;
	margin-left: 850px;
	margin-top: -206px;
}
img{
	width: 150px;
	height: 150px;
}
#logout{
	display: block;
	position: relative;
	width: 60px;
	height: 60px;
	margin-top: 10px;
}
footer#rodape{
	clear: both;
	border-top: 1px solid #606060;
	text-align: center;
	height: 40px;
	bottom: 10px;
}
footer#rodape img{
	width: 20px;
	height: 20px;
	margin: 5px;
}
section{
	height: 350px;
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
	<a href="index.php"><img id="logout" src="imagem/logout.png"></a>
	<section>
<div id="clientes">
	<p>Clientes:</p>
	<a href="clientes.php"><button id="cliente" class="botao"> <img src="imagem/cliente.jpg"></button></a>
</div>
<div id="produtos">
		<p>Produtos:</p>
	<a href="produtos.php"><button  id="produto" class="botao"> <img src="imagem/histprod.jpg"></button></a>
</div>

<div id="vendas">
	<p>Vendas:</p>
	<a href="vender.php"><button id="venda" class="botao"> <img src="imagem/vendas.jpg"> </button></a>
</div>
</section>
<footer id="rodape">
				Copyright 2018 - Alessandro Raymann<br>
				<a href="https://www.facebook.com/alessandroraymann" target="_blank"><img id="faceale" src="imagem/icone-facebook.png"></a>
				<a href="mailto:aleraymann@gmail.com" target="_blank"><img id="emailale" src="imagem/gmail.png"></a>
			</footer>
</body>
</html>