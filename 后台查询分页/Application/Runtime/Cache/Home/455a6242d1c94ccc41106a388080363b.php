<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>留言板</title>
	<meta charset="utf-8">
	<link href="/easygo/Public/Home/css/message.css" type="text/css" rel="stylesheet">
	<script src="/easygo/Public/Home/js/jquery.min.js"></script>
	<script type="text/javascript">
	/*页头下拉菜单*/
		$(document).ready(function($) {
			$("li").hover(function() {
    		$(this).children('#children').css('display', 'block');
			}, function() {
   			$(this).children('#children').css('display', 'none');
			});
		});
	</script>
</head>
<body>
<!-- 导航栏 -->
<div class="top">
	<div class="top-left">
		<img src="/easygo/Public/Home/images/logo.jpg" width="176px" height="44px" style="padding-top:10px;">
	</div>
	<div class="top-right">
		<ul>
			<li><a href="">首页</a></li>
			<li><a href="">自驾租车</a></li>
			<li><a href="">信息发布</a></li>
			<li><a href="">优惠活动</a></li>
			<li><a href="">帮助中心</a></li>
			<li><a href="" style="color:rgb(251,109,0);">留言板</a></li>
		</ul>
	</div>
	<div class="top-right2">
		<div>
		<ul>
			<li><p>您好！&nbsp;刘二狗&nbsp;&nbsp;&nbsp;&nbsp;∨</p>
				<div id="children">
					<div class="arrow"></div>
					<ul class="child">
						<li id="xu"><a href="">我的订单</a></li>
						<li id="xu"><a href="">我的资产</a></li>
						<li id="xu"><a href="">我的账号</a></li>
						<li><a href="login.html">退出登录</a></li>
					</ul>
				</div>
			</li>
		</ul>
		</div>
	</div>
	
</div>

<div class="content">
	<!-- 面包屑 -->
	<div id="crumb">
		当前位置：<a href="">首页</a>><a href="">留言板</a>
	</div>
	<!-- 留言板 -->
	<div class="message">
		<div class="message_form">
			<h4>感谢您给易路行的建议和意见!</h4>

			<form method="post" action="/easygo/index.php/Home/message/submit">
				<input name="user_id" value="<?php echo ($_SESSION['id']); ?>" style="display:none;">
				意见描述：<input type="text" name="advicetext" ><br>
				手机号码：<input type="text" name="telephone" ><br>
				邮箱地址：<input type="email" name="address" ><br>
				<div id="advice">建议内容：</div><textarea type="textarea" name="messages"></textarea><br>
				<input  type="text" name="publish" value="<?php echo date('Y-m-d H:i:s');?>" style="display:none;" >
				<input type="submit" id="tijiao" value="提交" />
			</form>
		</div>
		<div class="message_img">
			<img src="/easygo/Public/Home/images/box.jpg" alt="">
		</div>
	</div>
</div>
<!-- footer -->
<div class="bottom">
	<div class="bottom">
	<div class="bottom-top">
		<div class="bottom-left">
			<ul>
			    <li class="bottom-aa">了解更多</li>
				<li>法律解读</li>
				<li>押金政策</li>
				<li>押金政策</li>
				<li>保险条例</li>
			</ul>
			
			<ul>
				<li class="bottom-aa">产品支持</li>
				<li>服务条款</li>
				<li>驾客协议</li>
				<li>车东协议</li>
				<li>平台规则</li>
			</ul>
			
			<ul>
				<li class="bottom-aa">帮助中心</li>
				<li>常见问题</li>
				<li>新手上路</li>
				<li>驾客原理</li>
			</ul>
			
			<ul>
				<li class="bottom-aa">联系我们</li>
				<li>客服电话：0311-88888888</li>
				<li>客服电话：0311-88886666</li>
			</ul>
		</div>
		<div class="bottom-right">
			<img src="/easygo/Public/Home/images/QRcode.jpg" width="99px" height="99px"/>
			<h4>关注微信公众号</h4>
		</div>
	</div>
	<div class="bottom-bottom">
		<p>Copyright©2017-2019 www.jumao.com All Rights Reserved.　易路行官网 京ICP备10005000号 京公网安备号 11010502026705</p>
	</div>
</div>
</div>
</body>
</html>