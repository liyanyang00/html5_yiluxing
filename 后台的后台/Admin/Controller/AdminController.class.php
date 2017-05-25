<?php
namespace Admin\Controller;
use Think\Controller;
session_start();
class AdminController extends Controller {	
	
	public function index(){	
		if (!isLogin()) {
      	$this->redirect('Admin/login');
    }
    	$adminModel = M("administrator");
		$admin = $adminModel->select();
		$this->assign('administrator', $admin);
		$this->display();
	}

	//管理员登录
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
				$this->showError('您输入的用户名或密码不正确');
			}
		}
		else{	
			$this->display();
		}
	}

	//添加管理员
	public function doadd(){	
		if(!IS_POST){
    		exit("bad request!");
    	}

			$adminModel = M('administrator');
			$condition = array(	
				'adm_username' => I('username'),
				'adm_name' => I('name'),
				'adm_email' => I('email'),
				'adm_phone' => I('telephone'),
				'adm_date' => I('date'),
				'adm_password' => I('password')
				); 
	        $condition1 = $condition['adm_username'];
	        $result = $adminModel->select();

	        foreach ($result as $key => $value) {
	        	if($value['adm_username'] == $condition1){	
	        		$this->error("该用户已被注册！");
	        		$this->redirect("Admin/index");
	        	}
	        }
	        $result = $adminModel->data($condition)->add();
	        if($result>0){	
	        	$this->redirect("Admin/index");	
	        }	
	}

	public function alter(){	
		$this->display();
	}
	public function doAlter(){	

		if(IS_POST){
			$adminModel = M('administrator');
			$condition = array(	
				'adm_username' => I('username'),
				'adm_name' => I('name'),
				'adm_password' => I('earlypwd')
				);
			$result = $adminModel->where($condition)->find();
			if($result){	
				$result['adm_password'] = I('latepwd');
				if($adminModel->save($result))
					$this->redirect("admin/index");
				else{	
					$this->showError("未修改成功");
				}
			}
			exit();

		}
		else{	
			$this->error();
		}

	}
	public function action(){	
		if(IS_POST){	
			$id = I('id');
			$admin = M('administrator');
			$result = "adm_id=".$id;
			$result = $admin->where($result)->find();

			print_r(json_encode($result));


		}
	}

	public function del(){
		$id = isset($_GET['adm_id']) ? intval($_GET['adm_id']) : '';
		if ($id == '') {
			exit("bad param!");
		}
		if(M("administrator")->delete($id)){
			$this->success("删除成功！");
		}
	}

	//退出管理员登录
	public function logout(){	
		session('[destroy]');
		redirect(U('Admin/Admin/login'),0,' ');
		$this->display();
	}
	


}