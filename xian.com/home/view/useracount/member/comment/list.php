<!DOCTYPE html>
<?php
session_start();
// 如果session为空，即未登录，自动转到登录界面
if(!isset($_SESSION['user_id'])){
	$home_url = '../../login/login.php';
	header('Location:'.$home_url);
}
?>
<html>
	<head>
		<title>鲜家网 | 会员中心 &gt; 我的评价</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<link rel="stylesheet" type="text/css" href="../../css/animation.css">
		<link rel="stylesheet" type="text/css" href="../../css/common.css">
		<link rel="stylesheet" type="text/css" href="../../css/base.css">

		<script src="../../js/jquery-1.7.2.min.js"></script>
		<script src="../../js/banner.js"></script>
		<script src="../../js/lazyload.js"></script>
		<script src="../../js/cutdown.js"></script>

		<script type="text/javascript" src="../../js/jquery.showDialog.js"></script>
		<link rel="stylesheet" type="text/css" href="../../css/showDialog.css"/>

		<script src="../../js/app.min.js"></script>
		<script src="../../js/common.js"></script>
		<script type="text/javascript">app.uri='';app.root='//www.xian.com';</script>
		<script type="text/javascript">
		$(function(){
			$('.khzx-menu dl dt a').click(function(){
				$('.khzx-menu dl').removeClass('active');
				$(this).parent().parent().addClass('active');
			});
			//动态生成
			$('.khzx-menu dl dd a[res=1005]').addClass('active').parent().parent().addClass('active');
		});
		</script>


	</head>

	<body class="bg">

		<div class="topper">
			<div class="wrap">
				<div class="h-left">
					<img src="../../images/logo.png" width="200" height="90">
				</div>
				<div class="h-right">
					<span class="search">
						<form action="//www.xian.com/s.html" method="get" name="search">
							<input type="hidden" name="o" value="0">
							<div class="search-frame">
								<input type="text" class="q" name="q" placeholder="请输入关键词搜索" autocomplete="off" value="">
								<button type="submit" class="s" onclick="if($('.q').val()=='') return false;" ><i class="icon icon-search iconbounce"></i></button>
							</div>
						</form>
					</span>
					<span class="shop-other iconbounce"> <i class="icon icon-me"></i> </span>
					<div class="h-me-select" style="display: none;">
						<div class="arrow-up"></div>
						<ul>
							<li class="i_1 login"><a href="../../login/login.php"><i class="i"></i>登录/注册</a></li>
							<li class="i_2"><a href="../../shop/order/index.php"><i class="i"></i>我的鲜家</a></li>
							<li class="i_3"><a href="favorite/list.php"><i class="i"></i>我的收藏</a></li>
							<li class="i_4"><a href="javscript:;" onclick="openChat();"><i class="i"></i>联系客服</a></li>
							<li class="i_5"><a href="../../mzyh/"><i class="i"></i>帮助中心</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="wrap nav">
			<a href="#">鲜家首页</a><span>&gt;</span><a href="../index.php">会员中心</a><span>&gt;</span>我的收藏
		</div>


		<div class="wrap">
			<div class="wl240 bgfff khzx-menu">
				<dl>
					<dt><a res="1001" href="../index.php"><i class="icon km01"></i>会员首页</a></dt>
				</dl>

				<dl>
					<dt><a res="1002" href="javascript:;"><i class="icon km02"></i>订单信息<i class="icon km"></i></a></dt>
					<dd><a res="1003" href="../../shop/order/index.php">我的订单</a></dd>
					<dd><a res="10030" href="../../shop/order/d/0.php" style="padding-left:15px;">待付款</a></dd>
					<dd><a res="10031" href="../../shop/order/d/1.php" style="padding-left:15px;">今日配送</a></dd>
					<dd><a res="10032" href="../../shop/order/d/2.php" style="padding-left:15px;">待评价</a></dd>
					<dd><a res="1004" href="../favorite/list.php">我的收藏</a></dd>
					<dd><a res="1005" href="list.php">我的评价</a></dd>
				</dl>

				<dl>
					<dt><a res="1009" href="javascript:;"><i class="icon km04"></i>帐户设置<i class="icon km"></i></a></dt>
					<dd><a res="1010" href="../info.php">个人信息</a></dd>
					<dd><a res="1011" href="../../shop/address.php">常用收货人</a></dd>
					<dd><a res="1012" href="../password.php">修改密码</a></dd>

				</dl>

				<dl>
					<dt><a res="1016" href="javascript:;"><i class="icon km05"></i>付款设置<i class="icon km"></i></a></dt>
					<dd><a res="1017" href="../../shop/voucher.php">我的优惠券</a></dd>
					<dd><a res="1018" href="../../shop/pay.php">在线补款</a></dd>
				</dl>

				<dl>
					<dt><a res="1019" href="javascript:;"><i class="icon km06"></i>客户服务<i class="icon km"></i></a></dt>
					<dd><a res="1020" href="javascript:openChat();">客户留言</a></dd>
					<dd><a res="1021" href="javascript:openChat();">投诉留言</a></dd>
					<dd><a res="1022" href="javascript:openChat();">在线客服</a></dd>
				</dl>

				<dl>
					<dt><a res="1023" href="../logout.php"><i class="icon km06"></i><span class="red">注销</span></a></dt>
				</dl>
			</div>
			
			<div class="wr935 bgfff">
				<div class="member-body">
					<?php
					if(!isset($_SESSION['user_id'])){
					?>
						<div class="error-box" style="font-size:18px;padding:150px 0 300px 0;text-align:center;">
						<div class="error-box box-info">对不起，当前没有任何评论！</div>
					</div>
					<?php
					}
					else{
					?>
						<div class="wdsc-box">
							<div class="box-con">
								<ul class="clearfix">
									<li>
										<a class="info imghover" href="/xianhua/45744.html">
											<div class="img"><img src="//www.xian.com/upload/image/2019-06/14/16edd_bc2e.jpg" height="175" /></div>
											<h5>把你放在心上·19枝红玫瑰韩式花束</h5>
											<p class="price b"><span>¥</span>158.00</p>
										</a>
									</li>
									<li>
										<a class="info imghover" href="/xianhua/45059.html">
											<div class="img"><img src="//www.xian.com/upload/image/2019-06/14/2612b_1752e.jpg" height="175" /></div>
											<h5>爱情密码·13枝红玫瑰纯美花束</h5>
											<p class="price b"><span>¥</span>148.00</p>
										</a>
									</li>
								</ul>
							</div>
						</div>
						
					<?php	
					}
					?>
					
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
					<img data-lazy="../../images/r_code.png" alt="">
					<p>微信关注鲜家，立享优惠</p>
					<script type="text/javascript" src="../../js/mobile.js"></script>
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
		<script type="text/javascript" src="../../js/leyu-mini.js"></script>
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
							<img src="../../images/r_code.png" width="128" height="130">
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