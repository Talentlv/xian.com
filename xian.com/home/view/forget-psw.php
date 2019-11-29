<!DOCTYPE html>
<html>
<head>
	<title>找回密码</title>
	<link rel="stylesheet" type="text/css" href="./css/forget_psw.css">
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
		    color: #333;
		    text-decoration: none;
        }
		.topper .h-left img {
               margin-top: 10px;
		}
		.topper {
			    height: 104px;
			    line-height: 103px;
			    width: 100%；
			    font-size: 14px;
			    color: #333;
			    background-color: #fff;
			    border-bottom: 1px solid #ececec;
			    text-align: center;
			    margin: 0px;
		}
		.wrap {
			height:104px;
		    width: 800px;
		    margin: 0 auto;
   		}
		.topper .h-left {
			    height: 100px;
			    float: left;
  		}
		.topper .h-right {
				    position: relative;
				    float:left;
				    margin-left:50px;
				    height: 100px;
		}
		.topper .h-right .r_link{
					text-align: left;
				    padding: 0 25px;
					height: 100px;
					line-height: 100px;
					display: inline-block;
					margin-left: -3px;
					margin-bottom: 30px;
					float: left;
    	}
		.topper .h-right #search{
   			 display: inline-block;
   			 float: left;
   			 margin-top: 30px;
		}
		input{
   			 vertical-align: middle;
   			 border: none;
   			 background: url("./images/search.png") no-repeat 10px;
   			 background-size: 20px;
   			 text-indent: 40px;
   			 height: 42px;
		}
		.topper .wrap .h-right .search-frame {
  			width: 175px;
  			height: 42px;
  			line-height: 42px;
  			border-bottom: 1px solid #e5e5e5;
    		position: relative;
		}
		.topper .wrap .h-right #h-right-other{
			float: left;
			margin: 20px;
			text-indent: 10px;
		}
		.topper .wrap .h-right #h-right-other img{
			margin: 10px;
		}
		.footer .wrap{
			width: 1200px;
			height: 250px;
			margin: 0 auto;
			position: relative;
		}

		.footer .wrap .footer_item_link{
			float: left;
			margin-top: 60px;
			width: 398px;
		}
		.footer .wrap .footer_item_link a{
			margin: 5px;
			text-decoration: none;
		}
		.footer .wrap .footer_item_link p{
			font-size: 12px;
			color: #333;
			line-height: 2;
			margin-top: 26px;
		}

		.footer .wrap .r_code{
			text-align: center;
			float: left;
			margin-top: 45px;
			width: 398px;
		}
		.footer .wrap .r_code img{
			box-shadow: 0 0 20px #ccc;
			margin-bottom: 15px;
		}

		.footer .wrap .footer_other{
			float: right;
			margin-top: 60px;
			margin-left: 6px;
			width: 398px;
			display: inline-block;
		}
		.footer .wrap .footer_other .footer_other_link{
			margin-bottom: 32px;
		}
		.footer .wrap .footer_other .footer_other_link a{
			text-decoration: none;
			margin: 22px;
			color: #333;
		}
		.footer .wrap .footer_other .footer_other_link a:hover{
			color: red;
		}
		.footer .wrap .footer_other .footer_other_tel{
			margin-left: 24px;
			margin-bottom: 24px;
			color: #777;
		}
		.footer .wrap .footer_other .footer_other_tel span{
			margin-left: 24px;
			color: #333;
			font-weight: 700;
		}
		.footer .wrap .footer_other .footer_other_customs{
			margin-left: 24px;
			padding: 12px 28px;
			border: 1px solid #dcdcdc;
			border-radius: 5px;
			display: inline-block;
			cursor: pointer;
		}
		.footer .wrap .footer_other .footer_other_customs a{
			text-decoration: none;
			color: #333;
		}
		.footer .wrap .footer_other .footer_other_customs a:hover{
			color: red;
		}
		 /*吕有才*//*吕有才*/
		 /*吕有才*//*吕有才*/
		 /*吕有才*//*吕有才*/
		 /*吕有才*/ /*吕有才*/
		 *{
			margin: 0;
			padding: 0;
			list-style: none;
		}
		a{
			color: #333;
			text-decoration: none;
		}
		a:hover{
			color: #ff2f2f;
			cursor: pointer;
		}
		.login-content{
			height: 812px;
			background-image: url(images/bg.png);
		}
		.wrap{
			width: 75%;
			margin: 0 auto;
			position: relative;
		}
		.login-box{
			width: 580px;
			height: 500px;
			position: absolute;
			top: 180px;
			right: 32px;
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 0 20px #e5e5e5;
		}
		.box{
			padding-top: 30px;
			margin: 0 112px;
			border-bottom: 1px solid #e2e2e2;
		}
		.box ul{
			height: 55px;
			padding: 0 60px;
		}
		.clearfix{
			clear: both;
		}
		.box ul li{
			width: 50%;
    		height: 55px;
    		line-height: 55px;
    		font-size: 14px;
    		color: #777;
    		float: left;
    		text-align: center;
		}
		.box ul li.active{
			height: 54px;
    		line-height: 54px;
    		border-bottom: 3px solid #63c170;
    		font-size: 24px;
    		font-weight: 700;
    		color: #63c170;
		}
		.box ul li.active a{
			color: #63c170;
		}
		.login-type{
			height: 25px;
			line-height: 25px;
			text-align: right;
			margin-top: 10px;
			margin-bottom: 10px;
			margin-right: 112px;
		}
		.login-type a{
			color: #63c170;
		}
		.login-formbd{
			margin: 0 112px;
		}
		.item{ position: relative; }
		.input-style{
			width: 296px;
		    height: 30px;
		    padding-right: 30px;
		    padding-top: 30px;
		    outline: none;
		    font-size: 14px;
		    color: #999;
		    border: 0;
		    border-bottom: 1px solid #e5e5e5;
		    vertical-align: middle;
		}
		.input-style:hover{
			color: #333;
			border: 0;
			border-bottom: 1px solid #63c170;
		}
		.button-style{
			width: 100%;
		    padding: 12px 0;
		    display: block;
		    margin: 0 auto;
		    font-size: 18px;
		    color: #fefefe;
		    text-align: center;
		    background-color: #63c170;
		    border: 1px solid #63c170;
		    border-radius: 5px;
		    outline: none;
		    cursor: pointer;
		    vertical-align: middle;
		    margin-top: 50px;
		}
		.forget{
			height: 18px;
			display: block;
			margin-top: 10px;
			color: #999;
		}
		.other-login{
			margin-top: 20px;
			text-align: center;
			color: #999;
		}
		.hr{
			width: 38%;
			height: 1px;
			margin-top: 10px; 
			background-color: #999;
			opacity: 0.3;
		}
		.left{ float: left; }
		.right{ float: right; }
		.login-link{
			margin-top: 20px;
			text-align: center;
		}
		.login-link a{
			display: inline-block;
			margin: 0 10px;
		}
		.login-link .wxicon{
			width: 32px;
			height: 32px;
			background-image: url(images/wx-0.png);
		}
		.login-link .wxicon:hover{
			background-image: url(images/wx-1.png);
		}
		.login-link .qqicon{
			width: 32px;
			height: 32px;
			background-image: url(images/QQ-0.png);
		}
		.login-link .qqicon:hover{
			background-image: url(images/QQ-1.png);
		}
		.login-link .zfbicon{
			width: 32px;
			height: 32px;
			background-image: url(images/zfb-0.png);
		}
		.login-link .zfbicon:hover{
			background-image: url(images/zfb-1.png);
		}
		.button-small {
			width: 40%;
		    padding: 5px 15px;
		    font-size: 14px;
		    color: #fefefe;
		    text-align: center;
		    background-color: #63c170;
		    border: 1px solid #63c170;
		    border-radius: 3px;
		    outline: none;
		    cursor: pointer;
		    vertical-align: middle;
		    float: right;
		    margin-top: -38px;
		    margin-right: 28px;
		}
		#itemcode{
			height: 50px;
			width: 326px;
			line-height: 61px;
			border-bottom: 1px solid #ccc;

		}
		#itemcode:hover{
			border-bottom: 2px solid rgb(99,193,112);
		}
		#code1{
			background: url(./images/code.png) no-repeat 220px center;
			background-size: 60px;
		}
		#code1 a{
			float:right;
		}
		#code11{
			font-size: 15px;
			text-decoration: none;
			border:0px;
		}
	</style>
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
				<a href="./goods.php" class="active">鲜花</a>
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
						<li class="active"><a href="#">找回密码</a></li>						
					</ul>
	
				</div>
				<div class="login-form smscodefrm" style="display: block;">
					<form action="#" method="post">
						<div class="login-formbd">
							<div class="item" style="margin-top:40px;">
								<input type="text" class="input-style" name="username" placeholder="请输入11位手机号">
							</div>
							<div id="itemcode">
								<div id="code1">
									<input type="password" id="code11" name="password" placeholder="请输入图片验证码">
									<a href="" >刷新</a>
								</div>
							</div>
							<div class="item">
								<button type="button" class="button-style">找回密码</button>
							</div>
						</div>
					</form>
				</div>
				<div class="login-form passwordfrm" style="display: none;">
					<div class="login-type">
						<a href="" onclick="$('.smscodefrm').hide();$('.passwordfrm').show();">使用帐户密码登录</a>
					</div>
					<form action="" method="post">
						<div class="login-formbd">
							<div class="item">
								<input type="text" class="input-style" pattern="/^1[0-9]{10}$/" name="mobile" value="" placeholder="请使用手机号登录" autocomplete="off">
							</div>
							
							<div class="item">
								<input type="text" class="input-style" pattern="/^[0-9]{4,6}$/" maxlength="6" name="safecode" value="" placeholder="请输入短信验证码" autocomplete="off">
								
							</div>
							<div class="item">
								<button class="button-style button-small" type="button">获取短信验证码</button>
							</div>
							<li class="sms-safecode-li hide">
							</li>
							<div class="item">
								<button disabled="" class="button-style" type="button">登　录</button>
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

