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
	$con->set_charset('utf8');
	$sql = "select * from address where User_id = '$_SESSION[user_id]'";
	$result = $con->query($sql);
	$con->close();
}
?>
<html>
	<head>
		<title>鲜家网 | 会员中心 &gt; 我的地址</title>
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

		<script src="../js/app.min.js"></script>
		<script src="../js/common.js"></script>
		<script type="text/javascript">
		$(function(){
			$('.khzx-menu dl dt a').click(function(){
				$('.khzx-menu dl').removeClass('active');
				$(this).parent().parent().addClass('active');
			});
			//动态生成
			$('.khzx-menu dl dd a[res=1011]').addClass('active').parent().parent().addClass('active');
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
					<a href="../../" >首页</a>
					<a href="/xianhua/" >鲜花</a>
					<a href="/ysh/" >永生花</a>
					<a href="/lipin/" >礼品</a>
					<a href="/mzyh/" >每周一花</a>
					<a href="/huayu/" >花语</a>
					<a href="/group/" >企业团购</a>
					<span class="search">
						<form action="//www.xian.com/s.html" method="get" name="search">
							<input type="hidden" name="o" value="0">
							<div class="search-frame">
								<input type="text" class="q" name="q" placeholder="请输入关键词搜索" autocomplete="off" value="">
								<button type="submit" class="s" onclick="if($('.q').val()=='') return false;" >
								<i class="icon icon-search iconbounce"></i></button>
							</div>
						</form>
					</span>
					<span class="shop-other iconbounce"> <i class="icon icon-me"></i> </span>
					<div class="h-me-select" style="display: none;">
						<div class="arrow-up"></div>
						<ul>
							<li class="i_1 login"><a href="../login/login.php"><i class="i"></i>登录/注册</a></li>
							<li class="i_2"><a href="index.php"><i class="i"></i>我的鲜家</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="wrap nav">
			<a href="../../">鲜家首页</a><span>&gt;</span><a href="../member/index.php">会员中心</a><span>&gt;</span>我的地址
		</div>


		<div class="wrap">
			<div class="wl240 bgfff khzx-menu">
				<dl>
					<dt><a res="1001" href="../member/index.php"><i class="icon km01"></i>会员首页</a></dt>
				</dl>

				<dl>
					<dt><a res="1002" href="javascript:;"><i class="icon km02"></i>订单信息<i class="icon km"></i></a></dt>
					<dd><a res="1003" href="order/index.php">我的订单</a></dd>
				</dl>

				<dl>
					<dt><a res="1009" href="javascript:;"><i class="icon km04"></i>帐户设置<i class="icon km"></i></a></dt>
					<dd><a res="1010" href="../member/info.php">个人信息</a></dd>
					<dd><a res="1011" href="../address.php">常用收货人</a></dd>
					<dd><a res="1012" href="../member/password.php">修改密码</a></dd>

				</dl>

				<dl>
					<dt><a res="1023" href="../member/logout.php"><i class="icon km06"></i><span class="red">注销</span></a></dt>
				</dl>
			</div>
			
			<div class="wr935 bgfff">
			<div class="member-body">

				<style type="text/css">
				.div-address-add{
					height: 38px;
					line-height: 38px;
					font-size: 14px;
					color: #777;
				}
				a.button-address-add{
					width: 180px;
					height: 40px;
					display: inline-block;
					background-color: #313131;
					color: #fff;
					text-align: center;
					margin-right: 20px;
				}
				.address-list{
					padding: 20px 30px;
					margin: 30px 0;
					background-color: #fff;
					-moz-box-shadow:0 0 15px #ddd;
					-webkit-box-shadow:0 0 15px #ddd;
					box-shadow:0 0 15px #ddd;
				}
				.address-list dt{
					position: relative;
					height: 40px;
					line-height: 40px;
					margin-bottom: 10px;
					font-size: 18px;
					color: #333;
				}
				.address-list dt span{
					width: 60px;
					height: 24px;
					line-height: 24px;
					display: inline-block;
					margin-left: 20px;
					background-color: #cdcdcd;
					font-size: 14px;
					color: #fff;
					text-align: center;
					border-radius: 12px;
				}
				.address-list dt div{
					position: absolute;
					right: 10px;
					top: 0;
				}
				.address-list dt div a{
					font-size: 14px;
					margin: 0 10px;
				}
				.address-list dd{
					height: 26px;
					line-height: 26px;
					font-size: 14px;
					color: #777;
				}
				.address-list dd label{
					width: 90px;
					color: #333;
					display: inline-block;
				}
				</style>				
				<div class="div-address-add">
					
					<a href="edit.php" res="dialog" data-width="600" class="button-address-add">新增收货地址</a>
					您已创建 <?php echo $result->num_rows;?> 个收货地址，最多可建 20 个
				</div>
				<?php
				while($row = $result->fetch_assoc()) {
				?>
					<dl class="address-list">
						<dt>
							<?php echo $row['Name']; if($row['Isdefault']==0) echo "<span>默认</span>";?>
							<div class="address-list-but">
							<a href="update.php?id=<?php echo $row['Address_id'];?>" res="dialog">编辑</a>|
							<a href="delete.php?id=<?php echo $row['Address_id'];?>" >删除</a>
							</div>
						</dt>
						<dd><label>收货人：</label><?php echo $row['Name'];?></dd>
						<dd>
							<label>所在地区：</label><?php echo $row['Area'];?>
						</dd>
						<dd><label>地址：</label><?php echo $row['Address'];?></dd>
						<dd><label>电话：</label><?php echo $row['Phone'];?></dd>
					</dl>

				<?php
				}
				?>
				
			</div>
		</div>
		<div class="clear"></div>
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
				<a href="list.php" title="收藏鲜花">
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