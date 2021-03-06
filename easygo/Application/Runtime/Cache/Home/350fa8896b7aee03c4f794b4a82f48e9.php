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
                <a href="<?php echo U('Help/cash');?>">押金政策</a>
                <a href="<?php echo U('Help/insurance');?>">保险条款</a>
                <a href="<?php echo U('Help/privacy');?>" class="person_now">隐私协议</a>
            </div>
       </div>
       <div class="right">
       		<h1>用户隐私协议</h1>
            <div class="text">
				<p>在本协议中，”我们”是指“易路行（北京）信息技术有限公司”以及我们拥有的品牌“易路行”。下文中凡是提到“我们”“易路行橘猫息技术有限公司”时，几概念都是一体的。</p>
                <p>隐私权是您的重要权利。向我们提供您的个人信息是基于对我们的信任，相信我们会以负责的态度对待您的个人信息。我们认为您提供的信息只能用于帮助我们为您提供更好的服务。因此，我们制定了易路行租车会员个人信息保密制度以保护您的个人信息。易路行租车的个人信息保密制度摘要如下：</p>
                <h1>保密政策</h1>
                <p>通常，您能在匿名的状态下访问我们的网站并获取信息。在我们请求您提供有关信息之前，我们会解释这些信息的用途，我们有些站点需要注册才能加入。在通常情况下，这类注册要求您提供一个电子邮件地址、手机和一些诸如您的所使用车辆等一类的基本信息，有时我们也会请您提供更多的信息。我们这样做是为了使我们更好的了解您的需求，以便向您提供更有效的服务。我们收集的信息包括姓名、性别、年龄、有效证件、地址、电话号码等。您有权随时决定不接受来自我们的任何资料。我们将采取合理的措施尽最大可能保护您的个人资料。每当您提供给我们信息时，我们将采取合理的措施保护您的个人资料，我们也将采取合理的安全手段保护已存储的个人资料。除非根据法律或政策的强制性规定，在未得到您的许可之前，我们不会把您的任何个人资料提供给无关的第三方。但是，如果您要求我们提供特定客户支援服务或把一些物品送交给您，我们则需要把您的姓名和地址提供给第三者。</p>
                <h1>隐私权</h1>
                <p>您一旦注册成功成为易路行租车会员，将得到一个密码和帐号。如果您不保管好自己的帐号和密码安全，将负全部责任。另外，每个用户都要对其帐户中的所有市场活动和事件负全责。您可随时根据指示改变您的密码以及个人资料。由于您的隐私权对我们而言是相当重要的，因此，公布这份隐私权声明的易路行租车会根据下列几项原则管理涉及隐私的信息。</p>
                <h1>原则一：</h1>
                <p>每当易路行租车需要识别您的身份或与您联络时，会明确的询问所需的资料，即个人资料。
</p>
                <p>一般而言，当您在网站上注册，要求提供特别服务，或是如参加积分奖励等，便会被询问到这项资料。可能的话，易路行租车会利用一些方法，确认您的个人资料的正确性与时效性。</p>
                <h1>原则二：</h1>
                <p>如果想要将个人资料用在其他用途上，易路行租车会提供您如何拒绝这项服务的说明。您可以依照易路行租车的说明，拒绝这项服务。</p>
                <h1>原则三：</h1>
                <p>易路行租车也许会因法律要求公开个人资料，或者因善意确信这样的作法对于下列各项有其必要性：</p>
                <p>1.	符合法律公告或遵守适用于易路行租车站点的合法程序；</p>
                <p>2.	保护易路行租车的用户权利或财产；</p>
                <p>3.	在紧急的情况下，为了保护易路行租车及他们的用户或会员之个人或公众安全。</p>
                <h1>免责条款</h1>
                <p>有下列情况之一的，易路行租车不承担任何法律责任：</p>
                <p>1.	由于您将用户密码告知他人或与他人共享注册帐户，而导致的任何个人资料泄露；</p>
                <p>2.	任何由于计算机2000年问题、黑客攻击、计算机病毒侵入或发作、政府管制等造成的暂时性关闭，使网络无法正常运行而造成的个人资料泄露、丢失、被盗用或被窜改；</p>
                <p>3.	由于与本网站链接的其他网站所造成的个人资料泄露及由此而导致的任何法律争议和后果；</p>
                <p>4.	因不可抗力而引起的任何后果。</p>
                <p>根据《中华人民共和国宪法》和相关法律法规规定，在保护公民合法言论自由的同时，禁止利用互联网、通讯工具、媒体以及其他方式从事以下行为：</p>
                <p>1.	组织、煽动抗拒、破坏宪法和法律、法规实施的。</p>
                <p>2.	捏造或者歪曲事实，散布谣言，妨害社会管理秩序的。</p>
                <p>3.	组织、煽动非法集会、游行、示威、扰乱公共场所秩序的。</p>
                <p>4.	从事其他侵犯国家、社会、集体利益和公民合法权益的。</p>
                <p>管理部门将依法严加监管上述行为并予以处理；对构成犯罪的，司法机关将追究刑事责任。</p>
                <p>如何更新您已经提供给易路行租车的个人信息，如果您的电话或电子邮箱发生变化，您可以按官网公布的联系方式通知易路行租车，以帮助我们保持您的资料的准确性。您也可以通过登陆www.yiluxing.com(易路行租车免费注册页面的更新会员资料栏)的方式自行更新您的个人信息。 </p>
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