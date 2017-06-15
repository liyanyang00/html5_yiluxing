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
                <a href="<?php echo U('Indent/shareItem');?>">出租订单(<?php echo ($count2); ?>)</a>
                <h1>我的资产</h1>
                <a href="<?php echo U('Indent/discount');?>">优惠券</a>
                <a href="<?php echo U('Indent/bankCard');?>">银行卡</a>
                <h1>我的账户</h1>
                <a href="<?php echo U('Indent/personal');?>" class="person_now">个人信息</a>
                <a href="<?php echo U('Indent/alterPwd');?>">修改密码</a>
                <a href="<?php echo U('Indent/myCars');?>">我的座驾</a>
                <h1>我的会员</h1>
                <a href="<?php echo U('Indent/vipLevel');?>">会员等级</a>
                <a href="<?php echo U('Indent/vipSystem');?>">会员制度</a>
            </div>
       </div>
       
       <div class="right">
            <div class="order yhk addyhk" style="padding-bottom:50px;">
                <h1>个人信息</h1>
                <table cellspacing="0">
                
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <form action="/easygo/easygo/index.php/Home/Indent/upload" method="post" enctype="multipart/form-data"> 
                            <div class="img" style="margin-bottom:10px">
                                <div class="file-box"> 
                                     <img src="/easygo/easygo/Public/<?php echo ($data["user_head"]); ?>" width="113" height="113" class="head_img" />
                                     <input type="file" name="fileField" class="file" id="fileField" size="28" onchange="document.getElementById('textfield').value=this.value" accept="image/jpeg,image/gif,image/png"/><br />
                                     <input type="submit" value="上传头像" />
                                </div>
                            </div>
                            </form>
                        </td>
                    </tr>
                    <form action="/easygo/easygo/index.php/Home/Indent/edit" method="post" >
                    <tr>
                        <td width="100px" style="text-align:right">
                            姓名：
                        </td>
                        <td width="200px">
                            <input type="text" name="username" value="<?php echo ($data["user_name"]); ?>"  />
                        </td>
                        <td>&nbsp;&nbsp;请输入真实姓名，方便核对身份</td>
                    </tr>
                    <tr>
                        <td style="text-align:right">
                            性别：
                        </td>
                        <td>
                            <select name="sex">
                                <option><?php echo ($data["user_sex"]); ?></option>
                                <option>男</option>
                                <option>女</option>
                            </select>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:right">
                            证件类型：
                        </td>
                        <td>
                            <select name="idtype">
                                <option><?php echo ($data["user_type"]); ?></option>
                                <option>身份证</option>
                                <option>签证</option>
                                <option>军官证</option>
                            </select>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:right">
                            证件号：
                        </td>
                        <td>
                            <input type="text" name="idnumber" value="*******************" />
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:right">
                            手机号：
                        </td>
                        <td>
                            <input type="text" name="telephone" value="<?php echo ($data["user_telephone"]); ?>" />
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td style="text-align:center;height:100px;">
                            <input type="submit" value="保存" />
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    </form>
                </table>
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