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
    <link href="/easygo/Public/Admin/css/page.css" rel="stylesheet">
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
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                <li><a href="<?php echo U('Admin/Indent/index');?>">订单列表</a></li>
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
                    <div id="collapseFour" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <ul>
                                <li class="linow"><a href="<?php echo U('Admin/Message/index');?>">留言列表</a></li>
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
                                <li><a href="<?php echo U('Admin/Admin/alter');?>">个人密码修改</a></li>
                            </ul>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        
        <div class="col-md-10 col-xs-10 right">
            <h1>留言列表</h1>
            <div class="buttongroup">
                <form action="<?php echo U('Admin/Message/search');?>" class="navbar-form" role="search">
                    关键字：
                    <input type="text"  name="search_value">
                    <button type="submit" class="button1">查询</button>

                </form>
            </div>
            <div class="tablegroup">
                <table class="table">
                    <tr>
                        <th>意见简述</th>
                        <th>留言人</th>
                        <th>联系电话</th>
                        <th>电子邮箱</th>
                        <th>留言状态</th>
                    </tr>
                 	<?php if(is_array($message)): $i = 0; $__LIST__ = $message;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr data-toggle="modal" data-target="#mymodal-data" onclick="postIt(<?php echo ($d["mes_id"]); ?>)">
			              <td width="20%"><?php echo ($d["mes_intoduce"]); ?></td>
			              <td width="10%"><?php echo ($d["mes_username"]); ?></td>
			              <td width="20%"><?php echo ($d["mes_telephone"]); ?></td>  
			              <td width="20%"><?php echo ($d["mes_email"]); ?></td>                  
			              <td width="20%"><?php echo ($d["mes_state"]); ?></td>
			            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    
                    <tr class="table-bottom"> 
                        <td colspan="9" style="text-align:right">
                            <div class="pagination" id="page"><?php echo ($page); ?></div>
                        </td>
                    </tr>
                    <!--弹出框-->
                    <div class="modal" id="mymodal-data" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" style="width:30px;"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
									<h4 class="modal-title">留言详情</h4>
								</div>
								<div class="modal-body" style="overflow-y:auto;height:400px;" id="detail">
									<p>留言姓名：<span></span></p>
                                    <p>联系电话：<span></span></p>
                                    <p>电子邮箱：<span></span></p>
                                    <p>留言内容：<span style="width:434px;"></span></p>
                                    
								</div>
								<div class="modal-footer">
									<button type="button" class="button1 button2" style="margin-right:20px;"><a id="reply" href="">完成回复</a></button>
                                    <button type="button" data-dismiss="modal" class="button1" style="margin-right:20px;">关闭</button>
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
<script type="text/javascript">
	function postIt (res){	
			$.post("action.php",{	
				id : res
			},
			function(data,status){	
				var array = JSON.parse(data);
				console.log(array);
					$('#detail p span').eq(0).text(array['mes_username']);
					$('#detail p span').eq(1).text(array['mes_telephone']);
					$('#detail p span').eq(2).text(array['mes_email']);
					$('#detail p span').eq(3).text(array['mes_content']);
						
					$("#reply").attr("href","/easygo/index.php/Admin/Message/reply/mes_id/"+array['mes_id']);
					return false;			
			});

		}
</script>
</body>
</html>