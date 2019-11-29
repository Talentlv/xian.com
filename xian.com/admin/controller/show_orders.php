<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link type="text/css" rel="stylesheet" href="css/css.css"/>
	<script type="text/javascript" src="./jquery-3.4.1/jquery-3.4.1.js"></script>
	<style type="text/css">
		#table{
			text-align: center;
		}
	
		table{
			margin: 0 auto;
			text-align: center;
			width: 80%;
		}
		tr{
			text-align: center;
		}
		th{
			width: 300px;
		}
		input{
			background: #fff;
		}
		button{
			border: none;
			background: #fff;
		}

		.page{
			font-size: 20px;
			text-align: center;
		}
		a{
			text-decoration: none;
		}
		.nav{
			
			 border: 0;
            background: orange;
           border-radius: 5px;
		
		}

	</style>
</head>
<body>
	<?php
	include_once("../api/page.php");
	header("Content-Type:text/html;charset=utf8");
	$conn=mysqli_connect('127.0.0.1','root','root','xian');

	$sql_count='select count(*) as total from orders';
	$result = mysqli_query($conn,$sql_count);
	$res2 = mysqli_fetch_array($result);
	$total_num = $res2['total'];

	$page_size = 4;

	if(isset($_GET["p"])){ 
     $page_current = $_GET["p"]; 
	}else{ 
     $page_current=1; 
	} 
	$start = ($page_current-1)*$page_size; 

	//查询

	$sql="select * from orders order by Order_id asc limit $start,$page_size";
	$rows=[];
	$res=mysqli_query($conn,$sql);

	echo "
	<div id = 'table'>
	<h1>鲜花网订单列表</h1>
	<a href='../view/index2.html' class='nav'>返回首页</a><table border='1' cellspacing='0'>
	<tr>
	<th>订单号</th>
	<th>订单地址</th>
	<th>用户ID</th>
	<th>商品ID</th>
	<th>商品数量</th>
	<th>服务时间</th>
	<th>送达时间</th>
	<th>送达时段</th>
	<th>祝福语</th>
	<th>价格</th>
	<th>订单状态</th>
	<th>订单处理</th>
	</tr>";
	while($row=mysqli_fetch_assoc($res)){
  		echo "<tr>";
  		echo "<td id='ID'>" . $row['Order_id'] . "</td>";
  		echo "<td>" . $row['Address_id'] . "</td>";
  		echo "<td>" . $row['User_id'] . "</td>";
  		echo "<td>" . $row['Goods_id'] . "</td>";
  		echo "<td>" . $row['Goods_count'] . "</td>";
  		echo "<td>" . $row['Order_time'] . "</td>";
  		echo "<td>" . $row['Delivery_time'] . "</td>";
  		echo "<td>" . $row['Time_frame'] . "</td>";
  		echo "<td>" . $row['Message'] . "</td>";
  		echo "<td>" . $row['Freight'] . "</td>";
  		echo "<td>" . $row['Order_status'] . "</td>";
  		echo "<td><input type='button' style='border:none' value='".$row['Order_deal']."' onclick=\"window.location.href='./deal_order.php?id=$row[Order_id]'\"/></td>";
  		echo "</tr>";
  	}
  	echo "</table>";
  	echo "</div>";


  	echo "<div class = 'page'>";
  	$url = $_SERVER["PHP_SELF"]; 
	page($total_num,$page_size,$page_current,$url); 
	echo "</div>";
  	mysqli_close($conn);
?>
</body>
</html>

