<!DOCTYPE html>
<?php
session_start();
// 如果session为空，即未登录，自动转到登录界面
if(!isset($_SESSION['user_id'])){
	echo "<script>alert('请先登录');</script>";
	
	$home_url = '../../login.php';
	header('Location:'.$home_url);
}
else{
	$con = new mysqli('localhost', 'root', 'root', 'xian');
	if($con->connect_error){
		die("连接失败: " . $con->connect_error);
	}
	$con->set_charset("utf8");
	$sql = "select * from user where User_id = '$_SESSION[user_id]'";
	$result = $con->query($sql);
	$row = $result->fetch_array();
	$con->close();
	
}
?>
<html>
	<head>
		<title>鲜家网 | 会员中心</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<link rel="stylesheet" type="text/css" href="../css/animation.css">
		<link rel="stylesheet" type="text/css" href="../css/common.css">
		<link rel="stylesheet" type="text/css" href="../css/base.css">

		<script src="../js/jquery-1.7.2.min.js"></script>
		<script src="../js/banner.js"></script>
		<script src="../js/lazyload.js"></script>
		<script src="../js/cutdown.js"></script>

		<script type="text/javascript" src="../js/jquery.showDialog.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/showDialog.css"/>

		<script src="../js/app.min.js"></script>
		<script src="../js/common.js"></script>
		<script type="text/javascript">
		$(function(){
			$('.khzx-menu dl dt a').click(function(){
				$('.khzx-menu dl').removeClass('active');
				$(this).parent().parent().addClass('active');
			});
			//动态生成
			$('.khzx-menu dl dd a[res=1001]').addClass('active').parent().parent().addClass('active');

		});
		</script>

	</head>

	<body class="bg">

		<div class="topper">
			<div class="wrap">
				<div class="h-left">
					<img src="../images/logo.png" width="200" height="90">
				</div>
				<div class="h-right">
					<a href="../../index.php">首页</a>
					<a href="../../goods.php">鲜花</a>
					<a href="../../goods.php?keyword=永生花" >永生花</a>
					<!-- <a href="/lipin/" >礼品</a> -->
					<a href="../../week_flower.php" >每周一花</a>
					<a href="../../flower_lan.php" >花语</a>
					<a href="../../groupbuy.php" >企业团购</a>
					<span class="search">
						<form action="../../goods.php" method="get" name="search">
							<!-- <input type="hidden" name="o" value="0"> -->
							<div class="search-frame">
								<input type="text" class="q" name="keyword" placeholder="请输入关键词搜索" autocomplete="off" value="">
								<button type="submit" class="s" onclick="if($('.q').val()=='') return false;" ><i class="icon icon-search iconbounce"></i></button>
							</div>
						</form>
					</span>
					<a class="nb" href="/shop/cart/"><span class="shopcar iconbounce"><i class="icon icon-cart"></i><i class="icon-scar-num">0</i></span></a>
					<span class="shop-other iconbounce"> <i class="icon icon-me"></i> </span>
					<div class="h-me-select" style="display: none;">
						<div class="arrow-up"></div>
						<ul>
							<li class="i_1 login"><a href="../login/login.php"><i class="i"></i>登录/注册</a></li>
							<li class="i_2"><a href="../shop/order/index.php"><i class="i"></i>我的鲜家</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="wrap nav">
			<a href="../../index.php">鲜家首页</a><span>&gt;</span>会员中心
		</div>

		<div class="wrap">
			<div class="wl240 bgfff khzx-menu">
				<dl>
					<dt><a res="1001" href="index.php"><i class="icon km01"></i>会员首页</a></dt>
				</dl>

				<dl>
					<dt><a res="1002" href="javascript:;"><i class="icon km02"></i>订单信息<i class="icon km"></i></a></dt>
					<dd><a res="1003" href="../shop/order/index.php">我的订单</a></dd>

				</dl>

				<dl>
					<dt><a res="1009" href="javascript:;"><i class="icon km04"></i>帐户设置<i class="icon km"></i></a></dt>
					<dd><a res="1010" href="info.php">个人信息</a></dd>
					<dd><a res="1011" href="../shop/address.php">常用收货人</a></dd>
					<dd><a res="1012" href="password.php">修改密码</a></dd>

				</dl>

				<dl>
					<dt><a res="1023" href="logout.php"><i class="icon km06"></i><span class="red">注销</span></a></dt>
				</dl>
			</div>
			
			<div class="wr935 bgfff">
				<div class="member-body">
				
					<div class="w130 left tc">
						
						<div class="photo"><img id="photo" src="../images/head.jpg" width="90" height="90" /></div>
						<div class="file-up" style="margin:15px 0 0 33px;">
							<a href="javascript:void(0)"><label>头像上传</label></a>
							<input type="file" name="photo" />
						</div>
						
					</div>
					<div class="w230 left">
						
						<div class="member-aliasname">
							<span ></span><label>vip <?php echo $row['Vip_level'];?></label>
						</div>
						<p class="member-p">余额：<?php echo $row['Money'];?></p>
						<p class="member-p">积分：<?php echo $row['Score'];?></p>
						
						<p class="member-p">优惠券：<?php echo $row['Coupon'];?> 张</p>
					</div>
					<div class="w380 left kjts">
						<ul class="clearfix">
							<li><div class="img"><img src="../images/dfk.png" /></div><a href="../shop/order/index.php">待付款<span></span></a></li>
							<li><div class="img"><img src="../images/jrps.png" /></div><a href="../shop/order/index.php">今日配送<span></span></a></li>
							<li><div class="img"><img src="../images/dpj.png" /></div><a href="../shop/order/index.php">待评价<span></span></a></li>
						</ul>
					</div>
					<div class="clear"></div>
					<div class="h60 line-e7"></div>
					<div class="h30"></div>

					<div class="wdsc-box">
						<div class="box-bar"><span class="box-title">我的订单</span></div>
						
					</div>

				</div>
			</div>
			<div class="clear"></div>
		</div>

		<div class="footer ">
			<div class="wrap">
				<div class=" footer-items">
					<div class="footer-item footer-link bdsharebuttonbox">
						<a class="hover footer-link-wx" href="javascript:;" data-cmd="weixin"></a>
						<a class="hover footer-link-qq" href="javascript:;" data-cmd="qzone"></a>
						<a class="hover footer-link-wb" href="javascript:;" data-cmd="tsina"></a>
						<p>Copyright © 2018 鲜家 All rights reserved.<br/>Powered by Bo Wen Technology Co., Ltd.<br />工信部备：辽ICP备18014953号-2<br />公安部备：21010202000602</p>
					</div>
					<div class="footer-item r_code">
						<img data-lazy="../images/r_code.png" alt="">
						<p>微信关注鲜家，立享优惠</p>
						<script type="text/javascript" src="../js/mobile.js"></script>
					</div>
					<div class="footer-item footer-others">
						<div class="footer-other">
							<div class="footer-other-link">
								<span><a href="#">售后服务</a></span>
								<span><a href="#">同城鲜花</a></span>
								<span><a href="#">关于我们</a></span>
							</div>
							<div class="footer-other-tel">全国订购热线:<span>400-888-1571</span></div>
							<div class="footer-other-tel">商务合作热线:<span>024-31128100</span></div>
							<div class="footer-other-customs">
								<a class="hover" href="javascript:;" onclick="openChat();">在线客服</a>
							</div>
						</div>
					</div>
				</div> 
			</div>
		</div>
		<script type="text/javascript" src="../js/leyu-mini.js"></script>
		<div class="rside">

		<ul>

			<li class="ibut favorite ">
				<a href="favorite/list.php" title="收藏鲜花">
					<i class="icon-rside icon-favorite"></i>
				</a>
			</li>
			<li class="ibut history ">
				<a href="javascript:;" title="历史记录">
					<i class="icon-rside icon-history"></i>
				</a>
			</li>
			<li class="ibut qrcode ">
				<a href="javascript:;" title="关注微信公众号">
					<i class="icon-rside icon-qrcode"></i>
				</a>
				<div class="rsidepop">
					<div class="fqrcode tc">
						<p class="note">回复“礼物”有惊喜！" 活动多多，在鲜家遇见幸福</p>
						<p class="img">
							<img src="../images/r_code.png" width="128" height="130">
						</p>
						<p class="gzh">公众号</p>
					</div>
				</div>
			</li>
			<li class="ibut expanded iconbounce">
				<a href="javascript:;" onclick="$(function () {$('html').animate({ scrollTop: 0 }, 500);$('body').animate({scrollTop: 0}, 500);})" title="顶部">
				<i class="icon-rside icon-expanded"></i>顶部</a>
			</li>
		</ul>
		</div>

	</body>
</html>