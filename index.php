
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<style>
	#entrar{
		padding: 10px;
		margin-left: 60px;
		margin-top: 10px;
	}
	#entrar_cad{
		padding: 10px;
		margin-left: 30%;
		margin-top: 10px;
	}
	div.login{
	border: solid black;
	box-shadow: 1px 1px 1px black;
	padding: 20px;
	width: 400px;
	margin-left: 25%;
	margin-top: 100px;
	background-color: white;
	height: 200px;
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
img#fundo{
	display: block;
	position: relative;
	margin-left: 220px;
	margin-top: -190px;
	width: 150px;
	height: 150px;
}
button#entrar_cad{
	display: block;
	position: relative;
	margin-left: 550px;
	margin-top: -50px;
}
</style>

<body>
	<header id="cabecalho">
		<img class="logo" src="imagem/fundo.png">
	</header>
<section>

 <form action="validar.php" method="POST">

  	<div class="login">
  	<h2>Login do Usuário:</h2>
    Usuário:<br> <input type="text" name="usuario" autofocus required><br>
    Senha:<br> <input type="password" " name="senha" required><br><br>
    <button id="entrar" class="botao"> Entrar</button>
    <img id="fundo" src="imagem/logo.png">
    </form>
    </div>
     <a href="cadastro.php"><button id="entrar_cad" class="botao"> Nao tenho Cadastro</button></a>
 </form>
</section>

<footer id="rodape">
                Copyright 2018 - Alessandro Raymann<br>
                <a href="https://www.facebook.com/alessandroraymann" target="_blank"><img id="faceale" src="imagem/icone-facebook.png"></a>
                <a href="mailto:aleraymann@gmail.com" target="_blank"><img id="emailale" src="imagem/gmail.png"></a>
            </footer>


</body>
</html>