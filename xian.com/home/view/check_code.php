<?php
header("content-type:text/html; charset=utf-8"); 
session_start();
$str=$_SESSION["_code"];//取 code.php 中生成的验证码字符串

$cod=$_POST["codes"];//用户提交的字符串
/*echo $str;
echo $cod;
exit;*/
if(strlen(trim($cod))>0){	
	if(strtoupper($cod)==strtoupper($str)){
		 echo "验证码正确";
	}
	else{ echo "验证码错误"; }

?>
