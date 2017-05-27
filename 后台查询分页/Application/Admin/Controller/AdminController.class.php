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

		// $admin = $adminModel->select();
		// $this->assign('administrator', $admin);

		$count = $adminModel->count();// 查询满足要求的总记录数
     
      $Page = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数(25)

      $Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
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
	    $Model = M('administrator');
	    $value = $_GET['search_value'];

	    $condition['adm_username'] = array('like','%'.$value.'%');

	    $count = $Model->where($condition)->count();

	    $Page = new \Think\Page($count,1);        
	    $Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
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