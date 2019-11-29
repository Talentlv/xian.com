<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/footer.css">
	<link rel="stylesheet" type="text/css" href="./css/top.css">
	<link rel="stylesheet" type="text/css" href="./css/group_buy_css.css">
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

		*{
			padding: 0px;
			margin: 0px;
		}
		a{
		    color: #333;
		    text-decoration: none;
        }
		.backup{
			height: 60px;
		}
		.top_2{
			height: 420px;
			width: 800px;
			background: #fff;
			margin: 0px auto;
			text-align: center;
			margin-top: 30px;
		}
		.top_p1{
			font-size: 32px;
			color: #333;
		}
		.top_p2{
			font-size: 20px;
			color: #777;
			margin: 10px;
		}
		.top_info_1{
			float: left;
			width: 200px;
			height: 240px;
			margin-left: 45px;
		}
		.top_info_t1{
			margin-top: 40px;
			font-weight: 700;
			font-size: 18px;
		}
		.top_info_t2{
			color: #777;
			font-size: 18px;
			margin-top: 26px;
		}
		.text1{
			height: 706px;
			width: 100%;
			background: rgb(248,248,248);
			text-align: center;
			width: 100%;
		}
		.text_t1{
			font-size: 32px;
			color: #333;

		}
		.text_t2{
			font-size: 20px;
			color: #777;
			margin-top: 20px;
		}
		.text_info{
			width: 1500px;
			margin: 0px auto;
			height: 432px;
			text-align: center;
		}
		.text1_info_1{
			width: 374px;
			height: 432px;
			background: #fff;
			float: left;
			margin: 0px auto;		}
		.text1_info_t1{
			font-size: 22px;
		    margin-top: 27px;
		    margin-bottom: 20px;
		    color: #333;
		}
		.text1_info_t2{
			margin-top: 10px;
		}
		.case{
			height: 856px;
			text-align: center;
			border-radius: 5px;
			width: 100%;

		}
		.case_info{
			width: 1300px;
			text-align: center;
			margin:0 auto;
		}
		.case_info_1{
			width: 374px;
			height: 553px;
			margin-left: 50px;
			text-align: left;
			box-shadow: 0 0 20px #e5e5e5;
			float: left;
		}
		.case_text{
			width: 90%;
			margin: 0 auto;
		}
		.tt{
			font-size: 22px;
		    margin-bottom: 20px;
		    color: #333;
		    font-weight: 700;
		}
		.s1{
			color: #333;
			font-weight: bold;
		}
		.s2{
			color: #777;
		}
		.advantage{
			height: 558px;
			width: 100%;
			background: rgb(248,248,248);
			text-align: center;
		}
		.ad_img img{
			margin-left: 20px;
		}

	</style>
