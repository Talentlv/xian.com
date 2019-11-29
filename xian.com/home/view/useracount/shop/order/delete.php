<?php
$con = new mysqli('localhost', 'root', 'root', 'xian');
if($con->connect_error){
	die("连接失败: " . $con->connect_error);
}

$sql = "delete from orders where Order_id = '$_GET[oid]'";

if($con->query($sql)){
	echo "<script>alert('删除成功');</script>";
	header('Location:index.php');
}


?>