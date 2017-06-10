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
                <a href="<?php echo U('Help/ownerDeal');?>">车东协议</a>
                <a href="<?php echo U('Help/rule');?>" class="person_now">平台规则</a>
            </div>
       </div>
       <div class="right">
       		<h1>平台规则</h1>
            <div class="text">
				<h1>第一章 会员资格</h1>
                <h1>1	车东资格</h1>
                <p>1.1 出租车辆是正规合法注册证明并且车辆的任何改装都符政府交通部门的要求</p>
                <p>1.2 车东拥有所有权，或经车主授权的车辆管理人</p>
                <p>1.3 加入会员时，车龄不超过 10 年</p>
                <p>1.4 具有有效的车辆拥有证明并已支付相关的车辆税费</p>
                <p>1.5 车东已购买车辆机动车交通事故责任强制保险（交强险）</p>
                <p>1.6 满足基本的安全要求或能提供安全驾驶保障，清洁，状况良好，适合使用</p>
                <h1>2	驾客资格</h1>
                <p>2.1 持有有效的，完全的（非临时的）驾驶执照</p>
                <p>2.2 驾驶执照扣分不超过9分</p>
                <p>2.3 3年内没有酒后驾驶前科或没有被暂停或吊销其驾照，无危险驾驶和无保险驾驶前科，无被停保的记录</p>
                <p>2.4 国外驾照：目前，易路行无法向仅持有外国驾照的驾客开放。对于外国驾照新换发的国内驾照，外国驾照的驾龄可计入驾客驾龄。此种情况下，驾客需将您的外国驾照的复印件发送至service@baojia.com</p>
                <p>2.5 备注：持有国外护照、港澳台通行证的用户，因无法验证，暂时不对此类客户开放。</p>
                <p>2.6 车立信平台（www.chelixin.org）个人信用查询大数据库认定无违法犯罪记录、无失信记录</p>
                <h1>3	审核时间</h1>
                <p>上传证件后，客服人员将在15分钟内完成人工审核并通知结果(一般情况下很快通过审核)。若非工作时间(9:00-21:00)，则将在顺延至次日的第一时间处理</p>
                <h1>第二章 租车费用</h1>
                <h1>1.租金</h1>
                <p>车东需按照平台给出的指导价，按照指导价格浮动范围进行定价车东可按照市场供需情况自主设定租价，包括按天租金、按周租金、按月租金，结算价格以订单生效时价格为准</p>
                <h1>2.保险</h1>
                <p>每笔租车订单，都有针对车辆驾驶人在租赁期间的额外保险，车主车辆的商业保险在租车期间内不受影响，驾客可以自行选择符合条件的保险。</p>
                <p>2.1 保险类型：租赁机动车驾驶人责任保险</p>
                <p>2.2 保险区域：全国范围（不含港、澳、台地区）</p>
                <p>2.3 保障范围：车辆损失险、第三者责任险、车上人员责任险、玻璃单独破碎险、全车盗抢险（全车盗抢险指所租赁机动车辆被盗窃、抢劫、抢夺，且经出险当地县级以上公安刑侦部门立案侦查，满60天未查明下落的全车损失。</p>
                <p>2.4 保险期间：</p>
                <p>2.4.1 保险期间为订单的起止时点，订单开始前及订单结束后均不覆盖。</p>
                <p>2.4.2 若驾客提前取车保险不覆盖；若延迟还车，在获得车东确认后，需联系平台进行订单的相应起止时限的调整，驾客支付保费后，可以获得续租期间租车保险的保障。</p>
				<h1>3.押金</h1>
                <p>押金分为车辆押金和违章押金，车辆押金在租车之前缴付都可退，规则如下：</p>
                <p>a) 车辆押金：</p>
                <p>若结算时是实时结算，车辆押金扣除租金及保险费用后，剩余车辆押金立即解冻返还；</p>
                <p>若结算时未采取实时结算，车辆押金在行程结束48小时后系统自动结算，扣除租金及保险费用，剩余车辆押金自动解冻。车辆押金的金额根据车型系统自动计算。</p>
                <p>另：当下单时间距离用车时间超过15天或用车租期超过15天，支付完车辆押金立即预授权冻结，租车押金会扣款到易路行余额账户中冻结，还车后解冻，押金原路退回。</p>
                <p>b) 违章押金：违章押金金额根据租期天数而定，7天含以下租期，违章押金为1500元；租期大于7天，违章押金为2000元。驾客在车东回复确认同意后，交车前支付相应全额违章押金，在用车结算后将违章押金扣款至易路行平台账户冻结30天；30天后若无违章，违章押金按原路退回。
</p>
                <p>若租客与车主之间有纠纷，平台有权冻结押金（含违章押金），直至纠纷处理完解除冻结。
若租客没有按照约定将车辆归还车东或存在纠纷，平台有权扣除其所交押金。</p>
                <p>c) 合作企业VIP账户，根据信用资质，经审核可适当减低或者免除车辆押金和违章押金，易路行有权决定和取消是否给予优惠。</p>
                <h1>4.优惠券使用规则</h1>
                <p>1、优惠券仅可抵用租车费用，不可抵用保险费及、油费等其他费用。</p>
                <p>2、每张优惠券只能被使用一次。租车结束后，租客最终向车主支付的租金总金额如果低于使用的优惠券总金额，则被使
用的优惠券剩余部分额度将被清零。该租客在后续的租车过程中，不能继续使用该优惠券的余额部分来进行支付。 </p>
                <p>3、优惠券仅限于租客在实际消费中使用。 
租客出于真实使用需求而租车时，可使用优惠券来抵现。如租客出于恶意刷单、优惠券变现等非实际消费目的，则优惠券
不可用于抵现。一经发现，该订单将列为异常订单，易路行租车将对车东申请提现的全部金额进行冻结，自冻结之日起15日
内，进行排查，根据最终排查结果，对于车东收入金额中使用优惠券部分的全部金额进行扣除，拒绝受理车东提现，对于
车东收入金额中未使用优惠券的金额，则允许车东按照要求提现。如果此后不再出现优惠券变现情况，则此后的提现申请
可以受理； 如果此后再次出现优惠券变现情况，易路行租车将拒绝车东提现，同时对该车辆下线处理。</p>
                <p>4、优惠券不兑换，不找零。 </p>
                <p>5、优惠券不与其他优惠活动同时使用。 </p>
                <p>6、优惠券仅限于有效期内使用，过期作废。 </p>
                <p>7、如需开发票，则发票金额中不包含使用优惠券部分的全部金额。</p>
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