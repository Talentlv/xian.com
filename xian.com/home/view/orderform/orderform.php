<?php
	session_start();
	// 如果session为空，即未登录，自动转到登录界面
	if(!isset($_SESSION['user_id'])){
		echo "<script>alert('请先登录');</script>";
		$home_url = 'login.php';
		header('Location:'.$home_url);
	}
?>
<meta charset="utf-8">
<!DOCTYPE html>
<html>
<head>
	<title>鲜花页</title>
	<!-- 图标抖动 -->
	<link rel="stylesheet" type="text/css" href="css/gfh_orderform_css/animation.css">
	<link rel="stylesheet" type="text/css" href="css/gfh_orderform_css/login.css">
	<link rel="stylesheet" type="text/css" href="css/gfh_orderform_css/orderform.css">
	<!-- 倒计时 -->
	<link rel="stylesheet" type="text/css" href="css/gfh_orderform_css/jcountdown.css">

	<script type="text/javascript" src="js/gfh_orderform_js/jquery.min.js"></script>
	<!-- 标签hover -->
	<script type="text/javascript" src="js/gfh_orderform_js/hover.js"></script>
	<!-- 倒计时 -->
	<script type="text/javascript" src="js/gfh_orderform_js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="js/gfh_orderform_js/jquery.jcountdown.min.js"></script>
	<script type="text/javascript" src="js/gfh_orderform_js/countdown.js"></script>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		a{
			text-decoration: none;
		}
		a:hover{
			text-decoration: none;
		}
		.gfh_17{
			padding-top:0px;
			width:190px;
			height:40px;
			font-size: 20px;
			color:#fff;
			text-align: center;
			margin-top: 40px;
			position:absolute;
			right:30px;
			background: rgb(200,100,87);
			border-radius:5px;
		}
	</style>
