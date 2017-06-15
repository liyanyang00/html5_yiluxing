<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>易路行</title>
<link href="/easygo/easygo/Public/Home/css/public.css" rel="stylesheet" type="text/css" />
<link href="/easygo/easygo/Public/Home/css/person.css" rel="stylesheet" type="text/css" />
<link href="/easygo/easygo/Public/Home/css/lend.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="header">
	<div class="mybody">
    	<div class="logo"><a href="<?php echo U('Index/index');?>"><img src="/easygo/easygo/Public/Home/images/logo.jpg" alt="logo" /></a></div>
			<ul class="nav">
                <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                <li class="navnow"><a href="<?php echo U('Rent/index');?>">自驾租车</a></li>
                <li><a href="<?php echo U('Issue/index');?>">信息发布</a></li>
                <li><a href="<?php echo U('Special/index');?>">优惠活动</a></li>
                <li><a href="<?php echo U('Help/index');?>" target="_blank">帮助中心</a></li>
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


<div class="content" name="ind">
	<div class="mybody">
       		<div class="order">
            	<h1>生成订单</h1>
                <div class="form">
                	<table cellspacing="0" class="table">
                <form method="post" action="/easygo/easygo/index.php/Home/Rent/sure">
                	
                    <input type="text" name="indId" value="<?php echo ($_GET['ind_id']); ?>" style="display:none">
                    <tr>
                    	<th width="100px" style="text-align:right">
                        	联系方式：
                        </th>
                        <td width="200px">
                        	<input type="text" placeholder="请输入手机号" />
                        </td>
                        <td width="400px">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                    	<th style="text-align:right">
                        	短信验证码：
                        </th>
                        <td>
                        	<input type="text" />
                        </td>
                        <td><input type="button" value="获取短信验证码" id="btn" onclick="settime(this)" /></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                    	<td>&nbsp;</td>
                    	<td style="text-align:center;height:100px;">
                        	<input type="submit" value="确认信息" />
                        </td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    </form>
                </table>
                </div>
                <table cellspacing="0">
                	<tr>
                    	<th style="width:200px;">车辆信息</th>
                        <th style="width:240px;">&nbsp;</th>
                        <th>日租价</th>
                        <th>周租价</th>
                        <th>月租价</th>
                        <th style="width:140px">是否活动</th>
                    </tr>
                    <tr>
                    	<td style="height:118px;">
                    	<?php
 $a = $ind['inf_carphoto']; $arr = explode(",",$a); ?>
                        	<img src="/easygo/easygo/Public<?php echo ($arr[0]); ?>" width="160" height="100" alt="" />  
                        </td>
                        <td>
                        	<h5><?php echo ($ind["inf_type"]); ?></h5>
                            <p class="p"><?php echo ($ind["inf_gearbox"]); ?>/<?php echo ($ind["inf_displacement"]); ?>/乘坐<?php echo ($ind["inf_chair"]); ?>人</p></td>
                        
                    	<td><p>￥<?php echo ($ind["inf_dayprice"]); ?>元/天</p></td>
                        <td><p>￥<?php echo ($ind["inf_weekprice"]); ?>元/周</p></td>
                        <td><p>￥<?php echo ($ind["inf_monthprice"]); ?>元/月</p></td>
                        <td><p><?php echo ($ind["inf_add"]); ?></p></td>
                    </tr>
                </table>
                <div class="configure">
                	<h1>配置信息</h1>
                    <p><img src="/easygo/easygo/Public/Home/images/zws.gif" width="20" height="20" alt="" />座位数：<span><?php echo ($ind["inf_chair"]); ?></span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/cm.gif" width="20" height="20" alt="" />车门数：<span>4</span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/ld.gif" width="20" height="20" alt="" />倒车雷达：<span><?php echo ($ind["inf_camera"]); ?></span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/rl.gif" width="20" height="20" alt="" />燃料类型：<span><?php echo ($ind["inf_fueltype"]); ?></span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/bs.gif" width="20" height="20" alt="" />变速箱类型：<span><?php echo ($ind["inf_gear"]); ?></span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/dvd.gif" width="20" height="20" alt="" />DVD/CD：<span><?php echo ($ind["inf_dvd"]); ?></span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/pl.gif" width="20" height="20" alt="" />排量：<span><?php echo ($ind["inf_displacement"]); ?></span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/ry.gif" width="20" height="20" alt="" />燃油标号：<span><?php echo ($ind["inf_fuelnum"]); ?></span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/qn.gif" width="20" height="20" alt="" />气囊：<span><?php echo ($ind["inf_gasbag"]); ?></span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/qd.gif" width="20" height="20" alt="" />驱动方式：<span><?php echo ($ind["inf_drivemanner"]); ?></span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/fdj.gif" width="20" height="20" alt="" />发动机进气形式：<span>自然吸气</span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/dh.gif" width="20" height="20" alt="" />GPS导航：<span><?php echo ($ind["inf_gps"]); ?></span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/tc.gif" width="20" height="20" alt="" />天窗：<span><?php echo ($ind["inf_window"]); ?></span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/cm.gif" width="20" height="20" alt="" />油箱容量：<span>60</span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/yx1.gif" width="20" height="20" alt="" />音箱：<span><?php echo ($ind["inf_sound"]); ?></span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/zy.gif" width="20" height="20" alt="" />真皮座椅：<span><?php echo ($ind["inf_leather"]); ?></span></p>
                </div>
            </div>

            <div class="text">
            	<h1>注意事项</h1>
                <div class="write">
                    <p>1.取车时，请出示以下证件的原件：本人二代身份证、本人国内有效驾驶证正副本、本人一张信用及可用额度均不低于3000元的国内有效信用卡，所有证件有效期须至少超过当次租期的一个月以上。由车主自行核实。</p>
                    <p>2.请您准时取车，超时取车起租时间按预定取车时间起算。</p>
                    <p>3.车辆押金由还车后车主检查车辆完毕确认后退还。</p>
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
			<img src="/easygo/easygo/Public/Home/images/QRcode.jpg" width="99px" height="99px"/>
			<h4>关注微信公众号</h4>
		</div>
    <p>Copyright©2017-2019 www.jumao.com All Rights Reserved.　易路行官网 京ICP备10005000号 京公网安备号 11010502026705</p>
    </div>
</div>
</body>
	
<script src="/easygo/easygo/Public/Home/js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
/*页头下拉菜单*/
		$(document).ready(function($) {
			$("li").hover(function() {
    		$(this).children('#children').css('display', 'block');
			}, function() {
   			$(this).children('#children').css('display', 'none');
			});
		});
var countdown=60; 
function settime(val) { 
if (countdown == 0) { 
val.removeAttribute("disabled");    
val.value="免费获取验证码"; 
countdown = 60; 
} else { 
val.setAttribute("disabled", true); 
val.value="重新发送(" + countdown + ")"; 
countdown--; 
} 
setTimeout(function() { 
settime(val) 
},1000) 
}  
</script>
</html>