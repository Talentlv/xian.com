<!DOCTYPE html>
<html>
<head>
	<title>鲜花网店</title>
	<meta charset="utf-8">
	<link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="css/common.css" rel="stylesheet" type="text/css">
	<!-- 图标抖动 -->
	<link rel="stylesheet" type="text/css" href="css/animation.css">
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>

	<!-- jQuery UI mouse draggable widget -->
	<script src="js/jquery-ui.min.js"></script>

	<!-- Touch Event Support for jQuery UI -->
	<script src="js/jquery.ui.touch-punch.min.js"></script>

	<!-- MA5 Slider -->
	<link href="css/ma5slider.min.css" rel="stylesheet" type="text/css">
	<script src="js/ma5slider.min.js"></script>
</head>
<body>
	<div class="header-content">
		<div class="header-first">
			<div class="wd1200">
				<div class="left">
					<span>商务 024-31128100</span>
					<span>全国订购热线</span>
					<span class="phone">400-888-1571</span>
				</div>
				<div class="right">
					<a href="#">联系客服</a>
					<a href="useracount/shop/order/index.php">我的订单</a>
					<a href="login.php">登录/注册</a>
					<a href="shoppingcar.php" class="car">购物车(<b class="car-num">0</b>)</a>
				</div>
			</div>
		</div>

		<!-- 搜索 -->
		<div class="wd1200 clearfix header-logo">
			<a href="#" class="left">
				<img src="images/logo.jpg" alt="鲜家鲜花">
			</a>
			<div class="left search-content">
				<form action="goods.php" method="get" name="search">
					<div class="search-box clearfix">
						<input type="text" name="keyword" class="search-input" placeholder="请输入关键字搜索" autocomplete="off">
						<button type="submit" class="search-btn">搜索</button>
					</div>
				</form>
			</div>
			<div class="right">
				<span>全国1小时达</span>
				<span>低价折扣</span>
				<span class="server">退赔服务</span>
			</div>
		</div>
		<!-- 导航 -->
		<div class="header-nav wd1200 clearfix">
			<div class="nav-content">
				<a href="#" class="nav-btn">鲜花导购</a>
				<div class="nav-dd">
					<div>
						<h6>鲜花用途</h6>
						<ul>
							<li><a href="#">爱情鲜花</a></li>
							<li><a href="#">生日鲜花</a></li>
							<li><a href="#">友情鲜花</a></li>
							<li><a href="#">周年纪念</a></li>
							<li><a href="#">婚庆鲜花</a></li>
							<li><a href="#">祝贺鲜花</a></li>
						</ul>
					</div>
					<div>
						<h6>鲜花花材</h6>
						<ul>
							<li><a href="#">玫瑰花</a></li>
							<li><a href="#">康乃馨</a></li>
							<li><a href="#">百合花</a></li>
							<li><a href="#">向日葵</a></li>
							<li><a href="#">紫罗兰</a></li>
							<li><a href="#">满天星</a></li>
						</ul>
					</div>
					<div>
						<h6>鲜花类别</h6>
						<ul>
							<li><a href="#">日常花束</a></li>
							<li><a href="#">创意花盒</a></li>
							<li><a href="#">韩式花束</a></li>
							<li><a href="#">手提花篮</a></li>
							<li><a href="#">开业花篮</a></li>
							<li><a href="#">会议桌花</a></li>
						</ul>
					</div>
					<div class="ul-last">
						<h6>价格筛选</h6>
						<ul>
							<li><a href="#">150元以内</a></li>
							<li><a href="#">150-199元</a></li>
							<li><a href="#">200-249元</a></li>
							<li><a href="#">250-399元</a></li>
							<li><a href="#">400-499元</a></li>
							<li><a href="#">500-599元</a></li>
							<li><a href="#">600-699元</a></li>
							<li><a href="#">700元以上</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="nav-list">
				<ul>
					<li><a href="index.php">首页</a></li>
					<li><a href="goods.php">鲜花</a></li>
					<li><a href="goods.php?keyword=永生花">永生花</a></li>
					<li><a href="./week_flower.php">每周一花</a></li>
					<li><a href="./flower_lan.php">花语</a></li>
					<li><a href="./groupbuy.php">企业团购</a></li>
				</ul>
			</div>
		</div>
		<div style="clear: both;"></div>
	</div>

	<!-- 轮播图 -->
	<div class="banner ma5slider inside-navs inside-dots anim-horizontal loop-mode autoplay anim-fade hover-navs">
      <div class="slides">
          <a href="#slide-1"><img src="images/banner/01.jpg" alt=""></a>
          <a href="#slide-2"><img src="images/banner/02.jpg" alt=""></a>
          <a href="#slide-3"><img src="images/banner/03.jpg" alt=""></a>
          <a href="#slide-4"><img src="images/banner/04.jpg" alt=""></a>
      </div>
  	</div>
	<script type="text/javascript">
		$(window).on('load',function() {
			$('.ma5slider').ma5slider(); 
		});
	</script>
	<!-- 通过在轮播图的顶级容器上添加下面的class来自定义轮播图的外观和行为。 -->
	<!-- anim-horizontal：水平滚动的轮播图。
	anim-vertical：垂直滚动的轮播图。
	anim-fade：淡入淡出的轮播图。
	autoplay：轮播图自动播放。
	loop-mode：无限循环模式。
	horizontal-navs：水平箭头导航按钮。
	vertical-navs：垂直箭头导航按钮。
	inside-navs：箭头导航按钮在轮播图内部。
	outside-navs：箭头导航按钮在轮播图外部。
	hover-navs：鼠标hover时才显示箭头导航按钮。
	hidden-navs：隐藏箭头导航按钮。
	horizontal-dots：水平圆点按钮。
	bottom-dots：底部分页导航按钮。
	inside-dots：圆点按钮在轮播图内部。
	outside-dots：圆点按钮在轮播图外部。
	hover-dots：鼠标hover时才显示圆点导航按钮。
	hidden-dots：隐藏圆点导航按钮。 -->

	<!-- 秒杀 -->
	<div class="yc-wrap">
		<div class="content">
			<div class="content-title">今日疯抢</div>
			<div class="content-desc">凡今日下单均赠送价值300元优惠券！</div>
		</div>
		<div class="flowers-items">
			<div class="flowers-item">
				<a href="../good_detail/goods_detail.html">
					<div class="special"><span>特价</span></div>
					<div class="hover">
						<img src="images/a.jpg" style="max-width: 279px;max-height: 279px;">
					</div>
					<div class="goods-info">
						<div class="goods-info-title">情意绵绵·9枝红玫瑰纯美花束</div>
						<div class="goods-info-price">￥128.00<span class="zj">直降170</span></div>
					</div>
				</a>
			</div>
			<div class="flowers-item">
				<a href="#">
					<div class="special"><span>爆款</span></div>
					<div class="hover">
						<img src="images/b.jpg" style="max-width: 279px;max-height: 279px;">
					</div>
					<div class="goods-info">
						<div class="goods-info-title">爱情密码·13枝红玫瑰纯美花束</div>
						<div class="goods-info-price">￥148.00<span class="zj">直降200</span></div>
					</div>
				</a>
			</div>
			<div class="flowers-item">
				<a href="#">
					<!-- <div class="special"><span>特价</span></div> -->
					<div class="hover">
						<img src="images/c.jpg" style="max-width: 279px;max-height: 279px;">
					</div>
					<div class="goods-info">
						<div class="goods-info-title">今生与你相伴·9枝红玫瑰韩式花束</div>
						<div class="goods-info-price">￥128.00<span class="zj">直降120</span></div>
					</div>
				</a>
			</div>
			<div class="flowers-item">
				<a href="#">
					<!-- <div class="special"><span>特价</span></div> -->
					<div class="hover">
						<img src="images/d.jpg" style="max-width: 279px;max-height: 279px;">
					</div>
					<div class="goods-info">
						<div class="goods-info-title">一心一意·11枝红玫瑰韩式花束</div>
						<div class="goods-info-price">￥138.00<span class="zj">直降160</span></div>
					</div>
				</a>
			</div>
		</div>
		<div style="clear: both;"></div>
	</div>

	<!-- loveflowre 爱情鲜花 -->
	<div class="yc-wrap-love">
		<div class="content">
			<div class="content-title">爱情鲜花</div>
			<div class="content-desc">送·让你怦然心动的人</div>
			<div class="content-more">
				<a href="#" class="filter" title="150元以内">150元以内</a>
				<a href="#" class="filter" title="150-199元">150-199元</a>
				<a href="#" class="filter" title="200-249元">200-249元</a>
				<a href="#" class="filter" title="250-399元">250-399元</a>
				<a href="#" class="filter" title="400-499元">400-499元</a>
				<a href="#" class="filter" title="500-599元">500-599元</a>
				<a href="#" class="filter" title="600-699元">600-699元</a>
				<a href="#" class="filter" title="700元以上">700元以上</a>
				<a href="#">查看更多></a>
			</div>
		</div>
		<div class="content-flower">
			<div class="content-banner">
				<a href="#"><img src="images/loveflow.png"></a>
			</div>
		</div>
		<div class="flowers-items">
			<div class="flowers-item">
				<a href="#">
					<!-- <div class="special"><span>特价</span></div> -->
					<div class="hover">
						<img src="images/loveflow/1.jpg" style="max-width: 279px;max-height: 279px;">
					</div>
					<div class="goods-infoplus">
						<div class="goods-info-titleplus">携手未来·11枝香槟玫瑰纯美花束</div>
						<div class="goods-info-price">￥138.00<span class="scj">原价￥318.00</span></div>
						<div class="goods-info-span"><span class="rq">已售 1700</span></div>
					</div>
				</a>
			</div>
			<div class="flowers-item">
				<a href="#">
					<div class="special"><span>爆款</span></div>
					<div class="hover">
						<img src="images/loveflow/2.jpg" style="max-width: 279px;max-height: 279px;">
					</div>
					<div class="goods-infoplus">
						<div class="goods-info-titleplus">把心交给我·19枝红玫瑰纯美花束</div>
						<div class="goods-info-price">￥168.00<span class="scj">原价￥385.00</span></div>
						<div class="goods-info-span"><span class="rq">已售 1189</span></div>
					</div>
				</a>
			</div>
			<div class="flowers-item">
				<a href="#">
					<div class="special"><span>爆款</span></div>
					<div class="hover">
						<img src="images/loveflow/3.jpg" style="max-width: 279px;max-height: 279px;">
					</div>
					<div class="goods-infoplus">
						<div class="goods-info-titleplus">撩动我的心·33枝粉玫瑰纯美花束</div>
						<div class="goods-info-price">￥318.00<span class="scj">原价￥458.00</span></div>
						<div class="goods-info-span"><span class="rq">已售 831</span></div>
					</div>
				</a>
			</div>
			<div class="flowers-item">
				<a href="#">
					<!-- <div class="special"><span>特价</span></div> -->
					<div class="hover">
						<img src="images/loveflow/4.jpg" style="max-width: 279px;max-height: 279px;">
					</div>
					<div class="goods-infoplus">
						<div class="goods-info-titleplus">爱你久久·99枝红玫瑰纯美花束</div>
						<div class="goods-info-price">￥498.00<span class="scj">原价￥720.00</span></div>
						<div class="goods-info-span"><span class="rq">已售 1382</span></div>
					</div>
				</a>
			</div>

			<div class="flowers-item">
				<a href="#">
					<!-- <div class="special"><span>特价</span></div> -->
					<div class="hover">
						<img src="images/loveflow/5.jpg" style="max-width: 279px;max-height: 279px;">
					</div>
					<div class="goods-infoplus">
						<div class="goods-info-titleplus">因你而幸福·9枝戴安娜粉玫瑰韩式花束</div>
						<div class="goods-info-price">￥128.00<span class="scj">原价￥268.00</span></div>
						<div class="goods-info-span"><span class="rq">已售 1107</span></div>
					</div>
				</a>
			</div>
			<div class="flowers-item">
				<a href="#">
					<!-- <div class="special"><span>特价</span></div> -->
					<div class="hover">
						<img src="images/loveflow/6.jpg" style="max-width: 279px;max-height: 279px;">
					</div>
					<div class="goods-infoplus">
						<div class="goods-info-titleplus">为你倾心·11枝红玫瑰韩式花束</div>
						<div class="goods-info-price">￥138.00<span class="scj">原价￥298.00</span></div>
						<div class="goods-info-span"><span class="rq">已售 386</span></div>
					</div>
				</a>
			</div>
			<div class="flowers-item">
				<a href="#">
					<!-- <div class="special"><span>特价</span></div> -->
					<div class="hover">
						<img src="images/loveflow/7.jpg" style="max-width: 279px;max-height: 279px;">
					</div>
					<div class="goods-infoplus">
						<div class="goods-info-titleplus">真心喜欢你·19枝粉玫瑰韩式花束</div>
						<div class="goods-info-price">￥218.00<span class="scj">原价￥338.00</span></div>
						<div class="goods-info-span"><span class="rq">已售 488</span></div>
					</div>
				</a>
			</div>
			<div class="flowers-item">
				<a href="#">
					<!-- <div class="special"><span>特价</span></div> -->
					<div class="hover">
						<img src="images/loveflow/8.jpg" style="max-width: 279px;max-height: 279px;">
					</div>
					<div class="goods-infoplus">
						<div class="goods-info-titleplus">心动时刻·19枝红玫瑰韩式花束</div>
						<div class="goods-info-price">￥218.00<span class="scj">原价￥436.00</span></div>
						<div class="goods-info-span"><span class="rq">已售 392</span></div>
					</div>
				</a>
			</div>
		</div>
		<div style="clear: both;"></div>
	</div>

	<!-- others -->
	<!-- 编辑推荐 -->
	<div class="yc-wrap-other">
		<div class="content">
			<div class="content-title">编辑推荐</div>
			<div class="content-desc">囊括美好的鲜花</div>
			<div class="content-more">
				<a href="#">查看更多></a>
			</div>
		</div>
		<div class="content-flower-items">
			<div class="content-flower-item">
				<div class="content-banner-item hover">
					<a href="#"><img src="images/recommend_01.png"></a>
				</div>
			</div>
			<div class="content-flower-item">
				<div class="content-banner-item hover">
					<a href="#"><img src="images/recommend_02.png"></a>
				</div>
			</div>
			<div class="content-item">
				<a href="#" class="hover"><img src="images/recommend_03.png" class="hover content-item01"></a>
				<a href="#" class="hover"><img src="images/recommend_04.png" class="hover"></a>
			</div>
		</div>
		<div style="clear: both;"></div>
	</div>

	<!-- 特色 -->
	<div class="yc-wrap-other">
		<div class="feature">
			<a href="#" class="hover"><img src="images/feature_01.png" width="277" height="132" class="hover"></a>
			<a href="#" class="hover"><img src="images/feature_02.png" width="277" height="132" class="hover"></a>
			<a href="#" class="hover"><img src="images/feature_03.png" width="277" height="132" class="hover"></a>
			<a href="#" class="hover"><img src="images/feature_04.png" width="277" height="132" class="hover last-child"></a>
		</div>
		<div style="clear: both;"></div>
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

	<!-- anotherside -->
	<div class="aside">
		<ul>
			<li class="cart">
				<a href="#" title="购物车">
					<i class="icon-aside icon-cart2"></i>
					<span class="icon-scar-num2">0</span>
				</a>
			</li>
			<li class="favorite ibut">
				<a href="#" title="收藏鲜花">
					<i class="icon-aside icon-favorite"></i>
				</a>
				<div class="asidepop">
					<a href="#">收藏鲜花</a>
				</div>
			</li>
			<li class="history ibut">
				<a href="#" title="历史记录">
					<i class="icon-aside icon-history"></i>
				</a>
			</li>
			<li class="qrcode ibut">
				<a href="#" title="关注微信公众号">
					<i class="icon-aside icon-qrcode"></i>
				</a>
				<div class="asidepop">
					<div class="frcode">
						<p class="note">回复“礼物”有惊喜！" 活动多多，在鲜家遇见幸福</p>
						<p class="img">
							<img src="images/special/r_code.png">
						</p>
						<p class="title">公众号</p>
					</div>
				</div>
			</li>
			<li class="expanded ibut iconbounce">
				<a href="javascript:;" onclick="$(function(){$('html').animate({scrollTop: 0},500);$('body').animate({scrollTop: 0},500)})" title="回到顶部">
					<i class="icon-aside icon-expanded"></i>
				</a>
			</li>
		</ul>
	</div>
</body>
</html>