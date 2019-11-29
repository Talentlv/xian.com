<?php 
session_start();
include('code_class.php');
$imgObj=new MdCodeImg(70,40,4);
$imgCode=$imgObj->make_img();
$_SESSION["_code"]=$imgCode;
?>
