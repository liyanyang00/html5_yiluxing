<?php
namespace Home\Controller;
use Think\Controller;
class IndentController extends Controller {
	public function __construct(){  
        parent::__construct();
        if (!isset($_SESSION['id']) || $_SESSION['id']=='') {
            $this->redirect('user/login');
        }
        else{   
            $user = M('usertab');
            $userid = $_SESSION['id'];
            $where = 'user_id='.$userid;
            $result = $user->where($where)->find();
            $this->assign('user',$result);
            $userId = $_SESSION['id'];
    	$count = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where("ind_user_id=".$userId)->count();// 查询满足要求的总记录数
     	$condition = array(
     		"ind_user_id" => $userId,
     		"ind_pay" => "否"
     		);
     	$count1 = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where($condition)->count();
    	$count2 = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where("inf_user_id=".$userId)->count();
    	$this->assign('count',$count);//租车单数
    	$this->assign('count1',$count1);//未完成订单数
    	$this->assign('count2',$count2);//出租订单数
    	$discount = $result['user_discount1']+$result['user_discount2']+$result['user_discount3'];
    	$this->assign('discount',$discount);
        }
    }

    public function pay(){	
    	$ind_id = I('ind_id');
    	//$insur = I('insur');
    	$result = M('indent')->where('ind_id='.$ind_id)->find();
    	$result['ind_insurance'] = $insur;
    	$result['ind_state'] = "租赁中";
    	$result['ind_type'] = "普通订单";
    	$result['ind_pay'] ="是";
    	$result['ind_return'] = "否";
    	
    	$inform = M('information')->where("inf_id=".$result['ind_inf_id'])->find();
    	if($inform['inf_add'] == '是')
    	$inform['inf_carstate'] = "租赁中";
    	$result['ind_type'] = "活动订单";
    	M('indent')->save($result);
    	M('information')->save($inform);
    	$this->redirect('indent/rentItem');
    }

    public function rentItem(){	
    	$userId = $_SESSION['id'];
    	$where = "ind_user_id=".$userId;

    	$result = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where($where)->page($_GET['p'].',5')->select();
    	$count = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where($where)->count();// 查询满足要求的总记录数
     	$condition = array(
     		"ind_user_id" => $userId,
     		"ind_pay" => "否"
     		);
     	$count1 = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where($condition)->count();
	      	$Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)

		      ////$Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
		      $Page->setConfig('prev','上一页');
		      $Page->setConfig('next','下一页');
		      $Page->setConfig('last','末页');
		      $Page->setConfig('first','首页');
		      //$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
		      $show = $Page->show();// 分页显示输出
	      	$this->assign('page',$show);

