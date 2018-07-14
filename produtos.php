<?php
include_once("conexao.php");
 $base = mysql_select_db('erp', $_cnx);
 if (!$base) {// nao conectou no banco
   echo "Tabela não encontrada: " .mysql_error();
 }
@$idProduto = $_GET['id'] ;// pega o valor do produto por GET(url)
 if($idProduto){// se houver o id, é pq existe cliente 
    $conexaoAtual = mysql_query("SELECT * FROM `produto` WHERE `codigo_pro` = $idProduto  ");
    $dadosProduto = mysql_fetch_array($conexaoAtual);
 }

?> 
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Produto</title>
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
    margin-top: 5px;
    background-color: lightgrey;
}
button{
    padding: 10px;
    margin-left: 30%;
    margin-top: 10px;
}
table {
	position: relative;
	display: block;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 600px;
    margin-left: 500px;
    margin-top: -380px;
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
    height: 420px;
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
	<a href="inicio.php"><img src="imagem/voltar.png"></a>
  <h1>PRODUTOS</h1>
  <section>

<form method="post" action="processa3.php">
  <? if($idProduto){ // se for editar produto ele exibe o campo do id do produto atual ?>
    <input type="hidden" name="idProduto" value="<?= $dadosProduto['codigo_pro'] ?>"> 
  <? }?>
<div>
	Produto:<br> <input type="text" name="prod" value="<?php  if($idProduto){echo $dadosProduto['prod'] ; }?>"autofocus="" required><br><br>
	Descrição:<br> <input type="text" name="descricao"  value="<?php if($idProduto){echo $dadosProduto['descricao'] ;}?>"required><br><br>
	Quantidade:<br> <input type="number" name="quantidade" value="<?php if($idProduto){echo $dadosProduto['quantidade'] ;}?>"required><br><br>
	Valor:<br> <input type="number" name="valor" value="<?php if($idProduto){echo $dadosProduto['valor_pro'] ;}?>"required><br><br>
	Empresa:<br> <input type="text" name="empresa_prod" value="<?php if($idProduto){echo $dadosProduto['empresa_pro'] ;}?>"required><br><br>
	<button class="botao">Cadastrar</button><br><br>
  <? if($idProduto){ ?>
    <a href="produtos.php">Limpar Campos</a>&nbsp;||&nbsp;
  <? }else{ ?>
<? } ?>
<a href="edita_produto.php">Confirmar Edição</a>
</div>
</form>

<table>
  <tr>
    <th>ID</th>
    <th>Produto</th>
    <th>Quantidade</th>
    <th>Opções</th>
    </tr>
    <?php 
    $sql = "SELECT * FROM produto";
    $execcuta_sql = mysql_query($sql);
    $quantosRegistros = mysql_num_rows($execcuta_sql); // pra vc ver qantos registros ele encontrou no banco
    while ($dados=mysql_fetch_array($execcuta_sql)) { 
    // inicia a estrutura repetição, enquanto houver registros
    ?>
 <tr>
   <td><?=  $dados['codigo_pro']; ?></td>
   <td><?=  $dados['prod']; ?></td>
   <td><?=  $dados['quantidade']; ?></td>
   <td>
    <a href="produtos.php?id=<?=$dados['codigo_pro'] ;?>">Editar</a>&nbsp;
    <a href="apaga_produtos.php?id=<?=$dados['codigo_pro'] ;?>">Excluir</a>&nbsp;
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