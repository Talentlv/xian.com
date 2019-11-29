<?php

	if($_GET['act']=='name'){
		if (empty($_POST['name'])) {
			# code...
			echo "请输入商品名字";
		}else{
			echo "请继续输入其他信息";
		}
		// print_r('用户注册');
	}
	if($_GET['act']=='price'){
		if (empty($_POST['name'])) {
			# code...
			echo "请输入商品价格";
		}else{
			$preg='/[0-9]/';
			$str=$_POST['name'];
			if(preg_match($preg,$str)){
				# code...
				echo "请继续输入其他信息";
			}else{
				echo "请输入合法价格";
			}
		}
	}
	if($_GET['act']=='O_price'){
		if (empty($_POST['name'])) {
			# code...
			echo "请输入商品价格";
		}else{
			$preg='/[0-9]/';
			$str=$_POST['name'];
			if(preg_match($preg,$str)){
				# code...
				echo "请继续输入其他信息";
			}else{
				echo "请输入合法价格";
			}
		}
	}

?>