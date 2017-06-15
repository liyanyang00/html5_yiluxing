<?php
namespace Admin\Controller;
use Think\Controller;
session_start();
class AdminController extends Controller {	


	public function index(){	

		if (!isLogin()) {
      	$this->redirect('Admin/login');
    }
    	$admstatus=$_SESSION['adm_status'];
        if ($admstatus != 1) {
           	$this->error("您不是超级管理员，无法访问该页面");           	
        }
    	$adminModel = M("administrator");

		$count = $adminModel->count();// 查询满足要求的总记录数
     
      $Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)

      //$Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
      $Page->setConfig('prev','上一页');
      $Page->setConfig('next','下一页');
      $Page->setConfig('last','末页');
      $Page->setConfig('first','首页');
      $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

      $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
      $list = $adminModel->order('adm_id')->limit($Page->firstRow.','.$Page->listRows)->select();
    
      $this->assign('administrator',$list);// 赋值数据集
      
      $this->assign('page',$show);// 赋值分页输出
		$this->display();
	}

	public function search(){ 
		$admstatus=$_SESSION['adm_status'];
        if ($admstatus != 1) {
           	$this->error("您不是超级管理员，无法访问该页面");           	
        }
	    $Model = M('administrator');
	    $value = $_GET['search_value'];

	    $condition['adm_username'] = array('like','%'.$value.'%');
	    $condition['adm_name'] = array('like','%'.$value.'%');
	    $condition['adm_phone'] = array('like','%'.$value.'%');
	    $condition['adm_email'] = array('like','%'.$value.'%');
	    $condition['_logic'] = 'or';

	    $count = $Model->where($condition)->count();

	    $Page = new \Think\Page($count,5);        
	    //$Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
	    $Page->setConfig('prev','上一页');
	    $Page->setConfig('next','下一页');
	    $Page->setConfig('last','末页');
	    $Page->setConfig('first','首页');
	    $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

	    $data = $Model->where($condition)->limit($Page->firstRow.','.$Page->listRows)->select();
	    $this->assign('administrator',$data);

	    $show = $Page->show();// 分页显示输出
	    $this->assign('page',$show);// 赋值分页输出
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
				session('adm_status',$result['adm_status']);
				$this->redirect('Indent/index');

			}

			else{	
				$this->error('您输入的用户名或密码不正确');
			}
		}
		else{	
			$this->display();
		}
	}
	public function add(){	
		$admstatus=$_SESSION['adm_status'];
        if ($admstatus != 1) {
           	$this->error("您不是超级管理员，无法访问该页面");           	
        }
        $this->display();
	}

	//添加管理员
	public function doadd(){	
		$admstatus=$_SESSION['adm_status'];
        if ($admstatus != 1) {
           	$this->error("您不是超级管理员，无法访问该页面");           	
        }
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
		$admstatus=$_SESSION['adm_status'];
        if ($admstatus != 1) {
           	$this->error("您不是超级管理员，无法访问该页面");           	
        }
		$this->display();
	}
	public function doAlter(){	
		$admstatus=$_SESSION['adm_status'];
        if ($admstatus != 1) {
           	$this->error("您不是超级管理员，无法访问该页面");           	
        }
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
		$admstatus=$_SESSION['adm_status'];
        if ($admstatus != 1) {
           	$this->error("您不是超级管理员，无法访问该页面");           	
        }
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