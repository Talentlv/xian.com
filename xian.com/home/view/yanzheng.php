<?php
$yanzheng=$_POST['yanzhengcode'];
session_start();
$sendcode=$_SESSION['code'];
if($yanzheng==$sendcode){
  echo 1;
}else{
  echo 2;
}