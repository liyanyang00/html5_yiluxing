<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>易路行</title>
<link href="/easygo/Public/Home/css/public.css" rel="stylesheet" type="text/css" />
<link href="/easygo/Public/Home/css/message.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="header">
	<div class="mybody">
    	<div class="logo"><a href="<?php echo U('Index/index');?>"><img src="/easygo/Public/Home/images/logo.jpg" alt="logo" /></a></div>
			<ul class="nav">
                <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                <li><a href="<?php echo U('Rent/index');?>">自驾租车</a></li>
                <li class="navnow"><a href="<?php echo U('Issue/index');?>">信息发布</a></li>
                <li><a href="<?php echo U('Special/index');?>">优惠活动</a></li>
                <li><a href="<?php echo U('Help/index');?>" target="_blank">帮助中心</a></li>
                <li><a href="<?php echo U('Message/index');?>">留言板</a></li>
      		</ul>
            
			<div class="top-right2">
				<div>
					<ul>
                        <li><p>您好！&nbsp;<?php echo ($user['user_name']); ?>&nbsp;&nbsp;&nbsp;<img src="/easygo/Public/Home/images/down.gif" alt="" /></p>
                            <div id="children">
                                <div class="arrow"></div>
                                <ul class="child">
                                    <li id="xu"><a href="<?php echo U('Indent/rentItem');?>" target="_blank">我的订单</a></li>
                                    <li id="xu"><a href="<?php echo U('Indent/discount');?>" target="_blank">我的资产</a></li>
                                    <li id="xu"><a href="<?php echo U('Indent/personal');?>" target="_blank">我的账户</a></li>
                                    <li><a href="/easygo/index.php/Home/user/logout">退出登录</a></li>
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
       <div class="bread">
       		<p>当前位置：<a href="<?php echo U('Index/index');?>">易路行</a> > <a href="信息发布.html">信息发布</a></p>
       </div>
       <div class="bg">
       		<table class="me_table">
            <form method="post" action="/easygo/index.php/Home/Issue/submit">
            	<tr>
                	<th>请选择要出租的车辆：</th>
                    <td>
                    	<select name="type">
                        <?php
 $Model = M('information'); $where = array( 'inf_user_id' => $_SESSION['id'], 'inf_state' => '已通过' ); $result = $Model->where($where)->select(); foreach ($result as $key => $value) { echo "<option>".$value['inf_type']."</option>"; } ?>
                        </select>
                    </td>
                    <td><span>&nbsp;&nbsp;*&nbsp;&nbsp;</span>没有车辆？点此&nbsp;<a href="addInf.html" style="color:#fb6d00;">添加车辆</a></td>
                </tr>
                <tr>
                	<th>请选择出租时间：</th>
                    <td>
                    	<input type="date" name="startdate"/>
                    </td>
                    <td>&nbsp;&nbsp;至<input type="date" name="enddate"/><span>&nbsp;&nbsp;*</span></td>
                </tr>
                <tr>
                	<th>联系电话：</th>
                    <td>
                    	<input type="text" name="telephone"/>
                    </td>
                    <td><span>&nbsp;&nbsp;*</span></td>
                </tr>
                <tr>
                	<th>QQ：</th>
                    <td>
                    	<input type="text" name="qq"/>
                    </td>
                    <td><span>&nbsp;</span></td>
                </tr>
                <tr>
                	<th>&nbsp;</th>
                    <td>&nbsp;</td>
                    <td><input type="submit" value="提交信息" /></td>
                </tr>
                </form>
            </table>
       </div>
       <div class="bg" style="margin-top:-26px;">
       		<h1>注意事项</h1>
            <div class="message_text">
            	<p>1.驾客在返还车辆时，车东应及时对出租车辆使用情况进行检验，检验项目包括： 是否有划痕，剐蹭；车辆零部件是否缺失或者损坏。</p>
                <p>2.租客在取车时，车东切勿提供行驶本原件及复印件，租客在租期内因无法提供行驶本造成的罚款及罚分处罚由易路行承担。</p>
                <p>3.车东必须确保在驾客取得车辆使用权之前没有遗留任何私人物品在车中 , 否则物品的丢失、毁损责任由车东自己承担。</p>
                <p>4.驾客根据订单前往指定地点取车时，车东应审查当事人的驾照，核实前来取车的当事人是否为预定署名的驾客本人，如果车东有理由认为驾客不适宜开车、不具备驾驶资格，车东
有权保留对车辆的控制权并取消预订，此种情况下车东不承担违约责任。因车东明显过失，导致不合格的驾客驾驶车辆，因此导致的任何事故、风险，车东应按照相关法律的规定承担连
带赔偿责任，与易路行无关。</p>
            </div>
       </div>
    </div>  
</div>

<div class="footer">
	<div class="mybody">
    	<div class="bottom-ul">
			<ul>
				<li class="bottom-aa">新手上路</li>
				<li><a href="法律解读.html" target="_blank">法律解读</a></li>
				<li><a href="押金政策.html" target="_blank">押金政策</a></li>
				<li><a href="保险条款.html" target="_blank">保险条款</a></li>
			</ul>

			<ul>
				<li class="bottom-aa">服务规则</li>
				<li><a href="服务条款.html" target="_blank">服务条款</a></li>
				<li><a href="驾客协议.html" target="_blank">驾客协议</a></li>
				<li><a href="车东协议.html" target="_blank">车东协议</a></li>
				<li><a href="平台规则.html" target="_blank">平台规则</a></li>
			</ul>

			<ul>
				<li class="bottom-aa">帮助中心</li>
				<li><a href="预定取车.html" target="_blank">预定取车</a></li>
				<li><a href="我要出租.html" target="_blank">我要出租</a></li>
				<li><a href="会员服务.html" target="_blank">会员服务</a></li>
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
	
<script src="/easygo/Public/Home/js/jquery-1.11.0.min.js" type="text/javascript"></script>
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