<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>易路行后台管理系统</title>
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
    <link href="/easygo/easygo/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/easygo/easygo/Public/Admin/css/style.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid">
    <div class="row header">
        <h1>易路行后台管理系统<span>欢迎您，<?php echo ($_SESSION['username']); ?>！<a href="/easygo/easygo/index.php/Admin/Admin/logout">退出</a></span></h1>
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
                    <div id="collapseFive" class="panel-collapse collapse in">
                        <div class="panel-body">
                        	<ul>
                            	<li><a href="<?php echo U('Admin/Admin/index');?>">管理员列表</a></li>
                                <li class="linow"><a href="<?php echo U('Admin/Admin/add');?>">添加管理员</a></li>
                                <li><a href="<?php echo U('Admin/Admin/alter');?>">个人密码修改</a></li>
                            </ul>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        
        <div class="col-md-10 col-xs-10 right">
            <h1>添加管理员</h1>
            <div class="buttongroup">
                <form action="/easygo/easygo/index.php/Admin/Admin/doadd" class="form1" method="post">
                	登陆账号：
                    <input type="text" id="username" value="" name="username">&nbsp;<span style="color:red;font-size:16px;display:none;">×</span><br />
                    真实姓名：
                    <input type="text" id="name" value="" name="name">&nbsp;<span style="color:red;font-size:16px;display:none;">×</span><br />
                    电子邮箱：
                    <input type="text" value="" name="email">&nbsp;<span style="color:gray">(选填)</span><br />
                    联系电话：
                    <input type="text" id="telephone" value="" name="telephone">&nbsp;<span style="color:red;font-size:16px;display:none;">×</span><br />
                    <input type="text" name="date" style="display:none;" id="today" readonly>
                    设置密码：
                    <input type="password" value="" id="password" name="password">&nbsp;<span style="color:red;font-size:16px;display:none;">×</span><br />
                    确认密码：
                    <input type="password" value="" id="repwd" name="repwd">&nbsp;<span style="color:red;font-size:16px;display:none;">×</span><br />
                    <!--<button type="submit" id="modal-container-491897" class="button1 button11" data-toggle="modal">添加</a>
                    <div class="modal fade" id="modal-container-491897" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:190px;margin-left:100px;">
                               <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            
                                        </div>
                                    <div class="modal-body">
                                        修改成功！
                                    </div>
                                    <div class="modal-footer">
                                         <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> <button type="submit" class="btn btn-primary">确定</button>
                                    </div>
                                    </div>                    
                                </div>               
                         </div>-->
                         <button type="button" id="modal-491897" href="#modal-container-491897"  class="button1 button11" data-toggle="modal">保存</button>
                        <div class="modal fade" id="modal-container-491897" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:190px;margin-left:100px;">
                               <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            
                                        </div>
                                    <div class="modal-body">
                                        是否添加
                                    </div>
                                    <div class="modal-footer">
                                         <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> <button type="submit" class="btn btn-primary">确定</button>
                                    </div>
                                    </div>                    
                                </div>               
                         </div>

                </form>
            </div>
           
        </div>
    </div>
</div>
<script src="/easygo/easygo/Public/Admin/js/jquery.min.js"></script>
<script src="/easygo/easygo/Public/Admin/js/bootstrap.min.js"></script>
<script src="/easygo/easygo/Public/Admin/js/scripts.js"></script>
<script src="/easygo/easygo/Public/Admin/js/check.js"></script>
<script type="text/javascript">

function today(){
    var today=new Date();
    var h=today.getFullYear();
    var m=today.getMonth()+1;
    var d=today.getDate();
    return h+"-"+m+"-"+d;
}

document.getElementById("today").value = today();





</script>

</body>
</html>