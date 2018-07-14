<?php
include_once("conexao.php");
 $base = mysql_select_db('erp', $_cnx);
 if (!$base) { // nao conectou no banco
   echo "Tabela não encontrada: " .mysql_error();
 }
 @$idCliente = $_GET['id'] ;// pega o valor do cliente por GET(url)
 if($idCliente){// se houver o id, é pq existe cliente 
    $conexaoAtual = mysql_query("SELECT * FROM `clientes` WHERE `codigo_cli` = $idCliente  ");
    $dadosCliente = mysql_fetch_array($conexaoAtual);
 }
 
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Clientes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
div{
    position: relative;
    display: block;
    border:solid black;
    margin-left: 200px;
    width: 240px;
    padding: 20px;
    margin-top: 10px;
    background-color: lightgrey;
}
button{
    padding: 10px;
    margin-left: 35%;
    margin-top: 10px;
}
table {
	position: relative;
	display: block;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 650px;
    margin-left: 500px;
    margin-top: -420px;
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
section#corpo{
    height: 400px;
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

<section class="cliente">
	<a href="inicio.php"><img src="imagem/voltar.png"></a>
  <h1>CLIENTES</h1>
  <section id="corpo">
	<form method="post" action="processa2.php">
    <? if($idCliente){ // se for editar cliente ele exibe o campo do id do cliente atual ?>
    <input type="hidden" name="idCliente" value="<?= $dadosCliente['codigo_cli'] ?>"> 
  <? }?>
	<div>
	Nome:<br> <input type="text" name="nome_cli" value="<?php  if($idCliente){echo $dadosCliente['nome_cli'] ; }?>" autofocus required><br><br>
	CPF:<br><input type="text" name="cpf_cli" value="<?php if($idCliente){echo $dadosCliente['cpf_cli'] ;}?>" required><br><br>
	Data de Nascimento:<br> <input type="date" name="nasc_cli" value="<?php if($idCliente){echo $dadosCliente['nasc_cli'] ;}?>" required><br><br>
	Gênero:<select name="genero_cli">
		<option value="M" <? if ($dadosCliente['genero_cli'] == "M") {echo "selected " ;/* se for masculino já deixa marcado */} ?>Masculino</option>
		<option value="F" <? if ($dadosCliente['genero_cli'] == "F") {echo "selected"; /* se for feminino já deixa marcado */} ?>Feminino</option>
	</select><br><br>
	Empresa:<br> <input type="text" name="empresa_cli" value="<?php if($idCliente){echo $dadosCliente['empresa_cli'] ; }?>" required><br><br>
	<button class="botao">Cadastrar</button><br><br>
  <? if($idCliente){ ?>
    <a href="clientes.php">Limpar Campos</a>&nbsp;||&nbsp;
    <a href="edita_cliente.php">Confirmar Edição</a>
  <? }else{ ?>
<? } ?>

</div>
</form>


<table>
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Empresa do Cliente</th>
    <th>Opções</th>
  </tr>
    <?php 
    $sql = "SELECT * FROM clientes";
    $execcuta_sql = mysql_query($sql);
    $quantosRegistros = mysql_num_rows($execcuta_sql); // pra vc ver qantos registros ele encontrou no banco
    while ($dados=mysql_fetch_array($execcuta_sql)) { 
    // inicia a estrutura repetição, enquanto houver registros
    ?>
 <tr>
   <td><?=  $dados['codigo_cli']; ?></td>
   <td><?=  $dados['nome_cli']; ?></td>
   <td><?=  $dados['empresa_cli']; ?></td>
   <td>
    <a href="clientes.php?id=<?=$dados['codigo_cli'] ;?>">Editar</a>&nbsp;
    <a href="apaga_clientes.php?id=<?=$dados['codigo_cli'] ;?>">Excluir</a>&nbsp;
  </td>
 </tr>
<?php  }
// fim da estrutura repetição     ?>
</table>
</section>
</section>
<footer id="rodape">
        Copyright 2018 - Alessandro Raymann<br>
        <a href="https://www.facebook.com/alessandroraymann" target="_blank"><img id="faceale" src="imagem/icone-facebook.png"></a>
        <a href="mailto:aleraymann@gmail.com" target="_blank"><img id="emailale" src="imagem/gmail.png"></a>
      </footer>

</body>
</html>