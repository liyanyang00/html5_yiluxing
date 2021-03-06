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
                <li class="navnow"><a href="<?php echo U('Index/index');?>">首页</a></li>
                <li><a href="<?php echo U('Rent/index');?>">自驾租车</a></li>
                <li><a href="<?php echo U('Issue/index');?>">信息发布</a></li>
                <li><a href="<?php echo U('Special/index');?>">优惠活动</a></li>
                <li><a href="<?php echo U('Help/index');?>" target="_blank">帮助中心</a></li>
                <li><a href="<?php echo U('Message/index');?>">留言板</a></li>
      		</ul>
            
			<div class="top-right2">
				<div>
					<ul>
				<?php
 if(!isset($_SESSION['id'])||$_SESSION['id']==''){ echo "<a style='color:white' href='".U('user/login')."'>登录</a> | <a style='color:white' href='".U('user/register')."'>注册</a>"; } else{ $str = $user['user_name']; echo "<li><p>您好！&nbsp;$str&nbsp;&nbsp;&nbsp;<img src='/easygo/easygo/Public/Home/images/down.gif' alt='' /></p>
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
			<li class="fw"><a href="<?php echo U('Help/service');?>">服务规则</a></li>
			<li class="bz bz1"><a href="<?php echo U('Help/index');?>">帮助中心</a></li>

		</ul>
	</div>
<!-- 帮助中心******************************** -->
	<div class="mybody">
    	<div class="left">
            <div class="left_nav">
            	<h1>帮助中心</h1>
                <a href="<?php echo U('Help/reserve');?>">预定取车</a>
                <a href="<?php echo U('Help/giveBack');?>">还车结算</a>
                <a href="<?php echo U('Help/rent');?>" class="person_now">我要出租</a>
                <a href="<?php echo U('Help/vipService');?>">会员服务</a>
            </div>
       </div>
       <div class="right">
       		<h1>我要出租</h1>
            	<ul id="accordion" class="accordion">
                    <li>
                        <div class="link">01. 完整的一次租车包括什么过程？</div>
                        <div class="submenu">
                            <p>易路行为车东提供信息技术服务，由车东在易路行平台上自行发布车辆出租信息。</p>
                            <p>“ 成功租车 ”- 租车方与车东通过易路行平台预定出租车辆，生成订单，并且车东通过该笔交易，获得报酬，视为易路行为车东成功提供一次信息技术服务。</p>
                        </div>
                    </li>
                    <li>
                        <div class="link">02. 车东的权利和义务？</div>
                        <ul class="submenu">
                            <p>依据用户服务协议要求，车东在提供相应的有效身份证、行驶证、交强险等信息，即可注册成为易路行的会员，通过易路行平台发布车辆出租的相关信息。</p>
                            <p>车东应保证其在注册的出租车辆，在车辆注册之日起至整个车辆注册期间，必须是正规注册的汽车并且车辆的任何改装都符交通部门的要求。</p>
                            <p>具有有效的车辆拥有证明并已支付相关的车辆税费。</p>
                            <p>车东享有接受或拒绝任何预定请求的绝对酌情权。</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">03. 驾客在返还车辆时，车东应该检查什么？</div>
                        <ul class="submenu">
                            <p>是否有划痕，车辆零部件是否缺失或者损坏。</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">04. 取消订单之后违约金怎么办？</div>
                        <ul class="submenu">
                            <p>在车东接受预订请求后，车东可以在早于行程开始前 24 小时的时段内取消预订，但应向驾客支付违约金，违约金的数额为交易费用 20% ，同时，向易路行平台支付保险费（如已发生）。在车东接受预订请求后，晚于行程开始前 24 小时的时段内取消预订，车东应向驾客支付违约金，违约金的数额为交易费用的 100% 。若行程已开始，车东应向驾客支付违约金为交易费用的100%，同时，向易路行平台支付保险费（如已发生）。对于拒付支付违约金及保险费用的车东，易路行有权取消其会员资格。</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">05. 我的车辆没有人租用怎么办？</div>
                        <ul class="submenu">
                            <p>您可以考虑是否调整租用价格，噫吸引更多的顾客来租用。</p>
                            <p>上传更清晰真实的照片。</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">06. 车辆重新上线应该准备什么？</div>
                        <ul class="submenu">
                            <p>若车辆重新上线，需要车东缴纳100元上线服务费，若流量卡被注销，还需要车东缴纳100元补卡费和安装费。</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">07. 车辆租出去之后被骗了怎么办？</div>
                        <ul class="submenu">
                            <p>若车辆出租期间，诈骗车辆不予归还，或将车辆抵押从中渔利，属于恶性诈骗刑事行为，租车保险将不予赔付，由车主提请公安系统报警报案，由公安机关或人民法院追究其犯罪嫌疑人刑事和民事责任；宝驾平台可以给予举证协助服务；对于车东造成的损失，由犯罪嫌疑人负责赔偿，通过公安机关执法或者法院判决执行。详见出租风险告知提示与解释说
明、免责条款。</p>
                        </ul>
                    </li>
        		</ul>
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