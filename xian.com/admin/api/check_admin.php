<?php
	header("Content-Type:text/html;charset=utf8");
	if (empty($_POST['admin'])||empty($_POST['password'])) {
		# code...
		echo "<script>alert('用户名或密码不能为空！')</script>";
		header("Refresh:1;url=../view/index.html");
	}

	//验证
	$name = $_POST['admin'];
	$password = $_POST['password'];

	//连接数据库
	$conn = mysqli_connect('127.0.0.1','root','root','xian');
	$sql = "select * from admin where Username='$name';";
	$result = mysqli_query($conn,$sql);
	mysqli_close($conn);


	//判断登录是否正确
	$row = mysqli_fetch_assoc($result);

	if (!$row) {
		# code...
		echo "<script>alert('没有该用户信息！请重新登录！')</script>";
		header("Refresh:1;url=../view/index.html");
	}else{
		# code...
		$admin_password = $row['Password'];
		$flag = strcmp($admin_password, $password);
		if ($flag != 0) {
			# code...
			echo "<script>alert('密码错误！请重新登录！')</script>";
			header("Refresh:1;url=../view/index.html");
		}else{

			echo "<script>alert('欢迎您管理员。')</script>";
			header("Refresh:1;url=../view/index2.html");
		}
	}

?>