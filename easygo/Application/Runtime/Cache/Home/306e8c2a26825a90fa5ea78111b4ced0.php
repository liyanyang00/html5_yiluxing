<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>易路行</title>
<link href="/easygo/easygo2/easygo/Public/Home/css/public.css" rel="stylesheet" type="text/css" />
<link href="/easygo/easygo2/easygo/Public/Home/css/person.css" rel="stylesheet" type="text/css" />
<link href="/easygo/easygo2/easygo/Public/Home/css/page.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="header">
	<div class="mybody">
    	<div class="logo"><a href="<?php echo U('Rent/index');?>"><img src="/easygo/easygo2/easygo/Public/Home/images/logo.jpg" alt="logo" /></a></div>
			<ul class="nav">
                <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                <li><a href="<?php echo U('Rent/index');?>">自驾租车</a></li>
                <li><a href="<?php echo U('Issue/index');?>">信息发布</a></li>
                <li><a href="<?php echo U('Special/index');?>">优惠活动</a></li>
                <li><a href="<?php echo U('Help/index');?>" target="_blank">帮助中心</a></li>
                <li><a href="<?php echo U('Message/index');?>">留言板</a></li>
      		</ul>
            
			<div class="top-right2">
				<div>
					<ul>
                        <li><p>您好！&nbsp;<?php echo ($user['user_name']); ?>&nbsp;&nbsp;&nbsp;<img src="/easygo/easygo2/easygo/Public/Home/images/down.gif" alt="" /></p>
                            <div id="children">
                                <div class="arrow"></div>
                                <ul class="child">
                                    <li id="xu"><a href="<?php echo U('Indent/rentItem');?>" target="_blank">我的订单</a></li>
                                    <li id="xu"><a href="<?php echo U('Indent/discount');?>" target="_blank">我的资产</a></li>
                                    <li id="xu"><a href="<?php echo U('Indent/personal');?>" target="_blank">我的账户</a></li>
                                    <li><a href="/easygo/easygo2/easygo/index.php/Home/user/logout">退出登录</a></li>
                                </ul>
                            </div>
                        </li>
					</ul>
				</div>
			</div>
		</div>
    </div>
</div>

