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
 if(!isset($user['user_name'])||$user['user_name']==''){ echo "<a style='color:white' href='".U('user/login')."'>登录</a> | <a style='color:white' href='".U('user/register')."'>注册</a>"; } else{ $str = $user['user_name']; echo "<li><p>您好！&nbsp;$str&nbsp;&nbsp;&nbsp;<img src='/easygo/easygo/Public/Home/images/down.gif' alt='' /></p>
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
                <a href="<?php echo U('Help/giveBack');?>" class="person_now">还车结算</a>
                <a href="<?php echo U('Help/rent');?>">我要出租</a>
                <a href="<?php echo U('Help/vipService');?>">会员服务</a>
            </div>
       </div>
       <div class="right">
       		<h1>还车结算</h1>
            	<ul id="accordion" class="accordion">
                    <li>
                        <div class="link">01. 还车时去哪里还车？</div>
                        <div class="submenu">
                            <p>租客与车主联系自行选择双方都同意的还车地点。</p>
                        </div>
                    </li>
                    <li>
                        <div class="link">02. 还车时需要什么手续？</div>
                        <ul class="submenu">
                            <p>还车油量应不低于取车时油量，并将车辆停放在还车门店的指定位置；服务代表验车后根据《结算单》项目结算租金，同时进行第二次信用卡的预授权，作为有可能发生的违章保证金及其他未结清的费用押金。</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">03. 信用卡预授权是否需要支付利息？</div>
                        <ul class="submenu">
                            <p>银行不收取预授权利息，且无须还款，所以无论预授时间长短，皆不产生任何金融费用。</p>
                         </ul>
                    </li>
                    <li>
                        <div class="link">04. 如果还车时油箱不满该如何处理？</div>
                        <ul class="submenu">
                            <p>如果还车时油量低于出车时油量，您需按当地油费标准支付油费差价，并在租金结算中加入，如出车时油箱是满油的，您还需另外支付100元加油代办费。</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">05. 续租费用如何收取？</div>
                        <ul class="submenu">
                            <p>按车辆定价，日，周，月续租，不可使用优惠券。</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">06. 车辆没有续租的情况下，超时还车怎么计算费用？</div>
                        <ul class="submenu">
                            <p>延期还车4小时以内，您无需办理续租手续，但延期用车时间将计入您的租期，您需在还车时根据总租期支付相应费用：</p>
                            <p>租期超过1天的：</p>
                            <p>a)	租期内整日的部分，普通产品按天收取车辆租赁费及门店服务费、基本保险费、可选服务费等费用；周租/月租产品按天收取车辆租赁费及门店服务费、基本保险费，GPS和不计免赔服务不收取超时费。</p>
                            <p>b)	租期内非整日的部分，不足4小时（含4小时）的，按超时费标准计费，不再另计基本保险费、可选服务费；4小时以上的，计1天租期，普通产品按天收取车辆租赁费及门店服务费、基本保险费、可选服务费等费用；周租/月租产品按天收取车辆租赁费及门店服务费、基本保险费，但GPS和不计免赔服务不收取超时费。</p>
                            <p>如您超期未还车或未经允许强行续租，为保障其他预订客户的用车权益和车辆安全，神州租车有可能收回车辆，您需要支付正常租金及超期违约金（标准为超期部分车辆租赁费及门店服务费/超时费、GPS等可选服务费的300%）；在租车城市以外地区收回车辆的，您需加付异地还车费以及神州租车由此付出的其他费用。</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">07. 租车过程中出了事故该怎么办？</div>
                        <ul class="submenu">
                            <p>租赁期间内，驾客在驾驶所租赁机动车过程中发生意外事故，导致财产损失或人身伤害的，对于依法或依租赁合同应由驾客承担的经济赔偿责任，且不属于免除责任范围的，由保险负责赔偿。</p>
                            <p>具体赔偿范围及赔偿金额以保险公司条款为准，保险公司免赔、拒赔、超过赔偿限额的部分由驾客承担。</p>
                            <p>租赁期间内，若驾客出现逾期不返还车辆、主观欺诈、犯罪行为、酗酒驾车、抵押车辆、驾车逃逸等情形，保险不予赔付，由驾客全责承担所有损失。前述情况对于车主造成的损失，经车主书面授权和平台书面确认，平台可以协助车主代追偿，但非平台的直接权利和责任权利。</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">08. 优惠券如何获得？</div>
                        <ul class="submenu">
                            <p>易路行会在节假日，周年庆等活动向用户发放金额不等的各种优惠券，用户也可以通过消费获得优惠券。</p>
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