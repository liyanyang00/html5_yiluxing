<?php
namespace Home\Controller;
use Think\Controller;
class PersonalController extends Controller {

    public function __construct(){  
        parent::__construct();
        if (!isset($_SESSION['user_telephone']) || $_SESSION['user_telephone']=='') {
            $this->redirect("users/login");
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