<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>易路行会员登陆</title>
	<link href="/easygo/Public/Home/css/registernew.css" type="text/css" rel="stylesheet">
</head>
<body>
<!-- logo -->
<div class="top">
	<img src="/easygo/Public/Home/images/logo.jpg" width="176px" height="44px" style="padding-left:5%;padding-top:10px;">
</div>
<!-- banner登陆 -->
<div class="middle">
	<div class="register">
		<h4>会员登陆</h4>
		<form method="post" action="">
			<input type="text" name="telephone" placeholder="请输入您的手机号"/>
			<input type="password" name="password" placeholder="请输入密码"/>
			<a href="#"><p style="color:rgb(251,109,0);font-size:13px;">忘记密码？</p></a>
			<input type="submit" id="zhuce" value="登 陆" />
			<a href="register.html" id="zhuce2">还不是会员，立即注册</a>
		</form>
	</div>
</div>
<!-- footer -->
<div class="bottom">
	<p>Copyright©20017-2019 www.jumao.com All Rights Reserved.　易路行官网 京ICP备10005000号 京公网安备号 11010502026705</p>
</div>
</body>
</html>