<?php
	echo '<script type="text/javascript" src="./jquery-3.4.1/jquery-3.4.1.js"></script>';
	header("Content-Type:text/html;charset=utf8");
	$conn=mysqli_connect('127.0.0.1','root','root','xian');
	$sql="DELETE FROM goods WHERE Goods_id='$_GET[id]'";
	if (mysqli_query($conn,$sql)) {
		# code...
		echo"<script>alert('删除成功')</script>";
	}
	mysqli_close($conn);
	header("Refresh:1;url=./show_goods.php")
?>