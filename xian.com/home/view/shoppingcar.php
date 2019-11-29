<!DOCTYPE html>
<?php
	session_start();
	// 如果session为空，即未登录，自动转到登录界面
	if(!isset($_SESSION['user_id'])){
		echo "<script>alert('请先登录');</script>";
		$home_url = 'useracount/login/login.php';
		header('Location:'.$home_url);
	}
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/footer.css">
	<link rel="stylesheet" type="text/css" href="./css/shoppingcar.css">
    <script typet="text/javascript" src="./js/jquery-3.4.0.min.js"></script>

    
 	<link rel="stylesheet" type="text/css" href="css/animation.css">
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<!-- 倒计时 -->

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- 标签hover -->
	<script type="text/javascript" src="js/hover.js"></script>
	<!-- 倒计时 -->
	<!-- <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script> -->
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
				<a href="index.php"><img src="images/logo.png"></a>
			</div>
			<div class="menu">
				<a href="index.php">首页</a>
				<a href="./goods.php" class="active">鲜花</a>
				<a href="./goods.php?keyword=永生花">永生花</a>
				<a href="./week_flower.php">每周一花</a>
				<a href="./flower_lan.php">花语</a>
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
							<a href="useracount/shop/order/index.php"><i class="i"></i>我的鲜家</a>
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
	<div style="height:60px;"></div>
	<?php
		include('../model/Db.class.php');
		$db=new Db();
		$id = $_SESSION['user_id'];
		$sql="select * from shopping_car where userid='$id'";
		$rows = $db->select($sql);
		$i=0;
		$flag=count($rows,0);
		if($flag==0)
		{
			echo "<div class='G_1'>
				<div class='G_mid_1'>
					<div class='G_mid_2'>
						<p>
							<span>快捷<br>选花</span>
							<span class='G_mid_3'>fast choose</span>
						</p>
					</div>
					<div class='G_mid_4' style='background-color:rgb(230,242,230);'>
						<span class='G_mid_5' style='color:rgb(117,160,117)'>用途</span>
						<span class='G_mid_6 G_mid_7' style='color:rgb(117,160,117)'>全部</span>
					</div>
					<div class='G_mid_4' style='background-color:rgb(250,240,227);'>
						<span class='G_mid_5' style='color:rgb(157,125,82)'>销售价</span>
						<span class='G_mid_6 G_mid_7' style='color:rgb(157,125,82)'>全部</span>
					</div>
					<div class='G_mid_4' style='background-color:rgb(241,246,249);'>
						<span class='G_mid_5' style='color:rgb(92,125,145)'>花材</span>
						<span class='G_mid_6 G_mid_7' style='color:rgb(92,125,145)'>全部</span>
					</div>
					<div class='G_mid_4' style='background-color:rgb(247,247,247);'>
						<span class='G_mid_5' style='color:rgb(92,125,145)'>枝数</span>
						<span class='G_mid_6 G_mid_7' style='color:rgb(92,125,145)'>全部</span>
					</div>
					<div class='G_mid_4' style='background-color:rgb(230,242,230);'>
						<span class='G_mid_5' style='color:rgb(120,162,120)'>类别</span>
						<span class='G_mid_6 G_mid_7' style='color:rgb(120,162,120)'>全部</span>
					</div>
				</div>
			</div>
			<div style='height:60px;'></div>
			<div class='G_1'>
				<div class='G_down_1'>
					<div class='G_down_2'>对不起，当前购物车没有任何商品！</div>
					<div class='G_down_3'><a href='goods.php' style='color:#fff'>继续购物</a></div>
				</div>		
			</div>";
		}else{
			echo "<div id='cart'>
					<div id='cart-header'>
						<div class='left' style='margin-left: 190px;width:380px;'>名称</div>
						<div class='left w120 center'>价格</div>
						<div class='left w120 center'>数量</div>
						<div class='left w120 center'>小计</div>
						<div class='left w120 center'>操作</div>
					</div>
					<div id='cart-items'>";
			while($i<count($rows,0))
						{
							$goodsid=$rows[$i]['goodsid'];
							$sql2="select * from goods where Goods_id='$goodsid'";
							$row = $db->select($sql2);
							$photo=explode('$',$row[0]['Photo_address']);
							echo "
							<div class='clear single-item'>
								<div class='left w20'>
									<input name='selectOne' type='checkbox'>
								</div>
								<div class='left w90'>
									<img src='".$photo[0]."'>
								</div>
								<div class='left w250' style=''>
									<a href=''><span class='title'>".$row[0]['Name']."</span></a>
								</div>
								<div class='left w120 center'>&yen;<span class='price'>".$row[0]['Price']."</span></div>
								<div class='left w120 center'>
									<button class='small-button'>-</button>
									<input class='center count' type='text' size='2' value='".$rows[$i]['amount']."'>
									<button class='small-button'>+</button>
								</div>
								<div class='left w120 center'>&yen;<span>".$row[0]['Price']*$rows[$i]['amount']."</span></div>
								<div class='left w120 center'>
									<a href='javascript:void(0);' id='delete' goodsid=".$goodsid."><img src='./images/de.png' alt='删除')></a>
								</div>
							</div>";
							$i=$i+1;
					}
		echo "<div id='cart-footer'>
	                <div class='left clear'>
	                        <input id='selectAll' type='checkbox'>
	                        <label for='selectAll'>全选</label>
	                </div>
					<div class='right'>
						<div id='bottom'>
							<div class='tail_ff'>商品总金额: <span id='sumPrice' class='right'>&yen;0.00</span></div>
							<div class='tail_ff'>优惠金额: <span id='discount' class='right'>&yen;0.00</span></div>
							<div class='tail_ff'>应付金额: <span id='totalPrice' class='right'>&yen;0.00</span></div>
						</div>
						<div>
						<a href=''>继续购物</a><button class='big-button' style='margin-left: 10px;cursor: pointer;'>结算订单</button>
						</div>
					</div>
				</div>";
		}
	 ?>
	<div style="height:120px;"></div>
	<div class="G_1">
		<div class="G_bottom">
			<a href="#"><div class="G_bottom_1">购买该商品的还购买了</div></a>
			<a href="#"><div class="G_bottom_2">我的收藏</div></a>	
		</div>
	</div>
	<div style="height:40px;"></div>
	<div class="G_1">
		<div style="height:153px;">
			<a href="#" class="G_bottom_3"><img src="./images/shoppingcar-images/1.jpg" weight="153px"; height="153px";></a>
			<a href="#" class="G_bottom_3"><img src="./images/shoppingcar-images/2.jpg" weight="153px"; height="153px";></a>
			<a href="#" class="G_bottom_3"><img src="./images/shoppingcar-images/3.jpg" weight="153px"; height="153px";></a>
			<a href="#" class="G_bottom_3"><img src="./images/shoppingcar-images/4.jpg" weight="153px"; height="153px";></a>
			<a href="#" class="G_bottom_3"><img src="./images/shoppingcar-images/5.jpg" weight="153px"; height="153px";></a>
			<a href="#" class="G_bottom_3"><img src="./images/shoppingcar-images/6.jpg" weight="153px"; height="153px";></a>
		</div>
		<div class="G_bottom_4">
			<div class="G_bottom_5" style="margin-left: -5px;">
				<div>爱你久久·99枝红玫瑰...</div>
				<div class="G_bottom_6">￥498.00</div>
			</div>
			<div class="G_bottom_5">
				<div>想念你的味道·33枝红...</div>
				<div class="G_bottom_6">￥298.00</div>
			</div>
			<div class="G_bottom_5">
				<div>爱情密码·13枝红玫瑰...</div>
				<div class="G_bottom_6">￥148.00</div>
			</div>
			<div class="G_bottom_5">
				<div>一心一意·11枝红玫瑰...</div>
				<div class="G_bottom_6">￥138.00</div>
			</div>
			<div class="G_bottom_5">
				<div>今生与你相伴·9枝红玫...</div>
				<div class="G_bottom_6">￥128.00</div>
			</div>
			<div class="G_bottom_5">
				<div>因你而幸福·9枝戴安娜...</div>
				<div class="G_bottom_6">￥128.00</div>
			</div>
		</div>
	</div>
	<div style="height:60px;width:100%;border-bottom:1px solid #ececec;; "></div>
	<div style="height:20px;"></div>
	<script>
			// jQuery中的$函数(jQuery)的作用
			// 1. 如果$函数的参数是一个函数那么该函数绑定文档加载完成后要执行的回调函数
			// 2. 如果$函数的参数是一个选择器字符串那么$函数会返回对应的元素(jQuery对象)
			// 3. 如果$函数的参数是一个标签字符串那么$函数会创建该元素并返回(jQuery对象)
			// 4. 如果$函数的参数是一个原生的JS元素对象那么$函数会将它转变成jQuery对象
			$(function() {
				// this到底是什么要看具体的上下文环境
				// 简单的说函数中的this指的是谁调用了这个函数或者谁引发了这个函数的执行
				$('.title').on('mouseenter',function(){
					$(this).attr("title",$(this).text());
				});
				$('#selectAll').on('change', function(evt) {
					// 获取事件源的两种方式: evt.target或者this
					// 这里拿到的是原生的JavaScript对象
					if ($(this).prop('checked')) {
						$('.single-item input[type="checkbox"]').prop('checked', true);
						calcTotal();
					} else {
						$('.single-item input[type="checkbox"]').prop('checked', false);
						$('#sumPrice').html('&yen;0.00');
						$('#totalPrice').html('&yen;0.00');
					}
				});
				
				// 为单个商品项的复选框绑定改变事件
				$('input[name="selectOne"]').on('change', function() {
					calcTotal();
					if (!$(this).prop('checked')) {
						$('#selectAll').prop('checked', false);
					}
				});
				
				// 为删除选中商品超链接绑定事件回调
				$('#clearSelected').on('click', function() {
					if (window.confirm('确定要删除所选商品吗?')) {
						$('.single-item').each(function() {
							if ($(this).find('input[name="selectOne"]').prop('checked')) {
								$(this).remove();
							}
						});
						calcTotal();
					}
				});
				
				// 为减少和添加商品数量的按钮绑定事件回调
				$('.single-item button').on('click', function(evt) {
					$(this).parent().parent().find('input[name="selectOne"]').prop('checked', true);
					if ($(this).text() == '-') {
						var count = parseInt($(this).next().val());
						if (count > 1) {
							count -= 1;
							$(this).next().val(count);
						} else {
							alert('商品数量最少为1');
						}
					} else {
						var count = parseInt($(this).prev().val());
						if (count < 200) {
							count += 1;
							$(this).prev().val(count);
						} else {
							alert('商品数量最多为200');
						}
					}
					var price = parseFloat($(this).parent().prev().find('span').text());
					$(this).parent().next().html('&yen;' + (price * count).toFixed(2));
					calcTotal();
				});
				
				// 为单个商品项删除超链接绑定事件回调
				$('.single-item #delete').on('click', function() {
					
					if (window.confirm('确定要删除该项吗?')) {
						$(this).parent().parent().remove();
						calcTotal();
						var value=$(this).attr("goodsid");
						console.log(value);
						$.ajax({
							url:"../api/car_delete.php",
							type:"get",
							dataType:"text",
							data:{
								goodsid:value
							}      
						})
					}
				});
				
				// 为商品数量文本框绑定改变事件回调
				$('.single-item input[type="text"]').on('change', function() {
					$(this).parent().parent().find('input[name="selectOne"]').prop('checked', true);
					var count = parseInt($(this).val());
					
					if (count != $(this).val() || count < 1 || count > 200) {
						alert('无效的商品数量值');
						count = 1;
						$(this).val(count);
					}
					var price = parseFloat($(this).parent().prev().find('span').text());
					$(this).parent().next().html('&yen;' + (price * count).toFixed(2));
					calcTotal();
				});
				
				// 计算总计
				function calcTotal() {
					var checkBoxes = $('input[name="selectOne"]');
					var priceSpans = $('.single-item .price');
					var countInputs = $('.single-item .count');
					var dis = $('#discount').text();
					var discount = (dis.replace(/[^0-9]/ig,"")) * 0.01;
					var totalCount = 0;
					var sumPrice = 0;
					var totalPrice = 0;
					for (var i = 0; i < priceSpans.length; i += 1) {
						// 复选框被勾中的购物车项才进行计算
						if ($(checkBoxes[i]).prop('checked')) {
							// 强调: jQuery对象使用下标运算或get方法会还原成原生的JavaScript对象
							var price = parseFloat($(priceSpans[i]).text());
							var count = parseInt($(countInputs[i]).val());
							totalCount += count;
							sumPrice += price * count;
							totalPrice = sumPrice - discount;

						}
					}
					$('#sumPrice').html('&yen;' + sumPrice.toFixed(2));
					$('#totalPrice').html('&yen;' + totalPrice.toFixed(3));
				}
			});
			// 结算订单，将需要购买的数据发送到下一个页面
				$('.big-button').on('click', function() {
					console.log("i am coming");
					var checkBoxes = $('input[name="selectOne"]');
					var priceSpans = $('.single-item .price');
					var countInputs = $('.single-item .count');
					var goodsid = $('.single-item #delete');
					var totalPrice = $('#totalPrice').text();
					var total = (totalPrice.replace(/[^0-9]/ig,"")) * 0.001;
					var arr=new Array();
					console.log(total);
					for (var i = 0; i < priceSpans.length; i += 1) {
						// 复选框被勾中的购物车项才进行计算
						if ($(checkBoxes[i]).prop('checked')) {
							// 强调: jQuery对象使用下标运算或get方法会还原成原生的JavaScript对象
							var count = parseInt($(countInputs[i]).val());
							var id=parseInt($(goodsid[i]).attr("goodsid"));
							console.log(count);
							console.log(id);
							//将数据转化为JSON格式
							var jsonstr={goodsid:id,count:count};
							//压缩进数组
							arr.push(jsonstr);

						}
					}
					if(arr.length==0){
						alert("您好，您未选择任何商品，请重试！");
					}else{
						console.log(arr);
						var data=JSON.stringify(arr);    //将json数组转化为json字符串
						console.log(data);
						var a = "order/order.php?data="+data+"&price="+total;
						window.location.href=a;
					}
					
				});
		</script>
</body>
</html>