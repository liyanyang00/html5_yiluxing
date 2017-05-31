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
		$data = M('information')->join('usertab on information.inf_user_id = usertab.user_id')->distinct(true)->field('user_id')->select();
		var_dump($data);
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
	public function action1(){	
		if(IS_POST){
			$id = I('id');
			$inf = M('information');
			$ids = "inf_user_id=".$id;
			$result = $inf->where($ids)->select();
			print_r(json_encode($result));
		}
	}
	public function pass(){	
		$id = isset($_GET['user_id']) ? intval($_GET['user_id']) : '';
		$condition = array(	
			'user_id' => $id
			);
		$userModel = M('usertab');
		$result = $userModel->where($condition)->find();
		$result['user_state'] = '已实名';
		if($userModel->save($result)){	
			$this->redirect('User/user');
		}
		else{	
			$this->error();
		}
	}

	public function notPass(){	
		$id = isset($_GET['user_id']) ? intval($_GET['user_id']) : '';
		$condition = array(	
			'user_id' => $id
			);
		$userModel = M('usertab');
		$result = $userModel->where($condition)->find();
		$result['user_state'] = '未实名';
		if($userModel->save($result)){	
			$this->redirect('User/user');
		}
		else{	
			$this->error();
		}
	}

}