</head>
<body>
	<div class="topper">
		<div class="topper-wrap">
			<div class="logo">
				<a href="#"><img src="images/orderform_images/logo.png"></a>
			</div>
			<div class="menu">
				<a href="../index.php">首页</a>
				<a href="../goods.php" class="active">鲜花</a>
				<a href="../goods.php?keyword=永生花">永生花</a>
				<!-- <a href="#">礼品</a> -->
				<a href="../week_flower.php">每周一花</a>
				<a href="../flower_lan.php">花语</a>
				<a href="../groupbuy.php">企业团购</a>
				<div class="search">
					<form action="../good.php" method="get" name="search">
						<div class="search-frame">
							<input type="text" name="keyword" class="q" placeholder="请输入关键词搜索" autocomplete="off">
							<button type="submit" class="s" onclick="if ($('.q').val()=='') { return false;}">
								<i class="icon icon-search iconbounce"></i>
							</button>
						</div>
					</form>
				</div>
				<a href="#" class="nb">
					<div class="shopcar iconbounce">
						<i class="icon icon-cart"></i>
						<i class="icon-scar-num">0</i>
					</div>
				</a>
				<div class="mycenter iconbounce">
					<i class="icon icon-me"></i>
				</div>
				<div class="mycenter-select" style="display: none;">
					<div class="transparent"></div>
					<ul>
						<li class="one">
							<a href="../useracount/shop/order/index.php"><i class="i"></i>我的鲜家</a>
						</li>
						<!-- <li class="two">
							<a href="#"><i class="i"></i>我的收藏</a>
						</li>
						<li class="thr">
							<a href="#"><i class="i"></i>联系客服</a>
						</li>
						<li class="four">
							<a href="#"><i class="i"></i>帮助中心</a>
						</li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="list" style="display: none;">
		<div class="footer-wrap" style="display: none;">
			<div class="list-l">
				<img src="images/orderform_images/h-list_10_img.png">
			</div>
			<div class="list-r">
				<div class="list-r-title">
					<span>用途</span>
					<span>销售价</span>
					<span>花材</span>
				</div>
				<div class="list-r-content">
					<div>
						<a href="#">爱情鲜花</a>
						<a href="#">生日鲜花</a>
						<a href="#">友情鲜花</a>
						<a href="#">周年纪念</a>
						<a href="#">婚庆鲜花</a>
						<a href="#">祝贺鲜花</a>
						<a href="#">探病慰问</a>
						<a href="#">问候长辈</a>
						<a href="#">商务鲜花</a>
						<a href="#">道歉鲜花</a>
					</div>
					<div>
						<a href="">150元以内</a>
						<a href="">150-199元</a>
						<a href="">200-249元</a>
						<a href="">250-399元</a>
						<a href="">400-499元</a>
						<a href="">500-599元</a>
						<a href="">600-699元</a>
						<a href="">700元以上</a>
					</div>
					<div>
						<a href="/xianhua/mg/">玫瑰花</a>
						<a href="/xianhua/knx/">康乃馨</a>
						<a href="/xianhua/bhh/">百合花</a>
						<a href="/xianhua/xrk/">向日葵</a>
						<a href="/xianhua/zll/">紫罗兰</a>
						<a href="/xianhua/mtx/">满天星</a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-wrap" style="display: none;">
			<div class="list-l">
				<img src="images/orderform_images/h-list_11_img.png">
			</div>
			<div class="list-r">
				<div class="list-r-title">
					<span>类别</span>
					<span>用途</span>
					<span>销售价</span>
				</div>
				<div class="list-r-content">
					<div>
						<a href="/ysh/jdhh/">经典花盒</a>
						<a href="/ysh/ysph/">永生瓶花</a>
						<a href="/ysh/jxmg/">巨型玫瑰</a>
						<a href="/ysh/tsysh/">特色永生花</a>
						<a href="/ysh/yshgz/">永生花公仔</a>
					</div>
					<div>
						<a href="/ysh/slr/">送恋人爱人</a>
						<a href="/ysh/szb/">送父母长辈</a>
						<a href="/ysh/sts/">送朋友同事</a>
					</div>
					<div>
						<a href="/ysh/jg1/">100-199元</a>
						<a href="/ysh/jg2/">200-299元</a>
						<a href="/ysh/jg3/">300-399元</a>
						<a href="/ysh/jg4/">400-499元</a>
						<a href="/ysh/jg5/">500-599元</a>
						<a href="/ysh/jg6/">600-699元</a>
						<a href="/ysh/jg7/">700元以上</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="height:18px"></div>
	<div class="footer-wrap">		
		<a href="../index.php" class="gfh_1" style="font-size:14px;">鲜家首页</a>
		<span>></span>
		<a href="#" class="gfh_1" style="font-size:14px;">会员中心</a>
		<span>></span>
		<span style="font-size:14px;">支付订单</span>
	</div>

	<?php
		$conn=mysqli_connect('127.0.0.1','root','root','xian');
		$arr = $_GET['data'];
		$Ps = $_GET['card_info'];
		$id = $_GET['sNow'];
		$addr = $_GET['addr_id'];
		$uid = (int)$_GET['uid'];



		$json = json_decode($arr, true);
		$row = [];
		$goods_name="";
		$total_count =0;
		$total_price = 0;
		$temp_t = substr($_GET['sNow'],0,8);
		$O_time = substr($temp_t,0,4).'-'.substr($temp_t,4,2).'-'.substr($temp_t,6,2);

		$D_time = substr($_GET['addr_date'],0,10);
		$time_f = substr($_GET['addr_date'],10);

		for ($i=0; $i < count($json); $i++) { 
			# code..

			$goodsid =  $json[$i]['goodsid'];
			$count = $json[$i]['count'];			
			$sql = "select Name,Price,Photo_address from goods where Goods_id ='$goodsid'";
			$res = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($res);
			$photo = explode('$',$row['Photo_address']);		
			$price = $row['Price']*$count;
			$sql2 = "insert into orders(Order_id,Address_id,User_id,Goods_id,Goods_count,Order_time,Delivery_time,Time_frame,Message,Freight,Order_status) value('$id','$addr','$uid','$goodsid','$count','$O_time','$D_time','$time_f','$Ps','$price','未支付')";
			mysqli_query($conn,$sql2);
			$goods_name = $goods_name.$row['Name'].' ';
			$total_count+=$count;
			$total_price += $price;
		}
	?>

	<!-- Id,Goods_name,Goods_price,Goods_amount,Order_time,Order_phone,Ps,Address,Price -->
	<?php
		$sql3 = "select Name,Area,Address from address where Address_id ='$addr'";
		$row2="";
		$res = mysqli_query($conn,$sql3);
		$row2 = mysqli_fetch_assoc($res);
	?>

	<div class="footer-wrap">
	<div style="height:18px"></div>
		<div class="gfh_2">		
			<div class="gfh_3"><b>收货信息</b></div>

			<div class="gfh_4">			
				<div>
					<span>配送地址</span>
					<span class="gfh_6"><?php echo $row2['Area']?></span>
				</div>
				<div class="gfh_5">
					<span>详细地址</span>
					<span class="gfh_6"><?php echo $row2['Address']?></span>
				</div>
				<div class="gfh_5">
					<span>收货人</span>
					<span class="gfh_6"><?php echo $row2['Name']?></span>
				</div>
			</div>
			<div class="gfh_4">
				<div>
					<span>送达时间：</span>
					<span class="gfh_8"><?php echo $_GET['addr_date']?></span>
				</div>
				<div class="gfh_7">
					<span>订货电话：</span>
					<span class="gfh_8"><?php echo ' '.$_GET['mobile']?></span>
				</div>
				<div class="gfh_7">
					<span>订单来源：</span>
					<span class="gfh_8">鲜花网</span>
				</div>
				<div class="gfh_7">
					<span>留言信息：</span>
					<span class="gfh_8 liuyan"><?php echo $Ps?></span>
				</div>
			</div>
		</div>
	</div>
	<div style="height:30px;"></div>
	<div class="footer-wrap">
		<div class="gfh_9">
			<div style="float:left;margin-top: 20px;">商品列表</div>
			<div class="gfh_10" style="margin-top: 20px;">数量</div>
			<div class="gfh_11" style="margin-top: 20px;">支付金额</div>
		</div>
		<div>
			<?php
			for ($i=0; $i < count($json); $i++) { 
			# code..

			$goodsid =  $json[$i]['goodsid'];
			$count = $json[$i]['count'];			
			$sql = "select Name,Price,Photo_address from goods where Goods_id ='$goodsid'";
			$res = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($res);
			$photo = explode('$',$row['Photo_address']);			
			$price = $row['Price']*$count;
			echo '
			<div class="one">
				<img src="../'.$photo[0].'" style="height: 100px;width: 100px">
				<div class="gfh_12">'.$row['Name'].'</div>
				<div class="gfh_10">'.$count.'</div>
				<div class="gfh_11">￥'.$row['Price'].'</div>

			</div>';
		}
		?>
			<div style="clear: both;"></div>
		</div>
	</div>
	<div style="clear:both;"></div>
	<div style="height:40px"></div>





	<div style="border-bottom: 1.5px solid rgb(222,220,220); width:1200px;margin:0 auto"></div>
	<div class="footer-wrap">
		<div>
			<div class="gfh_13">选择支付方式</div>
			<div><a href=""><img src="images/orderform_images/2.jpg" class="gfh_14"></a></div>
			<div style="clear:both;"></div>
			<div class="gfh_15">支付金额：</div><div class="gfh_16">￥<span id="total_price"><?php echo $total_price ?></span></div>
			<button class="gfh_17" id="pay">立即支付</button>
		</div>
	</div>
	
	<script type="text/javascript">
		$('#pay').on('click', function() {

			var orderid = <?php echo $id;?>;
			console.log(orderid);

			var total_price = document.getElementById('total_price').innerText;
			console.log(total_price);

			var goods_item = '<?php echo $goods_name;?>';
			console.log(goods_item);
			var a = "../alipay/index.php?id="+orderid+"&price="+total_price+"&item="+goods_item;

			window.location.href=a; 

		});
	</script>


	<div style="height:80px;"></div>
	<!-- footer -->
	<div class="footer">
		<div class="footer-wrap">
			<div class="footer-content">
				<div class="footer-item footer-link">
					<a href="#" class="hover footer-link-wx"></a>
					<a href="#" class="hover footer-link-qq"></a>
					<a href="#" class="hover footer-link-wb"></a>
					<p>Copyright © 2018 鲜家 All rights reserved.<br>
						Powered by Bo Wen Technology Co., Ltd.<br>
						工信部备：辽ICP备18014953号-2<br>
						公安部备：21010202000602
					</p>
				</div>
				<div class="footer-item r-code">
					<img src="images/orderform_images/r_code.png">
					<p>微信关注鲜家，立享优惠</p>
				</div>
				<div class="footer-item footer-others">
					<div class="footer-other">
						<div class="footer-other-link">
							<span><a href="#">售后服务</a></span>
							<span><a href="#">同城鲜花</a></span>
							<span><a href="#">关于我们</a></span>
						</div>
						<div class="footer-other-tel">
							全国订购热线:<span>400-888-1571</span>
						</div>
						<div class="footer-other-tel">
							商务合作热线:<span>024-31128100</span>
						</div>
						<div class="footer-other-customs">
							<a href="#" class="hover">在线客服</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>