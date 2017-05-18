<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {	

	//用户登录
	public function login(){	
		if(IS_POST){	
			$userModel = M('usertab');
			$condition = array(	
				'user_telephone' => I("post.telephone"),
				'user_password' => I("post.password")
				);
			$result = $userModel->where($condition)->find();
			$id = $result['user_id'];
			$count = $userModel->where($condition)->count();
			if($count>0){	
				session('user_telephone',I("post.telephone"));
				session('user_password',I("post.password"));
				session('id',$id);
				$this->redirect('personal/index');
			}
			else{	
				$this->error("您输入的手机号或密码不正确");
			}
		}
		else{	
			$this->display();
		}
	}

	//用户注册界面
	public function register(){	
		$this->display();
	}
	public function doReg(){	
		if(!IS_POST){	
			exit("bad request!");
		}
		$user=M("usertab");
		$condition = array(	
				'user_telephone' => I("post.telephone"),
				'user_name' => I("post.name"),
				'user_password' => I("post.password")
				);
		$condition1 ="user_telephone=".$condition['user_telephone'];

		$result = $user->where($condition1)->count();
	

		if($result>0){	
			$this->error("该手机号已注册！");
		}
		else{
			$user->data($condition)->add();
			$id = $user->where($condition)->find();
			$ids = $id['user_id'];
			session("id",$ids);
			$this->redirect("personal/index");	
		}	
	}

	//退出登录

	public function logout(){	
		session('[destroy]');
		redirect(U('user/login'),2,'exit...');
	}







}
?>