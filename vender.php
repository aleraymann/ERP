<?php
include_once("conexao.php");
 $base = mysql_select_db('erp', $_cnx);
 if (!$base) {
   echo "Tabela não encontrada: " .mysql_error();
 }
 @$idVenda = $_GET['id'] ;// pega o valor do produto por GET(url)
 if($idVenda){// se houver o id, é pq existe cliente 
    $conexaoAtual = mysql_query("SELECT * FROM `venda` WHERE `codigo_vend` = $idVenda ");
    $dadosVenda = mysql_fetch_array($conexaoAtual);
 }

?> 
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Vendas</title>
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
    margin-top: 20px;
    background-color: lightgrey;
}
button{
    padding: 10px;
    margin-left: 40px;
    margin-top: 10px;
}
table {
	position: relative;
	display: block;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 750px;
    margin-left: 500px;
    margin-top: -400px;
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
 <h1>VENDAS</h1>
 <section>

<form method="post" action="processa4.php">
  <? if($idVenda){ // se for editar Venda ele exibe o campo do id do venda atual ?>
    <input type="hidden" name="idVenda" value="<?= $dadosVenda['codigo_vend'] ?>"> 
  <? }?>
<div>
	Empresa:<br> <input type="text" name="empresa_prod" value="<?php  if($idVenda){echo $dadosVenda['empresa_vend'] ; }?> "autofocus="" required><br><br>
	Produto:<br> <input type="text" name="produto" value="<?php  if($idVenda){echo $dadosVenda['prod_vend'] ; }?>" required><br><br>
	Quantidade:<br> <input type="number" name="quantidade_venda" value="<?php  if($idVenda){echo $dadosVenda['quantidade'] ; }?>" required><br><br>
	Data: <br> <input type="date" name="data_venda" value="<?php  if($idVenda){echo $dadosVenda['data_vend'] ; }?>" required><br><br>
	Total da Venda: <input type="text" name="valor_venda" value="<?php  if($idVenda){echo $dadosVenda['total_vend'] ; }?>" required><br><br>
	<button class="botao">Efetuar Venda</button><br><br>
  <? if($idVenda){ ?>
    <a href="vender.php" >Limpar Campos</a>&nbsp;||&nbsp;
  <? }else{ ?>
<? } ?>
<a href="edita_venda.php"> Confirmar Edição</a>
</div>
</form>
<table>
  <tr>
    <th>Empresa</th>
    <th>Produto</th>
    <th>Valor</th>
    <th>Data</th>
    <th>Opções</th>
     <?php 
    $sql = "SELECT * FROM venda";
    $execcuta_sql = mysql_query($sql);
    $quantosRegistros = mysql_num_rows($execcuta_sql); // pra vc ver qantos registros ele encontrou no banco
    while ($dados=mysql_fetch_array($execcuta_sql)) { 
    // inicia a estrutura repetição, enquanto houver registros
    ?>
 <tr>
   <td><?=  $dados['empresa_vend']; ?></td>
   <td><?=  $dados['prod_vend']; ?></td>
   <td><?=  $dados['total_vend']; ?></td>
   <td><?=  $dados['data_vend']; ?></td>
   <td>
    <a href="vender.php?id=<?=$dados['codigo_vend'] ;?>">Editar</a>&nbsp;
    <a href="apaga_venda.php?id=<?=$dados['codigo_vend'] ;?>">Excluir</a>&nbsp;
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