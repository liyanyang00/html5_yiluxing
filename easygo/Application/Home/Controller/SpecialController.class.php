<?php
namespace Home\Controller;
use Think\Controller;
class SpecialController extends Controller {
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
        $infor = M('information');
        $today = date('Y-m-d');
        $where = array(
            'inf_state' => '已通过',
            'inf_carstate' => '空闲中',
            'inf_add' => '是',
            'inf_specialdate' => array('eq',$today)
            );
        $result = $infor->where($where)->select();
        $this->assign('infor',$result);
        $this->display();
    }

}
?>