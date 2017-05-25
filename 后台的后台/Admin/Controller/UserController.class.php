<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {	
	public function __construct() {
    parent::__construct();
    
    if (!isLogin()) {
      	$this->redirect('Admin/login');
    }
  }

	public function user(){	
		$userModel = M("usertab");
		$users = $userModel->select();
		$this->assign('usertab', $users);
		$this->display();
	}
	public function owner(){
		$user1Model = M("usertab");
		$users1 = $user1Model->select();
		$this->assign('usertab', $users1);
		$data = M('information')->join('usertab on information.inf_user_id = usertab.user_id')->select();
        $this->assign('usertab',$data);
		$this->display();
	}
	public function action(){	
		if(IS_POST){	
			$id = I('id');
			$user = M("usertab");
			$ids = "user_id=".$id;
			$result = $user->where($ids)->find();
			print_r(json_encode($result));
		}

	}

}