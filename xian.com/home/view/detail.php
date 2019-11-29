<?php
	session_start();
	// 如果session为空，即未登录，自动转到登录界面
	if(!isset($_SESSION['user_id'])){
		echo "<script>alert('请先登录');</script>";
		$home_url = 'login.php';
		header('Location:'.$home_url);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>商品详情页</title>
	<link rel="stylesheet" type="text/css" href="./css/Lyc_details_css/wrap_title.css">
	<link rel="stylesheet" type="text/css" href="./css/Lyc_details_css/wrap.css">
	<link rel="stylesheet" type="text/css" href="./css/Lyc_details_css/Goods.css">
	<link rel="stylesheet" type="text/css" href="./css/Lyc_details_css/goods_pic.css">
	<link rel="stylesheet" type="text/css" href="./css/Lyc_details_css/goods_info_title.css">
	<link rel="stylesheet" type="text/css" href="./css/Lyc_details_css/goods_info_sell.css">
	<link rel="stylesheet" type="text/css" href="./css/Lyc_details_css/goods_info_param.css">
	<link rel="stylesheet" type="text/css" href="./css/Lyc_details_css/goods_info_label.css">
	<link rel="stylesheet" type="text/css" href="./css/Lyc_details_css/goods_info_num.css">
	<link rel="stylesheet" type="text/css" href="./css/Lyc_details_css/goods_info_buy.css">
	<link rel="stylesheet" type="text/css" href="./css/Lyc_details_css/goods_info_ser.css">
	<link rel="stylesheet" type="text/css" href="./css/Lyc_details_css/goods_GFH.css">
	<link rel="stylesheet" type="text/css" href="./css/Lyc_details_css/goods_PYF.css">
	<link rel="stylesheet" type="text/css" href="./css/Lyc_details_css/goods_aside.css">
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>

	<!-- 商品预览图 -->
	<script src="js/goods_changeph.js"></script>

	
	<!--图片放大镜效果-->
    <script type="text/javascript" src="js/jquery.zoom.js"></script>

    <script src="js/hover.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
			$('#zoom').zoom();
		});
    </script>
    <script type="text/javascript">
    	$(window).scroll(function(){
    		var s = $(window).scrollTop();//700,5980
    		// console.log(s);
    		if (s > 700) {
    			$('#yf-head').attr('class','fixed');
    			$('#yf-head .yf-head-another').show();
    		}else{
    			$('#yf-head').removeClass('fixed');
    			$('#yf-head .yf-head-another').hide();
    		}
    	})
    </script>
    <script type="text/javascript">
    	$(window).scroll(function(){
    		var y = $(window).scrollTop();
    		var y1 = $(document).height()-$(window).height()-y;
    		/*console.log(y);*///9160，显示Y轴距离
	    	if(y > 5955){
	    		$('.autofixed').addClass('fixedplus');
	    	}
	    	else{
	    		$('.autofixed').removeClass('fixedplus');
	    	}
	    	if(y1 < 80){
	    		$('.autofixed').removeClass('fixedplus');
	    	}
    	})
    </script>
