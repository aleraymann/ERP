<?php

	$_HOST    = "localhost";
	$_USUARIO =  "root";
	$_SENHA   = "";
	$_BANCO   = "erp";

	/****************************************************/

	@$_cnx = mysql_connect($_HOST, $_USUARIO, $_SENHA);
	mysql_query("SET NAMES 'utf8'");
	mysql_select_db($_BANCO) or print(mysql_error());
	if(!$_cnx){
		echo "<PRE>Falha ao tentar conectar ao banco de dados!</PRE>";
		exit();
	}
	



?>