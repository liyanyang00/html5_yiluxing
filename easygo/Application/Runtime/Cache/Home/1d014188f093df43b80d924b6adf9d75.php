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
	            <a href="<?php echo U('Help/passengerDeal');?>">驾客协议</a>
	            <a href="<?php echo U('Help/ownerDeal');?>" class="person_now">车东协议</a>
	            <a href="<?php echo U('Help/rule');?>">平台规则</a>

            </div>
       </div>
       <div class="right">
       		<h1>网络服务协议车东会员补充协议（出租人适用）</h1>
            <div class="text">
            	<p>根据中华人民共和国《合同法》及相关法律法规的规定，本着平等、互利的原则，车东与易路行租车（以下简称“易路行”）经过友好协商，就为车东提供车辆信息技术服务，达成协议如下，以咨共同遵守。 此协议为电子版 , 与《平台规则与服务条款》主体协议具备同等法律效应且不可分割，经车东在线注册会员帐号电子授权即可生效 。</p>
				<h1>一、信息技术服务事项</h1>
                <p>1.1	易路行为车东提供信息技术服务，由车东在易路行平台上自行发布车辆出租信息。</p>
                <p>1.2“ 成功租车 ”- 租车方与车东通过易路行平台预定出租车辆，生成订单，并且车东通过该笔交易，获得报酬，视为易路行为车东成功提供一次信息技术服务。</p>
                <h1>二、双方的权利义务</h1>
                <p>2.1	车东的权利义务</p>
                <p>2.1.1	依据易路行用户服务协议要求，车东在提供相应的有效身份证、行驶证、交强险等信息，即可注册成为易路行的会员，通过易路行平台发布车辆出租的相关信息。</p>
                <p>2.1.2	车东应保证其在易路行注册的出租车辆，在车辆注册之日起至整个车辆注册期间，必须同时符合以下条件：</p>
                <p>2.1.2.1 是正规注册的汽车并且车辆的任何改装都符交通部门的要求 ;</p>
                <p>2.1.2.2	车东拥有所有权，或经车东授权的本地牌照车辆 ;</p>
                <p>2.1.2.3	加入会员时，车龄不超过 10 年 ;</p>
                <p>2.1.2.4	具有有效的车辆拥有证明并已支付相关的车辆税费 ;</p>
                <p>2.1.2.5	已购买车辆机动车交通事故责任强制保险（交强险）；</p>
                <p>2.1.2.6	满足基本的安全要求或能提供安全驾驶保障，清洁，状况良好，适合使用；</p>
                <p>2.1.3	车东保证其为本协议定义 “ 车辆 ” 的所有人或取得车辆所有人的合法授权。</p>
                <p>2.1.4	车东享有接受或拒绝任何预定请求的绝对酌情权。</p>
                <p>2.1.8	驾客根据订单前往指定地点取车时，车东应审查当事人的驾照，核实前来取车的当事人是否为预定署名的驾客本人，如果车东有理由认为驾客不适宜开车、不具备驾驶资格，车东有权保留对车辆的控制权并取消预订，此种情况下车东不承担违约责任。因车东明显过失，导致不合格的驾客驾驶车辆，因此导致的任何事故、风险，车东应按照相关法律的规定承担连带赔偿责任，与易路行无关。</p>
                <p>2.1.9租客在取车时，车东切勿提供行驶本原件及复印件，租客在租期内因无法提供行驶本造成的罚款及罚分处罚由易路行承担。</p>
                <p>2.1.10 车东必须确保在驾客取得车辆使用权之前没有遗留任何私人物品在车中 , 否则物品的丢失、毁损责任由车东自己承担。</p>
                <p>2.1.11驾客在返还车辆时，车东应及时对出租车辆使用情况进行检验，检验项目包括： </p>
                <p>2.1.11.1	是否有划痕，剐蹭</p>
                <p>2.1.11.2	车辆零部件是否缺失或者损坏。</p>
                <p>2.1.12 在车东接受预订请求后，车东可以在早于行程开始前 24 小时的时段内取消预订，但应向驾客支付违约金，违约金的数额为交易费用 20% ，同时，向易路行平台支付保险费（如已发生）。在车东接受预订请求后，晚于行程开始前 24 小时的时段内取消预订，车东应向驾客支付违约金，违约金的数额为交易费用的 100% 。若行程已开始，车东应向驾客支付违约金为交易费用的100%，同时，向易路行平台支付保险费（如已发生）。对于拒付支付违约金及保险费用的车东，易路行有权取消其会员资格。</p>
                <p>2.1.13 每笔违约罚金，易路行租车平台都将收取收款方违约罚金的50%作为技术服务费。</p>
                <p>2.2.3	若车辆在预定订单约定的租车时间内，出现保险合同约定范围内的丢失、交通事故等情形，易路行可以配合车东，处理后续纠纷。</p>
                <p><span>若车辆出租期间，诈骗车辆不予归还，或将车辆抵押从中渔利，属于恶性诈骗刑事行为，租车保险将不予赔付，由车主提请公安系统报警报案，由公安机关或人民法院追究其犯罪嫌疑人刑事和民事责任；易路行平台可以给予举证协助服务；对于车东造成的损失，由犯罪嫌疑人负责赔偿，通过公安机关执法或者法院判决执行。详见出租风险告知提示与解释说明、免责条款【加红加粗】</span></p>
                <p>若租客没有按照约定将车辆归还车东并存在纠纷，平台有权扣除其所交押金。</p>
                <p>驾客用车期间，需符合以下条件：</p>
                <p>2.3.1 仅限于租客本人驾驶。</p>
                <p>2.3.2 除非得到车东和易路行租车批准，驾客车辆不得出城市所规定外围及规定范围外100公里， 否则驾客需支付车东违约罚金，金额为租期租金的50%。若驾客开出限定范围48小时内未配合及时开回限定范围内时，易路行租车将可能报警。</p>
                <p>2.3.3 驾客不得将车辆用于越野比赛、性能测试或驾驶教学、或营运用途。</p>
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