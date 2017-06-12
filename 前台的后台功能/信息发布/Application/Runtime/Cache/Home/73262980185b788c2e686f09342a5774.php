<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>易路行</title>
<link href="/easygo/Public/Home/css/public.css" rel="stylesheet" type="text/css" />
<link href="/easygo/Public/Home/css/message.css" rel="stylesheet" type="text/css" />
<link href="/easygo/Public/Home/css/select2.css" rel="stylesheet" type="text/css"/>
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
</div>

<div class="content">
	<div class="mybody">
       <div class="bread">
       		<p>当前位置：<a href="<?php echo U('Index/index');?>">易路行</a> > <a href="添加座驾1.html">添加座驾</a> - <a href="添加座驾1.html">提交信息</a></p>
       </div>
       <div class="add_bg">
       		<div class="part part1">
            	<div class="cir1">1</div>&nbsp;&nbsp;提交信息
            </div>
            <div class="partt part2">
            	<div class="cir2">2</div>&nbsp;&nbsp;认证身份
            </div>
            <div class="partt part3">
            	<div class="cir2">3</div>&nbsp;&nbsp;完善信息
            </div>
            <div class="partt part4">
            	<div class="cir2">4</div>&nbsp;&nbsp;信息审核
            </div>
       </div>
       <div class="left">
       		<table>
            <form method="post" action="/easygo/index.php/Home/Issue/add" name="form1">               
            	<tr>
                    <th style="width:90px">车辆牌照号</th>
                    <td><input type="text" name="carNumber"/>&nbsp;&nbsp;<span class="red">*</span></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>所在城市</th>
                    <td>
                        <select name="province" onChange="getCity()" class="sheng">  
                <option value="0">请选择省份</option> 
                <option value="北京市">北京市</option>  
                <option value="广东省">广东省</option> 
                <option value="山东省">江苏省</option>  
                <option value="江苏省">福建省</option>  
                <option value="河南省">河南省</option>    
                <option value="上海市">上海市</option> 
                <option value="河北省">河北省</option> 
                <option value="浙江省">浙江省</option> 
                <option value="香港特别行政区">香港特别行政区</option>
                <option value="陕西省">陕西省</option> 
                <option value="湖南省">湖南省</option> 
                <option value="重庆市">重庆市</option> 
                <option value="福建省">福建省</option>
                <option value="天津市">天津市</option> 
                <option value="云南省">云南省</option> 
                <option value="四川省">四川省</option> 
                <option value="广西壮族自治区">广西壮族自治区</option>
                <option value="安徽省">安徽省</option> 
                <option value="海南省">海南省</option> 
                <option value="江西省">江西省</option> 
                <option value="湖北省">湖北省</option>
                <option value="山西省">山西省</option> 
                <option value="辽宁省">辽宁省</option> 
                <option value="台湾省">台湾省</option> 
                <option value="黑龙江">黑龙江</option>
                <option value="内蒙古自治区">内蒙古自治区</option> 
                <option value="澳门特别行政区">澳门特别行政区</option> 
                <option value="贵州省">贵州省</option> 
                <option value="甘肃省">甘肃省</option>
                <option value="青海省">青海省</option> 
                <option value="新疆维吾尔自治区">新疆维吾尔自治区</option> 
                <option value="西藏自治区">西藏自治区</option> 
                <option value="吉林省">吉林省</option>
                <option value="宁夏回族自治区">宁夏回族自治区</option>
            </SELECT>    
            <SELECT NAME="city" class="sheng" style="margin-left:10px;">    
                <OPTION VALUE="0">请选择城市</OPTION>    
            </SELECT>&nbsp;&nbsp;<span class="red">*</span>
                        </td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>品牌车型</th>
                    <td>
                        <div class="main">
                            <select name="type" id="loc_brand" style="width:120px;" >
                            </select>
                            <select id="loc_car" style="width:120px; margin-left: 10px">
                            </select>
                            <select id="loc_models" style="width:120px;margin-left: 10px">
                            </select>
                        </div>
                    </td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>排量</th>
                    <td><input type="text" name="disPlacement"/></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>注册年份</th>
                    <td><select name="register">
                            <option>2000年</option>
                            <option>2001年</option>
                            <option>2002年</option>
                            <option>2003年</option>
                            <option>2004年</option>
                            <option>2005年</option>
                            <option>2006年</option>
                            <option>2007年</option>
                            <option>2008年</option>
                            <option>2009年</option>
                            <option  selected = "selected" >2010年</option>
                            <option>2011年</option>
                            <option>2012年</option>
                            <option>2013年</option>
                            <option>2014年</option>
                            <option>2015年</option>
                            <option>2016年</option>
                            <option>2017年</option>
                        </select>&nbsp;&nbsp;<span class="red">*</span></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>已行驶里程</th>
                    <td><input type="text" name="Journey"/>&nbsp;&nbsp;万公里&nbsp;&nbsp;<span class="red">*</span></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>变速箱</th>
                    <td><select name="gearbox">
                            <option>手动挡</option>
                            <option>自动挡</option>
                        </select>&nbsp;&nbsp;<span class="red">*</span></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>座位数</th>
                    <td><select name="chair">
                            <option>2座</option>
                            <option>4座</option>
                            <option  selected = "selected" >5座</option>
                            <option>7座</option>
                            <option>9座及以上</option>
                        </select>&nbsp;&nbsp;<span class="red">*</span></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>出租价</th>
                    <td><input type="text" class="text1" name="dayPrice"/>&nbsp;&nbsp;元/天<input type="text" class="text1" name="weekPrice"/>&nbsp;&nbsp;元/周<input type="text" class="text1" name="monthPrice"/>&nbsp;&nbsp;元/月&nbsp;&nbsp;<span class="red">*</span></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>&nbsp;</th>
                    <td><span class="span1">(注：推荐周租价为日租价的5倍，月租价为日租价的18倍)</span></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th colspan="3"><input type="submit" value="提交信息" /></td>
                </tr>
            </form>
            </table>
       </div>
       <div class="right">
       		<h1>什么样的车才可以发布？</h1>
            <ul>
            	<li>1.首次注册时间至今不超过10年</li>
                <li>2.行驶里程不超过30万公里</li>
                <li>3.有完备的证件和缴纳交强险</li>
                <li>4.正常保养，车辆清洁</li>
                <li>5.核心部件没有受过重大损伤</li>
            </ul>
            <h1>上线之前应该完善哪些信息</h1>
            <ul>
            	<li>1.座驾的图片，至少需要封面图</li>
                <li>2.座驾的位置，座驾在哪里交车</li>
                <li>3.座驾的证件，行驶证，交强险</li>
                <li>4.座驾的租价，每天租用多少钱</li>
                <li>5.座驾的描述，座驾介绍和特色</li>
            </ul>
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

<script type="text/javascript" src="/easygo/Public/Home/js/city.js"></script>
<script type="text/javascript" src="/easygo/Public/Home/js/car.js"></script>
<script type="text/javascript" src="/easygo/Public/Home/js/select2.js"></script>
<script type="text/javascript" src="/easygo/Public/Home/js/select2_locale_zh-CN.js"></script>
<script type="text/javascript" src="/easygo/Public/Home/js/area-1.js"></script>
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