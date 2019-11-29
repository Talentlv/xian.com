<?php
$database_connection = null;
function get_connection(){
	$hostname = "localhost";
	$database = "xian";
	$username = "root";
	$password = "root";

	global $database_connection;//全局变量
	//连接数据库mysql_connect()
	$database_connection = @mysql_connect($hostname, $username, $password) or die(mysql_error());
	mysql_query("set names 'utf8'");//设置字符集
	@mysql_select_db($database, $database_connection) or die(mysql_error());//选择数据库
}
function close_connection(){
	global $database_connection;//全局变量
	if($database_connection){
		mysql_close($database_connection) or die(mysql_error());//关闭数据库
	}
}