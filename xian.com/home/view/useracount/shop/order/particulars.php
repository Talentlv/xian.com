<!DOCTYPE html>
<?php
session_start();
// 如果session为空，即未登录，自动转到登录界面
if(!isset($_SESSION['user_id'])){
	echo "<script>alert('请先登录');</script>";
	
	$home_url = '../../../login.php';
	header('Location:'.$home_url);
}
else{
	$con = new mysqli('localhost', 'root', 'root', 'xian');
	if($con->connect_error){
		die("连接失败: " . $con->connect_error);
	}
	$con->set_charset("utf8");
	$sql_o = "select * from orders where Order_id='$_GET[oid]' group by Order_id";
	$result_o = $con->query($sql_o);
	$row_o = $result_o->fetch_array();
	$total_prices = 0.00;
}
?>
<html>
	<head>
		<title>鲜家网 | 会员中心 &gt; 我的订单</title>
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
		
		<script src="../../js/app.min.js"></script>
		<script src="../../js/common.js"></script>
		<script type="text/javascript">
		$(function(){
			$('.khzx-menu dl dt a').click(function(){
				$('.khzx-menu dl').removeClass('active');
				$(this).parent().parent().addClass('active');
			});
			//动态生成
			$('.khzx-menu dl dd a[res=1003]').addClass('active').parent().parent().addClass('active');
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
					<a href="../../../" >首页</a>
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
								<button type="submit" class="s" onclick="if($('.q').val()=='') return false;" ><i class="icon icon-search iconbounce"></i></button>
							</div>
						</form>
					</span>
					<span class="shop-other iconbounce"> <i class="icon icon-me"></i> </span>
					<div class="h-me-select" style="display: none;">
						<div class="arrow-up"></div>
						<ul>
							<li class="i_1 login"><a href="../../login/login.php"><i class="i"></i>登录/注册</a></li>
							<li class="i_2"><a href="index.php"><i class="i"></i>我的鲜家</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="wrap nav">
			<a href="../../../">鲜家首页</a><span>&gt;</span><a href="../../member/index.php">会员中心</a><span>&gt;</span>我的订单
		</div>


		<div class="wrap">
			<div class="wl240 bgfff khzx-menu">
				<dl>
					<dt><a res="1001" href="../../member/index.php"><i class="icon km01"></i>会员首页</a></dt>
				</dl>

				<dl>
					<dt><a res="1002" href="javascript:;"><i class="icon km02"></i>订单信息<i class="icon km"></i></a></dt>
					<dd><a res="1003" href="index.php">我的订单</a></dd>
				</dl>

				<dl>
					<dt><a res="1009" href="javascript:;"><i class="icon km04"></i>帐户设置<i class="icon km"></i></a></dt>
					<dd><a res="1010" href="../../member/info.php">个人信息</a></dd>
					<dd><a res="1011" href="../address.php">常用收货人</a></dd>
					<dd><a res="1012" href="../../member/password.php">修改密码</a></dd>

				</dl>

				<dl>
					<dt><a res="1023" href="../../member/logout.php"><i class="icon km06"></i><span class="red">注销</span></a></dt>
				</dl>
			</div>
			
			<div class="wr935 bgfff">
				<style type="text/css">
					.my-order-show-goods{
						font-size: 12px;
						color: #333;
						margin-bottom: 30px;
					}
					.my-order-show-goods a.block{
						width: 75px;
						height: 28px;
						line-height: 28px;
						margin-bottom: 10px;
						display: inline-block;
						font-size: 12px;
						color: #fff;
						text-align: center;
						background-color: #63c170;
						border-radius: 14px;
					}
					.my-order-show-goods-head{
						height: 45px;
						line-height: 45px;
						background-color: #e7e7e7;
					}/*
					.my-order-show-goods-head div{
						text-align: center;
					}
					.my-order-show-goods-head div.name{
						text-align: left;
					}*/
					.my-order-show-goods-head div.note{
						text-align: right;
					}
					.my-order-show-goods .img{
						width: 80px;
						text-align: center;
						float: left;
					}
					.my-order-show-goods .name{
						width: 260px;
						text-align: left;
						float: left;
					}
					.my-order-show-goods .price{
						width: 80px;
						text-align: center;
						float: left;
					}
					.my-order-show-goods .num{
						width: 60px;
						text-align: center;
						float: left;
					}
					.my-order-show-goods .coupon{
						width: 120px;
						min-height: 25px;
						text-align: left;
						float: left;
					}
					.my-order-show-goods .note{
						width: 170px;
						min-height: 25px;
						text-align: left;
						float: left;
					}
					.my-order-show-goods .comment{
						width: 100px;
						text-align: center;
						float: left;
					}
					.my-order-show-goods-body{}
					.my-order-show-goods-item{
						padding: 10px 0;
						border-left: 1px solid #e7e7e7;
						border-right: 1px solid #e7e7e7;
						border-bottom: 1px solid #e7e7e7;
					}
					.my-order-show-goods-item .img img{
						width: 60px;
						height: 60px;
					}
					.my-order-show-goods-item .name h3{
						font-size: 14px;
					}
					.my-order-show-goods-item .name ul{
						margin-top: 5px;
					}
					.my-order-show-goods-item .name ul li{
						line-height: 22px;
						margin-right: 10px;
						color: #777;
						float: left;
					}
					.my-order-show-goods-info{
						line-height: 25px;
						padding: 10px;
						border-left: 1px solid #e7e7e7;
						border-right: 1px solid #e7e7e7;
						border-bottom: 1px solid #e7e7e7;
					}
					
					.my-order-show{}
					.my-order-show a.block{
						width: 75px;
						height: 28px;
						line-height: 28px;
						display: inline-block;
						font-size: 12px;
						color: #fff;
						text-align: center;
						background-color: #63c170;
						border-radius: 14px;
					}
					.my-order-show dl{
						border: 1px solid #e7e7e7;
						margin-bottom: 30px;
					}
					.my-order-show dl dt{
						height: 45px;
						line-height: 45px;
						padding: 0 20px;
						background-color: #e7e7e7;
					}
					.my-order-show dl dd{
						padding: 0 20px;
						line-height: 45px;
						border-top: 1px solid #e7e7e7;
					}
					.my-order-show dl dd a{
						margin-right: 20px;
					}
					.my-order-show dl dd label{
						width: 100px;
						margin-right: 10px;
						color: #777;
						text-align: right;
						display: inline-block;
					}
				</style>

				<div class="my-order-show">
					
					<dl>
						<dt>订单信息</dt>
						<dd><label>订单编号：</label><?php echo $row_o['Order_id'];?></dd>
						<dd><label>订单金额：</label><b>&yen; 158.00</b></dd>
						<dd><label>下单日期：</label><?php echo $row_o['Order_time'];?></dd>
						<dd><label>更新日期：</label><?php echo $row_o['Order_time'];?></dd>
						<dd>
							<label>状态：</label>
									<a href="/shop/order/delete/id/185089/" res="confirm">删除订单</a>

						</dd>
						
					</dl>

				</div>

				<div class="my-order-show-goods">
					<div class="my-order-show-goods-head clearfix">
						<div class="img">商品</div>
						<div class="name">商品名称</div>
						<div class="price">售价</div>
						<div class="num">数量</div>
						<div class="coupon">优惠</div>
						<div class="note">备注</div>
						<div class="comment"><a href="javascript:;" onclick="openChat();" class="blue">联系客服</a></div>
					</div>
					<div class="my-order-show-goods-body">
						<?php
						$sql_g = "select * from orders where Order_id='$row_o[Order_id]'";
						$result_g = $con->query($sql_g);
						while($row_g=$result_g->fetch_assoc()){
							$sql = "select * from goods where Goods_id='$row_g[Goods_id]'";
							$result = $con->query($sql);
							$row = $result->fetch_array();
							$total_prices += $row_g['Goods_count'] * $row['Price'];
						?>
							<div class="my-order-show-goods-item clearfix">
								<div class="img">
									<a href="/xianhua/45744.html">
										<?php $photo=explode('$',$row['Photo_address']);?>
										<img src="../../../<?php echo $photo[0];?>" width="60" height="60" />
									</a>
								</div>
								<div class="name">
									<h3><a href="/xianhua/45744.html" target="_blank"><?php echo $row['Name'];?></a></h3>
								</div>
								<div class="price">
									
									<p><b>￥ <?php echo $row['Price'];?></b></p>
								</div>
								<div class="num"><?php echo $row_g['Goods_count'];?></div>

							</div>
						<?php
						}
						?>

					</div>
				</div>

				<div class="my-order-show">
					<?php
					$sql_a = "select * from address where Address_id='$row_o[Address_id]'";
					$result_a = $con->query($sql_a);
					$row_a = $result_a->fetch_array();
					?>

					<dl>
						<dt>收件人信息</dt>
						<dd><label>收件人：</label><?php echo $row_a['Name'];?></dd>
						<dd><label>地址：</label><?php echo $row_a['Area']."  ".$row_a['Address'];?></dd>
						
						<dd><label>手机：</label><?php echo $row_a['Phone'];?></dd>
					</dl>

					<dl>
						<dt>会员备注</dt>
						<dd>送达时间：<?php echo $row_o['Delivery_time']."  ".$row_o['Time_frame'];?><br />
							订货电话：<?php echo $row_a['Telphone'];?><br />
							订单来源：<?php echo $row_o['Order_source'];?><br />
							留言信息：<?php echo $row_o['Message'];?><br />
							</dd>
					</dl>

					<dl>
						<dt>结算信息</dt>
						<dd><label>商品总价：</label>￥ <?php echo number_format($total_prices,'2');?></dd>
						<dd><label>+运费：</label>￥ <?php echo $row_o['Freight'];?></dd>
						
						
						
						
						<dd><label>订单支付金额：</label><b>￥ <?php echo number_format($total_prices+$row_o['Freight'],'2');?></b></dd>
					</dl>

				</div>

			</div>

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
<?php
$con->close();
?>