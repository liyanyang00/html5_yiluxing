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
        }
    }

    public function createItem(){	
    	$this->display();
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
	}
?>