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
		$informationModel = M("information");
		$information = $informationModel->select();
		$this->assign('information', $information);
		$data = M('usertab')->join('information on information.inf_user_id = usertab.user_id')->select();
        $this->assign('information',$data);
		$this->display();
	}

}