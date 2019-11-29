/*
通过id找到所有提示标签
*/
var Cusername = document.getElementById("un");
var Cpassword1 = document.getElementById("p1");
var Cpassword2 = document.getElementById("p2");
var Cphone = document.getElementById("ph");
var Cvalidate = document.getElementById("vd");
var Cmail = document.getElementById("ma");
window.onload = function(){//页面加载出来后实现下列方法
	username();
	password1();
	password2();
	phone();
	valimg();
	clickvalimg();
	validate();
	mail();
	submit();
	reset();
}
function username(){//判断用户名输入是否正确
	var username = document.getElementById("username");
	username.onchange = function(){
		var text = /^[\u4E00-\u9FA5a-zA-Z0-9_-]{2,16}$/;
		var boo = text.test(username.value);
		if(boo){
			Cusername.innerHTML = "正确";
			Cusername.style.color = "green";
			Cusername.style.padding = "5px";
		}else{
			Cusername.innerHTML = "输入用户名必须为字母、数字、汉字，且必须是4-16位";
			Cusername.style.color = "red";
			Cusername.style.padding = "5px";
		}
	}
	username.onblur = function(){
		if(username.value==""){
			Cusername.innerHTML = "用户名不能为空";
			Cusername.style.color = "red";
			Cusername.style.padding = "5px";
		}
	}

}
function password1(){//判断输入密码是否正确
	var password1 = document.getElementById("password1");
	password1.onchange = function(){
		var text = /^[a-zA-Z0-9_-]{6,16}$/;
		var text1 = /^\d{0,}$/
		var boo = text.test(password1.value);
		var boo1 = text1.test(password1.value);
		if(!boo){
			Cpassword1.innerHTML = "输入密码必须为字母、数字，且必须是6-16位";
			Cpassword1.style.color = "red";
			Cpassword1.style.padding = "5px";
		}else if(boo1){
			
			Cpassword1.innerHTML = "密码过于简单";
			Cpassword1.style.color = "orange";
			Cpassword1.style.padding = "5px";
		}else{
			Cpassword1.innerHTML = "正确";
			Cpassword1.style.color = "green";
			Cpassword1.style.padding = "5px";
		}
		/*=============改变password1的值时判断password2是否与password1一致===================*/
		var password2 = document.getElementById("password2");
		if(password2.value==password1.value){
			Cpassword2.innerHTML = "正确";
			Cpassword2.style.color = "green";
			Cpassword2.style.padding = "5px";
		}else{
			Cpassword2.innerHTML = "两次输入的密码不正确";
			Cpassword2.style.color = "red";
			Cpassword2.style.padding = "5px";
		}
	}
	password1.onblur = function(){
		if(password1.value==""){
			Cpassword1.innerHTML = "密码不能为空";
			Cpassword1.style.color = "red";
			Cpassword1.style.padding = "5px";
		}
	}
}
function password2(){//判断是否与密码一致
	var password1 = document.getElementById("password1");
	var password2 = document.getElementById("password2");
	password2.onchange = function(){
		if(password2.value==password1.value){
			Cpassword2.innerHTML = "正确";
			Cpassword2.style.color = "green";
			Cpassword2.style.padding = "5px";
		}else{
			Cpassword2.innerHTML = "两次输入的密码不正确";
			Cpassword2.style.color = "red";
			Cpassword2.style.padding = "5px";
		}
	}
	password2.onblur = function(){
		if(password2.value==""){
			Cpassword2.innerHTML = "确认密码不能为空";
			Cpassword2.style.color = "red";
			Cpassword2.style.padding = "5px";
		}
	}
}
function phone(){//判断电话号码是否正确
	var phone = document.getElementById("phone");
	phone.onchange = function(){
		var text = /^[^0][13|14|15|18]\d{9}$/;
		var boo = text.test(phone.value);
		if(!boo){
			Cphone.innerHTML = "请输入正确的手机号";
			Cphone.style.color = "red";
			Cphone.style.padding = "5px";
		}else{
			Cphone.innerHTML = "正确";
			Cphone.style.color = "green";
			Cphone.style.padding = "5px";
		}
	}
	phone.onblur = function(){
		if(phone.value==""){
			Cphone.innerHTML = "手机号不能为空";
			Cphone.style.color = "red";
			Cphone.style.padding = "5px";
		}
	}
}
function valimg(){//用来显示验证码
	var code = "";
	var valimg = document.getElementById("valimg");
	var text = new Array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
	var r = Math.floor(Math.random()*255);
	var g = Math.floor(Math.random()*255);
	var b = Math.floor(Math.random()*255);
	for(var i=0;i<4;i++){
		var tindex = Math.floor(Math.random()*62);//获取数组的下标
		code+=text[tindex];
	}
	valimg.firstChild.nodeValue = code;
	valimg.style.color = "rgb("+r+","+g+","+b+")";
	valimg.style.backgroundColor = "rgb("+b+","+r+","+g+")";
}
function validate(){//判断验证码是否正确
	var validate = document.getElementById("validate");
	var valimg = document.getElementById("valimg");
	validate.onblur = function(){
		if(validate.value==""){
			Cvalidate.innerHTML = "验证码不能为空";
			Cvalidate.style.color = "red";
			Cvalidate.style.padding = "5px";
		}
	}
	validate.onchange = function(){
		var va_text = valimg.firstChild.nodeValue;
		if(validate.value==va_text){
			Cvalidate.innerHTML = "正确";
			Cvalidate.style.color = "green";
			Cvalidate.style.padding = "5px";
		}else{
			Cvalidate.innerHTML = "验证码错误";
			Cvalidate.style.color = "red";
			Cvalidate.style.padding = "5px";
		}
	}
}
function mail(){//判断邮箱是否正确
	var mail = document.getElementById("mail");
	mail.onchange = function(){
		var text = /^\d{5,10}@qq|163.com$/;
		var boo = text.test(mail.value);
		if(!boo){
			Cmail.innerHTML = "请输入正确的邮箱号";
			Cmail.style.color = "red";
			Cmail.style.padding = "5px";
		}else{
			Cmail.innerHTML = "正确";
			Cmail.style.color = "green";
			Cmail.style.padding = "5px";
		}
	}
	mail.onblur = function(){
		if(mail.value==""){
			Cmail.innerHTML = "邮箱不能为空";
			Cmail.style.color = "red";
			Cmail.style.padding = "5px";
		}
	}
}
function submit(){
	var submit = document.getElementById("submit");
	submit.onclick = function(){
		var booCusername = Cusername.firstChild.nodeValue;
		var booCpassword1 = Cpassword1.firstChild.nodeValue;
		var booCpassword2 = Cpassword2.firstChild.nodeValue;
		var booCphone = Cphone.firstChild.nodeValue;
		var booCvalidate = Cvalidate.firstChild.nodeValue;
		var booCmail = Cmail.firstChild.nodeValue;
		//判断提示框内的内容是否为"正确" 一致的话将所有提示变空 如果没有输入的话将提示不能为空
		if(booCusername=="正确"&&booCpassword1=="正确"&&booCpassword2=="正确"&&booCphone=="正确"&&booCvalidate=="正确"&&booCmail=="正确"){
			alert("注册成功");
			Cusername.innerHTML = "";
			Cpassword1.innerHTML = "";
			Cpassword2.innerHTML = "";
			Cphone.innerHTML = "";
			Cvalidate.innerHTML = "";
			Cmail.innerHTML = "";

			Cusername.style.padding = "0px";
			Cpassword1.style.padding = "0px";
			Cpassword2.style.padding = "0px";
			Cphone.style.padding = "0px";
			Cvalidate.style.padding = "0px";
			Cmail.style.padding = "0px";
		}else if(booCusername==" "|booCpassword1==" "|booCpassword2==" "|booCphone==" "|booCvalidate==" "|booCmail==" "){
			Cusername.innerHTML = "用户名不能为空";
			Cusername.style.color = "red";
			Cusername.style.padding = "5px";
			Cpassword1.innerHTML = "密码不能为空";
			Cpassword1.style.color = "red";
			Cpassword1.style.padding = "5px";
			Cpassword2.innerHTML = "确认密码不能为空";
			Cpassword2.style.color = "red";
			Cpassword2.style.padding = "5px";
			Cphone.innerHTML = "电话号码不能为空";
			Cphone.style.color = "red";
			Cphone.style.padding = "5px";
			Cvalidate.innerHTML = "验证码不能为空";
			Cvalidate.style.color = "red";
			Cvalidate.style.padding = "5px";
			Cmail.innerHTML = "邮箱不能为空";
			Cmail.style.color = "red";
			Cmail.style.padding = "5px";
		}
	}
}
function reset(){//点击重置 将提示标签内容变空格
	var reset = document.getElementById("reset");
	reset.onclick = function(){
		Cusername.innerHTML = " ";
		Cpassword1.innerHTML = " ";
		Cpassword2.innerHTML = " ";
		Cphone.innerHTML = " ";
		Cvalidate.innerHTML = " ";
		Cmail.innerHTML = " ";

		Cusername.style.padding = "0px";
		Cpassword1.style.padding = "0px";
		Cpassword2.style.padding = "0px";
		Cphone.style.padding = "0px";
		Cvalidate.style.padding = "0px";
		Cmail.style.padding = "0px";
	}
}
function clickvalimg(){//点击验证码图片进行切换验证码
	var valimg = document.getElementById("valimg");
	valimg.onclick = function(){
		var code = "";
	var valimg = document.getElementById("valimg");
	var text = new Array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
	var r = Math.floor(Math.random()*255);
	var g = Math.floor(Math.random()*255);
	var b = Math.floor(Math.random()*255);
	for(var i=0;i<4;i++){
		var tindex = Math.floor(Math.random()*62);//获取数组的下标
		code+=text[tindex];
	}
	valimg.firstChild.nodeValue = code;
	valimg.style.color = "rgb("+r+","+g+","+b+")";
	valimg.style.backgroundColor = "rgb("+b+","+r+","+g+")";
	}
}