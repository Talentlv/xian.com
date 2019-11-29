<?php

	header("Content-Type:text/html;charset=utf8");
	$conn=mysqli_connect('127.0.0.1','root','root','xian');

	$id = $_GET['id'];

	$name = $_POST['Gname'];
	$price = $_POST['price'];
	$O_price = $_POST['O_price'];
	$Sales = $_POST['Sales'];
	$Major_flower = $_POST['Major_flower'];
	$Major_flower_plus = $_POST['Major_flower_plus'];
	$Deputy_flower = $_POST['Deputy_flower'];
	$Classification_flower = $_POST['Classification_flower'];
	$Tech = $_POST['Tech'];
	$Decoration = $_POST['Decoration'];
	$Object = $_POST['Object'];
	$Holiday = $_POST['Holiday'];
	$Scene = $_POST['Scene'];
	$color = $_POST['color'];
	$Photo_addr = $_POST['Photo_addr'];


	$sql="update goods set Name='$name',Price='$price',Original_price='$O_price',Sales='$Sales',Major_flower='$Major_flower',Major_flower_plus='Major_flower_plus',Deputy_flower='$Deputy_flower',Classification_flower='Classification_flower',Technology='$Tech',
	Decoration='$Decoration', Object='$Object',Holiday='$Holiday',Scene='$Scene',Color='$color',Photo_address='$Photo_addr' where Goods_id=$id";
	if (mysqli_query($conn,$sql)) {
		# code...
		echo "<script>alert('修改成功')</script>";
		header("Refresh:1;url=./show_goods.php");
	}else{
		echo "<script>alert('修改失败')</script>";
	}
	mysqli_close($conn);
	
?>