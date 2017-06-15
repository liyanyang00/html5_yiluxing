<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>易路行</title>
<link href="/easygo/easygo/Public/Home/css/public.css" rel="stylesheet" type="text/css" />
<link href="/easygo/easygo/Public/Home/css/carlist.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="Stylesheet" href="/easygo/easygo/Public/Home/css/imageflow.css" />
<script type="text/javascript" src="/easygo/easygo/Public/Home/js/imageflow.js"></script>
<script src="/easygo/easygo/Public/Home/js/jquery.min.js"></script>
<script src="/easygo/easygo/Public/Home/js/select.js"></script>
</head>

<body>
<div class="header">
    <div class="mybody">
        <div class="logo"><a href="<?php echo U('Index/index');?>"><img src="/easygo/easygo/Public/Home/images/logo.jpg" alt="logo" /></a></div>
            <ul class="nav">
                <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                <li><a href="<?php echo U('Rent/index');?>">自驾租车</a></li>
                <li><a href="<?php echo U('Issue/index');?>">信息发布</a></li>
                <li class="navnow"><a href="<?php echo U('Special/index');?>">优惠活动</a></li>
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

<!-- 主要部分-->
<div class="content">
    <div class="mybody2">
       
       <div id="LoopDiv" style="height:560px;">
       <h1>每日一车</h1>
       <p>每日推出特价优惠车辆，尽享超低折扣价！</p>
        <input id="S_Num" type="hidden" value="8" />
        <div id="starsIF" class="imageflow"> 
            <img src="/easygo/easygo/Public/Home/images/hd1.jpg" longdesc="#" width="680" height="300" alt="Picture" /> 
            <img src="/easygo/easygo/Public/Home/images/hd2.jpg" longdesc="#" width="680" height="300" alt="Picture" /> 
            <img src="/easygo/easygo/Public/Home/images/hd3.jpg" longdesc="#" width="680" height="300" alt="Picture" /> 
            <img src="/easygo/easygo/Public/Home/images/hd4.jpg" longdesc="#" width="680" height="300" alt="Picture" /> 
            <img src="/easygo/easygo/Public/Home/images/hd5.jpg" longdesc="#" width="680" height="300" alt="Picture" /> 
            <img src="/easygo/easygo/Public/Home/images/hd6.jpg" longdesc="#" width="680" height="300" alt="Picture" /> 
            <img src="/easygo/easygo/Public/Home/images/hd7.jpg" longdesc="#" width="680" height="300" alt="Picture" />  
            <img src="/easygo/easygo/Public/Home/images/hd8.jpg" longdesc="#" width="680" height="300" alt="Picture" /> 
        </div>
</div>
       
        <div class="middle-top" style="margin-top:16px;">
            <form>
                您的位置：<input type="text" name="address"/>
                <input type="submit" value="搜索">
                <span>&nbsp;&nbsp;（注：所有优惠车辆优惠价格仅限一天，超出优惠时间租车辆价恢复为正常租价）</span>
            </form>
        </div>
        <!-- ************************************* -->
        <div class="today">
            <h1>更多推荐</h1>
            <h2>爆款车型特价租，给力优惠不能错过</h2>            
            <div>
                <?php if(is_array($infor)): $i = 0; $__LIST__ = $infor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><div class="car">
                        <?php
 $a = $d['inf_carphoto']; $arr = explode(",",$a); ?>
                        <a href="<?php echo U('Rent/detail');?>/inf_id/<?php echo ($d['inf_id']); ?>"><img src="/easygo/easygo/Public<?php echo ($arr[0]); ?>" width="280" height="160" /></a>
                        <p>优惠价￥&nbsp;<span><?php echo ($d["inf_specialprice"]); ?></span>&nbsp;/天</p>
                        <h3><a href="<?php echo U('Rent/detail');?>/inf_id/<?php echo ($d['inf_id']); ?>"><?php echo ($d["inf_type"]); ?></a><span>原价:<?php echo ($d["inf_dayprice"]); ?>元/天</span></h3>
                        <h4><a href="<?php echo U('Rent/detail');?>/inf_id/<?php echo ($d['inf_id']); ?>"><?php echo ($d["inf_gearbox"]); ?>&nbsp;|&nbsp;<?php echo ($d["inf_chair"]); ?>&nbsp;|&nbsp;<?php echo ($d["inf_displacement"]); ?></a></h4>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
 <!--                <div class="car car1">
                    <a href="<?php echo U('Rent/detail');?>"><img src="/easygo/easygo/Public/Home/images/today.jpg" width="280" height="160" /></a>
                    <p>优惠价￥&nbsp;<span>198</span>&nbsp;/天</p>
                    <h3><a href="<?php echo U('Rent/detail');?>">大众斯柯达明锐</a><span>原价:298元/天</span></h3>
                    <h4><a href="<?php echo U('Rent/detail');?>">操控&nbsp;自动&nbsp;|&nbsp;舒适型&nbsp;|&nbsp;5座</a></h4>
                </div>
                <div class="car car1">
                    <a href="<?php echo U('Rent/detail');?>"><img src="/easygo/easygo/Public/Home/images/today.jpg" width="280" height="160" /></a>
                    <p>优惠价￥&nbsp;<span>198</span>&nbsp;/天</p>
                    <h3><a href="<?php echo U('Rent/detail');?>">大众斯柯达明锐</a><span>原价:298元/天</span></h3>
                    <h4><a href="<?php echo U('Rent/detail');?>">操控&nbsp;自动&nbsp;|&nbsp;舒适型&nbsp;|&nbsp;5座</a></h4> 
                </div>
                <div class="car car1">
                    <a href="<?php echo U('Rent/detail');?>"><img src="/easygo/easygo/Public/Home/images/today.jpg" width="280" height="160" /></a>
                    <p>优惠价￥&nbsp;<span>198</span>&nbsp;/天</p>
                    <h3><a href="<?php echo U('Rent/detail');?>">大众斯柯达明锐</a><span>原价:298元/天</span></h3>
                    <h4><a href="<?php echo U('Rent/detail');?>">操控&nbsp;自动&nbsp;|&nbsp;舒适型&nbsp;|&nbsp;5座</a></h4>
                </div> -->
            </div>
        </div>
        <div class="text">
            <h1>注意事项</h1>
            <p>1.所有优惠车辆优惠价格仅限一天，超出优惠时间租车辆价恢复为正常租价。如用户小王租用A款车辆5
            天，租用第一天为优惠时间，则小王需支付一天优惠价格和四天正常价格的租车款。</p>
            <p>2.每日一车优惠活动不与其他优惠同时进行，不可使用代金券。</p>
            <p>3.租用优惠车享有正常租车的全部权利。</p>
            <p>4.租用优惠车花费的金额同样累积计入总消费，可升级会员。</p>
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
</html>