<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>易路行会员注册</title>
	<link href="/easygo/easygo/Public/Home/css/registernew.css" type="text/css" rel="stylesheet">

</head>
<body>
<!-- logo -->
<div class="top">
	<img src="/easygo/easygo/Public/Home/images/logo.jpg" width="176px" height="44px" style="padding-left:5%;padding-top:10px;">
</div>
<!-- banner注册 -->
<div class="middle">
	<div class="register" style="height:430px;">
		<h4>会员注册</h4>
		<form method="post" action="/easygo/easygo/index.php/Home/user/doReg">
			<input id="telephone" type="text" name="telephone" placeholder="请输入您的手机号"/>&nbsp;<span id="check1" style="color:red;font-size:15px;display:none">×</span>
			<input id="name" type="text" name="name" placeholder="请输入您的真实姓名"/>&nbsp;<span id="check2" style="color:red;font-size:15px;display:none">×</span>
			<input id="pwd" type="password" name="password" placeholder="请设置密码"/>
			<input id="repwd" type="password" name="repwd" placeholder="请重复输入密码"/>
			&nbsp;<span id="check3" style="color:red;font-size:15px;display:none">×</span>
			<input type="text" class="little" name="yanzhengma" placeholder="请输入验证码"/>
            <input type="button" value="获取短信验证码" id="btn" onclick="settime(this)" />
			<input type="button" style="margin-left: 40px;" id="zhuce" disabled="disabled" value="注册并登陆" />
		</form>
	</div>
</div>
<!-- footer -->
<div class="bottom">
	<p>Copyright©20017-2019 www.jumao.com All Rights Reserved.　易路行官网 京ICP备10005000号 京公网安备号 11010502026705</p>
</div>

<script src="/easygo/easygo/Public/Home/js/jquery.min.js" type="text/javascript"></script>
<script src="/easygo/easygo/Public/Home/js/register.js" type="text/javascript"></script>
<script type="text/javascript">

var countdown=60; 
function settime(val) { 
if (countdown == 0) { 
val.removeAttribute("disabled");    
val.value="免费获取验证码"; 
countdown = 60; 
} else { 
val.setAttribute("disabled", true); 
val.value="重新发送(" + countdown + ")"; 
countdown--; 
} 
setTimeout(function() { 
settime(val) 
},1000) 
}  
</script>
</body>
</html>