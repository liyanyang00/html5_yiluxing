<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>易路行</title>
<link href="/easygo/easygo/Public/Home/css/public.css" rel="stylesheet" type="text/css" />
<link href="/easygo/easygo/Public/Home/css/person.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="header">
	<div class="mybody">
    	<div class="logo"><a href="<?php echo U('Rent/index');?>"><img src="/easygo/easygo/Public/Home/images/logo.jpg" alt="logo" /></a></div>
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
                        <li><p>您好！&nbsp;<?php echo ($user['user_name']); ?>&nbsp;&nbsp;&nbsp;<img src="/easygo/easygo/Public/Home/images/down.gif" alt="" /></p>
                            <div id="children">
                                <div class="arrow"></div>
                                <ul class="child">
                                    <li id="xu"><a href="<?php echo U('Indent/rentItem');?>" target="_blank">我的订单</a></li>
                                    <li id="xu"><a href="<?php echo U('Indent/discount');?>" target="_blank">我的资产</a></li>
                                    <li id="xu"><a href="<?php echo U('Indent/personal');?>" target="_blank">我的账户</a></li>
                                    <li><a href="/easygo/easygo/index.php/Home/user/logout">退出登录</a></li>
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
                	<img src="/easygo/easygo/Public/<?php echo ($user["user_head"]); ?>" class="head_img" width="113" height="113" alt="" />
                    <p><?php echo ($user['user_name']); ?><img src="/easygo/easygo/Public/Home/images/card.gif" alt="" /></p>
                    <div class="left_1">
                    	<a href="<?php echo U('Indent/rentItem');?>">
                    	<h4><span><?php echo ($count1); ?></span>单</h4>
                        <h4>未完成订单</h4></a>
                    </div>
                    <div class="left_2">
                    	<a href="<?php echo U('Indent/discount');?>">
                    	<h4><span><?php echo ($discount); ?></span>张</h4>
                        <h4>优惠券</h4></a>
                    </div>
                </div>
            </div>
            <div class="left_nav">
            	<h1>我的订单</h1>
                <a href="<?php echo U('Indent/rentItem');?>">租车订单(<?php echo ($count); ?>)</a>
                <a href="<?php echo U('Indent/shareItem');?>" class="person_now">出租订单(<?php echo ($count2); ?>)</a>
                <h1>我的资产</h1>
                <a href="<?php echo U('Indent/discount');?>">优惠券</a>
                <a href="<?php echo U('Indent/bankCard');?>">银行卡</a>
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
            	<h1>订单详情</h1>
                <div class="detail">
                	<p><span class="detail1"><?php echo ($data['ind_state']); ?></span>&nbsp;&nbsp;<span class="detail2">订单总价：</span><span class="detail3">￥</span><span class="detail4"><?php echo ($data['ind_originalprice']); ?></span></p>
                	<?php
 $result = M('indent')->join("usertab on usertab.user_id = indent.ind_user_id")->where("ind_user_id=".$data['ind_user_id'])->find(); ?>
                    <p style="border-top:1px solid #e3e4e6;">订单号：<?php echo ($data['ind_id']); ?>&nbsp;&nbsp;租车人：<?php echo ($result['user_name']); ?>&nbsp;&nbsp;租期：<?php echo ($data['ind_day']); ?>天&nbsp;&nbsp;车主：<?php echo ($user['user_name']); ?>&nbsp;&nbsp;租车人联系方式：<?php echo ($result['user_telephone']); ?></p>
                </div>
                <table cellspacing="0">
                	<tr>
                    	<th style="width:170px;">车辆信息</th>
                        <th style="width:240px;">&nbsp;</th>
                        <th style="width:240px;">借还时间</th>
                        <th style="width:240px;">总价</th>
                    </tr>

                    <tr>
                    <?php
 $a = $data['inf_carphoto']; $arr = explode(",",$a); ?>

                    	<td style="height:118px;">
                        	<img src="/easygo/easygo/Public/<?php echo ($arr[0]); ?>" width="160" height="100" alt="" />  
                        </td>
                        <td>
                        	<h5><?php echo ($data['inf_type']); ?></h5>
                            <p class="p"><?php echo ($data['inf_gearbox']); ?>/<?php echo ($data['inf_displacement']); ?>/<?php echo ($data['inf_chair']); ?></p>
                            <p class="p">订单号：<?php echo ($data['ind_id']); ?></p></td>
                        <td>
                        	<p><?php echo ($data['ind_startdate']); ?></p>
                            <p>至</p>
                            <p><?php echo ($data['ind_enddate']); ?></p>
                        </td>
                        <td><h4>￥<?php echo ($data['ind_originalprice']); ?>元</h4></td>
                    </tr>
                </table>
                <div class="cost">
                	<h1>您的收益</h1>
                    <p>车辆租赁费用<span>+天数：<?php echo ($data['ind_day']); ?>=<span>￥<?php echo ($data['ind_originalprice']); ?></span></span></p>

                    <p><span>合计收益：<span><?php echo ($data['ind_originalprice']); ?>元</span></span></p>

                    <?php
 $indId = $_GET['ind_id']; if($data['ind_state'] == "已完成"&&$data['inf_carstate'] == "已归还"){ echo"<a href='/easygo/easygo/index.php/Home/Indent/get/ind_id/".$indId."' class='pay'>领取收益</a>"; echo" <p class='tip'>（注：订单完成之后才可领取收益哦！）</p>"; } ?>
                   
                </div>
                <div class="configure">
                	<h1>配置信息</h1>
                    <p><img src="/easygo/easygo/Public/Home/images/zws.gif" width="20" height="20" alt="" />座位数：<span>5</span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/cm.gif" width="20" height="20" alt="" />车门数：<span>4</span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/ld.gif" width="20" height="20" alt="" />倒车雷达：<span>有</span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/rl.gif" width="20" height="20" alt="" />燃料类型：<span>汽油</span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/bs.gif" width="20" height="20" alt="" />变速箱类型：<span>AT</span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/dvd.gif" width="20" height="20" alt="" />DVD/CD：<span>CD</span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/pl.gif" width="20" height="20" alt="" />排量：<span>1598</span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/ry.gif" width="20" height="20" alt="" />燃油标号：<span>92-93汽油</span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/qn.gif" width="20" height="20" alt="" />气囊：<span>4</span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/qd.gif" width="20" height="20" alt="" />驱动方式：<span>前驱</span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/fdj.gif" width="20" height="20" alt="" />发动机进气形式：<span>自然吸气</span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/dh.gif" width="20" height="20" alt="" />GPS导航：<span>有</span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/tc.gif" width="20" height="20" alt="" />天窗：<span>单天窗</span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/cm.gif" width="20" height="20" alt="" />油箱容量：<span>60</span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/yx1.gif" width="20" height="20" alt="" />音箱：<span>6</span></p>
                    <p><img src="/easygo/easygo/Public/Home/images/zy.gif" width="20" height="20" alt="" />真皮座椅：<span>有</span></p>
                </div>
            </div>

            <div class="text">
            	<h1>注意事项</h1>
                <div class="write">
                    <p>1.取车时，请检查租车人以下证件的原件：本人二代身份证、本人国内有效驾驶证正副本、本人一张信用及可用额度均不低于3000元的国内有效信用卡，所有证件有效期须至少超过当次租期的一个月以上。</p>
                    <p>2.请您准时送车，超时送车造成的一切损失由车主承担。</p>
                    <p>3.车辆归还之后请仔细检查车辆有无破损以及其他问题，如有请及时与租客沟通，订单结束之后发现的损失由车主承担。</p>
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
</script>
</html>