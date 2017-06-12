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
}
?>