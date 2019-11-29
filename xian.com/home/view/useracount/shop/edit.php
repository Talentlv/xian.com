<form class="addressfrm" action="edit.php" method="post">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<ul class="address-frm">
	<li class="frm-row">
		<label class="row-label">收货人姓名</label>
		<input type="text" class="row-input" name="name" value="" style="width:230px;" placeholder="请输入收货人姓名" autocomplete="off" />
	</li>
	<li class="frm-row">
		<label class="row-label">收货人手机</label>
		<input type="text" class="row-input" name="phone" value="" style="width:230px;" placeholder="请输入收货人手机" autocomplete="off" />
	</li>
	<li class="frm-row">
		<label class="row-label">收货人电话</label>
		<input type="text" class="row-input" name="telphone" value="" style="width:230px;" placeholder="请输入收货人电话" autocomplete="off" />
	</li>
	<li class="frm-row"><div class="h5"></div></li>
	<li class="frm-row">
		<label class="row-label">配送地区</label>
		<input type="text" class="row-input" name="area" value="" style="width:300px;" placeholder="请输入配送地区" autocomplete="off" />
	</li>
	<li class="frm-row">
		<label class="row-label">配送地址</label>
		<input type="text" class="row-input" name="address" value="" style="width:300px;" placeholder="请输入配送地址" autocomplete="off" />
	</li>
	<li class="frm-row">
		<label class="row-label">默认地址</label>
		<label class="checkbox     "><input type="radio" checked="checked" name="isdefault"  value="1" /><span></span>是</label>
		<label class="checkbox ml10"><input type="radio" name="isdefault"  value="0" /><span></span>否</label>
	</li>
	<li class="frm-row"><div class="h20"></div></li>
	<li class="frm-row">
		<label class="row-label"></label>
		<button name="submit" type="submit" class="row-but save-submit">保存</button>
	</li>
</ul>
</form>
<?php
session_start();
if(isset($_POST['submit'])){
	$con = new mysqli('localhost', 'root', 'root', 'xian');
	if($con->connect_error){
		die("连接失败: " . $con->connect_error);
	}	
	$con->set_charset('utf8');
	$sql = "insert into address (User_id, Name, Phone, Telphone, Area, Address, Isdefault) values ('$_SESSION[user_id]', '$_POST[name]', '$_POST[phone]', '$_POST[telphone]', '$_POST[area]', '$_POST[address]', '$_POST[isdefault]')";
	if($con->query($sql) === TRUE) {
		echo "<script>alert('保存成功');</script>";
		header('Location:address.php');
		
	} else {
		echo "<script>alert('保存失败');</script>";
		header('Location:address.php');
	}
	$con->close();
}
?>