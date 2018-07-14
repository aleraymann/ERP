<?php
include_once("conexao.php");
 $base = mysql_select_db('erp', $_cnx);
 if (!$base) {
   echo "Tabela não encontrada: " .mysql_error();
 }
 @$idUsuario = $_GET['id'] ;// pega o valor do cliente por GET(url)
 if($idUsuario){// se houver o id, é pq existe cliente 
    $conexaoAtual = mysql_query("SELECT * FROM `usuario` WHERE `codigo` = $idUsuario  ");
    $dadosUsuário = mysql_fetch_array($conexaoAtual);
 }

?> 
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuário</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<style>
div{
    position: relative;
    display: block;
    border:solid black;
    margin-left: 25%;
    width: 200px;
    padding: 20px;
    margin-top: 20px;
    background-color: lightgrey;
}
table {
	position: relative;
	display: block;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 350px;
    margin-left: 50%;
    margin-top: -250px;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
h1{
  display: block;
  position: relative;
  margin-left: 45%;
  margin-top: -30px;
  margin-bottom: 40px;
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
    <a href="index.php"><img src="imagem/voltar.png"></a>
    <h1>USUÁRIOS</h1>
    <section>
	<div>
        <form method="post" action="processa.php">
           <? if($idUsuário){ ?>
    <input type="hidden" name="idCliente" value="<?= $dadosUsuario['codigo'] ?>"> 
  <? }?>
	Nome: <input type="text" name="nome" maxlength="40" autofocus="" required=""><br>
	Email: <input type="email" name="email" maxlength="50" required=""><br>
	Usuário: <input type="text" name="usuario" maxlength="20" required=""><br>
	Senha: <input type="password" name="senha" maxlength="10" required=""><br><br>
	
    <input type="submit" value="Cadastrar" class="botao">
    <input type="reset" value="Limpar" class="botao">
    </form>

    </div>
    <table>
  <tr>
    <th>ID</th>
    <th>Email</th>
    <th>Uuário</th>
    <th>Opção</th>
    <?php 
    $sql = "SELECT * FROM usuario";
    $execcuta_sql = mysql_query($sql);
    $quantosRegistros = mysql_num_rows($execcuta_sql); // pra vc ver qantos registros ele encontrou no banco
    while ($dados=mysql_fetch_array($execcuta_sql)) { 
    // inicia a estrutura repetição, enquanto houver registros
    ?>
 <tr>
   <td><?=  $dados['codigo']; ?></td>
   <td><?=  $dados['usuario']; ?></td>
   <td><?=  $dados['email']; ?></td>
   <td>
    <a href="apaga_usuario.php?id=<?=$dados['codigo'] ;?>">Excluir</a>&nbsp;
  </td>
 </tr>
<?php  }
// fim da estrutura repetição     ?>
</table>
</section>
<footer id="rodape">
                Copyright 2018 - Alessandro Raymann<br>
                <a href="https://www.facebook.com/alessandroraymann" target="_blank"><img id="faceale" src="imagem/icone-facebook.png"></a>
                <a href="mailto:aleraymann@gmail.com" target="_blank"><img id="emailale" src="imagem/gmail.png"></a>
            </footer>


</body>
</html>