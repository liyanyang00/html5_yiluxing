<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>易路行</title>
	<link href="/easygo/Public/Home/css/public.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/easygo/Public/Home/css/helpcenter.css">	
    <script type="text/javascript" src="/easygo/Public/Home/js/jquery.min.js"></script>
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
    	<div class="logo"><a href="<?php echo U('Rent/index');?>"><img src="/easygo/Public/Home/images/logo.jpg" alt="logo" /></a></div>
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
 if(!isset($user['user_name'])||$user['user_name']==''){ echo "<a style='color:white' href='".U('user/login')."'>登录</a> | <a style='color:white' href='".U('user/register')."'>注册</a>"; } else{ $str = $user['user_name']; echo "<li><p>您好！&nbsp;$str&nbsp;&nbsp;&nbsp;<img src='/easygo/Public/Home/images/down.gif' alt='' /></p>
                            <div id='children'>
                                <div class='arrow'></div>
                                <ul class='child'>
                                    <li id='xu'><a href=".U('Indent/rentItem')." target='_blank'>我的订单</a></li>
                                    <li id='xu'><a href=".U('Indent/discount')." target='_blank'>我的资产</a></li>
                                    <li id='xu'><a href=".U('Indent/personal')." target='_blank'>我的账户</a></li>
                                    <li id='xu' style='border:none'><a href='/easygo/index.php/Home/user/logout'>退出登录</a></li>
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
                <a href="<?php echo U('Help/law');?>" class="person_now">法律解读</a>
                <a href="<?php echo U('Help/cash');?>">押金政策</a>
                <a href="<?php echo U('Help/insurance');?>">保险条款</a>
                <a href="<?php echo U('Help/privacy');?>">隐私协议</a>
            </div>
       </div>
       <div class="right">
       		<h1>法律解读</h1>
            <div class="text">
				<h1>合法性</h1>
                <h1>私家车出租合法吗？</h1>
                <p>易路行汽车租赁居间服务平台为实名制注册会员的网络平台，为私家车东和驾客，提供私家车 P2P 汽车租赁居间服务。 并且，经过相关律师事务所和国家交通运输部相关工作人员认定：  P2P  租车行为，以及易路行租车提供的配套服务是合法合规的。</p>
                <p>原因如下：</p>
                <p>首先，汽车租赁合同是平等主体之间的民事合同，属私益范围内的权利义务关系，受《民法通则》以及《合同法》中租赁合同章节的调整 。</p>
                <p>其次， P2P 租车，性质上属于私人汽车租赁，是指私家车东在一定时间范围内，让度汽车使用权，以获取租金收入的行为，这是一种平等的民事主体之间就出租、使用车辆达成的合意，所以 P2P 租车模式下的私家车租赁是合法的。</p>
                <p>第三， P2P 私人汽车租赁不属于旅客运输经营行为。它不适用《中华人民共和国道路运输条例》的规定，所以这种行为是可以通过中间平台提供的用户间民事合同，合法促成私人间的车辆租赁活动。 第四，易路行汽车租赁居间服务平台专门为有意出租车辆的出租人和使用车辆的承租人提供网络平台，整合双方供需，提供相应服务以实现盈利；其服务关系和签订的合同，属于第三方与出租人、承租人之间形成的居间合同关系。</p>
                <h1>法律解读</h1>
                <h1>一、汽车租赁业务的划分</h1>
                <p>一般而言，汽车租赁业务可分为出租车公司的公共交通营运、汽车租赁公司的纯粹租赁经营以及个人汽车租赁业务三种类型。 汽车出租公司营运业务涉及到公共产品供给者与消费者之间的权利义务关系；汽车租赁公司的纯粹租赁经营以及私人汽车租赁业务，一般不涉及普遍的公共利益，属私益范畴。</p>
                <p>以下对比分析这三种不同的模式相关的法律范畴问题：</p>
                <p>1、 出租车公司的公共交通营运 出租车公司的公共交通营运虽然涉及到汽车租赁关系，但出租车公司提供的人车服务属于公共利益范畴。出租车公司必须经特别许可、并获得特许经营资格，代表政府向社会提供公共交通服务产品，它是普通公交汽车运输服务（班车）的补充。 这种汽车租赁业务属于我国《道路运输管理条例》的调整范围。在这种汽车租赁服务法律关系中，服务提供方为特定机构、接受方为不特定的公众，标的为人车一体，且驾驶员和车辆都必须经过营运登记，取得营运资格，更确切地说是一种服务合同关系，属于运输合同中的客运合同。</p>
                <p>2、汽车租赁公司的租赁经营 汽车租赁企业的租赁业务只是向不特定的社会大众纯粹出租汽车并收取租金，一般不提供驾驶服务。该类企业的管理和规制适用《公司法》和《合伙企业法》等法律的相关规定，其用来出租的车辆受机动车辆管理条例和道路交通法规的规制。 汽车租赁企业与客户的租赁合同关系属于普通租赁关系。该类汽车租赁企业不直接担负公共交通运输职能，不需要获得特许经营资格。因此，该行为不属于《中华人民共和国道路运输条例》的调整范围。</p>
                <p>3、私人汽车租赁业务 私人汽车租赁业务，是平等的民事主体之间就出租、使用车辆达成的合意，租赁服务针对的是特定的个体，而非不特定的公众，受《民法通则》以及《合同法》中租赁合同章节的调整；私人间私车租赁服务，只是构成普通的汽车租赁服务合同关系。</p>
                <h1>二、《道路运输条例》管理范围</h1>
                <p>我国《道路运输条例》对道路运输经营行为用列举的方式作了明确的规定。
首先，第二条规定： “ 从事道路运输经营以及道路运输相关业务的，应当遵守本条例。前款所称道路运输经营包括道路旅客运输经营（以下简称客运经营）和道路货物运输经营（以下简称货运经营）；道路运输相关业务包括站（场）经营、机动车维修经营、机动车驾驶员培训”。私人汽车租车经营的服务，并不提供驾驶人员，不属于旅客运输、货物运输，可见其中并不包括汽车租赁行为。</p>
                <p>第二， 私人汽车租赁服务不必受限于固定的行驶路线或运行时刻表，出租人提供的汽车租赁并不是公共交通的补充，不构成 “ 道路运输经营 "，认定也不属于《道路运输管理条例》的调整范围。</p>
                <p>第三，《道路运输条例》第八十条：道路运输管理机构依照本条例发放经营许可证件和车辆营运证。即，若出租 9 座以上的客车适用道路运输规定，需要办理经营许可证和车辆营运证；《北京市汽车租赁管理办法》第二十九条：出租 9 座以上客车的，适用道路运输管理的相关规定。 私家车座位均为 9 坐以下，不属于以上条例调整范围</p>
                <h1>三、关于车东责任的法律意见</h1>
                <p>在P2P租车模式下，车东与驾客对车辆出租期间责任界定的法律依据有诸多疑问，之前经过调研，我们发现侵权责任法中对车辆借用或出租期间的界定有明确的法律规定，依据这些法律规定 , 以下对易路行租车的 P2P 租车活动进行车东与驾客责任界定的法律解读。 我国《侵权责任法》　第四十九条规定：“因租赁、借用等情形机动车所有人与使用人不是同一人时，发生交通事故后属于该机动车一方责任的，由保险公司在机动车强制保险责任限额范围内予以赔偿。不足部分，由机动车使用人承担赔偿责任；机动车所有人对损害的发生有过错的，承担相应的赔偿责任”。
也就是说 : 将车辆租用给他人使用的，出了交通事故由使用人承担赔偿责任。 但如果车东有过错，才需承担一定的责任。</p>
                <h1>车东责任范围：</h1>
                <p>最高人民法院《关于审理道路交通事故损害赔偿案件适用法律若干问题的解释》第一条规定：“机动车发生交通事故造成损害，机动车所有人或者管理人有下列情形之一，人民法院应当认定其对损害的发生有过错，并适用侵权责任法第四十九条的规定确定其相应的赔偿责任：</p>
                <p>（一）知道或者应当知道机动车存在缺陷，且该缺陷是交通事故发生原因之一的；</p>
                <p>（二）知道或者应当知道驾驶人无驾驶资格或者未取得相应驾驶资格的；</p>
                <p>（三）知道或者应当知道驾驶人因饮酒、服用国家管制的精神药品或者麻醉药品，或者患有妨碍安全驾驶机动车的疾病等依法不能驾驶机动车的；</p>
                <p>（四）其它应当认定机动车所有人或者管理人有过错的”。</p>
                <p>由此，请注意： 如果车东明知自己的车辆有缺陷，可能会导致不安全驾驶，导致交通事故，那么就不应该将车辆借出。 “必须要修理好这个缺陷后才能将车辆借出”。 车东借出车辆时，需要“确保驾客的身份真实、驾照有效”；这一点，易路行租车严格的驾客会员审核制度已经保证了。 如果在借出车辆时，车东发现“租车人饮酒、吸毒或者疾病等情况时” ，不能将车辆借出。这一点，易路行租车的租车协议已经覆盖到了，每一个预定在确认之前，驾客都需要事先作出合法用车的声明。
          在P2P汽车租赁平台下，<span>车东会不可避免的遭遇诸多法律风险。比如租赁车辆被逾期返还、发生盗抢，比如因承租人驾客涉嫌诈骗、抵押车辆或隐藏车辆等行为，比如出现不属于保险公司承保范围，保险不予理赔从而造成车东损失的情形。车东在使用平台时应明确上述风险并配合平台做好事先防范。</span> 综上所述，我们认为车东将车通过易路行私家车分享平台出租，其所需要负担的责任是完全清晰的，<span>车东在享受租金带来的收益时，应自行识别和防范交易风险。</span></p>
                <h1>四、关于平台责任的法律意见</h1>
                <p><span>易路行汽车租赁服务平台为实名制注册会员的网络平台，为私家车东和驾客，提供私家车 P2P 汽车租赁信息技术服务，为出租人及承租人提供信息交换、交易撮合和订立合同实现交易的平台媒介等服务。在车东和租客进行交易时，对双方进行公安机关的实名认证，进行基本的征信信息筛查；但作为交易的服务方，我们无法避免和穷尽车东和租客在交易中产生的法律风险、纠纷乃至损失；交易双方在形成交易前，自行决定交易对象和方式，交易对价和期限，自行承担相应的风险。如果出现财产损失、人身伤亡的，按照平台中的“保险条例”进行索赔；如果出现租赁汽车被盗抢被诈骗等无法理赔的，平台将配合车东处理纠纷。</span></p>
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
			<img src="/easygo/Public/Home/images/QRcode.jpg" width="99px" height="99px"/>
			<h4>关注微信公众号</h4>
		</div>
    <p>Copyright©2017-2019 www.jumao.com All Rights Reserved.　易路行官网 京ICP备10005000号 京公网安备号 11010502026705</p>
    </div>
</div>
</body>
</html>