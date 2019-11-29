<?php
	header("Content-Type:text/html;charset=utf8");
	$conn=mysqli_connect('127.0.0.1','root','root','xian');

	$id = $_GET['id'];

	$sql="update orders set Order_deal='已发货' where Order_id=$id";
	if (mysqli_query($conn,$sql)) {
		# code...
		header("Refresh:1;url=./show_orders.php");
	}else{
		header("Refresh:1;url=./show_orders.php");
	}
	mysqli_close($conn);
?>