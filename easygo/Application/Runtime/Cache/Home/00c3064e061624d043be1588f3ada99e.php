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
			<li class="fw fw1"><a href="<?php echo U('Help/service');?>">服务规则</a></li>
			<li class="bz"><a href="<?php echo U('Help/index');?>">帮助中心</a></li>

		</ul>
	</div>
<!-- 帮助中心******************************** -->
	<div class="mybody">
    	<div class="left">
            <div class="left_nav">
            	<h1>服务规则</h1>
                <a href="<?php echo U('Help/service');?>">服务条款</a>
                <a href="<?php echo U('Help/passengerDeal');?>" class="person_now">驾客协议</a>
                <a href="<?php echo U('Help/ownerDeal');?>">车东协议</a>
                <a href="<?php echo U('Help/rule');?>">平台规则</a>
            </div>
       </div>
       <div class="right">
       		<h1>网络服务协议驾客会员补充协议（承租人适用）</h1>
            <div class="text">
            	<p>欢迎和感谢您阅读《易路行租车驾客服务协议》（“本协议”，下同）。
  本协议阐述之条款和条件适用于您所使用的易路行橘猫信息技术有限公司（“本公司”，下同）提供的汽车租赁居间服务平台易路行租车（域名为www.yiluxing.com ，以下简称“易路行”）、软件和服务，以实现会员间租车过程中权利和义务的约束及体现。本协议为您提供所享有的会员之间租车服务（“本服务”，下同）的基本规则，请仔细阅读并遵守。</p>
				<h1>1、接受条款</h1>
                <p>1.1	本协议所有规定，为本服务提供的基本规则，其他所有易路行已经发布或将来可能发布的各类规则为本协议的补充。所有规则为协议不可分割的一部分，与协议正文具有同等法律效力。</p>
                <p>1.2	以任何方式进入易路行并使用本公司服务即表示您已充分阅读、理解并同意接受本协议的条款和条件（以下合称“条款”）。</p>
                <p>1.3	易路行有权在必要时修改本协议条款。您可以在相关服务页面查阅最新版本的协议条款。易路行可以，但无义务对每次条款的修改进行逐一通知。</p>
                <p>1.4	本协议条款变更后，如果您继续使用易路行的软件或服务，即视为您已接受修改后的协议。如果您不接受修改后的协议，应当停止使用易路行的软件或服务。</p>
                <h1>2、实名制服务</h1>	
                <p>2.1	易路行为实名制汽车租赁信息服务平台，即易路行要求所有提供和接受服务的车东或驾客会员均需提供真实、有效的身份及其他相关信息，会员有义务保证提供信息的真实、正确、有效性。并据此做出以下约定：</p>
                <p>2.1.1	会员需根据易路行要求提供全部的真实、正确、有效、符合标准的身份信息；提供信息包括但不限于会员姓名、地址、年龄、驾驶记录等。</p>
                <p>2.1.2	当发现会员信息出现虚假或者错误的情况，易路行有权利但不必要要求会员进行更新、修改和撤除；</p>
                <p>2.1.3	由于提供不符合要求之信息，导致相关人员任何损失；由会员本人承担；</p>
                <p>2.2	会员信息的安全性易路行承诺保护会员信息安全，绝不公布、故意泄露或将客户信息用于其他己方或第三方利益行为；此不包含特殊情况下政府和公安机关的要求，第一时间通知当事人。</p>
                <h1>3、会员规则</h1>
                <p>3.1	会员身份</p>
                <p>3.1.1	自然人（或法人）通过注册，审核成功后，即可成为正式会员</p>
                <p>3.1.2	会员身份可以为车东和驾客，一个会员也可同时拥有两重身份</p>
                <p>3.1.3	驾客会员能且仅能以自然人身份存在</p>
                <p>3.1.4	会员在易路行拥有唯一的会员ID，同会员身份信息绑定，不可更改，不能转移他人</p>
                <p>3.1.5	为保证道路行驶安全，所有注册会员必须大于18岁，小于60岁</p>
                <p>3.2	注册车东</p>
                <p>3.2.1	任何个人或企业单位，只要拥有符合“车辆资格标准”的汽车，提供有效信息，并承诺遵守本协议所有条款，都可以通过创建一个用户档案，并依据“车辆注册流程”登记车辆成为一个车东会员。</p>
                <p>3.2.2	登记成功的车东会员名下至少应该注册一辆符合“车辆资格标准”的车东注册车辆（“车辆”，下同），但不仅限一辆；</p>
                <p>3.3	车辆注册车东注册的车辆必须在从登记之日起直至整个车辆注册期间符合以下所有的“车辆资格标准”，包括：</p>
                <p>3.3.1	是正规注册的汽车并且车辆的任何改装都符交通部门的要求</p>
                <p>3.3.2	车东拥有所有权，或经车东授权的车辆</p>
                <p>3.3.3	加入会员时，车龄不超过 10 年</p>
                <p>3.3.4	具有有效的车辆拥有证明并已支付相关的车辆税费</p>
                <p>3.3.5	车东已购买车辆机动车交通事故责任强制保险（交强险）</p>
                <p>3.3.6	满足基本的安全要求或能提供安全驾驶保障，清洁，状况良好，适合使用</p>
                <h1>4、订单规则</h1>
                <p>4.1	车辆预定驾客及车东必须遵照系统“订单程序”完成车辆预订，且遵守以下规则：</p>
                <p>4.1.1	车东必须在他/她的用户档案中设置并显示有关车辆的全部要求信息，并保证信息的真实有效，包括租用车辆基本情况、图片和租用价格等</p>
                <p>4.1.2	驾客通过易路行租车平台、无线客户端及电话等方式发送用车需求。车东收到租车请求后，根据用车信息可选择同意分享或拒绝。驾客选择合适的车辆，支付订单</p>
                <p>4.1.3	在同一租期时段，驾客能向多个车东提出请求，但只能选择一辆车进行租用订单支付</p>
                <p>4.1.4	车东享有接受或拒绝任何预订请求的绝对酌情权</p>
                <p>4.1.5	驾客预定请求一旦被车东接受，即视为车东同意受本协议及“保单”的约束</p>
                <p>4.1.6	当预定候选名单车东接受依照租用程序发出的预定请求时，依据本协议和双方约定的具体条款，该订单将对车东和驾客产生约束</p>
                <p>4.1.7	如系统已向驾客发出拒绝请求的通知，此时车东再接受该请求，则视作无效</p>
                <p>4.1.8	预定过程中，如果订单未确认，车东和驾客可自行取消预订而不受索赔</p>
                <p>4.2	订单确认 </p>
                <p>4.2.1	驾客根据订单流程，提供银行付款预授权，即认定为订单确认</p>
                <p>4.2.2	订单一旦确认，相关预定规则不可更改</p>
                <p>4.2.3	订单确认后，由于车东或驾客个人原因导致订单不能履行的情况，易路行不承担任何责任</p>
                <p>4.3	订单取消</p>
                <p>4.3.1	取消时间</p>
                <p>4.3.1.1 若驾客/车东在早于行程开始前24小时的时段内取消预订，取消方应支付违约金，违约金的数额为交易费用的20%，同时，向易路行平台交纳保险费（如已发生）</p>
                <p>4.3.1.2	在车东接受预订请求后，驾客/车东在晚于行程开始前24小时的时段内取消预订，取消方应支付违约金，违约金的数额为交易费用的100%，同时，向易路行平台交纳保险费（如已发生）。若行程已开始，取消方应支付违约金，违约金的数额为交易费用的100%</p>
                <p>4.3.1.3  驾客支付车辆押金之后，任何一方取消订单，需向另一方支付违约罚金。每笔违约罚金，易路行平台都将收取收款方违约罚金的50%作为技术服务费。</p>
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