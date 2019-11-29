<!DOCTYPE html>
<html>
<head>
	<title>鲜花页</title>
	<!-- 图标抖动 -->
	<link rel="stylesheet" type="text/css" href="css/animation.css">
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/goods.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<!-- 倒计时 -->
	<link rel="stylesheet" type="text/css" href="css/jcountdown.css">

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- 标签hover -->
	<script type="text/javascript" src="js/hover.js"></script>
	<!-- 倒计时 -->
	<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.jcountdown.min.js"></script>
	<script type="text/javascript" src="js/countdown.js"></script>
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
	</style>

	<!-- 获取url地址中的参数page_current -->
	<script type="text/javascript">
		$(function(){
			function getUrlParam(name) {
				var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
				var r = window.location.search.substr(1).match(reg);
				if (r!=null) return unescape(r[2]); return null;
			}
			var a = getUrlParam('page_current');
			// console.log(a);

			// jQ没有else,也没有elseif ！！！
			if (a == null) {
				$('.page-nav a').eq(1).addClass('active');
			}
			if (a != null) {
				$('.page-nav a').removeClass('active');
				$('.page-nav a').eq(a).addClass('active');
			}

			var b = getUrlParam('sales');
			if (b != null) {
				$('.yf_index li').removeClass('active');
				$('.yf_index li').eq(b).addClass('active');
			}
		})
	</script>
