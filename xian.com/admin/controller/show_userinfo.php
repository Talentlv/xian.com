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
	header("Content-Type:text/html;charset=utf8");
	echo '<script type="text/javascript" src="./jquery-3.4.1/jquery-3.4.1.js"></script>';
	$conn=mysqli_connect('127.0.0.1','root','root','xian');
	$sql='select * from user_info order by User_id';
	$rows=[];
	$res=mysqli_query($conn,$sql);

	echo "
	<div id = 'table'>
	<h1>鲜花网用户信息</h1>
	<a href='../view/index2.html' class='nav'>返回首页</a><table border='1' cellspacing='0'>
	<table border='1' cellspacing='0'>
	<tr>
	<th>用户ID</th>
	<th>用户昵称</th>
	<th>真实姓名</th>
	<th>性别</th>
	<th>生日</th>
	<th>邮箱</th>
	<th>电话号码</th>
	<th width='200px' colspan='2'>操作</th>
	</tr>";
	while($row=mysqli_fetch_assoc($res)){
  		echo "<tr>";
  		echo "<td id='ID'>" . $row['User_id'] . "</td>";
  		echo "<td>" . $row['Nickname'] . "</td>";
  		echo "<td>" . $row['Real_name'] . "</td>";
  		echo "<td>" . $row['Sex'] . "</td>";
  		echo "<td>" . $row['Birthday'] . "</td>";
  		echo "<td>" . $row['Mail'] . "</td>";
  		echo "<td>" . $row['Phone'] . "</td>";
		echo "<td><input type='button' style='border:none' value='修改' onclick=\"window.location.href='./update_goods_form.php?id=$row[User_id]'\"/></td>";
		echo "<td><input type='button' style='border:none' value='删除' onclick=\"window.location.href='./delete_goods.php?id=$row[User_id]'\"/></td>";
  		echo "</tr>";
  	}
  	echo "</table>";
  	echo "</div>";
?>

</body>
</html>

