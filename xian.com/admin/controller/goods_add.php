<?php
	header("Content-Type:text/html;charset=utf8");

	if (empty($_POST["Gname"])) {
		# code...
		echo "请输入名字";
	}else
	{
		$conn=mysqli_connect('127.0.0.1','root','root','xian');
		$sql="insert into goods(Name,Price,Original_price,Sales,Major_flower,Major_flower_plus,Deputy_flower,Classification_flower,Technology,Decoration,Object,Holiday,Scene,Color,Photo_address) 
	 	value(
		 '$_POST[Gname]','$_POST[price]','$_POST[O_price]','$_POST[Sales]','$_POST[Major_flower]','$_POST[Major_flower_plus]','$_POST[Deputy_flower]','$_POST[Classification_flower]','$_POST[Tech]','$_POST[Decoration]',
		 '$_POST[Object]','$_POST[Holiday]','$_POST[Scene]','$_POST[color]','$_POST[Photo_addr]')";

		 mysqli_query($conn,$sql);

		 echo "<script>alert('已添加')</script>";
		 //echo "<input type='button' value='继续添加' onclick='window.location.href=\"./goods_add.html\"'/><br>";
		header("Refresh:1;url=./show_goods.php");
	}

?>