</head>
<body>
	<?php 
	   include('../model/Db.class.php');
	   $goodsid2=$_GET['id'];
	   $userid2=$_SESSION['user_id'];
	   $sql="select * from goods where Goods_id='".$goodsid2."'";
	   $db=new Db();
	   $rows=$db->select($sql);
	   $photo=explode('$',$rows[0]['Photo_address']);
	   $sql2="select * from shopping_car where userid='".$userid2."' and goodsid='".$goodsid2."'";
		$res2=$db->select($sql2);
		$count=count($res2);
		while($count>0){
			echo "<script>alert('你已将该商品添加入购物车，无需重复添加!');</script>";
			break;
		}
	   echo "<div class='wrap'>
						<div class='wrap_title'>
							<a href='./index.php'>鲜家首页</a>
							<span>></span>
							<a href='./goods.php'>鲜花</a>
							<span>></span>
							".$rows[0]['Name']."
						</div>
						<div style='clear:both'></div>
					</div>
					<div class='wrap'>
						<div class='goods'>
							<div class='wrap_goods'>
								<div class='goods_video_pic'>
									<div class='goods_big_pig' id='zoom'>
										<img src='$photo[0]'>   
									</div>
									<div class='goods_other_pic'>
										<ul class='fix_pic'>
											<li class='active'>
												<img src=".$photo[0].">
											</li>
											<li>
												<img src=".$photo[1].">
											</li>
											<li>
												<img src=".$photo[2].">
											</li>
											<li>
												<img src=".$photo[3].">
											</li>
										</ul>
									</div>
								</div>
								<div class='goods_info'>
									<h3 class='goods_info_title'>".$rows[0]['Name']."</h3>
									<div class='goods_info_sell'>
										<label class='goods_sell'>
											￥
											<span class='price'>".$rows[0]['Price']."</span>
										</label>
										<label class='goods_market'>
											原价
											<span class='market_price'>".$rows[0]['Original_price']."</span>
										</label>
										<label class='discount'>
											<span class='discount_val'>".(number_format(($rows[0]['Price']/$rows[0]['Original_price']),'2')*10)."折</span>
										</label>
										<label class='shop_info'>
											已售
											<span>1314</span>
										</label>
										<label class='shop_info'>
											评价
											<span>1300</span>
										</label>
										<label class='shop_info'>
											人气
											<span>998</span>
										</label>
									</div>
									<div class='goods_param'>
										<ul class='goods_param_detail'>
											<li>
												<label>主素材</label>
												<a href=''>".$rows[0]['Major_flower']."</a>
												<a href=''>9枝</a>
											</li>
											<li>
												<label>绿植工艺</label>
												".$rows[0]['Technology']."
											</li>
											<li>
												<label>花束辅材</label>
												".$rows[0]['Deputy_flower']."
											</li>
											<li>
												<label>花束包装</label>
												".$rows[0]['Decoration']."
											</li>
										</ul>
									</div>
									<div class='goods_label'>
										<dl class='label_detail'>
											<dt>相关标签</dt>
											<dd>
												<a href=''>红玫瑰</a>
											</dd>
											<dd>
												<a href=''>爱情</a>
											</dd>
											<dd>
												<a href=''>鲜花</a>
											</dd>
											<dd>
												<a href=''>玫瑰</a>
											</dd>
											<dd>
												<a href='' class='more'>更多+</a>
											</dd>
										</dl>
									</div>";
 ?>
	
					<div class="goods_num">
						<dl class="shop_num">
							<dt>购买数量</dt>
							<dd>
								<button onclick="jian()" style="height: 35px;width: 60px;padding: 0;margin: 0;">-</button>
							</dd>
							<dd>
								<input type="text" name="goods_amount" class="goods_amount" id="shuliang" value="1">
							</dd>
							<dd>
								<button  onclick="jia()" style="height: 35px;width: 60px;padding: 0;margin: 0;"> +</button>
							</dd>
						</dl>
					</div>
					<div class="goods_buy">
						<a href="" class="buy_fast">立即抢购</a>
						<a href="javascript:" class="add_car" onclick="addshop()">加入购物车</a>
						<a href="" class="contact">联系客服</a>
					</div>
					<div class="goods_service">
						<div class="ser_left">
							<div>本商品已加入<b>人保财险及时达保险计划</b></div>
							<p>延迟超过30分钟起赔，退50%购花款。超过2小时，全额退款。</p>
						</div>
						<div class="ser_right">
							<span>价值5元</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style='clear:both'></div>
	</div>
	<div class="content">
		<div class="G-1">
			<div class="G-2">
				
				<div class="G-3">
					<div class="G-3-1"><b>24小时热销榜</b></div>
					<div><a href="#"><img src="./images/2.jpg"></a></div>
					<div style="margin-top: 8px"><a href="">爱你久久·99枝红玫瑰纯美花束</a></div>
					<a href=""><div class="G-3-2"><b style="margin-left:-32px">￥498.00</b></div></a>
				</div>
				<div class="G-4">
					<div><a href="#"><img src="./images/3.jpg"></a></div>
					<div style="margin-top: 8px"><a href="">想念你的味道·33枝红玫瑰纯美花束</a></div>
					<a href=""><div class="G-3-2"><b style="margin-left:-32px">￥298.00</b></div></a>
				</div>		
				<div class="G-4">
					<div><a href="#"><img src="./images/4.jpg"></a></div>
					<div style="margin-top: 8px"><a href="">爱情密码·13枝红玫瑰纯美花束</a></div>
					<a href=""><div class="G-3-2"><b style="margin-left:-32px">￥148.00</b></div></a>
				</div>
				<div class="G-4">
					<div><a href="#"><img src="./images/5.jpg"></a></div>
					<div style="margin-top: 8px"><a href="">长相厮守·66枝红玫瑰纯美花束</a></div>
					<a href=""><div class="G-3-2"><b style="margin-left:-32px">￥398.00</b></div></a>
				</div>
				<div class="G-4">
					<div><a href="#"><img src="./images/6.jpg"></a></div>
					<div style="margin-top: 8px"><a href="">让我守护你·19枝粉玫瑰纯美花束</a></div>
					<a href=""><div class="G-3-2"><b style="margin-left:-32px">￥168.00</b></div></a>
				</div>
				<div class="G-4">
					<div><a href="#"><img src="./images/7.jpg"></a></div>
					<div style="margin-top: 8px"><a href="">远方的守候·12枝粉康乃馨纯美花束</a></div>
					<a href=""><div class="G-3-2"><b style="margin-left:-32px">￥118.00</b></div></a>
				</div>
				<div class="G-4">
					<div><a href="#"><img src="./images/8.jpg"></a></div>
					<div style="margin-top: 8px"><a href="">浪漫的故事·13枝香槟玫瑰纯美花束</a></div>
					<a href=""><div class="G-3-2"><b style="margin-left:-32px">￥148.00</b></div></a>
				</div>
				<div class="G-4">
					<div><a href="#"><img src="./images/9.jpg"></a></div>
					<div style="margin-top: 8px"><a href="">撩动我的心·33枝粉玫瑰纯美花束</a></div>
					<a href=""><div class="G-3-2"><b style="margin-left:-32px">￥318.00</b></div></a>
				</div>
				<div class="G-4">
					<div><a href="#"><img src="./images/10.jpg"></a></div>
					<div style="margin-top: 8px"><a href="">我爱你·3枝红玫瑰纯美花束</a></div>
					<a href=""><div class="G-3-2"><b style="margin-left:-32px">￥88.00</b></div></a>
				</div>
				<div class="G-4">
					<div><a href="#"><img src="./images/11.jpg"></a></div>
					<div style="margin-top: 8px"><a href="">携手未来·11枝香槟玫瑰纯美花束</a></div>
					<a href=""><div class="G-3-2"><b style="margin-left:-32px">￥138.00</b></div></a>
				</div>
				<div class="G-4">
					<div><a href="#"><img src="./images/12.jpg"></a></div>
					<div style="margin-top: 8px"><a href="">情意绵绵·9枝红玫瑰纯美花束</a></div>
					<a href=""><div class="G-3-2"><b style="margin-left:-32px">￥128.00</b></div></a>
				</div>
				<div class="G-4">
					<div><a href="#"><img src="./images/13.jpg"></a></div>
					<div style="margin-top: 8px"><a href="">我最亲爱的人·33枝粉玫瑰纯美花束</a></div>
					<a href=""><div class="G-3-2"><b style="margin-left:-32px">￥298.00</b></div></a>
				</div>
			</div>
			<div class="F-1">
				<div class="F-2">
					<p>鲜花适用对象</p>
				</div>
				<div>
					<a href=""><div class="F-3">送恋人</div></a>
					<a href=""><div class="F-3">送朋友</div></a>
					<a href=""><div class="F-3">送亲人</div></a>
					<a href=""><div class="F-3">送老师</div></a>
					<a href=""><div class="F-3">送长辈</div></a>
					<a href=""><div class="F-3">送客户</div></a>
					<a href=""><div class="F-3">送病人</div></a>
					<a href=""><div class="F-3">送花篮</div></a>
					<a href=""><div class="F-3">送桌花</div></a>
				</div>
			</div>
			<div class="autofixed">
				<div class="F-1">
					<div class="F-2">
						<p>鲜花用途</p>
					</div>
					<div>
						<a href=""><div class="F-3">爱情鲜花</div></a>
						<a href=""><div class="F-3">生日鲜花</div></a>
						<a href=""><div class="F-3">友情鲜花</div></a>
						<a href=""><div class="F-3">周年纪念</div></a>
						<a href=""><div class="F-3">婚庆鲜花</div></a>
						<a href=""><div class="F-3">祝贺鲜花</div></a>
						<a href=""><div class="F-3">探病慰问</div></a>
						<a href=""><div class="F-3">问候长辈</div></a>
						<a href=""><div class="F-3">商务鲜花</div></a>
						<a href=""><div class="F-3">道歉鲜花</div></a>
					</div>
				</div>
				<div class="F-1">
					<div class="F-2">
						<p>鲜花销售价</p>
					</div>
					<div>
						<a href=""><div class="F-4">150元以内</div></a>
						<a href=""><div class="F-4">150-199元</div></a>
						<a href=""><div class="F-4">200-249元</div></a>
						<a href=""><div class="F-4">250-399元</div></a>
						<a href=""><div class="F-4">400-499元</div></a>
						<a href=""><div class="F-4">500-599元</div></a>
						<a href=""><div class="F-4">600-699元</div></a>
						<a href=""><div class="F-4">700元以上</div></a>
					</div>
				</div>	
			</div>
		</div>
		<div id="yf-bigbox">
			<div id="yf-head">
				<ul style="clear: both !important;">
					<li class="active"><a href="#" id="spxq">商品详情</a></li>
					<li><a href="#" id="yhpj">用户评价(<span>1845</span>)</a></li>
					<li><a href="#" id="gwbz">购物保障</a></li>
				</ul>
				<div class="yf-head-another" style="display: none;">
					<?php
						echo "<label class='sell_price'>￥".$rows[0]['Price']."</label>
							<a href='#'>咨询客服</a>
							<a href='#' class='act'><i></i>立即购买</a>";
					?>


					<!-- <label class="sell_price"></label>
					<a href="#">咨询客服</a>
					<a href="#" class="act"><i></i>立即购买</a> -->
				</div>
			</div>
			<div class="h40"></div>
			
			<!-- <div class="h40"></div> -->
			<?php 
			   $sql="select * from goods where Goods_id='".$goodsid2."'";
			   $db2=new Db();
			   $rows=$db2->select($sql);
			   $photo=explode('$',$rows[0]['Photo_address']);
			   $i=5;
			   echo "
			   <div class='shop-params'>
					<dl style='clear: both;'>
						<dt>主要花材：".$rows[0]['Major_flower']."，".$rows[0]['Deputy_flower']."，".$rows[0]['Decoration']."</dt>
						<dd><label>主花材</label><a href='/xianhua/mg/'>".$rows[0]['Major_flower']."</a> <a href='/xianhua/zs19/'>9枝</a></dd>
						<dd><label>花束辅材</label>".$rows[0]['Deputy_flower']."</dd>
						<dd><label>花束包装</label>".$rows[0]['Decoration']."</dd>
						<dd><label>适用对象</label><a href='/xianhua/hm/'>".$rows[0]['Object']."</a></dd>
						<dd><label>适用节日</label><a href='/xianhua/yq/'>".$rows[0]['Holiday']."</a></dd>
						<dd><label>花束颜色</label><a href='/xianhua/red/'>".$rows[0]['Color']."</a> </dd>
					</dl>
				</div>";
			   while($i<count($photo))
			   {
			   		echo "<img class='p-goods' src='".$photo[$i]."'>";
			   		$i=$i+1;
			   }
			 ?>
			<div id="yf-text-tail">	
				<p id="yf-t1">其他说明</p>
				<p class="yf-t2">因各地花艺师不同，在辅材搭配上不可能与图片完全一致，谢谢您的理解。</p>
				<p class="yf-t2">如果您不能确定送达地址所属范围，请参照以下标准执行：</p>
				<p class="yf-t3">A 市区：指传统意义上的市区、或城内10公里范围，免费配送</p>

				<p class="yf-t3">B 郊区：指城内超出10公里外至20公里范围内、或城区边缘地带，加收运费30元</p>

				<p class="yf-t3">C 远郊及偏远地区：超出市区20公里以外的城市周边地区（或虽未超出20公里范围，但属交通不便地区），</p>
				<p class="yf-t3">加收50元；偏远地区请先咨询好花网客服是否能够送达，如可以配送的话路费根据具体距离另商议。</p>

				<p class="yf-t3">D 晚上18：30分后花艺师已下班，将在第二日进行派送，特殊紧急情况请联系客服。</p>
				<div style="clear: both;"></div>
			</div>	
			<div class="yc-customs-review">
				<div class="title-box">
					<span class="title">用户评价(1845)</span>
				</div>
				<div class="lists-ajax">
					<div class="lists">
						<ul>
							<li class="list-item">
								<div class="user-mes">
									<a href="#"><img src="images/special/user_photo.jpg" width="57" height="57"></a>
									<span class="user-name">135****9109</span>
								</div>
								<div class="item-content">
									<div class="star">
										<div class="star-score star-5"></div>
									</div>
									<div class="goods-name">情意绵绵·9枝红玫瑰纯美花束</div>
									<div class="user-review">
										<p>鲜花很新鲜，朵朵含苞待放，很大的一束，以后要订鲜花，就订你家了！</p>
									</div>
									<div class="user-review-imgs">
										<img src="images/special/review_imgs/review_img.jpg">
									</div>
									<div class="user-review-bigimg" style="">
										<img>
									</div>
									<div class="user-address">
										<img src="images/special/pos.png" style="width: auto;">
										<span class="user-ip">61.137.***.121</span>
										<span class="address">邵阳市 邵东县 双清区邵阳大道与建设路口柏林国***</span>
									</div>
								</div>
							</li>
							<li class="list-item">
								<div class="user-mes">
									<a href="#"><img src="images/special/user_photo.jpg" width="57" height="57"></a>
									<span class="user-name">186****1123</span>
								</div>
								<div class="item-content">
									<div class="star">
										<div class="star-score star-5"></div>
									</div>
									<div class="goods-name">情意绵绵·9枝红玫瑰纯美花束</div>
									<div class="user-review">
										<p>虽然实物与图片略有差异，但是质量还是可以的，速度也非常快，赞一个。</p>
									</div>
									<div class="user-review-imgs">
										<!-- <img src="images/special/review_img.jpg"> -->
									</div>
									<div class="user-review-bigimg" style="">
										<!-- <img> -->
									</div>
									<div class="user-address">
										<img src="images/special/pos.png" style="width: auto;">
										<span class="user-ip">119.53.***.29</span>
										<span class="address">长春市 南关区 解放大路810号长春国际商务中心A1区9***</span>
									</div>
								</div>
							</li>
							<li class="list-item">
								<div class="user-mes">
									<a href="#"><img src="images/special/user_photo.jpg" width="57" height="57"></a>
									<span class="user-name">137****9210</span>
								</div>
								<div class="item-content">
									<div class="star">
										<div class="star-score star-5"></div>
									</div>
									<div class="goods-name">情意绵绵·9枝红玫瑰纯美花束</div>
									<div class="user-review">
										<p>鲜花很新鲜，朵朵含苞待放，很大的一束，以后要订鲜花，就订你家了！</p>
									</div>
									<div class="user-review-imgs">
										<img src="images/special/review_imgs/01.jpg">
										<img src="images/special/review_imgs/02.jpg">
									</div>
									<div class="user-review-bigimg" style="">
										<img>
										<img>
									</div>
									<div class="user-address">
										<img src="images/special/pos.png" style="width: auto;">
										<span class="user-ip">220.175.***.151</span>
										<span class="address">九江市 德安县 德安县东佳大道雅悦大酒店左侧肉蟹煲港华燃***</span>
									</div>
								</div>
							</li>
						</ul>
						<!-- <div class="page-nav">
							<ul class="clearfix">
								<li><a href="javascript:;" url="/xianhua/45641/c1.html" title="上一页">上一页</a></li>
								<li><span class="active">1</span></li>
								<li><a href="javascript:;" url="/xianhua/45641/c2.html" title="第2页" class="index ">2</a></li>
								<li><a href="javascript:;" url="/xianhua/45641/c3.html" title="第3页" class="index ">3</a></li>
								<li><span>…</span></li>
								<li><a href="javascript:;" url="/xianhua/45641/c154.html" title="第154页" class="index action">154</a></li>
								<li><a href="javascript:;" url="/xianhua/45641/c2.html" title="下一页">下一页</a></li>
							</ul>
							<div class="clear"></div>
						</div> -->
					</div>
				</div>
			</div>


			<div class="h60"></div>

			<div class="yf_shopping_protect">
				购物保障
			</div>
			<div class="yf_floatphoto">
				<div class="floatphoto_images">
					<img class="floatphoto_images_image hover" src="./images/images/ensure_01.png">
					<img class="floatphoto_images_image hover" src="./images/images/ensure_02.png">
					<img class="floatphoto_images_image hover" src="./images/images/ensure_03.png">
					<img class="floatphoto_images_04 floatphoto_images_image hover " src="./images/images/ensure_04.png">
				</div>
				<div class="floatphoto_images_items">
					<img src="images/ensure_con_01.png" style="display: inline;">
					<img src="images/ensure_con_02.png" style="display: none;">
					<img src="images/ensure_con_03.png" style="display: none;">
					<img src="images/ensure_con_04.png" style="display: none;">
				</div>
			</div>
			<div style='clear:both;'></div>
			<script type="text/javascript">
				$(function(){
					$('.floatphoto_images .hover').hover(function(){
						var index = $(this).index();
						$('.floatphoto_images_items img').hide().eq(index).show();// 两个div必须是相同结构
					});
				});
			</script>
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
				<a href="./shoppingcar.php" title="购物车">
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
	<script type="text/javascript">
		function addshop(){

			var price=($(".price").text());
			console.log(price);
			var num=($(".goods_amount").val());
			console.log(num);
			var userid=<?php echo $_SESSION['user_id']?>;
			var goodsid=<?php echo $goodsid2?>;
			console.log(goodsid);
			$.ajax({
					url:"../api/shoping-car.php",
					type:"get",
					dataType:"text",
					data:{
						price:price,
						num:num,
						goodsid:goodsid,
						userid:userid
					},
					success:function(res){
						alert("加入购物车成功");
					},
					error:function(res){
						alert("加入购物车失败");
					}       
				})


		}
		function jia(){
			var obj=document.getElementById('shuliang');
			obj.value=parseInt(obj.value)+1;
		}
		function jian(){
			var obj=document.getElementById('shuliang');
			if(obj.value==1){
				alert("商品数量最小为1，不可再减少");
			}else{
				obj.value=parseInt(obj.value)-1;
			}
			
		}

	</script>
</body>
</html>