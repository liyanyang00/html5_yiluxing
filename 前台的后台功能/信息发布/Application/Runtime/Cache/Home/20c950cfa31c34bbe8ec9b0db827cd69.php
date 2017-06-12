<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>易路行</title>
<link href="/easygo/Public/Home/css/public.css" rel="stylesheet" type="text/css" />
<link href="/easygo/Public/Home/css/message.css" rel="stylesheet" type="text/css" />
<link href="/easygo/Public/Home/css/index4.css" rel="stylesheet" type="text/css" />

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
       		<p>当前位置：<a href="<?php echo U('Index/index');?>">易路行</a> > <a href="添加座驾1.html">添加座驾</a> - <a href="添加座驾3.html">完善信息</a></p>
       </div>
       <div class="add_bg">
       		<div class="partt part1">
            	<div class="cir2">1</div>&nbsp;&nbsp;提交信息
            </div>
            <div class="partt part2">
            	<div class="cir2">2</div>&nbsp;&nbsp;认证身份
            </div>
            <div class="part part3">
            	<div class="cir1">3</div>&nbsp;&nbsp;完善信息
            </div>
            <div class="partt part4">
            	<div class="cir2">4</div>&nbsp;&nbsp;信息审核
            </div>
       </div>
       <div class="left">
       		<table>
            <form method="post" action="/easygo/index.php/Home/Issue/addDetail" enctype="multipart/form-data" name="form1">
            <input name="inf_id" type="text" value="<?php echo ($_GET['inf_id']); ?>" style="display:none"/>
            	<tr>
                    <th style="width:90px">颜色</th>
                    <td><input type="text" name="color"/>&nbsp;&nbsp;<span class="red">*</span></td>
                    <th style="width:100px">车门数</th>
                    <td><input type="text" name="doors"/>&nbsp;&nbsp;<span class="red">*</span></td>
                </tr>
                <tr>
                    <th>燃料类型</th>
                    <td><select name="province" onChange="getCity()" class="select">  
                            <option value="0">请选择燃料</option> 
                            <option value="汽油">汽油</option>
                            <option value="柴油">柴油</option>
                            <option value="车用天然气">车用天然气</option>
                            <option value="液化石油气">液化石油气</option>
                            <option value="醇类燃料">醇类燃料</option>
                        </select>&nbsp;&nbsp;<span class="red">*</span>
                        </td>
                    <th>燃油标号</th>
                    <td><select name="city" class="select">
                            <option>可选择</option>
                        </select>&nbsp;&nbsp;<span class="red">*</span>
                        </td>
                </tr>
                <tr>
                    <th>驱动方式</th>
                    <td><select class="select" name="drive">
                            <option>前置后驱</option>
                            <option  selected = "selected" >前置前驱</option>
                            <option>后置后驱</option>
                            <option>中置后驱</option>
                            <option>四轮驱动</option>
                        </select>&nbsp;&nbsp;<span class="red">*</span>
                        </td>
                    <th>发动机进气形式</th>
                    <td><select class="select" name="intake">
                            <option>自然吸气</option>
                            <option>机械增压</option>
                            <option>涡轮增压</option>
                        </select>&nbsp;&nbsp;<span class="red">*</span>
                        </td>
                </tr>
                <tr>
                    <th>天窗</th>
                    <td><select class="select" name="window">
                            <option>单天窗</option>
                            <option>双天窗</option>
                        </select></td>
                    <th>油箱容量</th>
                    <td><select class="select" name="tank">
                            <option>40</option>
                            <option  selected = "selected" >60</option>
                            <option>80</option>
                            <option>100</option>
                        </select>&nbsp;&nbsp;<span class="red">*</span></td>
                </tr>
                <tr>
                    <th>音箱</th>
                    <td><select class="select" name="sound">
                            <option>请选择</option>
                            <option>有</option>
                            <option>无</option>
                        </select></td>
                    <th>真皮座椅</th>
                    <td><select class="select" name="leather">
                            <option>请选择</option>
                            <option>有</option>
                            <option>无</option>
                        </select></td>
                </tr>
                <tr>
                    <th>倒车雷达</th>
                    <td><select class="select" name="camera">
                            <option>请选择</option>
                            <option>有</option>
                            <option>无</option>
                        </select></td>
                        <th>气囊数量</th>
                    <td><select class="select" name="gasbag">
                            <option>6</option>
                            <option>8</option>
                            <option>10</option>
                        </select></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>DVD/VCD</th>
                    <td><select class="select" name="dvd">
                            <option>请选择</option>
                            <option>有</option>
                            <option>无</option>
                        </select></td>
                    <th>GPS导航</th>
                    <td><select class="select" name="gps">
                            <option>请选择</option>
                            <option>有</option>
                            <option>无</option>
                        </select></td>
                </tr>
                <tr>
                    <th>可抽烟</th>
                    <td><select class="select" name="smoke">
                            <option>是</option>
                            <option  selected = "selected" >否</option>
                        </select>&nbsp;&nbsp;<span class="red">*</span></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>车主描述</th>
                    <td colspan="3" rowspan="2"><textarea name="introduce"></textarea></td>
                </tr>
                <tr>
                    <th>&nbsp;</th>
                </tr>
                <tr>
                    <th>添加图片</th>
                    <td colspan="3" rowspan="3">
                        <!-- <div class="img" style="margin-bottom:10px">
                                <div class="file-box"> 
                                     <img src="/easygo/Public/Home/images/img_add.jpg" class="img" width="205" height="120" />
                                     <input type="file" name="fileField" class="file1" id="fileField" size="28" onchange="document.getElementById('textfield').value=this.value" accept="image/jpeg,image/gif,image/png"/><br />
                                </div>
                        </div> -->

                        <div class="z_photo upimg-div clear" >               
                         <section class="z_file fl">
                            <img src="/easygo/Public/Home/images/add_card.jpg" width="205" height="120" class="add-img">
                            <input type="file" name="file" id="file" class="file" value="" accept="image/jpg,image/jpeg,image/png,image/bmp" multiple />
                         </section>


                    </div>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th colspan="3"><input type="submit" value="提交信息" /></td>
                </tr>
            </form>
            </table>
       </div>

        <aside class="mask works-mask">
            <div class="mask-content">
                <p class="del-p ">您确定要删除作品图片吗？</p>
                <p class="check-p"><span class="del-com wsdel-ok">确定</span><span class="wsdel-no">取消</span></p>
            </div>
        </aside>
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
<script type="text/javascript" src="/easygo/Public/Home/js/oil.js"></script>
<script src="/easygo/Public/Home/js/imgUp.js" type="text/javascript"></script>
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