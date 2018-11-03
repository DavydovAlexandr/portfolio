<?php
	$dblocation='localhost';
	$dbname='clicker';
	$dbuser='root';
	$dbpassword='';
	$dbc=mysql_connect($dblocation,$dbuser,$dbpassword);
	if(!$dbc){
	exit('Сервер баз данных не доступен');
	}
	$dbuse=mysql_select_db($dbname,$dbc);
	if(!$dbuse){
	exit('База данных не отвечает');
	}
	@mysql_query("SET NAMES 'utf8'");
?>