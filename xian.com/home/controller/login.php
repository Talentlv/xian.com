<?php
	include '../model/Db.class.php';

	$con = new mysqli('localhost', 'root', 'root', 'xian');
	if($con->connect_error){
		die("连接失败: " . $con->connect_error);
	}
	$con->set_charset("utf8");
	$i=0;
	$phone=$_POST['phone'];
	$password=$_POST['password'];

	$sql="select * from user where Phone='$phone'";
	$res=$con->query($sql);
	$row=$res->fetch_array();
	if($res==NUll)
	{
		print_r("没有此用户");
	}
	else if($row['Password']==$password)
	{
		session_start();
		$_SESSION['user_id']=$row['User_id'];
		header("Location:../view/useracount/member/index.php");
		echo "登录成功";
	}
	else{
		echo "密码错误";
	}
?>
