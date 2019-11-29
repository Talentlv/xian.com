<?php 

if(isset($_REQUEST['mobile']) ){
    session_start();
    $code = isset($_REQUEST['code']) ? $_REQUEST['code'] : "0";
    if(empty($code )){
        return -1;
        echo -1;
        exit();
    }
    $sessioncode= isset($_SESSION['code']) ? $_SESSION['code'] : "";
    if($code != $sessioncode){
        echo -2;
        exit();
    }
    
    //验证码正确
    echo 1;
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>登录界面</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/login_css.css">
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
	<div>
	<div class="topper">
		<div class="topper-wrap">
			<div class="logo">
				<a href="#"><img src="images/logo.png"></a>
			</div>
			<div class="menu">
				<a href="index.php">首页</a>
				<a href="./goods.php">鲜花</a>
				<a href="./goods.php">永生花</a>
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
							<a href="useracount/member/index.php"><i class="i"></i>我的鲜家</a>
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
	<div class="login-content">
		<div class="wrap">
			<div class="login-box">
				<div class="box">
					<ul class="clearix">
						<li class="active"><a href="#">登录</a></li>
						<li><a href="./register2.php">注册</a></li>
					</ul>
	
				</div>
				<div class="login-form smscodefrm" style="display: block;">
					<div class="login-type">
						<a href="#" onclick="$('.smscodefrm').hide();$('.passwordfrm').show();">手机验证码登录</a>
					</div>
					<form action="../controller/login.php" method="post">
						<div class="login-formbd">
							<div class="item">
								<input type="text" class="input-style" name="phone" placeholder="请使用手机号登录">
							</div>
							<div class="item">
								<input type="password" class="input-style" name="password" placeholder="请输入登录密码">
							</div>
							<div class="item">
								<button type="submit" class="button-style" οnclick="window.parent.location.href='../controller/login.php">登 录</button>
								
							</div>
							<div>
								<a href="./forget-psw.php" class="forget">忘记密码</a>
							</div>
							<div class="other-login">
								<div class="hr left"></div>
								<span>第三方登录</span>
								<div class="hr right"></div>
							</div>
							<div class="login-link">
								<a href="#" class="wxicon"></a>
								<a href="#" class="qqicon"></a>
								<a href="#" class="zfbicon"></a>
							</div>
						</div>
					</form>
				</div>
				<div class="login-form passwordfrm" style="display: none;">
					<div class="login-type">
						<a href="" onclick="$('.smscodefrm').hide();$('.passwordfrm').show();">使用帐户密码登录</a>
					</div>


					<form action="mobile.php" method="post">
						<div class="login-formbd">
							<div class="item">
								<input type="text" class="input-style" pattern="/^1[0-9]{10}$/" name="mobile" id="mobile" value="" placeholder="请使用手机号登录" autocomplete="off">
							</div>
							
							<div class="item">
								<input type="text" class="input-style" pattern="/^[0-9]{4,6}$/" maxlength="6"  value="" placeholder="请输入短信验证码" autocomplete="off"  name="yanzhengcode" id="yanzhengcode">
							</div>
							<div class="item">
								<button class="button-style button-small" type="button" onclick="return false" id="send">获取短信验证码</button>
							</div>
							<div class="item" id="divmsg" style="color: red;line-height: 35px;display: none;">
								
							</div>
							<div class="item" >
								<button id="btnsub" disabled="disabled" style="margin-top: 10px;background-color: #E2E2E2;border-color: #E2E2E2;" class="button-style" type="button">登　录</button>
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

	<script language="JavaScript">


  $("#btnsub").click(function(){
	  var mobile=$('#mobile').val();
	  var code=$('#yanzhengcode').val();
	  
	  postData={
		      'mobile':mobile,
		      'code': code
		    };
		    var url="login.php";
		    $.post(url,postData,function(result){
			    console.log(result);
			    result = Number(result);
			    //登录逻辑处理
			    switch (result) {
    				case 1:
    				    //登录成功跳转
    				    console.log(result);
    					window.location.href = "index.php";
    					break;
    				case -1:
    					//登录错误提示
    				    $("#divmsg").html("验证码不能为空").show();
    				    //$("#btnsub").attr("style","background-color:#E2E2E2;border-color:#E2E2E2").attr("disabled",false);
    					break;

    				case -2:
    					//登录错误提示
    				    $("#divmsg").html("验证码错误").show();
    				    //$("#btnsub").attr("style","background-color:#E2E2E2;border-color:#E2E2E2").attr("disabled",false);
    					break;

				default:

					//登录错误提示
				    $("#divmsg").html("登录失败").show();
				    //$("#btnsub").attr("style","background-color:#E2E2E2;border-color:#E2E2E2").attr("disabled",true);
					break;
				}
		    })

  });
$('#send').click(function() {
  var mobile=$('#mobile').val();
  var times = 60;
  
  $("#divmsg").hide().html("");
  if(mobile==""){
    alert("请输入手机号");
  }else{
    postData={
      'mobile':mobile,
    };
    var url="mobile.php";
    var tinteval;
    $.post(url,postData,function(result){
  	  console.log(result);
     if(result==1){
    	 
    	tinteval = setInterval(function(){
    		times--;
			//console.log(times);
			$("#send").html("重新获取"+times+"秒！").attr("style","background-color:#E2E2E2;border-color:#E2E2E2").attr("disabled",true);
			if(times == 0){
				$("#send").html("获取短信验证码").attr("style","background-color:#63c170;border-color:#63c170").attr("disabled",false);
				clearInterval(tinteval);	
			}
			
		},1000);
        $("#divmsg").html("短信验证码已下发，请注意接收！").show();
        $("#send").html("重新获取"+times+"秒！").attr("style","background-color:#E2E2E2;border-color:#E2E2E2").attr("disabled",true);
        $("#btnsub").attr("style","background-color:#63c170;border-color:#63c170").attr("disabled",false);
      	return true;
     }else{
       $("#divmsg").html("发送验证码失败,请重试!!!!").show();
       $("#btnsub").attr("style","background-color:#E2E2E2;border-color:#E2E2E2").attr("disabled",true);
       return false;
     }

    })
  }
});
</script>

</body>
</html>