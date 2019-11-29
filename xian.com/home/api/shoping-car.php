<?php 
	include('../model/Db.class.php');
	$userid=$_GET["userid"];
	$goodsid=$_GET["goodsid"];
	$amount=$_GET["num"];
	$price=$_GET["price"];
	$db=new Db();
	$sql2="select * from shopping_car where userid='".$userid."' and goodsid='".$goodsid."'";
	$res2=$db->select($sql2);
	$count=count($res2);
	print_r($count);
	if ($count!=0) {
		print_r("fuck you");
	}else{
		$sql="insert into shopping_car values ('$userid', '$goodsid', '$amount', '$price')";
		$res=$db->insert($sql);
	}
	
	/*if($rows)
	 {
		$data = '1';
	}
	else{
		$data = '0';
	}
	echo json_encode($data);*/
 ?>