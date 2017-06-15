<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>易路行</title>
	<link href="/easygo/easygo/Public/Home/css/public.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/easygo/easygo/Public/Home/css/helpcenter.css">	
    <script type="text/javascript" src="/easygo/easygo/Public/Home/js/jquery.min.js"></script>
    <style type="text/css">
    :focus{
    	outline:0px #000 auto;/*设置他在有焦点时的样式*/
    }
    </style>
    <script type="text/javascript">
    	/*页头下拉菜单*/
    	$(document).ready(function($) {
    		$("li").hover(function() {
    			$(this).children('#children').css('display', 'block');
    		}, function() {
    			$(this).children('#children').css('display', 'none');
    		});
    	})
		
    	$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
});
	</script>
</head>
<body>
<!-- logo -->
<div class="header">
	<div class="mybody">
    	<div class="logo"><a href="<?php echo U('Rent/index');?>"><img src="/easygo/easygo/Public/Home/images/logo.jpg" alt="logo" /></a></div>
			<ul class="nav">
                <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                <li><a href="<?php echo U('Rent/index');?>">自驾租车</a></li>
                <li><a href="<?php echo U('Issue/index');?>">信息发布</a></li>
                <li><a href="<?php echo U('Special/index');?>">优惠活动</a></li>
                <li class="navnow"><a href="<?php echo U('Help/index');?>" target="_blank">帮助中心</a></li>
                <li><a href="<?php echo U('Message/index');?>">留言板</a></li>
      		</ul>
            
			<div class="top-right2">
				<div>
					<ul>
				<?php
 if(!isset($user['user_name'])||$user['user_name']=='' ){ echo "<a style='color:white' href='".U('user/login')."'>登录</a> | <a style='color:white' href='".U('user/register')."'>注册</a>"; } else{ $str = $user['user_name']; echo "<li><p>您好！&nbsp;$str&nbsp;&nbsp;&nbsp;<img src='/easygo/easygo/Public/Home/images/down.gif' alt='' /></p>
                            <div id='children'>
                                <div class='arrow'></div>
                                <ul class='child'>
                                    <li id='xu'><a href=".U('Indent/rentItem')." target='_blank'>我的订单</a></li>
                                    <li id='xu'><a href=".U('Indent/discount')." target='_blank'>我的资产</a></li>
                                    <li id='xu'><a href=".U('Indent/personal')." target='_blank'>我的账户</a></li>
                                    <li id='xu' style='border:none'><a href='/easygo/easygo/index.php/Home/user/logout'>退出登录</a></li>
                                </ul>
                            </div>
                        </li>"; } ?>
					</ul>
				</div>
			
		</div>
    </div>
    </div>

<!-- 主要部分-->
<div class="content">
	<div class="banner">
		<div class="find">
			<h1>帮助中心</h1>
            <p>你想知道的，这里都有。了解易路行就在这里</p>
		</div>
	</div>
	<div id="tabs">
		<ul>
			<li class="xs"><a href="<?php echo U('Help/law');?>">新手上路</a></li>
			<li class="fw fw1"><a href="<?php echo U('Help/service');?>">服务规则</a></li>
			<li class="bz"><a href="<?php echo U('Help/index');?>">帮助中心</a></li>
		</ul>
	</div>
<!-- 帮助中心******************************** -->
	<div class="mybody">
    	<div class="left">
            <div class="left_nav">
            	<h1>服务规则</h1>
                <a href="<?php echo U('Help/service');?>" class="person_now">服务条款</a>
                <a href="<?php echo U('Help/passengerDeal');?>">驾客协议</a>
                <a href="<?php echo U('Help/ownerDeal');?>">车东协议</a>
                <a href="<?php echo U('Help/rule');?>">平台规则</a>
            </div>
       </div>
       <div class="right">
       		<h1>易路行服务条款</h1>
            <div class="text">
            	<p>感谢您使用易路行！本协议是就您参与易路行市场活动及网站服务等相关事宜所订立的契约，本协议将对易路行及用户（包含车东和驾客）双方构成有约束力的法律文件，请您仔细阅读并明确本协议内容。
以下是适用于所有易路行用户市场的一般性条款,以及为车东和驾客专门制定的条款。在本服务条款中提及的细则，连同易路行隐私保护政策和网站提供的用户（包含车东和驾客）协议将构成您与易路行之间的协议。易路行可能会不时更新协议条款。
当您在易路行租车或易路行租车手机客户端按照页面提示点击相应按钮进行注册或参与其他活动后，即表示您已充分阅读、理解并接受本协议的全部内容，并与易路行达成协议。</p>
				<h1>一般性条款（以下条款适用于每个易路行用户(包括车东和驾客)）</h1>
                <p>1. 注册和验证</p>
                <p>当你申请注册易路行的各项服务时，需要你将提供某些信息(例如您车子的信息,您的驾驶记录等)。您承诺向易路行提供完整、准确的信息。易路行将通过第三方服务平台验证您所提供的信息，获取更多相关信息并进行更正，此外，您授权易路行在一定的时间内咨询、接收、使用和存储此类信息。易路行可根据此服务条款独自决定接受或拒绝您的注册申请。</p>
                <p>2. 更新信息</p>
                <p>当您的驾驶记录或联系信息发生任何更改时，您承诺在易路行进行及时更新。特别是关于您的联系信息,易路行会向您所提供的最新邮箱地址和帐单地址发送通知,即便您不再使用该邮箱账号或地址，该通知都将被默认为是有效的。所以请确保您账户及密码信息的安全。易路行可以根据我们的隐私政策使用和分享您的信息。</p>
                <p>3.您的承诺。</p>
                <p>您同意在此协议条款或易路行提供的其他政策或准则的允许范围内参与市场活动。您向易路行承诺：您有参与此协议和市场活动的合法权利，您参与易路行的活动不会侵犯他人权益，以及您同意遵守所有适用的法律和法规。</p>
                <p>4. 终止协议。</p>
                <p>您可以随时终止使用易路行市场活动，易路行可以以任何理由终止您进入易路行市场活动。</p>
                <p>停止进入市场不会解除任何一方终止前产生的任何义务，易路行可以在内部保留和继续使用你之前所提供的任何信息。终止本协议将不会对免责协议产生任何影响,即使本协议终止，本协议及所有条款所提供的弃权或限制责任仍然有效。</p>
            </div>
       </div>
    </div>
</div>
<!-- footer -->
<div class="footer">
	<div class="mybody">
    	<div class="bottom-ul">
			<ul>
				<li class="bottom-aa">新手上路</li>
				<li><a href="<?php echo U('Help/law');?>">法律解读</a></li>
				<li><a href="<?php echo U('Help/cash');?>">押金政策</a></li>
				<li><a href="<?php echo U('Help/insurance');?>">保险条款</a></li>
			</ul>

			<ul>
				<li class="bottom-aa">服务规则</li>
				<li><a href="<?php echo U('Help/service');?>">服务条款</a></li>
				<li><a href="<?php echo U('Help/passengerDeal');?>">驾客协议</a></li>
				<li><a href="<?php echo U('Help/ownerDeal');?>">车东协议</a></li>
				<li><a href="<?php echo U('Help/rule');?>">平台规则</a></li>
			</ul>

			<ul>
				<li class="bottom-aa">帮助中心</li>
				<li><a href="<?php echo U('Help/reserve');?>">预定取车</a></li>
				<li><a href="<?php echo U('Help/rent');?>">我要出租</a></li>
				<li><a href="<?php echo U('Help/vipService');?>">会员服务</a></li>
			</ul>

			<ul>
				<li class="bottom-aa">联系我们</li>
				<li>客服电话：0311-88888888</li>
				<li>客服电话：0311-88886666</li>
			</ul>
		</div>
        <div class="bottom-right">
			<img src="/easygo/easygo/Public/Home/images/QRcode.jpg" width="99px" height="99px"/>
			<h4>关注微信公众号</h4>
		</div>
    <p>Copyright©2017-2019 www.jumao.com All Rights Reserved.　易路行官网 京ICP备10005000号 京公网安备号 11010502026705</p>
    </div>
</div>
</body>
</html>