</head>
<body>
	<div class="bigbox">
		<div class="topper">
		<div class="topper-wrap">
			<div class="logo">
				<a href="#"><img src="images/logo.png"></a>
			</div>
			<div class="menu">
				<a href="index.php">首页</a>
				<a href="./goods.php">鲜花</a>
				<a href="./goods.php?keyword=永生花">永生花</a>
				<a href="./week_flower.php">每周一花</a>
				<a href="./flower_lan.php"  class="active">花语</a>
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
		<div class="top">
			<a href="#"><img src="./images/group_buy/group_banner.png" style="width: 100%;"></a>
			<div class="top_2">
				<p class="top_p1">为什么企业要定制鲜花？</p>
				<p class="top_p2">GROUP DO BUSINESSES NEED TO CUSTOMIZE FLOWERS?</p>
				<div class="backup"></div>
				<div class="top_info">
					<div class="top_info_1">
						<img src="./images/group_buy/group_infos_01.png">	
						<p class="top_info_t1">客户维护</p>
						<p class="top_info_t2">满足客户情感需求，增强客户黏性，提升口碑。</p>
					</div>
					<div class="top_info_1">
						<img src="./images/group_buy/group_infos_02.png">	
						<p class="top_info_t1">员工关怀</p>
						<p class="top_info_t2">提高员工满意度, 工作效能大飞跃</p>
					</div>
					<div class="top_info_1">
						<img src="./images/group_buy/group_infos_03.png">	
						<p class="top_info_t1">促销活动</p>
						<p class="top_info_t2">激发消费者购买欲, 促进沟通的法宝</p>
					</div>
				</div>
			</div>
			<div class="text1">
				<div class="backup"></div>
				<p class="text_t1">我们能做什么？</p>
				<p class="text_t2">WHAT CAN WE DO?</p>
				<div class="backup"></div>
				<div class="text_info">
					<div class="text1_info_1" style="margin-left: 140px;">
						<img src="./images/group_buy/group_doit_01.png">
						<p class="text1_info_t1">鲜花批发采购</p>
						<p class="text1_info_t2">高质量鲜花采购渠道</p>
						<p class="text1_info_t2">价格厚道，品质服务</p>
					</div>
					<div class="text1_info_1" style="margin-left: 50px;">
						<img src="./images/group_buy/group_doit_02.png">
						<p class="text1_info_t1">鲜花批发采购</p>
						<p class="text1_info_t2">高质量鲜花采购渠道</p>
						<p class="text1_info_t2">价格厚道，品质服务</p>
					</div>
					<div class="text1_info_1" style="margin-left: 50px;">
						<img src="./images/group_buy/group_doit_03.png">
						<p class="text1_info_t1">鲜花批发采购</p>
						<p class="text1_info_t2">高质量鲜花采购渠道</p>
						<p class="text1_info_t2">价格厚道，品质服务</p>
					</div>
				</div>
			</div>
			<div class="case">
				<div class="backup"></div>
				<p class="text_t1">案例</p>
				<p class="text_t2">CASE</p>
				<div class="backup"></div>
				<div class="case_info">
					<div class="case_info_1">
						<img src="./images/group_buy/group_logo_01.png">
						<div class="case_text">
							<p class="tt" style="text-align: center;">泰康人寿客户回馈计划<p>
							<span class="s1">需求：</span>
							<span class="s2">在母亲节当天，贴心问候分布在全国的泰康人寿的优质客户，每束花附送泰康人寿自制精美贺卡。</span>
							<p> </p>
							<span class="s1"> 实施方案:</span>
							<span class="s2">1.根据客户群体特征一致性，精选相对应的鲜花礼品方案。</span>
							<p class="s2">2.根据泰康人寿提供的客户配送资料，提前将泰康人寿特制精美贺卡配送至全国对应城市加盟店。</p>
							<p class="s2">3.母亲节当天，泰康人寿贺卡与精选鲜花同时配送至客户所在地。</p>
							<p class="s2">4.配送完毕后进行信息及时反馈。</p>
						</div>
					</div>
					<div class="case_info_1">
						<img src="./images/group_buy/group_logo_02.png">
						<div class="case_text">
							<p class="tt" style="text-align: center;">滴滴出行客户回馈计划<p>
							<span class="s1">需求：</span>
							<span class="s2">需求：常年给全国各地滴滴特定员工送出生日祝福鲜花蛋糕及配送贺卡，无论员工身处何地，祝福订单须在生日当天送达。</span>
							<p> </p>
							<span class="s1"> 实施方案:</span>
							<span class="s2">1.与滴滴出行核对，在系统录入1年内配送名单及性别年龄等相关信息。</span>
							<p class="s2">2.根据录入信息为每个员工搭配好合理的鲜花套餐后提报滴滴出行确定。</p>
							<p class="s2">3.执行配送之前确认订单信息有无变动及是否有其他特殊需求。</p>
							<p class="s2">4.配送完毕后进行信息及时反馈。</p>
						</div>
					</div>
					<div class="case_info_1">
						<img src="./images/group_buy/group_logo_03.png">
						<div class="case_text">
							<p class="tt" style="text-align: center;">贝因美客户回馈计划<p>
							<span class="s1">需求：</span>
							<span class="s2">需求：贝因美给每年在VIP客户生日时，女士送一束价值160元的鲜花。给男士则送一款价格为200元左右的元祖品牌蛋糕。</span>
							<p> </p>
							<span class="s1"> 实施方案:</span>
							<span class="s2">1.每月25日前，贝因美将下月将要配送的名单发给鲜家网，鲜家网核实地址等信息后，双方确认金额。</span>
							<p class="s2">2.鲜家网开发票给贝因美，贝因美收到发票后，当月5日前将款项付到指定帐号。</p>
							<p class="s2">3.鲜家网按要求，将鲜花和蛋糕在客户指日的日期送货上门。</p>
						</div>
					</div>
				</div>
			</div>
			<div class="advantage">
					<div class="backup"></div>
					<p class="text_t1">我们的优势</p>
					<p class="text_t2">OUR ADVANTAGES</p>
					<div class="backup"></div>
					<div class="ad_img">
						<img src="./images/group_buy/group_advantage_01.png">
						<img src="./images/group_buy/group_advantage_02.png">
						<img src="./images/group_buy/group_advantage_03.png">
						<img src="./images/group_buy/group_advantage_04.png">
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