	    	$this->assign('data',$result);
	    $count2 = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where("inf_user_id=".$userId)->count();
    	$this->assign('count',$count);//租车单数
    	$this->assign('count1',$count1);//未完成订单数
    	$this->assign('count2',$count2);
    	$this->display();
    }
    public function queryrent(){	
    		
    	$userId = $_SESSION['id'];

    	$condition = array(
     		"ind_user_id" => $userId,
     		);
     	$date = $_GET['date'];
     	$date1 = strtotime($date);
     	$date2 = date("Y-m-d", $date1);
     	$condition['ind_startdate'] = array('ELT',$date2);
        $condition['ind_enddate'] = array('EGT',$date2);
        $result = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where($condition)->page($_GET['p'].',5')->select();
    	$count = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where($condition)->count();// 查询满足要求的总记录数
     	$Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)

		      ////$Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
		      $Page->setConfig('prev','上一页');
		      $Page->setConfig('next','下一页');
		      $Page->setConfig('last','末页');
		      $Page->setConfig('first','首页');
		      //$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
		      $show = $Page->show();// 分页显示输出
	      	$this->assign('page',$show);

	    	$this->assign('data',$result);


    	$count = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where('ind_user_id='.$userId)->count();// 订单数
     	$condition1 = array(
     		"ind_user_id" => $userId,
     		"ind_pay" => "否"
     		);
     	
     	$count1 = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where($condition1)->count();
	    $count2 = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where("inf_user_id=".$userId)->count();
	    $this->assign('count',$count);//租车单数
    	$this->assign('count1',$count1);//未完成订单数
    	$this->assign('count2',$count2);
	    $this->display();
    
    }
    public function rentDetail(){	
    	$indId = $_GET['ind_id'];
    	$result = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where('ind_id='.$indId)->find();
    	$this->assign('data',$result);
    	$userId = $_SESSION['id'];
    	$count = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where("ind_user_id=".$userId)->count();// 查询满足要求的总记录数
     	$condition = array(
     		"ind_user_id" => $userId,
     		"ind_pay" => "否"
     		);
     	$count1 = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where($condition)->count();
    	$count2 = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where("inf_user_id=".$userId)->count();
    	$this->assign('count',$count);//租车单数
    	$this->assign('count1',$count1);//未完成订单数
    	$this->assign('count2',$count2);//出租订单数
    	$this->display();
    }
    public function shareItem(){	
    	$userId = $_SESSION['id'];
    	$where = "inf_user_id=".$userId;

    	$result = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where($where)->page($_GET['p'].',5')->select();
    	$count = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where($where)->count();
    	$Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)

    	$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('last','末页');
		$Page->setConfig('first','首页');
		//$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
		$show = $Page->show();// 分页显示输出
	    $this->assign('page',$show);
	    $this->assign('data',$result);
    	$this->assign('count',$count);//出租单数

    	$count1 = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where('ind_user_id='.$userId)->count();// 订单数
     	$condition1 = array(
     		"ind_user_id" => $userId,
     		"ind_pay" => "否"
     		);
     	$count2 = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where($condition1)->count();
	    $this->assign('count1',$count1);//租车单数
    	$this->assign('count2',$count2);//未完成订单数
		$this->display();
    }
    public function queryshare(){	
    	$userId = $_SESSION['id'];

    	$condition = array(
     		"inf_user_id" => $userId,
     		);
     	$date = $_GET['date'];
     	$date1 = strtotime($date);
     	$date2 = date("Y-m-d", $date1);
     	$condition['ind_startdate'] = array('ELT',$date2);
        $condition['ind_enddate'] = array('EGT',$date2);
        $result = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where($condition)->page($_GET['p'].',5')->select();
    	$count = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where($condition)->count();
    	$Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)

    	$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('last','末页');
		$Page->setConfig('first','首页');
		//$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
		$show = $Page->show();// 分页显示输出
	    $this->assign('page',$show);
	    $this->assign('data',$result);
    	$this->assign('count',$count);//出租单数

    	$count1 = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where('ind_user_id='.$userId)->count();// 订单数
     	$condition1 = array(
     		"ind_user_id" => $userId,
     		"ind_pay" => "否"
     		);
     	$count2 = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where($condition1)->count();
	    $this->assign('count1',$count1);//租车单数
    	$this->assign('count2',$count2);//未完成订单数
		$this->display();
    }
    public function addIt(){	
    	if(IS_POST){	
    		$userId = $_SESSION['id'];
    		$condition = array(
    			'user_bankcard' => I('card'),
    			'user_idnum' => I('idnum')
    			);
    		$result = M('usertab')->where('user_id='.$userId)->save($condition);
    		if($result){	
    			$this->redirect("Indent/bankCard");
    		}
    	}
    	else{	
    		$this->error();
    	}
    }
    public function discount(){	
    	$userId = $_SESSION['id'];
    	$user = M('usertab')->where('user_id='.$userId)->find();
    	//$count = ($user['discount1']+$user['discount2']+$user['discount3'])->page($_GET['p'].',5')->select();
    	$this->assign('data',$user);
    	$count = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where("ind_user_id=".$userId)->count();// 查询满足要求的总记录数
     	$condition = array(
     		"ind_user_id" => $userId,
     		"ind_pay" => "否"
     		);
     	$count1 = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where($condition)->count();
    	$count2 = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where("inf_user_id=".$userId)->count();
    	$this->assign('count',$count);//租车单数
    	$this->assign('count1',$count1);//未完成订单数
    	$this->assign('count2',$count2);//出租订单数
    	$this->display();
    }
    public function bankCard(){	
    	$userId = $_SESSION['id'];
    	$count = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where("ind_user_id=".$userId)->count();// 查询满足要求的总记录数
     	$condition = array(
     		"ind_user_id" => $userId,
     		"ind_pay" => "否"
     		);
     	$count1 = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where($condition)->count();
    	$count2 = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where("inf_user_id=".$userId)->count();
    	$this->assign('count',$count);//租车单数
    	$this->assign('count1',$count1);//未完成订单数
    	$this->assign('count2',$count2);//出租订单数
    	$this->display();
    }
    public function action(){	
    	$id = I("id");
    	$result = M('indent')->where("ind_id=".$id)->find();
    	print_r(json_decode($result));
    }
}

?>