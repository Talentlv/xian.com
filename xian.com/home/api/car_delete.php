<?php 
	include('../model/Db.class.php');
	session_start();
	$userid=$_SESSION['user_id'];
	$goodsid=$_GET["goodsid"];
	$db=new Db();
	$sql2="delete from shopping_car where userid='".$userid."' and goodsid='".$goodsid."'";
	$res2=$db->delete($sql2);
	/*if($rows)
	 {
		$data = '1';
	}
	else{
		$data = '0';
	}
	echo json_encode($data);*/
 ?>