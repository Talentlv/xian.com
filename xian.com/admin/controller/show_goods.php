<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link type="text/css" rel="stylesheet" href="css/css.css"/>
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
			 border: 0;
             background: orange;
             border-radius: 5px;
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
	echo '<script type="text/javascript" src="./jquery-3.4.1/jquery-3.4.1.js"></script>';
	$conn=mysqli_connect('127.0.0.1','root','root','xian');
	

	//获取从数据库取出的数据总数
	$sql_count='select count(*) as total from goods';
	$result = mysqli_query($conn,$sql_count);
	$res2 = mysqli_fetch_array($result);
	$total_num = $res2['total'];
	// echo $total_num;

	//设置页面条数
	$page_size = 8;

	//获取当前页
	if(isset($_GET["p"])){ 
     $page_current = $_GET["p"]; 
	}else{ 
     $page_current=1; 
	} 
	$start = ($page_current-1)*$page_size; 

	//查询
	$sql="select * from goods order by Goods_id asc limit $start,$page_size";
	$rows=[];
	$res=mysqli_query($conn,$sql);

	echo "
	<div id = 'table'>
	<h1>鲜花网商品列表</h1>
	<a href='./goods_add.html' class='nav' >添加商品</a>
	<a href='../view/index2.html' class='nav' >返回首页</a>
	<table border='1' cellspacing='0'>
	<tr>
	<th>商品ID</th>
	<th>商品名称</th>
	<th>价格</th>
	<th>原价</th>
	<th>主花材</th>
	<th>副花材</th>
	<th>工艺</th>
	<th>包装</th>
	<th>适用对象</th>
	<th>适用节日</th>
	<th>颜色</th>
	<th width='200px' colspan='2'>操作</th>
	</tr>";

	while($row=mysqli_fetch_assoc($res)){
  		echo "<tr>";
  		echo "<td id='ID'>" . $row['Goods_id'] . "</td>";
  		echo "<td>" . $row['Name'] . "</td>";
  		echo "<td>" . $row['Price'] . "</td>";
  		echo "<td>" . $row['Original_price'] . "</td>";
  		echo "<td>" . $row['Major_flower'] . "</td>";
  		echo "<td>" . $row['Deputy_flower'] . "</td>";
  		echo "<td>" . $row['Technology'] . "</td>";
  		echo "<td>" . $row['Decoration'] . "</td>";
  		echo "<td>" . $row['Object'] . "</td>";
  		echo "<td>" . $row['Holiday'] . "</td>";
  		echo "<td>" . $row['Color'] . "</td>";
		echo "<td><input type='button' style='border:none'  value='修改' onclick=\"window.location.href='./update_goods_form.php?id=$row[Goods_id]'\"/></td>";
		echo "<td><input type='button' style='border:none' value='删除' onclick=\"window.location.href='./delete_goods.php?id=$row[Goods_id]'\"/></td>";
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


