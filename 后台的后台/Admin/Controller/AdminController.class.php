<?php
namespace Admin\Controller;
use Think\Controller;
session_start();
class AdminController extends Controller {	
	
	public function index(){	
		if (!isLogin()) {
      	$this->redirect('Admin/login');
    }
		$this->display();
	}

	public function login(){	
		if(IS_POST){	
			$adminModel = M('administrator');
			$condition = array(	
				'adm_username' => I("post.username"),
				'adm_password' => I("post.password")
				);
			$result = $adminModel->where($condition)->find();
			$id = $result['adm_id'];
			$count = $adminModel->where($condition)->count();
			if($count>0){	
				session('username',I("post.username"));
				session('id',$id);
				$this->redirect('Admin/index');

			}

			else{	
				$this->error("您输入的用户名或密码不正确");
			}
		}
		else{	
			$this->display();
		}
	}

	//退出管理员登录
	public function logout(){	
		session('[destroy]');
		redirect(U('Admin/Admin/login'),0,' ');
		$this->display();
	}
	


}