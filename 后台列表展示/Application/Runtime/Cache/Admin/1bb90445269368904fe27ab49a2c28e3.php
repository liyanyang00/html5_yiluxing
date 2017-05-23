<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>易路行后台管理系统</title>
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
    <link href="/easygo/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/easygo/Public/Admin/css/style.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid">
    <div class="row header">
        <h1>易路行后台管理系统<span>欢迎您，<?php echo ($_SESSION['username']); ?>！<a href="/easygo/index.php/Admin/Admin/logout">退出</a></span></h1>
    </div>
</div>
<div class="container-fluid">
    <div class="row content">
        <div class="col-md-2 col-xs-2 left">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title con">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">订单管理</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <ul>
                                <li  class="linow"><a href="<?php echo U('Admin/Indent/index');?>">订单列表</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title question">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">车辆列表</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                 <li><a href="<?php echo U('Admin/Cars/check');?>">车辆审核</a></li>
                                <li><a href="<?php echo U('Admin/Cars/special');?>">每日一车</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title user">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">用户管理</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                <li><a href="<?php echo U('Admin/User/user');?>">用户列表</a></li>
                                <li><a href="<?php echo U('Admin/User/owner');?>">车主列表</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title write">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">留言板管理</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                 <li><a href="<?php echo U('Admin/Message/index');?>">留言列表</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title user1">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">管理员管理</a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                        	<ul>
                            	<li><a href="<?php echo U('Admin/Admin/index');?>">管理员列表</a></li>
                                <li><a href="<?php echo U('Admin/Admin/add');?>">添加管理员</a></li>
                                <li><a href="<?php echo U('Admin/Admin/alert');?>">个人密码修改</a></li>
                            </ul>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        
        <div class="col-md-10 col-xs-10 right">
            <h1>订单列表</h1>
            <div class="buttongroup">
                <form action="">
                	订单编号：
                    <input type="text" value="" name="">
                    订单生成日期：
                    <input type="date" value="" name="">
                    <button type="submit" href="#" class="button1">查询</a>

                </form>
            </div>
            <div class="tablegroup">
                <table class="table">
                    <tr>
                        <th>订单编号</th>
                        <th>车辆信息</th>
                        <th>订单时间</th>
                        <th>车主</th>
                        <th>租车人</th>
                        <th>订单总价</th>
                        <th>订单性质</th>
                        <th>订单状态</th>
                    </tr>
                    <?php if(is_array($indent)): $i = 0; $__LIST__ = $indent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr data-toggle="modal" data-target="#mymodal-data">
                          <td><?php echo ($d["ind_id"]); ?></td>
                          <td><?php echo ($d["inf_type"]); ?></td>
                          <td><?php echo ($d["ind_startdate"]); ?></td>
                          <td><?php echo ($d["user_name"]); ?></td>
                          <?php
 $where ='user_id = '.$d['ind_user_id']; $result = M("usertab")->where($where)->find(); ?>
                          <td><?php echo ($result["user_name"]); ?></td>
                          <td><?php echo ($d["ind_currnetprice"]); ?></td>
                          <td><?php echo ($d["ind_type"]); ?></td>
                          <td><?php echo ($d["ind_state"]); ?></td> 
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                   <!--  <tr data-toggle="modal" data-target="#mymodal-data">
                        <td>0000000001</td>
                        <td>雪佛兰科鲁兹</td>
                        <td>2017-05-05</td>
                        <td>刘二狗</td>
                        <td>王大壮</td>
                        <td>￥998</td>
                        <td>普通订单</td>
                        <td>已完成</td>
                    </tr>
                    <tr data-toggle="modal" data-target="#mymodal-data">
                        <td>0000000001</td>
                        <td>雪佛兰科鲁兹</td>
                        <td>2017-05-05</td>
                        <td>刘二狗</td>
                        <td>王大壮</td>
                        <td>￥998</td>
                        <td>活动订单</td>
                        <td>已完成</td>
                    </tr>
                    <tr data-toggle="modal" data-target="#mymodal-data">
                        <td>0000000001</td>
                        <td>雪佛兰科鲁兹</td>
                        <td>2017-05-05</td>
                        <td>刘二狗</td>
                        <td>王大壮</td>
                        <td>￥998</td>
                        <td>普通订单</td>
                        <td>已取消</td>
                    </tr>
                    <tr data-toggle="modal" data-target="#mymodal-data">
                        <td>0000000001</td>
                        <td>雪佛兰科鲁兹</td>
                        <td>2017-05-05</td>
                        <td>刘二狗</td>
                        <td>王大壮</td>
                        <td>￥998</td>
                        <td>活动订单</td>
                        <td>付款中</td>
                    </tr>
                    <tr data-toggle="modal" data-target="#mymodal-data">
                        <td>0000000001</td>
                        <td>雪佛兰科鲁兹</td>
                        <td>2017-05-05</td>
                        <td>刘二狗</td>
                        <td>王大壮</td>
                        <td>￥998</td>
                        <td>普通订单</td>
                        <td>租赁中</td>
                    </tr>
                    <tr data-toggle="modal" data-target="#mymodal-data">
                        <td>0000000001</td>
                        <td>雪佛兰科鲁兹</td>
                        <td>2017-05-05</td>
                        <td>刘二狗</td>
                        <td>王大壮</td>
                        <td>￥998</td>
                        <td>普通订单</td>
                        <td>已完成</td>
                    </tr>
                    <tr data-toggle="modal" data-target="#mymodal-data">
                        <td>0000000001</td>
                        <td>雪佛兰科鲁兹</td>
                        <td>2017-05-05</td>
                        <td>刘二狗</td>
                        <td>王大壮</td>
                        <td>￥998</td>
                        <td>普通订单</td>
                        <td>已完成</td>
                    </tr>
                    <tr data-toggle="modal" data-target="#mymodal-data">
                        <td>0000000001</td>
                        <td>雪佛兰科鲁兹</td>
                        <td>2017-05-05</td>
                        <td>刘二狗</td>
                        <td>王大壮</td>
                        <td>￥998</td>
                        <td>普通订单</td>
                        <td>已完成</td>
                    </tr>
                    <tr data-toggle="modal" data-target="#mymodal-data">
                        <td>0000000001</td>
                        <td>雪佛兰科鲁兹</td>
                        <td>2017-05-05</td>
                        <td>刘二狗</td>
                        <td>王大壮</td>
                        <td>￥998</td>
                        <td>普通订单</td>
                        <td>已完成</td>
                    </tr>
                    <tr data-toggle="modal" data-target="#mymodal-data">
                        <td>0000000001</td>
                        <td>雪佛兰科鲁兹</td>
                        <td>2017-05-05</td>
                        <td>刘二狗</td>
                        <td>王大壮</td>
                        <td>￥998</td>
                        <td>普通订单</td>
                        <td>已完成</td>
                    </tr> -->
                    
                    <tr class="table-bottom"> 
                        <td colspan="9" style="text-align:right">
                            <ul class="page">
                                <li><a href="#">上一页</a></li>
                                <li class="now"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li>...</li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">下一页</a></li>
                                <li>共5页/48条数据 转到<input type="text" class="pageinput" placeholder="1">页</li>
                            </ul>
                        </td>
                    </tr>
                    <!--弹出框-->
                    <div class="modal" id="mymodal-data" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" style="width:30px;"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
									<h4 class="modal-title">订单详情</h4>
								</div>
								<div class="modal-body">
									<p>车主姓名：<span>刘二狗</span></p>
                                    <p>车主电话：<span>13088886666</span></p>
                                    <p>租客姓名：<span>刘二狗</span></p>
                                    <p>租客电话：<span>13088886666</span></p>
                                    <p>租车时间：<span>2017/05/05-2017/10/05</span></p>
                                    <p>费用明细：<span>租车费用99元<br />&nbsp;保险费用0元<br />&nbsp;手续费50元</span></p>
                                    <p>优惠券抵：<span>50元优惠券</span></p>
                                    <p>会员折扣：<span>95折</span></p>
								</div>
								<div class="modal-footer">
									<button type="button" data-dismiss="modal" class="button1" style="margin-right:20px;">完成</button>
								</div>
							</div>
						</div>
					</div>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="/easygo/Public/Admin/js/jquery.min.js"></script>
<script src="/easygo/Public/Admin/js/bootstrap.min.js"></script>
<script src="/easygo/Public/Admin/js/scripts.js"></script>
</body>
</html>