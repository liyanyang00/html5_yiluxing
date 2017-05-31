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
	
	public function add(){
		$this->display();
	}

	public function doAdd() {
		if (!IS_POST) {
			exit("bad request!");
		}
		$adminModel = M("administrator");
		if (!$adminModel->create()) {
			$this->error($adminModel->getError());
		}
		if ($adminModel->add()) {
			$this->success("添加成功！", U("Admin/Admin/index"));
		}
		else {
			$this->error("添加失败！");
		}
	}

	public function alert(){
		$this->display();
	}

	public function doAlert(){
		if (IS_POST) {
            $adminModel = M("administrator");
        	$adminModel->create();
            if($adminModel->save()){                
                $this->success("修改成功", U("Admin/Admin/index"));
            }
            else {
                $this->error($adminModel->getError());
            }
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
}