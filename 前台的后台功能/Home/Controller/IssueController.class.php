<?php
namespace Home\Controller;
use Think\Controller;
class IssueController extends Controller {

    public function __construct(){  
        parent::__construct();
        if (!isset($_SESSION['id']) || $_SESSION['id']=='') {
            $this->redirect("user/login");
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
    	$this->display();
    }
    public function submit(){	
    	$this->redirect('Issue/check');
    }
    public function add(){	
    	$this->redirect('Issue/authentication');
    }
    public function upload(){	
    	$this->redirect('Issue/perfectInf');
    }
    public function addDetail(){	
    	$this->redirect('Issue/check');
    }

}
?>