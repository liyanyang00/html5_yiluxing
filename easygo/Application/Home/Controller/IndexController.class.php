<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function __construct(){  
        parent::__construct();
        if (!isset($_SESSION['id']) || $_SESSION['id']=='') {
            
        }
        else{   
            $user = M('usertab');
            $userid = $_SESSION['id'];
            $where = 'user_id='.$userid;
            $result = $user->where($where)->find();
            $this->assign('user',$result);
        }
    }
    public function index(){	
    	$info = M('information');
    	$where = array(
    		'inf_state' => '已通过',
    		'inf_carstate' => '空闲中',
    		'inf_startdate' => array('neq',"")
    		);
    	$result = $info->order("inf_click desc")->limit(4)->where($where)->select();
    	$this->assign('data',$result);
    	$this->display();
    }
}
?>