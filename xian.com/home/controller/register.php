<?php
	include '../model/Db.class.php';

	$db=new  Db();
	$i=0;
	$phone=$_POST['phone'];
	$password=$_POST['password'];
	$sql="insert into user(Phone,Password) values('$phone','$password')";
	$res=$db->insert($sql);
	if($res==1)
	{
		echo "<script>alert('注册成功');</script>";
		echo '<script>window.location.href="../view/login.php"</script>';
		/*header("refresh:3;url=../view/login.php'");*/
		
	}else{
		echo "<script>alert('注册失败');</script>";
		
	}
/*	print_r($res[0]['password']);
	if($res==NUll)
	{
		print_r("没有此用户");
	}
	else if($res[0]['password']==$password)
	{
		echo "登录成功";
	}
	else{
		echo "密码错误";
	}*/
?>
Enter password: ****
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 3
Server version: 5.5.53 MySQL Community Server (GPL)

Copyright (c) 2000, 2016, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> use xian;
Database changed
mysql> insert into user values ('','1234','5678');
ERROR 1136 (21S01): Column count doesn't match value count at row 1
mysql> insert into user values('','1234','5678');
ERROR 1136 (21S01): Column count doesn't match value count at row 1
mysql> insert into user(Phone,Password) values('','1234','5678');
ERROR 1136 (21S01): Column count doesn't match value count at row 1
mysql> insert into user(Phone,Password) values('1234','5678');
Query OK, 1 row affected (0.00 sec)

mysql>