</head>
<body>
	<div class="topper">
		<div class="topper-wrap">
			<div class="logo">
				<a href="#"><img src="images/logo.png"></a>
			</div>
			<div class="menu">
				<a href="index.php">首页</a>
				<a href="goods.php" class="active">鲜花</a>
				<a href="goods.php?keyword=永生花">永生花</a>
				<!-- <a href="#">礼品</a> -->
				<a href="week_flower.php">每周一花</a>
				<a href="flower_lan.php">花语</a>
				<a href="groupbuy.php">企业团购</a>
				<div class="search">
					<form action="goods.php" method="get" name="search">
						<div class="search-frame">
							<input type="text" name="keyword" class="q" placeholder="请输入关键词搜索" autocomplete="off" />
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
							<a href="useracount/member/index.php"><i class="i"></i>我的鲜家</a>
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
				<img src="images/h-list_10_img.png">
			</div>
			<div class="list-r">
				<div class="list-r-title">
					<span>用途</span>
					<span>销售价</span>
					<span>花材</span>
					<!-- <span>枝数</span> -->
				</div>
				<div class="list-r-content">
					<div>
						<a href="goods.php?choice1=爱情鲜花&choice2=&choice3=">爱情鲜花</a>
						<a href="goods.php?choice1=生日鲜花&choice2=&choice3=">生日鲜花</a>
						<a href="goods.php?choice1=友情鲜花&choice2=&choice3=">友情鲜花</a>
						<a href="goods.php?choice1=周年纪念&choice2=&choice3=">周年纪念</a>
						<a href="goods.php?choice1=婚庆鲜花&choice2=&choice3=">婚庆鲜花</a>
						<a href="goods.php?choice1=祝贺鲜花&choice2=&choice3=">祝贺鲜花</a>
						<a href="goods.php?choice1=探病慰问&choice2=&choice3=">探病慰问</a>
						<a href="goods.php?choice1=问候长辈&choice2=&choice3=">问候长辈</a>
						<a href="goods.php?choice1=商务鲜花&choice2=&choice3=">商务鲜花</a>
						<a href="goods.php?choice1=道歉鲜花&choice2=&choice3=">道歉鲜花</a>
					</div>
					<div>
						<a href="goods.php?choice1=&choice2=150元以内&choice3">150元以内</a>
						<a href="goods.php?choice1=&choice2=150-199元&choice3">150-199元</a>
						<a href="goods.php?choice1=&choice2=200-249元&choice3">200-249元</a>
						<a href="goods.php?choice1=&choice2=250-399元&choice3">250-399元</a>
						<a href="goods.php?choice1=&choice2=400-499元&choice3">400-499元</a>
						<a href="goods.php?choice1=&choice2=500-599元&choice3">500-599元</a>
						<a href="goods.php?choice1=&choice2=600-699元&choice3">600-699元</a>
						<a href="goods.php?choice1=&choice2=700元以上&choice3">700元以上</a>
					</div>
					<div>
						<a href="goods.php?choice1=&choice2=&choice3=玫瑰花">玫瑰花</a>
						<a href="goods.php?choice1=&choice2=&choice3=康乃馨">康乃馨</a>
						<a href="goods.php?choice1=&choice2=&choice3=百合花">百合花</a>
						<a href="goods.php?choice1=&choice2=&choice3=向日葵">向日葵</a>
						<a href="goods.php?choice1=&choice2=&choice3=紫罗兰">紫罗兰</a>
						<a href="goods.php?choice1=&choice2=&choice3=满天星">满天星</a>
					</div>
					<!-- <div>
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
					</div> -->
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
		<!-- <div class="footer-wrap" style="display: none;">
			<div class="list-l">
				<img src="images/h-list_15_img.png">
			</div>
			<div class="list-r">
				<div class="list-r-title">
					<span>类别</span>
					<span>用途</span>
					<span>适合对象</span>
					<span>销售价</span>
				</div>
				<div class="list-r-content">
					<div>
						<a href="/lipin/sh/">首饰</a>
						<a href="/lipin/yyh/">音乐盒</a>
						<a href="/lipin/xiangxun/">香薰</a>
						<a href="/lipin/ppgz/">公仔</a>
						<a href="/lipin/cybj/">创意摆件</a>
						<a href="/lipin/qkl/">巧克力</a>
						<a href="/lipin/cyds/">灯饰</a>
						<a href="/lipin/sjq/">水晶球</a>
						<a href="/lipin/shuibei/">水杯</a>
						<a href="/lipin/jiashiqi/">加湿器</a>
						<a href="/lipin/anmoyi/">按摩仪</a>
					</div>
					<div>
						<a href="/lipin/srlp/">生日礼品</a>
						<a href="/lipin/yhqalp/">约会礼品</a>
						<a href="/lipin/jhlp/">结婚礼品</a>
						<a href="/lipin/gxzflp/">祝福礼品</a>
						<a href="/lipin/bftwlp/">拜访礼品</a>
						<a href="/lipin/jhjyrlp/">纪念日礼品</a>
						<a href="/lipin/qklp/">乔迁礼品</a>
						<a href="/lipin/jjlp/">家居礼品</a>
					</div>
					<div>
						<a href="/lipin/snrqzlp/">送恋人</a>
						<a href="/lipin/spytslp/">送朋友</a>
						<a href="/lipin/skhlp/">送客户</a>
						<a href="/lipin/snslp/">送老师</a>
						<a href="/lipin/sxhlp/">送小孩</a>
						<a href="/lipin/sndlp/">送领导</a>
						<a href="/lipin/sfmzblp/">送长辈</a>
					</div>
					<div>
						<a href="/lipin/j1/">120元以下</a>
						<a href="/lipin/j2/">120-180元</a>
						<a href="/lipin/j3/">180-300元</a>
						<a href="/lipin/j4/">300-500元</a>
						<a href="/lipin/j5/">500元以上</a>
					</div>
				</div>
			</div>
		</div> -->
	</div>
	<div class="yc-wrap">
		<div class="yf_top1">
			<img src="./images/goods_images/list-banner.png">
		</div>
		<div class="yf_guide">
			<div class="guide_1">
				<p>
					<span class="text_1">快捷选花</span>
					<span class="text_2">fast choose</span>
				</p>
			</div>
			<div class="guide-item" style="background: rgb(230,242,230);color:#75a075 ">
				<p>
					<?php
					$choice_all = "全部 v";
					$choice1 = "";
					if (isset($_GET["choice1"])) {
						// 获取地址栏choice1的值
						$choice1 = $_GET["choice1"];
					}
					$choice2 = "";
					if (isset($_GET["choice2"])) {
						// 获取地址栏choice2的值
						$choice2 = $_GET["choice2"];
					}
					$choice3 = "";
					if (isset($_GET["choice3"])) {
						// 获取地址栏choice3的值
						$choice3 = $_GET["choice3"];

					}
					?>
					<span class="text_1">用途</span>
					<span class="text_2 appl">
						<a href="goods.php?choice1=&choice2=<?php echo $choice2?>&choice3=<?php echo $choice3?>"><?php if ($choice1=="") {echo $choice_all;}else{echo $choice1;} ?></a>
					</span>
				</p>
				<div class="choose-box" style="display: none;background: rgb(230,242,230);color:#75a075;">
					<a href="goods.php?choice1=爱情鲜花&choice2=<?php echo $choice2?>&choice3=<?php echo $choice3?>" title="爱情鲜花" style="color: rgb(117, 160, 117);">爱情鲜花</a>
					<a href="goods.php?choice1=生日鲜花&choice2=<?php echo $choice2?>&choice3=<?php echo $choice3?>" title="生日鲜花" style="color: rgb(117, 160, 117);">生日鲜花</a>
					<a href="goods.php?choice1=友情鲜花&choice2=<?php echo $choice2?>&choice3=<?php echo $choice3?>" title="友情鲜花" style="color: rgb(117, 160, 117);">友情鲜花</a>
					<a href="goods.php?choice1=周年纪念&choice2=<?php echo $choice2?>&choice3=<?php echo $choice3?>" title="周年纪念" style="color: rgb(117, 160, 117);">周年纪念</a>
					<a href="goods.php?choice1=婚庆鲜花&choice2=<?php echo $choice2?>&choice3=<?php echo $choice3?>" title="婚庆鲜花" style="color: rgb(117, 160, 117);">婚庆鲜花</a>
					<a href="goods.php?choice1=祝贺鲜花&choice2=<?php echo $choice2?>&choice3=<?php echo $choice3?>" title="祝贺鲜花" style="color: rgb(117, 160, 117);">祝贺鲜花</a>
					<a href="goods.php?choice1=探病慰问&choice2=<?php echo $choice2?>&choice3=<?php echo $choice3?>" title="探病慰问" style="color: rgb(117, 160, 117);">探病慰问</a>
					<a href="goods.php?choice1=问候长辈&choice2=<?php echo $choice2?>&choice3=<?php echo $choice3?>" title="问候长辈" style="color: rgb(117, 160, 117);">问候长辈</a>
					<a href="goods.php?choice1=商务鲜花&choice2=<?php echo $choice2?>&choice3=<?php echo $choice3?>" title="商务鲜花" style="color: rgb(117, 160, 117);">商务鲜花</a>
					<a href="goods.php?choice1=道歉鲜花&choice2=<?php echo $choice2?>&choice3=<?php echo $choice3?>" title="道歉鲜花" style="color: rgb(117, 160, 117);">道歉鲜花</a>
				</div>

			</div>
			<div class="guide-item" style="background: rgb(250,240,227);color:#9d7d52 ">
				<p>
					<span class="text_1">销售价</span>
					<span class="text_2 price">
						<a href="goods.php?choice1=<?php echo $choice1?>&choice2=&choice3=<?php echo $choice3?>"><?php if ($choice2=="") {echo $choice_all;}else{echo $choice2;} ?></a>
					</span>
				</p>
				<div class="choose-box" style="display: none;background: rgb(250,240,227);color:#9d7d52 ">

					<a href="goods.php?choice1=<?php echo $choice1?>&choice2=150元以内&choice3=<?php echo $choice3?>" title="0-149" style="color: rgb(157, 125, 82);">150元以内</a>
					<a href="goods.php?choice1=<?php echo $choice1?>&choice2=150-199元&choice3=<?php echo $choice3?>" title="150-199" style="color: rgb(157, 125, 82);">150-199元</a>
					<a href="goods.php?choice1=<?php echo $choice1?>&choice2=200-249元&choice3=<?php echo $choice3?>" title="200-249" style="color: rgb(157, 125, 82);">200-249元</a>
					<a href="goods.php?choice1=<?php echo $choice1?>&choice2=250-399元&choice3=<?php echo $choice3?>" title="250-399" style="color: rgb(157, 125, 82);">250-399元</a>
					<a href="goods.php?choice1=<?php echo $choice1?>&choice2=400-499元&choice3=<?php echo $choice3?>" title="400-499" style="color: rgb(157, 125, 82);">400-499元</a>
					<a href="goods.php?choice1=<?php echo $choice1?>&choice2=500-599元&choice3=<?php echo $choice3?>" title="500-599" style="color: rgb(157, 125, 82);">500-599元</a>
					<a href="goods.php?choice1=<?php echo $choice1?>&choice2=600-699元&choice3=<?php echo $choice3?>" title="600-699" style="color: rgb(157, 125, 82);">600-699元</a>
					<a href="goods.php?choice1=<?php echo $choice1?>&choice2=700元以上&choice3=<?php echo $choice3?>" title="700-100000" style="color: rgb(157, 125, 82);">700元以上</a>
				</div>

			</div>
			<div class="guide-item" style="background: #f1f6f9;color:#5c7d91 ">
				<p>
					<span class="text_1">花材</span>
					<span class="text_2 met">
						<a href="goods.php?choice1=<?php echo $choice1?>&choice2=<?php echo $choice2?>&choice3="><?php if ($choice3=="") {echo $choice_all;}else{echo $choice3;} ?></a>
					</span>
				</p>
				<div class="choose-box" style="display: none;background: #f1f6f9;color:#5c7d91 ">
					<a href="goods.php?choice1=<?php echo $choice1?>&choice2=<?php echo $choice2?>&choice3=玫瑰花" title="玫瑰花" style="color: rgb(92, 125, 145);">玫瑰花</a>
					<a href="goods.php?choice1=<?php echo $choice1?>&choice2=<?php echo $choice2?>&choice3=康乃馨" title="康乃馨" style="color: rgb(92, 125, 145);">康乃馨</a>
					<a href="goods.php?choice1=<?php echo $choice1?>&choice2=<?php echo $choice2?>&choice3=百合花" title="百合花" style="color: rgb(92, 125, 145);">百合花</a>
					<a href="goods.php?choice1=<?php echo $choice1?>&choice2=<?php echo $choice2?>&choice3=向日葵" title="向日葵" style="color: rgb(92, 125, 145);">向日葵</a>
					<a href="goods.php?choice1=<?php echo $choice1?>&choice2=<?php echo $choice2?>&choice3=紫罗兰" title="紫罗兰" style="color: rgb(92, 125, 145);">紫罗兰</a>
					<a href="goods.php?choice1=<?php echo $choice1?>&choice2=<?php echo $choice2?>&choice3=满天星" title="满天星" style="color: rgb(92, 125, 145);">满天星</a>	
				</div>
			</div>
			<div style="clear: both;"></div>
		</div>
		<div class="yf_index">
			<ul>
				<li class="active"><a href="goods.php">综合</a></li>
				<li><a href="goods.php?choice1=<?php echo $choice1?>&choice2=<?php echo $choice2?>&choice3=<?php echo $choice3?>&sales=1">销量</a></li>
				<!-- <li><a href="#">价格</a></li> -->
				<!-- <li><a href="#">已售</a></li> -->
			</ul>
		</div>
		<div class="yc-wrap-love">
			<div class="flowers-items">
				<?php
				include_once("functions/database.php"); 
				include_once("functions/choice.php");
				include_once("functions/page.php");


				// session
				
				// 构造查询所有鲜花的sql语句
				$search_sql = "select * from goods";
				

				// 构造多条件筛选查询的sql语句
				$choice1_sql = choice1($choice1);
				$choice2_sql = choice2($choice2);
				$choice3_sql = choice3($choice3);

				if ($choice1 == "" && $choice2 != "" && $choice3 != "") {
					$search_sql = "select * from goods where ".$choice2_sql." and ".$choice3_sql;
				}elseif ($choice1 == "" && $choice2 != "" && $choice3 == "") {
					$search_sql = "select * from goods where ".$choice2_sql;
				}elseif ($choice1 == "" && $choice2 == "" && $choice3 != "") {
					$search_sql = "select * from goods where ".$choice3_sql;
				}elseif ($choice1 == "" && $choice2 == "" && $choice3 == "") {
					$search_sql = "select * from goods";
				}elseif ($choice1 != "" && $choice2 == "" && $choice3 == "") {
					$search_sql = "select * from goods where ".$choice1_sql;
				}elseif ($choice1 != "" && $choice2 == "" && $choice3 != "") {
					$search_sql = "select * from goods where ".$choice1_sql." and ".$choice3_sql;
				}elseif ($choice1 != "" && $choice2 != "" && $choice3 == "") {
					$search_sql = "select * from goods where ".$choice1_sql." and ".$choice2_sql;
				}elseif ($choice1 != "" && $choice2 != "" && $choice3 != "") {
					$search_sql = "select * from goods where ".$choice1_sql." and ".$choice2_sql." and ".$choice3_sql;
				}


				// 若进行模糊查询，取得模糊查询的关键字keyword
				$keyword = "";
				if(isset($_GET["keyword"])){
					//trim()删除关键字两边的空格
					$keyword = trim($_GET["keyword"]);
					// 构造模糊查询的sql语句
					$search_sql = "select * from goods where Name like '%$keyword%'";
				}

				// 销量的实现
				if (isset($_GET["sales"])) {
					$sales = $_GET["sales"];
					$search_sql .= " order by Sales desc";
				}


				// 连接数据库查询数据
				get_connection();

				
				//分页的实现 
				$result_goods = mysql_query($search_sql); 
				$total_records = mysql_num_rows($result_goods); 
				$page_size = 20; 
				if(isset($_GET["page_current"])){ 
				    $page_current = $_GET["page_current"]; 
				    $start = ($page_current-1)*$page_size; 
					$search_sql .= " limit $start,$page_size"; 
				}else{ 
				    $page_current=1; 
				    $start = ($page_current-1)*$page_size; 
					$search_sql .= " limit $start,$page_size"; 
				}
				// 多条件筛选情况下的分页
				@$url_plus = "choice1=".$choice1."&choice2=".$choice2."&choice3=".$choice3."&sales=".$sales."&";

				
				$result_goods = mysql_query($search_sql);
				close_connection();

				if (mysql_num_rows($result_goods)==0) {
					exit("暂无记录！");
				}

				while ($row = mysql_fetch_array($result_goods)) {
					$src = $row['Photo_address'];
					$arr = explode('$', $src);
				?>
				<div class="flowers-item">
					<a href="detail.php?id=<?php echo $row['Goods_id'] ?>">
						<!-- <div class="special"><span>特价</span></div> -->
						<div class="hover">
							<img src="<?php echo $arr[0]?>" style="max-width: 279px;max-height: 279px;">
						</div>
						<div class="goods-infoplus">
							<div class="goods-info-titleplus"><?php echo $row['Name']; ?></div>
							<div class="goods-info-price">￥<?php echo $row['Price'] ?><span class="scj">原价￥<?php echo $row['Original_price'] ?></span></div>
							<div class="goods-info-span"><span class="rq">已售 <?php echo $row['Sales'] ?></span></div>
						</div>
					</a>
				</div>

				<?php
				}
				?>
				<div class="clearfix"></div>
			</div>
			<div style="height: 100px;width: 100%;float: left;"></div>
			<div class="page-nav">
				<ul class="clearfix">
					<?php 
					//打印分页导航条
					//.'?'.$_SERVER['QUERY_STRING'];
					$url = $_SERVER['PHP_SELF'];
					page($total_records,$page_size,$page_current,$url,$keyword,$url_plus); 
					?> 
				</ul>
			</div>
			<div style="clear: both;"></div>
		</div>
		
	<div style="height: 100px;width: 100%;float: left;"></div>
		
	<div class="yc-wrap-love">
		<div class="content">
			<div class="content-title">限时秒杀</div>
			<div class="content-desc">最高立减500元</div>
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
		
		<div class="column-seckill seckills seckill_01">
			<div class="seckill seckill-item">
				<img alt="" src="images/goods_images/seckill_01.png">
				<div class="seckill-timer-tip">距离结束还剩</div>

				<!-- 倒计时 -->
				<div class="countdown seckill-timer"></div>
				<div class="seckill-timer-btn"><a href="/xianhua/">可省500元&gt;</a></div>
			</div>
			<div class="seckill_r">
				<div class="hover seckill-item">
					<a href="/xianhua/45641.html">
						<img alt="" width="265" height="265" src="images/goods_images/a.jpg">
						<p class="seckill-item-title">
						<span class="seckill-item-info">情意绵绵·9枝红玫瑰纯美...￥128.00</span><span class="seckill-item-cut">直降170</span>
						</p>
					</a>
				</div>
				<div class="hover seckill-item">
					<a href="/xianhua/45059.html">
						<img alt="" width="265" height="265" src="images/goods_images/b.jpg">
						<p class="seckill-item-title">
						<span class="seckill-item-info">爱情密码·13枝红玫瑰纯...￥148.00</span><span class="seckill-item-cut">直降200</span>
						</p>
					</a>
				</div>
				<div class="hover seckill-item">
					<a href="/xianhua/45741.html">
						<img alt="" width="265" height="265" src="images/goods_images/c.jpg">
						<p class="seckill-item-title">
						<span class="seckill-item-info">今生与你相伴·9枝红玫瑰...￥128.00</span><span class="seckill-item-cut">直降120</span>
						</p>
					</a>
				</div>
			</div>
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
	</div>
</body>
</html>