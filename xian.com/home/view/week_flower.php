<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/top.css">
	<!-- <link rel="stylesheet" type="text/css" href="./css/footer.css"> -->
	<link rel="stylesheet" type="text/css" href="./css/week_flower_css.css">
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
	
</head>
<body>
	<div class="topper">
		<div class="topper-wrap">
			<div class="logo">
				<a href="#"><img src="images/logo.png"></a>
			</div>
			<div class="menu">
				<a href="index.php">首页</a>
				<a href="./goods.php">鲜花</a>
				<a href="./goods.php">永生花</a>
				<a href="./week_flower.php" class="active">每周一花</a>
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
		<div class="week_box">
			<a href="./goods.html"><img src="./images/week_flower/week_floewr_banner.png" style="width:100%;"></a>
			<div class="backup"></div>
			<div class="text_info">
					<div class="text1_info_1" style="margin-left: 120px;">
						<img src="./images/week_flower/wf_introduc_01.png">
						<p class="text1_info_t1">选择你的订阅计划</p>
						<p class="text1_info_t2">定期给自己（或某个特别的人）一些爱：每周，每周交替，或每月。</p>
					</div>
					<div class="text1_info_1" style="margin-left: 130px;">
						<img src="./images/week_flower/wf_introduc_02.png">
						<p class="text1_info_t1">精心挑选的鲜花</p>
						<p class="text1_info_t2">花的味道是独特而私人的，我们迎合各种风格；精选当季精品花材，种类齐全。</p>
					</div>
					<div class="text1_info_1" style="margin-left: 130px;">
						<img src="./images/week_flower/wf_introduc_03.png">
						<p class="text1_info_t1">忙碌生活中的小幸福</p>
						<p class="text1_info_t2">美丽的花花会送到你的门上，收到花花的那一刻，你需要做的就是享受。</p>
					</div>
			</div>
			<div class="text_top_1">
				<div class="text_top_1_1">
					<span class="text_top_1_s1">Flower</span>
					<img src="./images/week_flower/wf_con-titimg.png">
					<span class="text_top_1_s1">精选花束</span>
					<p class="text_top_1_p1">呵护每一朵幸福盛开的鲜花</p>
				</div>
				<div class="goods">
					<a href="#">
						<div class="goods_div" style="margin-left: 70px;">
							<img src="./images/week_flower/1b2ea_cca6.jpg">
							<div class="goods_text">
								<p class="goods_text_1">每周一花系列轻奢版 </p>
								<div class="goods_price">
									<span class="goods_text_2">¥298.00</span><span class="goods_text_3"><del>原价 ¥498.00 </del></span>
								</div>
								<p class="goods_text_4">已售 408</p>
							</div>
						</div>
					</a>
					<a href="#">
						<div class="goods_div">
							<img src="./images/week_flower/1b2ea_cca7.jpg">
							<div class="goods_text">
								<p class="goods_text_1">每周一花系列双拼版</p>
								<div class="goods_price">
									<span class="goods_text_2">¥238.00</span><span class="goods_text_3"><del>原价 ¥348.00 </del></span>
								</div>
								<p class="goods_text_4">已售 797</p>
							</div>
						</div>
					</a>
					<a href="#">
						<div class="goods_div">
							<img src="./images/week_flower/1b2ea_cca8.jpg">
							<div class="goods_text">
								<p class="goods_text_1">每周一花系列混搭版版</p>
								<div class="goods_price">
									<span class="goods_text_2">¥198.00</span><span class="goods_text_3"><del>原价 ¥298.00 </del></span>
								</div>
								<p class="goods_text_4">已售 774</p>
							</div>
						</div>
					</a>
					<a href="#">
						<div class="goods_div">
							<img src="./images/week_flower/1b2ea_cca9.jpg">
							<div class="goods_text">
								<p class="goods_text_1">每周一花系列单品版</p>
								<div class="goods_price">
									<span class="goods_text_2">¥148.00</span><span class="goods_text_3"><del>原价 ¥256.00 </del></span>
								</div>
								<p class="goods_text_4">已售 783</p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="text_top_1">
				<div class="text_top_1_1">
					<span class="text_top_1_s1">Ambitus</span>
					<img src="./images/week_flower/wf_con-titimg.png">
					<span class="text_top_1_s1">周边精选</span>
					<p class="text_top_1_p1">呵护每一朵幸福盛开的鲜花</p>
				</div>
				<div class="goods">
					<a href="#">
						<div class="goods_div" style="margin-left: 70px;">
							<img src="./images/week_flower/29f24_fa31.jpg">
							<div class="goods_text">
								<p class="goods_text_1">唯美手绘手账本 </p>
								<div class="goods_price">
									<span class="goods_text_2">¥39.00</span><span class="goods_text_3"><del>原价 ¥49.00 </del></span>
								</div>
								<p class="goods_text_4">已售 3</p>
							</div>
						</div>
					</a> 
					<a href="#">
						<div class="goods_div">
							<img src="./images/week_flower/29f24_fa32.jpg">
							<div class="goods_text">
								<p class="goods_text_1">北欧简约玻璃花瓶</p>
								<div class="goods_price">
									<span class="goods_text_2">¥76.00</span><span class="goods_text_3"><del>原价 ¥158.00 </del></span>
								</div>
								<p class="goods_text_4">已售 18</p>
							</div>
						</div>
					</a>
					<a href="#">
						<div class="goods_div">
							<img src="./images/week_flower/29f24_fa33.jpg">
							<div class="goods_text">
								<p class="goods_text_1">进口鲜花保鲜液</p>
								<div class="goods_price">
									<span class="goods_text_2">¥39.00</span><span class="goods_text_3"><del>原价 ¥69.00 </del></span>
								</div>
								<p class="goods_text_4">已售 19</p>
							</div>
						</div>
					</a>
					<a href="#">
						<div class="goods_div">
							<img src="./images/week_flower/29f24_fa34.jpg">
							<div class="goods_text">
								<p class="goods_text_1">多姿多彩花艺剪</p>
								<div class="goods_price">
									<span class="goods_text_2">¥19.00</span><span class="goods_text_3"><del>原价 ¥72.00 </del></span>
								</div>
								<p class="goods_text_4">已售 99</p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="text_2">
				<div class="text_2_info">
					<img src="./images/week_flower/22d42_cda8.jpg" class="text_2_img1">
					<img src="./images/week_flower/wf_infos_bg_01.png" class="text_2_img2">
					<div class="text_2_tt_1">
						<div class="backup"></div>
						<p class="text_2_t1">每周一花系列轻奢版</p>	
						<p class="text_2_t2">享受极致奢华</p>
						<p class="text_2_t3">¥ 298.00</p>
						<a href="#"><p class="text_2_t4">订阅惊喜</p></a>
					</div>
				</div>	
				<div class="text_2_info">
					<img src="./images/week_flower/203b7_ce14.jpg" class="text_2_img3">
					<img src="./images/week_flower/wf_infos_bg_02.png" class="text_2_img4">
					<div class="text_2_tt_2">
						<div class="backup"></div>
						<p class="text_2_t1">每周一花系列双拼版</p>	
						<p class="text_2_t2">不同花材的浪漫</p>
						<p class="text_2_t3">¥ 238.00</p>
						<a href="#"><p class="text_2_t4">订阅惊喜</p></a>
					</div>
				</div>
				<div class="text_2_info">
					<img src="./images/week_flower/1dd02_aa75.jpg" class="text_2_img1">
					<img src="./images/week_flower/wf_infos_bg_03.png" class="text_2_img7">
					<div class="text_2_tt_1">
						<div class="backup"></div>
						<p class="text_2_t1">每周一花系列混搭版</p>	
						<p class="text_2_t2">多重混搭</p>
						<p class="text_2_t3">¥ 198.00</p>
						<a href="#"><p class="text_2_t4">订阅惊喜</p></a>
					</div>
				</div>
				<div class="text_2_info">
					<img src="./images/week_flower/2a87d_2fbd.jpg" class="text_2_img3">
					<img src="./images/week_flower/wf_introduc_03.png" class="text_2_img8">
					<div class="text_2_tt_2">
						<div class="backup"></div>
						<p class="text_2_t1">每周一花系列单品版</p>	
						<p class="text_2_t2">极致简约风格</p>
						<p class="text_2_t3">¥ 148.00</p>
						<a href="#"><p class="text_2_t4">订阅惊喜</p></a>
					</div>
				</div>			
			</div>
			<div class="last">
				<div class="text_top_1_1">
					<span class="text_top_1_s1" style="margin-left: 120px;">Story</span>
					<img src="./images/week_flower/wf_con-titimg.png">
					<span class="text_top_1_s1">花之精灵</span>
				</div>
				<div class="last_2">
					<div class="backup"></div>
					<div class="last_t1">
						<span class="last_s1">来自云南的A级花材</span>
						<hr style="width: 240px; margin-top: 35px;margin-bottom: 35px;">
						<p class="last_p1">每一朵鲜花都是如此美丽，带着大自然的气息，只为拥抱你。</p>
						<p class="last_p2">地处低纬度高海拔地区，全年光照，充分吸收紫外线，让产自云南的鲜花花朵硕大、色彩艳丽，让人爱不释手。云南天然土壤中蕴含更多的矿物质，鲜花吸收更充足的养分。为鲜花种植提供优质的条件，孕育出更加饱满的鲜花。</p>
						<p class="last_p3">每一朵花都是有灵魂的</p>
					</div>
					<div class="last_i">
						<img src="./images/week_flower/1b2ea_cca8.jpg" class="last_img">
						<img src="./images/week_flower/203b7_ce14.jpg" class="last_img">
					</div>
				</div>
			</div>
		</div>

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
					<img src="images/special/r_code.png">
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
		<div style="clear: both;"></div>
	</div>
</body>
</html>