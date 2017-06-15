<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>易路行</title>
	<link href="/easygo2/easygo/Public/Home/css/public.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/easygo2/easygo/Public/Home/css/helpcenter.css">	
    <script type="text/javascript" src="/easygo2/easygo/Public/Home/js/jquery.min.js"></script>
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
    	<div class="logo"><a href="<?php echo U('Rent/index');?>"><img src="/easygo2/easygo/Public/Home/images/logo.jpg" alt="logo" /></a></div>
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
 if(!isset($user['user_name'])||$user['user_name']==''){ echo "<a style='color:white' href='".U('user/login')."'>登录</a> | <a style='color:white' href='".U('user/register')."'>注册</a>"; } else{ $str = $user['user_name']; echo "<li><p>您好！&nbsp;$str&nbsp;&nbsp;&nbsp;<img src='/easygo2/easygo/Public/Home/images/down.gif' alt='' /></p>
                            <div id='children'>
                                <div class='arrow'></div>
                                <ul class='child'>
                                    <li id='xu'><a href=".U('Indent/rentItem')." target='_blank'>我的订单</a></li>
                                    <li id='xu'><a href=".U('Indent/discount')." target='_blank'>我的资产</a></li>
                                    <li id='xu'><a href=".U('Indent/personal')." target='_blank'>我的账户</a></li>
                                    <li id='xu' style='border:none'><a href='/easygo2/easygo/index.php/Home/user/logout'>退出登录</a></li>
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
                <a href="<?php echo U('Help/reserve');?>" class="person_now">预定取车</a>
                <a href="<?php echo U('Help/giveBack');?>">还车结算</a>
                <a href="<?php echo U('Help/rent');?>">我要出租</a>
                <a href="<?php echo U('Help/vipService');?>">会员服务</a>
            </div>
       </div>
       <div class="right">
       		<h1>预定取车</h1>
            	<ul id="accordion" class="accordion">
                    <li>
                        <div class="link"><i class="fa fa-paint-brush"></i>01. 客户具备什么条件可享受租车服务？</div>
                        <div class="submenu">
                            <p>（1）年龄在18周岁（含）以上；</p>
                            <p>（2）拥有大陆地区有效驾驶证；</p>
                            <p>（3）提供本人有效身份证明；</p>
                            <p>（4）持有本人有效信用卡或国内借记卡。</p>
                        </div>
                    </li>
                    <li>
                        <div class="link">02. 哪些身份证明可以作为租车的身份证件？</div>
                        <ul class="submenu">
                            <p>目前，本人有效身份证件包括：境内客户：二代身份证;港澳客户：港澳居民来往内地通行证;台湾客户：大陆通行证;外籍客户：护照，签证/居住证。</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">03. 我不是中国大陆公民，可以在你们这里租车吗？</div>
                        <ul class="submenu">
                            <p>可以，但是由于外籍客户及港澳台客户身份验证时间较长，所以您第一次租车时，请提前至少1个工作日向预订部门提供您的签证、护照扫描件或传真件，以保证您能按时用车；请特别留意，周末及法定节假日无法进行身份验证。</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">04. 租车时是否能够用现金作为担保押金？</div>
                        <ul class="submenu">
                            <p>很抱歉，易路行不接受现金担保。</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">05. 如果本人没有信用卡或信用卡额度不足，可以租车吗？</div>
                        <ul class="submenu">
                            <p>如果您没有信用卡或额度不足，您可以请有信用卡的亲友为您担保，担保人需持有效身份证件、足够额度的信用卡，和您一同取车并在《租车单》上签字，担保人将对您租车期间所产生的一切费用及责任承担无限连带责任；</p>
                            <p>此外，标准租车预授权在5000元及以下的车型，非首次租车时，可以使用国内借记卡支付与租车预授权相等额度的押金。</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">06. 租车时，如果我没有足够额度的信用卡，能不能用两张信用卡累计进行预授权担保？</div>
                        <ul class="submenu">
                            <p>很抱歉，易路行不接受两张信用卡刷取同一笔预授权，建议您寻找一位符合条件的信用卡担保人为您担保，或者您可以租用预授权在5000元及以下的车型并使用国内借记卡支付押金。</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">07. 租车有里程限制吗？</div>
                        <ul class="submenu">
                            <p>其他短租自驾租车产品均不限里程。</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">08. 我取车后，订单可修改的范围？</div>
                        <ul class="submenu">
                            <p>在不影响其他客户的情况下，我们将尽力满足您的订单修改需求。为此，请您在决定修改订单时，尽早致电0311-88888888。</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">09.租车期限时间有限定吗？</div>
                        <ul class="submenu">
                            <p>有，单次最短租期为 1 天（24 小时） ，不满一天按一天计算；单次最长租期不超过 89 天（含 89 天）。</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">10.如提前还车，预付或先付的租金退还吗？</div>
                        <ul class="submenu">
                            <p>普通短租产品，我们将按照实际租期为您结算，多退少补。</p>
                            <p>周租/月租/工作日套餐产品、顺风车产品等特价产品，以及节假日等需预付的产品，提前还车将按您的预订租期结算。</p>
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
			<img src="/easygo2/easygo/Public/Home/images/QRcode.jpg" width="99px" height="99px"/>
			<h4>关注微信公众号</h4>
		</div>
    <p>Copyright©2017-2019 www.jumao.com All Rights Reserved.　易路行官网 京ICP备10005000号 京公网安备号 11010502026705</p>
    </div>
</div>
</body>
</html>