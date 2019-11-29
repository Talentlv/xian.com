<!DOCTYPE html>
<?php
	session_start();
	// 如果session为空，即未登录，自动转到登录界面
	if(!isset($_SESSION['user_id'])){
		echo "<script>alert('请先登录');</script>";
		$home_url = 'login.php';
		header('Location:'.$home_url);
	}
?>
<html>
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/flatpickr.min.css">

	<script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
	<!-- 标签hover -->
	<script type="text/javascript" src="js/hover.js"></script>

	<!-- 日期选择器 -->
	<script type="text/javascript" src="js/flatpickr.min.js"></script>

	<!-- 地区选择器 -->
	<script type="text/javascript" src="js/distpicker.data.js"></script>
	<script type="text/javascript" src="js/distpicker.js"></script>

	<title></title>
	<style type="text/css">
	.wrap{
		width: 1200px;
		position: relative;
		margin: 0 auto;
	}
	a{
		text-decoration: none;
	}
		ul li{
			list-style: none;
		}

		.wrap h2{
			height: 72px;
			line-height: 72px;
			font-size: 18px;
			font-weight: 700;
			color: #333;
		}

		.wrap .cart-addr{
			padding: 20px 30px;
			border: 2px dashed #dcdcdc;
			height: 100px;
		}
		.wrap .cart-addr ul li{
			height: 25px;
			line-height: 35px;
			font-size: 16px;
			color: #777;
			float: left;
		}
		.wrap .cart-addr ul li label{
			font-weight: 700;
			color: #333;
		}
		.wrap .cart-addr ul .addr-change a{
			height: 24px;
			line-height: 24px;
			padding: 0 15px;
			display: inline-block;
			border-radius: 3px;
			background-color: #353535;
			font-size: 14px;
			color: #fff; 
		}

		.cart-label{
			width: 175px;
			font-size: 14px;
			font-weight: 700;
			color: #222;
			float: left;
		}
		.cart-body{
			width: 1025px;
			float: left;
		}
		.wrap .cart-phone .cart-body input{
			padding: 8px 5px;
			outline: none;
			font-size: 14px;
			color: #999;
			border: 1px solid #e2e2e2;
			vertical-align: middle;
		}
		.wrap .cart-phone .cart-body input:hover{
			border: 1px solid #63c170;
		}
		.wrap .cart-demo .cart-demo-input{
			width: 400px;
			height:200px;
			line-height: 24px;
			padding: 10px;
			font-size: 14px;
			color: #666;
			outline: none;
			border: 1px solid #dcdcdc; 
		}
		.wrap .cart-demo .cart-demo-input:hover{
			border: 1px solid #63c170;

		}

		.tab-card{
			height: 24px;
			margin: 0 0 6px;
			padding: 0;
			list-style: none;
		}
		.tab-card li{
			line-height: 24px;
		    padding: 0 10px;
		    background-color: #eee;
		    float: left;
		    margin-right: 2px;
		    cursor: pointer;
		    font-size: 14px;
		}
		.tab-card li.active{
			color: #fff;
    		background-color: #57c560;
		}

		.card-content{
			overflow-y: auto;
			height: 190px;
			padding: 0 10px;
			border: 1px solid #ccc;
		}
		.card-content ul{
			margin:0;
			padding: 0;
			list-style: none;
			display: none;
			position: relative;
		}
		.card-content ul li{
			line-height: 20px;
		    display: block;
		    max-width: 390px;
		    margin: 6px 0;
		    font-size: 14px;
		    cursor: pointer;
		    overflow: hidden;
		    text-overflow: ellipsis;
		    white-space: nowrap;
		}
		.card-content ul li:hover{
			color: #57c560;
		}
		
		.card-content ul.active{
			display: block;
		}

		#mytitle{
			position: absolute;
			z-index: 1000;
		    text-align: left;
		    border: 1px solid #c7bf93;
		    border-radius: 4px;
		    -moz-border-radius: 4px;
		    -webkit-border-radius: 4px;
		    padding: 6px 8px;
		    min-width: 50px;
		    max-width: 300px;
		    color: #000;
		    background-color: #fff9c9;
		    font-size: 14px;
		    line-height: 25px;
		}

		.cart-invoice .cart-body{
			margin-bottom: 50px;
		}
		.cart-invoice .cart-body .checkbox{
			cursor: pointer;
			display: inline-block;
		}
		.cart-invoice .cart-body input[type="checkbox"]{
			vertical-align: middle;
			zoom: 120%;
		}
		.invoice-title{
			margin-top: 10px;
		}
		.invoice-title div{
			margin-top: 40px;
			float: left;
		}
		.invoice-title div input{
			width: 300px;
			height: 48px;
			padding: 0 15px;
			outline: none;
			font-size: 14px;
			color: #999;
			border: 1px solid #e2e2e2;
			vertical-align: middle;
		}
		.invoice-title div input:hover{
		    border: 1px solid #63c170;
		}

		.cart-order .cart-body{
			float: left;
		}
		.order-list{
			padding: 20px 0;
			margin-bottom: 5px;	
			height: 60px;
			background-color: #f6f6f6;
			margin-top: -2px;
		}
		.order-list .img{
			width: 125px;
			float: left;
			text-align: center;
		}
		.order-list .txt{
			width: 610px;
			margin-right: 20px;
			float: left;
			font-size: 14px;
			color: #777;
		}
		.order-list .txt h5{
			margin-top: 25px;
			height: 28px;
			color: #333;
			font-size: 100%;
		}
		.order-list .price{
			width: 160px;
			margin-top: 15px;
			float: left;
			font-size: 18px;
			color: #333;
			text-align: center;
		}
		.order-list .num{
			width: 100px;
			margin-top: 15px;
			float: left;
			font-size: 18px;
			color: #333;
			text-align: center;
		}

		.order-submit{
			float: right;
		}
		.order-submit p{
			line-height: 35px;
			font-size: 14px;
			color: #777;
		}
		.total{
			display: block;
			margin-top: 36px;
		}
		.order-submit p.price b{
			font-size: 24px;
			color: red;
		}
		.order-submit .span{
			padding-left:2px; 
		}
		.order-submit p button{
			margin-top: 15px;
			width: 150px;
			height: 46px;
			line-height: 46px;
			background-color: red;
			display:inline-block;
			text-align: center;
			font-size: 18px;
			color: #fff;
			border-radius: 5px;
			border:  1px solid red;
			outline: none;
			cursor: pointer;
		}

		/* showDialog */
		#SD_HideSelect {position:fixed;top:0px;left:0px;z-index:999;width:100%;height:100%;background:#FFFFFF;border:none;filter:alpha(opacity=0);-moz-opacity:0;opacity:0;}
		* html #SD_HideSelect {position:absolute;height:expression(document.body.scrollHeight > document.body.offsetHeight ? document.body.scrollHeight : document.body.offsetHeight + 'px');}
		#SD_overlay {position:fixed;top:0px;left:0px;z-index:1000;width:100%;height:100%;}
		* html #SD_overlay {position:absolute;height:expression(document.body.scrollHeight > document.body.offsetHeight ? document.body.scrollHeight : document.body.offsetHeight + 'px');}
		.SD_overlayBG {background:#000000;filter:alpha(opacity=50);-moz-opacity:0.50;opacity:0.50;}
		.SD_overlayBG2 {background:#FFFFFF;filter:alpha(opacity=20);-moz-opacity:0.20;opacity:0.20;}
		.SD_bg {background:#333333;filter:alpha(opacity=30);-moz-opacity:0.30;opacity:0.30;width:9px;height:9px;overflow:hidden;}
		#SD_window {position:absolute;top:0px;left:0px;z-index:1000;overflow:hidden;display:none;}
		#SD_container {position:relative;z-index:1005;background:#FFFFFF;border:1px solid #888888;float:left;}
		#SD_container h3 {height:30px;line-height:30px;background:#F6F6F6;border-bottom:1px solid #CDCDCD;text-indent:10px;color:#336699;font-size:14px;font-weight:bold;cursor:move;}
		#SD_body {padding:15px;white-space:normal;}
		#SD_body, #SD_body div, #SD_body p, #SD_body td {color:#000000;}
		#SD_button {padding:10px 0px;background:#F6F6F6;border-top:1px solid #CDCDCD;text-align:right;display:none;}
		#SD_button a {margin-right:10px;padding:6px 10px;background:#ff2f2f;border-width:1px;border-style:solid;border-color:#ff2f2f;white-space:nowrap;display:inline-block;color:#FFFFFF;font-size:14px;text-align:center;cursor:pointer;}
		#SD_button a:hover {text-decoration:none;}
		#SD_close {position:absolute;top:6px;right:10px;z-index:1005;width:17px;height:17px;border:none;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAiCAIAAAA24aWuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAADaSURBVDhPrVPRCYMwEM02DiG4hQM4gW7gbLUfhoBOUfpX6AbtkT7hPB8hjR4PTN69x+XOxD2898Nw77oczH3/XBYnH5NIYxlHZ6gcnPZ8YmiGksQjkWAE9myQRBFWh8qkHwi3MFkBnwHkzCC4og6E+f1AokTY723EoxlK8hmkUeQpudcl7+c1Tb5pblWVg7mu3yE4+ZhEGmvbOkPl4LTn9/s0Q0nikUgwAns2SKIIq0Nl0g+EW5isgM8AcmYQXFEHwvx+IFEi7Pc24tEMJfkM0ijylNzrv99PCF+W8o74YJij0AAAAABJRU5ErkJggg==) no-repeat 0px 0px;display:none;}
		#SD_close:hover {background-position:0px -17px;}
		#SD_container h3{display: none;}

		.address-frm{}
		.address-frm .frm-row{margin: 15px 0;}
		.address-frm .frm-row .row-label{width: 100px;font-size: 14px;padding-right: 10px;color: #777;vertical-align: middle;text-align: right;display: inline-block;}
		.address-frm .frm-row .row-input{padding: 8px 5px;outline: none;font-size: 14px;color: #999;border: 1px solid #e2e2e2;vertical-align: middle;}
		.address-frm .frm-row .row-input:hover{color: #333;border: 1px solid #63c170;}
		.address-frm .frm-row .row-but{padding: 6px 24px;border-radius: 3px;display: inline-block;font-size: 14px;color: #fff;background-color: #63c170;margin-top: 20px;}

		.order-address-frm{position: relative;width: 830px;height: 422px;display: inline-block;}
		.order-address-frm .order-title{height: 30px;line-height: 30px;margin-right: 30px;font-size: 14px;color: #0348d5 !important;text-align: right;}
		.order-address-frm .address-list{position: absolute;top: 45px;left: 380px;width: 400px;height: 140px;}
		.order-address-frm .address-list li{float: left;margin-right: 10px;margin-bottom: 10px;}
		.order-address-frm .address-list li a{font-size: 14px;color: #777;padding: 7px 5px;display: inline-block;border: 1px dashed #dcdcdc;}
		.order-address-frm .address-list li a:hover{color: #ff2f2f;border: 1px dashed #ff2f2f;}
		.order-address-frm .address-list li a.normal{background-color: #fafafa;}
	</style>
	<!-- 修改 属性title样式 -->
	<script type="text/javascript">
		$(function () {
        var x = 10;
        var y = 20;
        var newtitle = '';
        $('.card-content .mytooltip').mouseover(function (e) {
            newtitle = this.title;
            // 往textarea 动态写入内容 （jQurey）
			$('.card-content li').click(function() {
				// var text = $(this).attr("title");
				// console.log(newtitle);
				$('#cart-demo-input').val(newtitle);
			})
            this.title = '';
            $('body').append('<div id="mytitle" >' + newtitle + '</div>');
            $('#mytitle').css({
                'left': (e.pageX + x + 'px'),
                'top': (e.pageY + y - 80 + 'px')
            }).show();
        }).mouseout(function () {
            this.title = newtitle;
            $('#mytitle').remove();
        }).mousemove(function (e) {
            $('#mytitle').css({
                'left': (e.pageX + x +10 + 'px'),
                'top': (e.pageY + y - 60 + 'px')
            }).show();
        })
    });
	</script>

</head>
<body>

	<div class="wrap">
		<h2>订单信息</h2>
		<?php
			$conn=mysqli_connect('127.0.0.1','root','root','xian');
			$sql="select * from address where User_id='$_SESSION[user_id]' and Isdefault=0";
			$res=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($res);
			$address_id=$row['Address_id'];

			$sql1="select * from user where User_id='$_SESSION[user_id]'";
			$res1=mysqli_query($conn,$sql1);
			$row1=mysqli_fetch_array($res1);
		?>
		<div class="cart-addr">
			<ul>
				<li class="addr-name" style="width: 310px">
					<label >收货人：<span id="addr-name"><?php echo $row['Name'];?></span></label>
				</li>
				<li class="addr-date" style="width: 330px">
					<label style="font-weight: 700;">送达时间：<span id="addr-date"></span></label>
				</li>
				<li class="addr-addr" style="width: 430px">
					<label>收货地址：<span id="addr-addr"><?php echo $row['Area']." ".$row['Address'];?></span></label>
				</li>
				<li class="addr-change" style="margin-top: 20px">
					<a href="javascript:;" class="modi-addr">修改</a>
				</li>
			</ul>
		</div>
		<div style="height: 60px"></div>
		<div class="cart-phone">
			<div class="cart-label">订货人手机</div>
			<div class="cart-body">
				<input type="text" name="mobile" maxlength="11" disabled pattern="/^1[0-9]{10}$/" style="width: 230px;" placeholder="<?php echo $row1['Phone'];?>" autocomplete="off" value="" id="mobile">
			</div>
		</div>
		<div style="height: 50px"></div>
		<div class="cart-demo">
			<div class="cart-label">贺卡留言 + 署名</div>
			<div class="cart-body" style="width: 500px;">
				<textarea class="cart-demo-input" id="cart-demo-input" name="cart-demo-body"></textarea>
			</div>
			<div class="cart-body" style="width: 450px">
				<ul class="tab-card">
					<li class="active">快捷留言</li>
					<li>生日祝福</li>
					<li>送恋人</li>
					<li>送朋友</li>
					<li>送长辈</li>
				</ul>
				<div class="card-content">
					<!-- 快捷祝福 -->
					<ul class="active">
						<li class="mytooltip" title="有些人，因为新鲜感而爱你。而有些人，是因为看懂了你的灵魂。前者会在热情消退后离开，而后者可以陪你一辈子。所以爱的再热烈，也不如爱的有理由。七夕快乐！">1.有些人，因为新鲜感而爱你。而有些人，是因为看懂了你的灵魂。前者会在热情消退后离开，而后者可以陪你一辈子。所以爱的再热烈，也不如爱的有理由。七夕快乐！</li>
						<li class="mytooltip" title="我的情人节里没有情人，只有老婆你，你是我的最爱，今天是，明天是，直到我死去我的心中也只有你!七夕情人节快乐，老婆!">2.我的情人节里没有情人，只有老婆你，你是我的最爱，今天是，明天是，直到我死去我的心中也只有你!七夕情人节快乐，老婆!</li>
						<li class="mytooltip" title="你如缪斯女神般，存在我灵魂深处！七夕情人节快乐，我的女神！">3.你如缪斯女神般，存在我灵魂深处！七夕情人节快乐，我的女神！</li>
						<li class="mytooltip" title="我能想到的最浪漫的事就是以后每年的七夕都有你的陪伴，我能感觉到最幸福的事就是与你一起携手白头到老，我爱你，亲爱的七夕情人节快乐！">4.我能想到的最浪漫的事就是以后每年的七夕都有你的陪伴，我能感觉到最幸福的事就是与你一起携手白头到老，我爱你，亲爱的七夕情人节快乐！</li>
						<li class="mytooltip" title="“爱一个人绝不潇洒，为自己留了后步的，也就不是爱。”爱，应该像海水一般，纯净、清澈、湛蓝。亲爱的，七夕情人节快乐！">5.“爱一个人绝不潇洒，为自己留了后步的，也就不是爱。”爱，应该像海水一般，纯净、清澈、湛蓝。亲爱的，七夕情人节快乐！</li>
						<li class="mytooltip" title="最温柔的月光也敌不过你转瞬间的回眸只要你肯转头我一直为你静候一生为期">6.最温柔的月光也敌不过你转瞬间的回眸只要你肯转头我一直为你静候一生为期</li>
						<li class="mytooltip" title="我的小公举：我想陪着你，吃你最喜欢的好吃的；我想陪着你，刷你最爱的电视剧；我想陪着你，泡你觉得最舒服…想陪着你，一直陪着你，还有好多想陪着你～你的小前半生我来不及参与，你的大后半生我可以奉陪到底吗～">7.我的小公举：我想陪着你，吃你最喜欢的好吃的；我想陪着你，刷你最爱的电视剧；我想陪着你，泡你觉得最舒服…想陪着你，一直陪着你，还有好多想陪着你～你的小前半生我来不及参与，你的大后半生我可以奉陪到底吗～</li>
						<li class="mytooltip" title="风里有种浪漫气息缓缓流动，挑起了爱的情绪，一点一滴流入心中，对你情有独钟，想把整个世界都给你，都不觉得荒谬。七夕快乐！">8.风里有种浪漫气息缓缓流动，挑起了爱的情绪，一点一滴流入心中，对你情有独钟，想把整个世界都给你，都不觉得荒谬。七夕快乐！</li>
						<li class="mytooltip" title="你的名字是我心里，深深的烙印，不断搜寻，你的身影。给你所有的幸福，我会好好呵护。希望你天天开心，永远幸福！做一个我心目中美丽的女人。">9.你的名字是我心里，深深的烙印，不断搜寻，你的身影。给你所有的幸福，我会好好呵护。希望你天天开心，永远幸福！做一个我心目中美丽的女人。</li>
						<li class="mytooltip" title="我还是很喜欢你，像风走了八千里，不问归期；我还是很喜欢你，像雨洒落在热带与极地，不远万里；我还是很喜欢你，像风吹过杨柳泛起涟漪，昔我往矣；我喜欢你，很喜欢你，亲爱的七夕快乐！">10.我还是很喜欢你，像风走了八千里，不问归期；我还是很喜欢你，像雨洒落在热带与极地，不远万里；我还是很喜欢你，像风吹过杨柳泛起涟漪，昔我往矣；我喜欢你，很喜欢你，亲爱的七夕快乐！</li>
					</ul>
					<!-- 生日祝福 -->
					<ul>
						<li class="mytooltip" title="亲爱的，生日快乐，我只想唯一霸道的拥有着一个你。给我开开心心的一辈子。生日快乐！my love">1.亲爱的，生日快乐，我只想唯一霸道的拥有着一个你。给我开开心心的一辈子。生日快乐！my love</li>						
						<li class="mytooltip" title="今天是你的生日，你最大！在这个属于你最灿烂的日子里，我诚挚的送上一句最古老但又是时间鲜出炉的生日祝福：生日快乐！健康平安！">2.今天是你的生日，你最大！在这个属于你最灿烂的日子里，我诚挚的送上一句最古老但又是时间鲜出炉的生日祝福：生日快乐！健康平安！</li>
						<li class="mytooltip" title="亲爱的~~生日快乐生日快乐生日快乐~爱你么么哒——给全世界最温柔最可爱的小姐姐~">3.亲爱的~~生日快乐生日快乐生日快乐~爱你么么哒——给全世界最温柔最可爱的小姐姐~</li>
						<li class="mytooltip" title="感谢上苍在今天给了我一个特别的礼物，就是你。长长的人生旅程，有你相伴是我一生的幸福。祝你生日快乐!">4.感谢上苍在今天给了我一个特别的礼物，就是你。长长的人生旅程，有你相伴是我一生的幸福。祝你生日快乐!</li>
						<li class="mytooltip" title="在这个特别的日子里，我没有别的话，只想你知道，每年今天，你都会收到我的祝福，感受到我的爱，永远的爱!">5.在这个特别的日子里，我没有别的话，只想你知道，每年今天，你都会收到我的祝福，感受到我的爱，永远的爱!</li>
						<li class="mytooltip" title="有些事我每天都挂念，但只能一年说一次。迟到了，对不起。生日快乐！">6.有些事我每天都挂念，但只能一年说一次。迟到了，对不起。生日快乐！</li>
						<li class="mytooltip" title="特别的日子，特别的祝福，送给生日的你：希望长大一岁的你更成熟，更顺利，更漂亮！年年18！">7.特别的日子，特别的祝福，送给生日的你：希望长大一岁的你更成熟，更顺利，更漂亮！年年18！</li>
						<li class="mytooltip" title="你虽不在我身旁可我从未将你遗忘…做你想做的事，去你想去的地方，爱你想爱的人，追求你想追求的梦想，亲爱的朋友，祝你生日快乐！">8.你虽不在我身旁可我从未将你遗忘…做你想做的事，去你想去的地方，爱你想爱的人，追求你想追求的梦想，亲爱的朋友，祝你生日快乐！</li>
						<li class="mytooltip" title="简单的一句话语，一个祝福，寄给一个远在他乡的你。虽然不常联系，但是不曾忘记。祝你生日快乐，更愿你天天都有个好心情!">9.简单的一句话语，一个祝福，寄给一个远在他乡的你。虽然不常联系，但是不曾忘记。祝你生日快乐，更愿你天天都有个好心情!</li>
						<li class="mytooltip" title="您的生日让我想起您对我的体贴，还有您为我所做的一切。我只希望您所给予我的幸福，我将同样回报给您。祝福您事事顺心，幸福无边!">10.您的生日让我想起您对我的体贴，还有您为我所做的一切。我只希望您所给予我的幸福，我将同样回报给您。祝福您事事顺心，幸福无边!</li>
						<li class="mytooltip" title="妈妈，生日快乐！真希望能有语言能表达我们的谢意，感谢您每日操持家务及给予我们的帮助。愿您在今后的岁月中永远快乐、健康！">11.妈妈，生日快乐！真希望能有语言能表达我们的谢意，感谢您每日操持家务及给予我们的帮助。愿您在今后的岁月中永远快乐、健康！</li>
					</ul>
					<!-- 送恋人 -->
					<ul>
						<li class="mytooltip" title="遇到你我感到很幸福，但是我不能成为世界上最幸福的人，因为我们在一起，我要让你成为世界上最幸福的人。">1.遇到你我感到很幸福，但是我不能成为世界上最幸福的人，因为我们在一起，我要让你成为世界上最幸福的人。</li>
						<li class="mytooltip" title="有些情感，无需多么华美，只是简单的遇见，简单的想念，哪怕它只是简单到：拉着你的手，迎着风走！">2.有些情感，无需多么华美，只是简单的遇见，简单的想念，哪怕它只是简单到：拉着你的手，迎着风走！</li>
						<li class="mytooltip" title="我多么希望，有一个门口，早晨，阳光照在草上，我们站着，扶着自己的门扇，门很低，但太阳是明亮的。草在结它的种子，风在摇它的叶子，我们站着，不说话，就十分美好。">3.我多么希望，有一个门口，早晨，阳光照在草上，我们站着，扶着自己的门扇，门很低，但太阳是明亮的。草在结它的种子，风在摇它的叶子，我们站着，不说话，就十分美好。</li>
						<li class="mytooltip" title="如果世界上曾经有那个人出现过，其他人都会变成将就，而我，不愿意将就。没遇到爱时，它是一个遥不可及的幻梦，遇到爱之后，它是一份可以被触碰的美好，不善言辞的我，爱上了你后，突然有很多话想说给你听..">4.如果世界上曾经有那个人出现过，其他人都会变成将就，而我，不愿意将就。没遇到爱时，它是一个遥不可及的幻梦，遇到爱之后，它是一份可以被触碰的美好，不善言辞的我，爱上了你后，突然有很多话想说给你听..</li>
						<li class="mytooltip" title="我还是喜欢你，就像风追随云，我好想追到你，又怕吹散了你，春风十里，不如你。">5.我还是喜欢你，就像风追随云，我好想追到你，又怕吹散了你，春风十里，不如你。</li>
						<li class="mytooltip" title="亲爱的：在这特别的日子，我只能用心去默默地想你、爱你。只想告诉你：永远深爱着你，希望你每年的今天都能过一个快乐的生日。">6.亲爱的：在这特别的日子，我只能用心去默默地想你、爱你。只想告诉你：永远深爱着你，希望你每年的今天都能过一个快乐的生日。</li>
						<li class="mytooltip" title="为你的幸福而高兴，并且我愿付出一切让你更幸福。任何时候为爱你付出的一切都不是白白浪费。">7.为你的幸福而高兴，并且我愿付出一切让你更幸福。任何时候为爱你付出的一切都不是白白浪费。</li>
						<li class="mytooltip" title="爱你是我一生无悔的决定，漫天星星都是我注视你的眼睛。无论结局如何，我都知道：此生最爱是你！">8.爱你是我一生无悔的决定，漫天星星都是我注视你的眼睛。无论结局如何，我都知道：此生最爱是你！</li>
						<li class="mytooltip" title="时间会慢慢地让你了解，一个外表很冷漠又很怕羞的人，他的心却充满了对你的爱。">9.时间会慢慢地让你了解，一个外表很冷漠又很怕羞的人，他的心却充满了对你的爱。</li>
						<li class="mytooltip" title="我的错误，划破了你的心。如今，我用我真挚的爱弥补你的伤口，请接受我的诚意。">10.我的错误，划破了你的心。如今，我用我真挚的爱弥补你的伤口，请接受我的诚意。</li>
					</ul>
					<!-- 送朋友 -->
					<ul>
						<li class="mytooltip" title="一切的不顺心都是纸老虎！希望你开心！">1.一切的不顺心都是纸老虎！希望你开心！</li>
						<li class="mytooltip" title="不管世界尽头多寂寞，你的身边一定有我 ">2.不管世界尽头多寂寞，你的身边一定有我 </li>
						<li class="mytooltip" title="不求同年同月同日生，但求同年同月同日疯。">3.不求同年同月同日生，但求同年同月同日疯。 </li>
						<li class="mytooltip" title="最深的爱，总是风雨兼程；最浓的情，总是冷暖与共；最懂的人，才是最暖的伴。朋友，感恩有你。">4.最深的爱，总是风雨兼程；最浓的情，总是冷暖与共；最懂的人，才是最暖的伴。朋友，感恩有你。</li>
						<li class="mytooltip" title="不是所有人都能掏心掏肺，不是所有的路过都是风景，不是所有的擦肩都是过客。但无论是对朋友还是爱人，只要是在乎我的，我都会加倍珍惜！">5.不是所有人都能掏心掏肺，不是所有的路过都是风景，不是所有的擦肩都是过客。但无论是对朋友还是爱人，只要是在乎我的，我都会加倍珍惜！</li>
						<li class="mytooltip" title="吾在茫茫人海遇见了你，能成为知己，得知，我的幸运！">6.吾在茫茫人海遇见了你，能成为知己，得知，我的幸运！</li>
						<li class="mytooltip" title="朋友就是那种不需要时刻想起，永远也不会忘记的人，当我需要的时候，还没有讲，你已来到我的身边。不过有你的做伴使我不再感到渺小和孤独。">7.朋友就是那种不需要时刻想起，永远也不会忘记的人，当我需要的时候，还没有讲，你已来到我的身边。不过有你的做伴使我不再感到渺小和孤独。</li>
						<li class="mytooltip" title="无私无邪无猜无疑的友情无价，你是我买不到的奢华。">8.无私无邪无猜无疑的友情无价，你是我买不到的奢华。 </li>
						<li class="mytooltip" title="人逢知己千杯少，难得在漫漫人生路上能认识你，在一起走过的日子，非常的感谢你给我的帮助，我始终不能忘记我们友谊，不能忘记我们在一起的点点滴滴，很想说有你真好，祝福你，我的朋友。">9.人逢知己千杯少，难得在漫漫人生路上能认识你，在一起走过的日子，非常的感谢你给我的帮助，我始终不能忘记我们友谊，不能忘记我们在一起的点点滴滴，很想说有你真好，祝福你，我的朋友。</li>
						<li class="mytooltip" title="这些日子你过得还好吗？也许忙碌改变了我们的生活，但我永远珍惜我们的情谊。">10.这些日子你过得还好吗？也许忙碌改变了我们的生活，但我永远珍惜我们的情谊。</li>
						
					</ul>
					<!-- 送长辈 -->
					<ul>
						<li class="mytooltip" title="引一缕清风，为妈妈带去轻松；采一缕阳光，为妈妈送去芬芳；掬一捧清水，为妈妈消去疲惫；送一束鲜花，为妈妈奉上祝福。祝妈妈生日快乐！">1.引一缕清风，为妈妈带去轻松；采一缕阳光，为妈妈送去芬芳；掬一捧清水，为妈妈消去疲惫；送一束鲜花，为妈妈奉上祝福。祝妈妈生日快乐！</li>
						<li class="mytooltip" title="美丽动人可爱迷人的妈妈：生日快乐！青春永驻！虽然不能陪伴在你身边，我的心一直陪伴着你，我爱你，妈妈。">2.美丽动人可爱迷人的妈妈：生日快乐！青春永驻！虽然不能陪伴在你身边，我的心一直陪伴着你，我爱你，妈妈。</li>
						<li class="mytooltip" title="“洗衣做饭忙不完，每日忙碌不着闲，历经风霜添白发，勤劳持家不知烦”。作为儿子女儿的我们，深知您每天的辛苦忙碌，但作为儿子女儿的我们，同样要给您幸福，祝您生日快乐，幸福万年长。">3.“洗衣做饭忙不完，每日忙碌不着闲，历经风霜添白发，勤劳持家不知烦”。作为儿子女儿的我们，深知您每天的辛苦忙碌，但作为儿子女儿的我们，同样要给您幸福，祝您生日快乐，幸福万年长。</li>
						<li class="mytooltip" title="从一个城市到另一个城市，只有靠自己努力。学会长大，学会承受，学会哭过之后，还可以微笑地拥抱爸爸妈妈。因为你们一直是我的守护神！让我走到哪里都不会怕！">4.从一个城市到另一个城市，只有靠自己努力。学会长大，学会承受，学会哭过之后，还可以微笑地拥抱爸爸妈妈。因为你们一直是我的守护神！让我走到哪里都不会怕！</li>
						<li class="mytooltip" title="谢谢您做的一切，双手撑起我们的家，总是竭尽所有把最好的给我们。不要再为我们而担心啦，你牵挂的孩子长大了。">5.谢谢您做的一切，双手撑起我们的家，总是竭尽所有把最好的给我们。不要再为我们而担心啦，你牵挂的孩子长大了。</li>
						<li class="mytooltip" title="岁月总是越来越短，生日总是越来越快。留不住的时光使您走向人生的至善，留得住的贺卡捎去的是我深深的怀念。真心希望晚辈的祝福带给您欢乐！">6.岁月总是越来越短，生日总是越来越快。留不住的时光使您走向人生的至善，留得住的贺卡捎去的是我深深的怀念。真心希望晚辈的祝福带给您欢乐！</li>
						<li class="mytooltip" title="听说神无法无处不在，所以创造了妈妈。即使到了妈妈的年龄，妈妈的妈妈仍然是妈妈的守护神。妈妈这个词，只是叫一叫，也觉得喉间哽咽。妈妈，最有力量的名字；妈妈，祝你永远年轻。">7.听说神无法无处不在，所以创造了妈妈。即使到了妈妈的年龄，妈妈的妈妈仍然是妈妈的守护神。妈妈这个词，只是叫一叫，也觉得喉间哽咽。妈妈，最有力量的名字；妈妈，祝你永远年轻。</li>
						<li class="mytooltip" title="父爱如山，父爱无言，您总是微笑着担起了整个家庭。在我心中，您是全天下最好的爸爸。">8.父爱如山，父爱无言，您总是微笑着担起了整个家庭。在我心中，您是全天下最好的爸爸。</li>
						<li class="mytooltip" title="您用优美的年轮，编成一册散发油墨清香的日历；年年，我都会在日历的这一天上，用深情的想念，祝福您的生日。">9.您用优美的年轮，编成一册散发油墨清香的日历；年年，我都会在日历的这一天上，用深情的想念，祝福您的生日。</li>
						<li class="mytooltip" title="亲爱的妈妈：您曾用您坚实的臂弯为我撑起一片蓝天；而今，我也要用我日益丰满的羽翼为您遮挡风雨。妈妈，我永远爱您！生日快乐！祝我的美女妈妈越来越青春，身体健康，瘦成闪电，未来的我可以每个假期带你出去纵横~">10.亲爱的妈妈：您曾用您坚实的臂弯为我撑起一片蓝天；而今，我也要用我日益丰满的羽翼为您遮挡风雨。妈妈，我永远爱您！生日快乐！祝我的美女妈妈越来越青春，身体健康，瘦成闪电，未来的我可以每个假期带你出去纵横~ </li>
						
					</ul>
				</div>
			</div>
		</div>

		<div style="height: 300px"></div>
		<div class="cart-invoice">
			<div class="cart-label">我要发票（税率：¥ 7%）</div>
			<div class="cart-body">
				<div>
					<label class="checkbox">
						<input type="checkbox" name="invoice">
						<span>索取电子发票</span>
					</label>
				</div>
				<div class="invoice-title" style="display:none;">
					<div class="left">
						<input type="text" name="invoice-title-1" placeholder="发票抬头信息" autocomplete="off">
					</div>
					<div class="left" style="margin-left: 10px">
						<input type="text" name="invoice-title-2" pattern="/^([a-zA-Z0-9]{15,20})?$/" placeholder="纳税人识别号" autocomplete="off">
					</div>
					<div class="left" style="margin-left: 10px">
						<input type="text" name="invoice-title-3" pattern="/^\w+([-+.]\w+)*@\w+([-.]\w+)+$/" placeholder="电子发票接收邮箱" autocomplete="off">
					</div>
				</div>
			</div>
		</div>





		<div style="height: 100px"></div>
		<div class="cart-order">
			<div class="cart-label">核对购物清单</div>	
			<div class='cart-body'>			
					<?php
						$arr = $_GET['data'];
						// echo "$arr";
						$json = json_decode($arr, true);

						// include('../../model/Db.class.php');
						// $db=new Db();
						$conn=mysqli_connect('127.0.0.1','root','root','xian');
						$row = [];
						$total_count=0;
						$total_price=0;
						for ($i=0; $i < count($json); $i++) { 
							# code..

							$goodsid =  $json[$i]['goodsid'];
							$count = $json[$i]['count'];
							
							$sql="select Name,Price,Photo_address from goods where Goods_id ='$goodsid'";
							$res=mysqli_query($conn,$sql);
							$row=mysqli_fetch_assoc($res);
							$photo=explode('$',$row['Photo_address']);
							
							echo "
							<ul class='order-list'>
								<li class='img'>
									<a href=''>
										<img src='../$photo[0]' width='55px' height='55px'>
									</a>
								</li>
								<li class='txt'>
									<h5>".$row['Name']."</h5>
								</li>
								<li class='price'>￥".$row['Price']."</li>
								<li class='num'>$count.件</li>
							</ul>
							";
							$total_count+=$count;
							$total_price+=($row['Price']*$count);
						}
					?>
				</div>
			
		</div>
		<div class="order-submit">
			<p class="total">
				<?php echo $total_count ?>件商品，总商品金额： ¥
				<span><?php echo $total_price ?></span>
			</p>
			<p class="price">
				实付款
				<b>￥
					<span><?php echo $total_price ?></span>
				</b>
			</p>
			<p>
				<button type="button" id="submit-order">提交订单</button>
			</p>
		</div>
	</div>
	<!-- 生成订单号 -->
	<script type="text/javascript">
	</script>


	<!-- 点击按钮提交数据到下一个页面 -->
	<script type="text/javascript">
		$('#submit-order').on('click', function() {

			//生成订单号
			var vNow = new Date();
			var sNow = "";
			sNow += String(vNow.getFullYear());
			sNow += String(vNow.getMonth() + 1);
			sNow += String(vNow.getDate());
			sNow += String(vNow.getHours());
			sNow += String(vNow.getMinutes());
			sNow += String(vNow.getSeconds());
			sNow += String(vNow.getMilliseconds());
			// console.log(sNow);
			//
			var arr=<?php echo $arr;?>;
			// console.log(arr);
			var data=JSON.stringify(arr); 
			// console.log(data);

			var addr_name = document.getElementById('addr-name').innerText;
			// console.log(addr_name);

			var addr_date = document.getElementById('addr-date').innerText;
			console.log(addr_date);

			var addr_addr = document.getElementById('addr-addr').innerText;
			// console.log(addr_addr);

			var mobile = document.getElementById('mobile').value;
			// console.log(mobile);

			var card_info = document.getElementById('cart-demo-input').value;
			// console.log(card_info);
			// 
			var user_id = <?php echo $_SESSION['user_id'];?>;
			console.log(user_id);

			var a = "../orderform/orderform.php?data="+data+"&uid="+user_id+"&sNow="+sNow+"&addr_id="+<?php echo $address_id;?>+"&addr_date="+addr_date+"&mobile="+<?php echo $row1['Phone']?>+"&card_info="+card_info;

			window.location.href=a; 

		});
	</script>



	<!-- 这个div是为了SD_window弹出后仅SD_window可进行操作 -->
	<div id="SD_overlay" class="SD_overlayBG2" style="display: none;"></div>
	<div id="SD_window">
		<table cellspacing="0" cellpadding="0">
			<tbody>
				<tr>
					<td class="SD_bg"></td>
					<td class="SD_bg"></td>
					<td class="SD_bg"></td>
				</tr>
				<tr>
					<td class="SD_bg"></td>
					<td id="SD_container">
						<h3 id="SD_title">收货人信息</h3>
						<div id="SD_body" style="width: 830px;">
							<div id="SD_content">
								<div class="order-address-frm">
									<!-- <div class="order-title">使用上次收货人信息</div> -->
									<ul class="address-frm">
										<li class="frm-row">
											<label class="row-label">收货人姓名</label>
											<input type="text" class="row-input" name="address_name" maxlength="20" pattern="/^[\u4e00-\u9fa5A-Za-z\.]{2,20}$/" style="width:230px;" placeholder="请输入收货人姓名" autocomplete="off">
										</li>
										<li class="frm-row">
											<label class="row-label">收货人电话</label>
											<input type="text" class="row-input" name="address_mobile" maxlength="11" pattern="/^1[0-9]{10}$/" style="width:230px;" placeholder="请输入收货人电话" autocomplete="off">
										</li>
										<li class="frm-row">
											<label class="row-label">送达日期</label>
											<input type="text" id="flatpickr" class="row-input flatpickr-input" name="memo-time-1" pattern="/^.+$/" style="width:80px;" placeholder="送达日期" autocomplete="off" readonly="readonly" data-min-date=today data-default-date=today>
											<select class="row-input" name="memo-time-2" value="不限时段" style="width:145px;">
												<option value="不限时段">不限时段</option>
											<!--
												<option value="08-10点">08-10点</option>
												<option value="10-12点">10-12点</option>
												<option value="12-14点">12-14点</option>
												<option value="14-16点">14-16点</option>
												<option value="16-18点">16-18点</option>
												<option value="18-20点">18-20点</option>
												<option value="20-22点">20-22点</option>
											-->
												<option value="上午">上午</option>
												<option value="下午">下午</option>
												<option value="晚上">晚上</option>
											</select>
										</li>
										<li class="frm-row"><div class="h5"></div></li>
										<li class="frm-row">
											<label class="row-label">配送地区</label>
											<div id="distpicker" style="display: inline-block;">
												<select name="address_province" class="row-input" style="width:120px;margin-right:3px;" pattern="/^[1-9][0-9]*$/">
												</select>
												<select name="address_city" class="row-input" style="width:120px;margin-right:3px;" pattern="/^[1-9][0-9]*$/">
												</select>
												<select name="address_county" class="row-input" style="width:120px;" pattern="/^[1-9][0-9]*$/">
												</select>
											</div>
											
										</li>
										<li class="frm-row">
											<label class="row-label">配送地址</label>
											<input type="text" class="row-input" name="address_address" maxlength="50" pattern="/^.+$/" style="width:340px;" placeholder="请输入配送地址" autocomplete="off">
										</li>
										<li class="frm-row"><div class="h20"></div></li>
										<li class="frm-row">
											<label class="row-label"></label>
											<a href="javascript:;" class="row-but save-address">保存</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div id="SD_button">
							<div class="SD_button">
								<a id="SD_confirm">确定</a>
								<a id="SD_cancel">取消</a>
							</div>
						</div>
						<a href="javascript:;" id="SD_close" title="关闭" style="display: inline;"></a>
					</td>
					<td class="SD_bg"></td>
				</tr>
				<tr>
					<td class="SD_bg"></td>
					<td class="SD_bg"></td>
					<td class="SD_bg"></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>