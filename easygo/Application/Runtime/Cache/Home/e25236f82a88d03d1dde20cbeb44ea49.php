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
			<li class="xs xs1"><a href="<?php echo U('Help/law');?>">新手上路</a></li>
			<li class="fw"><a href="<?php echo U('Help/service');?>">服务规则</a></li>
			<li class="bz"><a href="<?php echo U('Help/index');?>">帮助中心</a></li>
		</ul>
	</div>
<!-- 帮助中心******************************** -->
	<div class="mybody">
    	<div class="left">
            <div class="left_nav">
            	<h1>新手上路</h1>
                <a href="<?php echo U('Help/law');?>">法律解读</a>
                <a href="<?php echo U('Help/cash');?>" class="person_now">押金政策</a>
                <a href="<?php echo U('Help/insurance');?>">保险条款</a>
                <a href="<?php echo U('Help/privacy');?>">隐私协议</a>
            </div>
       </div>
       <div class="right">
       		<h1>押金政策</h1>
            <div class="text">
				<h1>押金分为车辆押金和违章押金，车辆押金在租车之前缴付都可退，规则如下：</h1>
                <h1>a) 车辆押金：</h1>
                <p>若结算时是实时结算，车辆押金扣除租金及保险费用后，剩余车辆押金立即解冻返还；</p>
                <p>若结算时未采取实时结算，车辆押金在行程结束48小时后系统自动结算，扣除租金及保险费用，剩余车辆押金自动解冻。车辆押金的金额根据车型系统自动计算。</p>
                <p>另：当下单时间距离用车时间超过15天或用车租期超过15天，支付完车辆押金立即预授权冻结，租车押金会扣款到易路行余额账户中冻结，还车后解冻，押金原路退回。</p>
                <p>若租客没有按照约定将车辆归还车东并存在纠纷，平台有权扣除其所交押金。
若租客与车主之间有纠纷，平台有权冻结押金（含违章押金），直至纠纷处理完解除冻结</p>
                <h1>b) 违章押金：</h1>
                <p>违章押金金额根据租期天数而定，7天含以下租期，违章押金为1500元；租期大于7天，违章押金为2000元。驾客在车东回复确认同意后，交车前支付相应全额违章押金，在用车结算后将违章押金扣款至易路行平台账户冻结30天；30天后若无违章，违章押金按原路退回。</p>
                <h1>c) 合作企业VIP账户，根据信用资质，经审核可适当减低或者免除车辆押金和违章押金，易路行保留给予合作企业优惠的权利</h1>
                
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