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
    
        $count = $userModel->count();// 查询满足要求的总记录数
       
        $Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
  
        
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','末页');
        $Page->setConfig('first','首页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
  
        $show = $Page->show();// 分页显示输出
          // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $userModel->order('user_id')->limit($Page->firstRow.','.$Page->listRows)->select();
      
        $this->assign('usertab',$list);// 赋值数据集
        
        $this->assign('page',$show);// 赋值分页输出

		$this->display();
	}
	public function owner(){
		$user1Model = M("usertab");
		$count = M('information')->join('usertab on information.inf_user_id = usertab.user_id')->distinct(true)->field('user_id')->select();
		$count =  count($count);
		$Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)

        
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','末页');
        $Page->setConfig('first','首页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        $show = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
		$data = M('information')->join('usertab on information.inf_user_id = usertab.user_id')->distinct(true)->field('user_id')->select();
        $this->assign('usertab',$data);
		$this->display();
	}
	public function search(){ 
	    $Model = M('usertab');
	    $value = $_GET['search_value'];

	    $condition['user_name'] = array('like','%'.$value.'%');

	    $count = $Model->where($condition)->count();

	    $Page = new \Think\Page($count,1);        
	    
	    $Page->setConfig('prev','上一页');
	    $Page->setConfig('next','下一页');
	    $Page->setConfig('last','末页');
	    $Page->setConfig('first','首页');
	    $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

	    $data = $Model->where($condition)->limit($Page->firstRow.','.$Page->listRows)->select();
	    $this->assign('usertab',$data);

	    $show = $Page->show();// 分页显示输出
	    $this->assign('page',$show);// 赋值分页输出
	    $this->display();
    }
	public function action(){	
		if(IS_POST){	
			$id = I('id');
			$user = M("usertab");
			$ids = "user_id=".$id;
			$result = $user->where($ids)->find();
			$result['user_idphoto'] = rtrim($result['user_idphoto'],',');
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
	public function searchOwner(){	
		$Model = M('usertab');
	    $value = $_GET['search_value'];

	    $condition['user_name'] = array('like','%'.$value.'%');
	    $condition['user_telephone'] = array('like','%'.$value.'%');
	    $condition['_logic'] = 'or';
	    $data = M('information')->join('usertab on information.inf_user_id = usertab.user_id')->where($condition)->distinct(true)->field('user_id')->select();
	    $count = count($data);
	    $Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)

        
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','末页');
        $Page->setConfig('first','首页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        $show = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('usertab',$data);
        $this->display();
	}

}