<div class="content">
	<div class="mybody">
       <div class="left">
       		<div class="person">
            	<div class="person_head">
                	<img src="/easygo/easygo2/easygo/Public/Home/images/user.jpg" class="head_img" width="113" height="113" alt="" />
                    <p><?php echo ($user['user_name']); ?><img src="/easygo/easygo2/easygo/Public/Home/images/card.gif" alt="" /></p>
                    <div class="left_1">
                    	<a href="<?php echo U('Indent/rentItem');?>">
                    	<h4><span><?php echo ($count1); ?></span>单</h4>
                        <h4>未完成订单</h4></a>
                    </div>
                    <div class="left_2">
                    	<a href="<?php echo U('Indent/discount');?>">
                    	<h4><span>3</span>张</h4>
                        <h4>优惠券</h4></a>
                    </div>
                </div>
            </div>
            <div class="left_nav">
            	<h1>我的订单</h1>
                <a href="<?php echo U('Indent/rentItem');?>" class="person_now">租车订单(<?php echo ($count); ?>)</a>
                <a href="<?php echo U('Indent/shareItem');?>">出租订单(<?php echo ($count2); ?>)</a>
                <h1>我的资产</h1>
                <a href="<?php echo U('Indent/discount');?>">优惠券(1张)</a>
                <a href="<?php echo U('Indent/bankCard');?>">银行卡(1张)</a>
                <h1>我的账户</h1>
                <a href="<?php echo U('Indent/personal');?>">个人信息</a>
                <a href="<?php echo U('Indent/alterPwd');?>">修改密码</a>
                <a href="<?php echo U('Indent/myCars');?>">我的座驾</a>
                <h1>我的会员</h1>
                <a href="<?php echo U('Indent/vipLevel');?>">会员等级</a>
                <a href="<?php echo U('Indent/vipSystem');?>">会员制度</a>
            </div>
       </div>
       
       <div class="right">
       		<div class="order">
            	<h1>租车订单</h1>
                <form method="get" action="/easygo/easygo2/easygo/index.php/Home/Indent/queryrent">
                	<input type="date" name="date" />
                    <input type="submit" value="查&nbsp;询" />
                </form>
                <div class="tab">
                	<a href="#" class="tabnow">全部</a>
                    <a href="#">付款中</a>
                    <a href="#">预定成功</a>
                    <a href="#">租赁中</a>
                    <a href="#">已完成</a>
                    <a href="#">已取消</a>
                </div>
                <table cellspacing="0">
                	<tr>
                    	<th style="width:170px;">车辆信息</th>
                        <th style="width:240px;">&nbsp;</th>
                        <th style="width:140px;">借还时间</th>
                        <th style="width:140px;">总价</th>
                        <th style="width:140px;">订单状态</th>
                    </tr>
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$e): $mod = ($i % 2 );++$i; $a = $e['inf_carphoto']; $arr = explode(",",$a); ?>
                    	 <tr>
                    	<td style="height:118px;">
                        	<img src="/easygo/easygo2/easygo/Public{arr[0]}" width="160" height="100" alt="" />  
                        </td>
                        <td>
                        	<h5><?php echo ($e["inf_type"]); ?></h5>
                            <p class="p"><?php echo ($e["inf_gearbox"]); ?>/乘坐<?php echo ($e["inf_chair"]); ?>人</p>
                            <p class="p">订单号：<?php echo ($e["ind_id"]); ?></p></td>
                        <td>
                        	<p><?php echo ($e["ind_startdate"]); ?></p>
                            <p>至</p>
                            <p><?php echo ($e["ind_enddate"]); ?></p>
                        </td>
                        <td><h4>￥<?php echo ($e["ind_currentprice"]); ?>元</h4></td>
                        <td>
                        	<p class="arr2"><?php echo ($e["ind_state"]); ?></p>
                            <p><a href="<?php echo U('Indent/rentDetail');?>/ind_id/<?php echo ($e["ind_id"]); ?>">查看</a></p>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    
                    <tr>
                    	<td colspan="5" style="text-align:center;height:100px;border:0;">
                        	<div class="pagination" class="page" id="page"><?php echo ($page); ?></div>
                        </td>
                    </tr>
                </table>
            </div>
            
            <div class="arr">
            	<h1>订单状态介绍</h1>
                <div class="arr_1">
                	<p class="arr1">预约成功</p>
                    <p>订单确认，请与车主联系取车</p>
                </div>
                <div class="arr_2">
                	<p class="arr2">付款中</p>
                    <p>订单生成，请1小时内完成付款</p>
                </div>
                <div class="arr_3">
                	<p class="arr3">租赁中</p>
                    <p>车辆正在租赁过程中</p>
                </div>
                <div class="arr_4">
                	<p class="arr4">待评价</p>
                    <p>订单完成48小时内，对车主及车辆完成评价</p>
                </div>
                <div class="arr_5">
                	<p class="arr5">已完成</p>
                    <p>已还车，订单结算完毕</p>
                </div>
                <div class="arr_6">
                	<p class="arr6">已取消</p>
                    <p>订单已取消，交易结束</p>
                </div>
            </div>
            
            <div class="text">
            	<h1>注意事项</h1>
                <div class="write">
                	1.订单确认
                    <p>驾客根据订单流程，提供银行付款预授权，即认定为订单确认。</p>
                    <p>订单一旦确认，相关预定规则不可更改。</p>
                    <p>订单确认后，由于车东或驾客个人原因导致订单不能履行的情况，易路行不承担任何责任。</p>
                    2.订单取消
                    <p>若驾客/车东在早于行程开始前24小时的时段内取消预订，取消方应支付违约金，违约金的数额为交易费用的20%，同时，向易路行平台交纳保险费（如已发生）。</p>
                    <p>在车东接受预订请求后，驾客/车东在晚于行程开始前24小时的时段内取消预订，取消方应支付违约金，违约金的数额为交易费用的100%，同时，向易路行平台交纳保险费（如已发生）。若行程已开始，取消方应支付违约金，违约金的数额为交易费用的100%。</p>
                </div>
            </div>
       </div>
    </div>  
</div>

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
			<img src="/easygo/easygo2/easygo/Public/Home/images/QRcode.jpg" width="99px" height="99px"/>
			<h4>关注微信公众号</h4>
		</div>
    <p>Copyright©2017-2019 www.jumao.com All Rights Reserved.　易路行官网 京ICP备10005000号 京公网安备号 11010502026705</p>
    </div>
</div>
</body>
	
<script src="/easygo/easygo2/easygo/Public/Home/js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
/*页头下拉菜单*/
		$(document).ready(function($) {
			$("li").hover(function() {
    		$(this).children('#children').css('display', 'block');
			}, function() {
   			$(this).children('#children').css('display', 'none');
			});
		});
</script>
</html>