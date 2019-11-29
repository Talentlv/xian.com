<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./index.css">
	<style type="text/css">
		
	</style>
</head>
<body text=#000000 bgColor="#ffffff" leftMargin=0 topMargin=4 >
	<header class="am-header">
        <h1>支付宝电脑网站支付体验入口页</h1>
	</header>
	<div id="main">
    <div id="tabhead" class="tab-head">
        <h2 id="tab1" class="selected" name="tab">付 款</h2>
        <h2 id="tab2" name="tab">交 易 查 询</h2>
        <h2 id="tab3" name="tab">退 款</h2>
        <h2 id="tab4" name="tab">退 款 查 询</h2>
        <h2 id="tab5" name="tab">交 易 关 闭</h2>
    </div>
    <form name=alipayment action=pagepay/pagepay.php method=post target="_blank" >
    	<div id="body1" class="show" name="divcontent">
        	<dl class="content">
           		<dt>商户订单号：</dt>
           		<dd>
                	<input id="WIDout_trade_no" name="WIDout_trade_no" readonly="readonly" />
            	</dd>
            	<hr class="one_line">
            	<dt>订单名称：</dt>
            	<dd>
                	<input id="WIDsubject" name="WIDsubject" readonly="readonly" />
            	</dd>
            	<hr class="one_line">
            	<dt>付款金额：</dt>
            	<dd>
                	<input id="WIDtotal_amount" name="WIDtotal_amount" readonly="readonly" />
            	</dd>
            	<hr class="one_line">
            	<dt>商品描述：</dt>
            	<dd>
               		<input id="WIDbody" name="WIDbody" readonly="readonly" />
            	</dd>
            	<hr class="one_line">
            	<dt></dt>
            	<dd id="btn-dd">
                	<span class="new-btn-login-sp">
                    	<button class="new-btn-login" type="submit" style="text-align:center;" id="paymoney">付 款</button>
                	</span>
                	<span class="note-help">如果您点击“付款”按钮，即表示您同意该次的执行操作。</span>
            	</dd>
        	</dl>
    	</div>
	</form>
	<div id="foot">
			<ul class="foot-ul">
				<li>
					支付宝版权所有 2015-2018 ALIPAY.COM 
				</li>
			</ul>
	</div>
</div>
</body>
<?php
    
?>
<script type="text/javascript">
	function GetDateNow() {
		document.getElementById("WIDout_trade_no").value = <?php echo $_GET['id'];?>;
		document.getElementById("WIDsubject").value = "鲜花网商品";
		document.getElementById("WIDtotal_amount").value = <?php echo $_GET['price'];?>;
        document.getElementById('WIDbody').value =' <?php echo $_GET["item"];?>';
        // $('#paymoney').trigger("click");
	}
	GetDateNow();
</script>
</html>