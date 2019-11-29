<?php
session_start();
$con = new mysqli('localhost', 'root', 'root', 'xian');
if($con->connect_error){
	die("连接失败: " . $con->connect_error);
}
$con->set_charset("utf8");
$sql = "select * from address where Address_id = '$_GET[id]'";
$result = $con->query($sql);
$row = $result->fetch_array();

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form class="addressfrm" action="update.php" method="post">
<ul class="address-frm">
	<li class="frm-row">
		<label class="row-label">收货人姓名</label>
		<input type="text" class="row-input" name="name" value="<?php echo $row['Name'];?>" style="width:230px;" placeholder="请输入收货人姓名" autocomplete="off" />
	</li>
	<li class="frm-row">
		<label class="row-label">收货人手机</label>
		<input type="text" class="row-input" name="phone" value="<?php echo $row['Phone'];?>" style="width:230px;" placeholder="请输入收货人手机" autocomplete="off" />
	</li>
	<li class="frm-row">
		<label class="row-label">收货人电话</label>
		<input type="text" class="row-input" name="telphone" value="<?php echo $row['Telphone'];?>" style="width:230px;" placeholder="请输入收货人电话" autocomplete="off" />
	</li>
	<li class="frm-row"><div class="h5"></div></li>
	<li class="frm-row">
		<label class="row-label">配送地区</label>
		<input type="text" class="row-input" name="area" value="<?php echo $row['Area'];?>" style="width:300px;" placeholder="请输入配送地区" autocomplete="off" />
	</li>
	<li class="frm-row">
		<label class="row-label">配送地址</label>
		<input type="text" class="row-input" name="address" value="<?php echo $row['Address'];?>" style="width:300px;" placeholder="请输入配送地址" autocomplete="off" />
	</li>
	<li class="frm-row">
		<label class="row-label">默认地址</label>
		<label class="checkbox     "><input type="radio" name="isdefault" <?php if($row['Isdefault']==0) echo 'checked=\"checked\"'; ?> value="0" /><span></span>是</label>
		<label class="checkbox ml10"><input type="radio" name="isdefault" <?php if($row['Isdefault']==1) echo 'checked=\"checked\"'; ?> value="1" /><span></span>否</label>
	</li>
	<input name="address_id" type="hidden" value="<?php echo $row['Address_id'];?>">
	<li class="frm-row"><div class="h20"></div></li>
	<li class="frm-row">
		<label class="row-label"></label>
		<button name="submit" type="submit" class="row-but save-submit">保存</button>
	</li>
</ul>
</form>
<?php
if(isset($_POST['submit'])){
	
	$sql = "update address set Name='$_POST[name]', Phone='$_POST[phone]', Telphone='$_POST[telphone]', Area='$_POST[area]', Address='$_POST[address]', Isdefault='$_POST[isdefault]' where Address_id = '$_POST[address_id]'";
	
	if($con->query($sql) == TRUE){
		echo "<script>alert('修改成功！');</script>";
		header("Location:address.php");
	} 
	else{
		echo "<script>alert('修改失败！');</script>";
		header("Location:address.php");
	}
	$con->close();
}
?>