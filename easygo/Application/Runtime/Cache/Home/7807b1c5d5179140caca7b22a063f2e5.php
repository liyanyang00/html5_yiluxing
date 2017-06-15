<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>易路行</title>
<link href="/easygo/easygo/Public/Home/css/public.css" rel="stylesheet" type="text/css" />
<link href="/easygo/easygo/Public/Home/css/person.css" rel="stylesheet" type="text/css" />
<link href="/easygo/easygo/Public/Home/css/lend.css" rel="stylesheet" type="text/css" />
</head>

<body ng-app="myApp">
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
<?php
 $ind_id = $_GET['ind_id']; $result = M('indent')->where("ind_id=".$ind_id)->find(); ?>
<div class="content">
	<div class="mybody" ng-controller="myCtrl">
       		<div class="order">
            	<h1>订单详情</h1>
                <div class="detail">
                	<p><span class="detail1">订单已生成</span>&nbsp;&nbsp;<span>请在1小时之内付款完成下单</span></p>
                    <p style="border-top:1px solid #e3e4e6;">订单号：<?php echo ($result["ind_id"]); ?>&nbsp;&nbsp;租车人：
                    <?php $user1 = M('usertab')->where("user_id=".$result['ind_user_id'])->find();echo $user1['user_name']; ?>
                    &nbsp;&nbsp;租期：<?php echo ($result["ind_day"]); ?>天&nbsp;&nbsp;车主：<?php $user2 = M('information')->join('usertab on information.inf_user_id = usertab.user_id')->where('inf_id='.$result['ind_inf_id'])->find();echo $user2['user_name']; ?>&nbsp;&nbsp;车主联系方式：<?php $inf = M('information')->where("inf_id=".$result['ind_inf_id'])->find();echo $inf['inf_telephone']; ?></p>
                </div>
                <table cellspacing="0">
                	<tr>
                    	<th style="width:170px;">车辆信息</th>
                        <th style="width:240px;">&nbsp;</th>
                        <th style="width:240px;">借还时间</th>
                        <th style="width:240px;">天数</th>
                    </tr>
                    <tr>
                    	<td style="height:118px;">
                    		<?php
 $a = $inf['inf_carphoto']; $arr = explode(",",$a); ?>
                        	<img src="/easygo/easygo/Public<?php echo ($arr[0]); ?>" width="160" height="100" alt="" />  
                        </td>
                        <td>
                        	<h5><?php echo ($inf['inf_type']); ?></h5>
                            <p class="p"><?php echo ($inf['inf_gearbox']); ?>/乘坐<?php echo ($inf['inf_chair']); ?>人</p>
                            <p class="p">订单号：<?php echo ($result["ind_id"]); ?></p></td>
                        <td>
                        	<p><?php echo ($result["ind_startdate"]); ?></p>
                            <p>至</p>
                            <p><?php echo ($result["ind_enddate"]); ?></p>
                        </td>
                        <td><h4><?php echo ($result["ind_day"]); ?>天</h4></td>
                    </tr>
                    
					</div>
                </table>
 
                <div class="cost">
                	<h1>费用明细</h1>
                	<?php
 $cash = $result['ind_originalprice']*0.1; $insurance = $result['ind_originalprice']*0.05; if($user['user_cost']<200){ $result['ind_originalprice'] = $result['ind_originalprice']; $zhekou = 1; }elseif ($user['user_cost']>200&&$user['user_cost']<1000) { $result['ind_originalprice'] = $result['ind_originalprice']*0.95; $zhekou = 0.95; } elseif($user['user_cost']>1000&&$user['user_cost']<5000){ $result['ind_originalprice'] = $result['ind_originalprice']*0.92; $zhekou = 0.92; } elseif($user['user_cost']>5000&&$user['user_cost']<10000){ $result['ind_originalprice'] = $result['ind_originalprice']*0.88; $zhekou = 0.88; } elseif($user['user_cost']>10000){ $result['ind_originalprice'] = $result['ind_originalprice']*0.85; $zhekou = 0.85; } $price = $result['ind_originalprice']+$cash+$insurance-100; ?>
                	<form method="post" action="/easygo/easygo/index.php/Home/indent/pay">
                	<input type="text" name="ind_id" value="<?php echo ($_GET['ind_id']); ?>" style="display:none"><input type="text" value="<?php echo ($result["ind_originalprice"]); ?>" style="display:none" name="old">
                    <p>车辆租赁费用<span>+天数：<?php echo ($zhekou); ?>*<?php echo ($result["ind_day"]); ?>=<span>￥<?php echo ($result["ind_originalprice"]); ?></span></span></p>
                    <p>押金<span>+<?php echo ($result["ind_originalprice"]); ?>*0.1=<span>￥<?php echo ($cash); ?></span></span></p>
                    <p data-toggle="modal" data-target="#mymodal-data"><input type="checkbox" ng-change="myFunc1()" ng-model="myValue"/>&nbsp;<input value="<?php echo ($insurance); ?>" name="insurance" style="display:none">保险费<span>+<?php echo ($result["ind_originalprice"]); ?>*0.05=<span>￥<?php echo ($insurance); ?></span></span></p>
                    <p data-toggle="modal" data-target="#mymodal-data1"><input type="checkbox" />&nbsp;优惠券<span>-100*1=<span>￥100</span></span></p>
                    <p><span>合计：<input value="<?php echo ($price); ?>" name="currentprice" style="display:none"><span>￥<?php echo ($price); ?></span></span></p>
                    <button type="submit" class="pay">付款</button>
                    <!--弹出框-->
                    <div class="modal" id="mymodal-data" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" style="width:30px;"><span aria-hidden="true">×</span><span class="sr-only"></span></button>
									<h4 class="modal-title">保险介绍</h4>
								</div>
								<div class="modal-body" style="overflow-y:auto;height:240px;">
									<p>&nbsp;</p>
                                    <p>1.保险不是必须购买，不计免赔服务可根据您的需求自行选购。</p>
                                    <p>2.易路行为客户提供不计免赔服务，购买不计免赔服务后，您无需承担保险理赔范
                                    围内的任何损失及轮胎损失。</p>
                                    <p>3.购买不计免赔服务可以获得更高的保险，未购买保险的客户车辆出险后，
                                    保险理赔内的事故损失，由客户负责。如客户同时购买了不计免赔服务，则保险理赔范围
                                    内事故损失，以及保险理赔范围外的轮胎损失，均无需客户承担。为降低您的理赔风险，建议购买。</p>
								</div>
								<div class="modal-footer">
									<button type="button" data-dismiss="modal" class="button1 button2" style="margin-right:20px;">已了解</button>
                                    
								</div>
							</div>
						</div>
                	</div>
                    <div class="modal" id="mymodal-data1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" style="width:30px;"><span aria-hidden="true">×</span><span class="sr-only"></span></button>
									<h4 class="modal-title">优惠券选择</h4>
								</div>
								<div class="modal-body" style="overflow-y:auto;height:340px;">
                                    <form>
									<table>
                                    	<tr>
                                        	<td><label><input name="yhq1" type="radio" value="" /></label></td>
                                            <td><img src="/easygo/easygo/Public/Home/images/yhq.jpg" /><p>有效期：2017.05.05-2017.10.05</p></td>
                                        </tr>
                                        <tr>
                                        	<td><label><input name="yhq1" type="radio" value="" /></label></td>
                                            <td><img src="/easygo/easygo/Public/Home/images/yhq.jpg" /><p>有效期：2017.05.05-2017.10.05</p></td>
                                        </tr>
                                        <tr>
                                        	<td><label><input name="yhq1" type="radio" value="" /></label></td>
                                            <td><img src="/easygo/easygo/Public/Home/images/yhq.jpg" /><p>有效期：2017.05.05-2017.10.05</p></td>
                                        </tr>
                                     </table>
                                     </form>
								</div>
								<div class="modal-footer">
									<button type="button" data-dismiss="modal" class="button1 button2" style="margin-right:20px;">使用优惠券</button>
                                    <button type="button" data-dismiss="modal" class="button1 button3" style="margin-right:20px;">关闭</button>
                                    
                                    </form>
								</div>
							</div>
						</div>
                	</div>
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

<script src="/easygo/easygo/Public/Home/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/easygo/easygo/Public/Home/js/angular.js"></script>
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
<script>
		/*是否购买保险，以及所需保险费和优惠劵的使用及优惠之间的双向数据绑定*/
    angular.module('myApp', [])
    .controller('myCtrl', ['$scope','$http', function($scope,$http) {

        $scope.money=0;
        $scope.money2=0;
        $scope.count = false;
        $scope.num=false;
        $http.get('action.php',{	
        	"id": $location.url()
        }).success(function(response){	
        	$scope.day = response.ind_day;
        	console.log($scope.day);
        })
        $scope.myFunc1 = function() {/*判断是否购买保险*/
            $scope.count=!$scope.count;
            if($scope.count==true){
                $scope.money=50;
            }else{
                $scope.money=0;
            }
        };
        $scope.myFunc2 = function() else{
                $scope.money2=0;
            }
        };

        $scope.choose = function();
        //angularjs从mysql中获取数据
        
    }]);
    /*以上是买保险及用优惠劵的代码*/
</script>
</html>