
<!DOCTYPE html>
<html>
<head>
	<title>登录界面</title>
	<script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/register_css.css">
	<link rel="stylesheet" type="text/css" href="css/animation.css">
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<!-- 倒计时 -->

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- 标签hover -->
	<script type="text/javascript" src="js/hover.js"></script>
	<!-- 倒计时 -->
	<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.jcountdown.min.js"></script>
	<script type="text/javascript" src="js/countdown.js"></script>
	<style type="text/css">
		a{
			text-decoration: none;
		}
	</style>
	<script>
	function chang_codes(){
		$('#img_code').click(function(){
			$('#img_code').attr('src',"code.php?t="+Math.random());
		});
	}
	chang_codes();
</script>
</head>
<body>
	<div>
	<div class="topper">
		<div class="topper-wrap">
			<div class="logo">
				<a href="#"><img src="images/logo.png"></a>
			</div>
			<div class="menu">
				<a href="index.html">首页</a>
				<a href="./goods.php">鲜花</a>
				<a href="./goods.php">永生花</a>
				<a href="./week_flower.php">每周一花</a>
				<a href="./week_flower.php">花语</a>
				<a href="./groupbuy.php">企业团购</a>
				<div class="search">
					<form action="goods.php" method="get" name="search">
						<div class="search-frame">
							<input type="text" name="keyword" class="q" placeholder="请输入关键词搜索" autocomplete="off" value="">
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
							<a href="#"><i class="i"></i>我的鲜家</a>
						</li>
						<li class="two">
							<a href="#"><i class="i"></i>我的收藏</a>
						</li>
						<li class="thr">
							<a href="#"><i class="i"></i>联系客服</a>
						</li>
						<li class="four">
							<a href="#"><i class="i"></i>帮助中心</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="list" style="display: none;">
		<div class="footer-wrap" style="display: none;">
			<div class="list-l">
				<img src="images/h-list_10_img.png">
			</div>
			<div class="list-r">
				<div class="list-r-title">
					<span>用途</span>
					<span>销售价</span>
					<span>花材</span>
					<span>枝数</span>
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
					<div>
						<a href="/xianhua/zs13/">6枝</a>
						<a href="/xianhua/zs16/">8枝</a>
						<a href="/xianhua/zs19/">9枝</a>
						<a href="/xianhua/zs25/">11枝</a>
						<a href="/xianhua/zs29/">12枝</a>
						<a href="/xianhua/zs33/">13枝</a>
						<a href="/xianhua/zs99/">15枝</a>
						<a href="/xianhua/zs16/">16枝</a>
						<a href="/xianhua/zs19/">19枝</a>
						<a href="/xianhua/zs21/">21枝</a>
						<a href="/xianhua/zs25/">25枝</a>
						<a href="/xianhua/zs29/">29枝</a>
						<a href="/xianhua/zs33/">33枝</a>
						<a href="/xianhua/zs66/">66枝</a>
						<a href="/xianhua/zs99/">99枝以上</a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-wrap" style="display: none;">
			<div class="list-l">
				<img src="images/h-list_11_img.png">
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
	<div class="login-content">
		<div class="wrap">
			<div class="login-box">
				<div class="box">
					<ul class="clearix">
						<li><a href="./login.php">登录</a></li>
						<li class="active"><a href="#">注册</a></li>						
					</ul>
	
				</div>
				<div class="login-form smscodefrm" style="display: block;">
					<form action="../controller/register.php" method="post">
						<div class="login-formbd">
							<div class="item" style="margin-top:40px;">
								<input type="text" class="input-style" name="phone" placeholder="请输入11位手机号" autocomplete="off">
							</div>
							<div class="item" style="margin-top:0px;">
								<input type="password" class="input-style" name="password" placeholder="请设置登录密码" autocomplete="off">
							</div>
							<div id="itemcode">
								<div id="code1">
									<input type="text" id="code11" name="code" placeholder="请输入图片验证码" autocomplete="off">
									<img class="imgcode" src="code.php">
									<a href="./register2.php" >刷新</a>
								</div>
							</div>
							<div class="item">
								<button type="submit" class="button-style">立即注册</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="wrap">
			<div class="footer_item_link">
				<a href="">
					<img src="./images/wx.png">
				</a>
				<a href="">
					<img src="./images/qq.png">
				</a>
				<a href="">
					<img src="./images/sina.png">
				</a>
				<p>
					Copyright © 2018 鲜家 All rights reserved.
					<br>
					Powered by Bo Wen Technology Co., Ltd.
					<br>
					工信部备：辽ICP备18014953号-2
					<br>
					公安部备：21010202000602
				</p>			
			</div>
			<div class="r_code">
				<img src="./images/r_code.png">
				<p>微信关注鲜家，立享优惠</p>
			</div>
			<div class="footer_other">
				<div class="footer_other_link">
					<span>
						<a href="">售后服务</a>
					</span>
					<span>
						<a href="">同城鲜花</a>
					</span>
					<span>
						<a href="">关于我们</a>
					</span>
				</div>
				<div class="footer_other_tel">
					全国订购热线：
					<span>400-888-1571</span>
				</div>
				<div class="footer_other_tel">
					商务合作热线：
					<span>024-31128100</span>
				</div>
				<div class="footer_other_customs">
					<a href="">在线客服</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>