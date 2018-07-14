<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

include_once("conexao.php");

$consulta = mysql_num_rows(mysql_query("SELECT * FROM usuario WHERE usuario='$usuario' AND senha='$senha'"));


if ($consulta>0) {
	header("location:inicio.php");
}
else{
	header("location:errovalidar.php");

}
?>
