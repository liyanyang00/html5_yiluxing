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
     
      $Page = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数(25)

      $Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
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
	

        $count = $user1Model->count();// 查询满足要求的总记录数
     
      $Page = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数(25)

      $Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
      $Page->setConfig('prev','上一页');
      $Page->setConfig('next','下一页');
      $Page->setConfig('last','末页');
      $Page->setConfig('first','首页');
      $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

      $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
      $list = M('information')->join('usertab on information.inf_user_id = usertab.user_id')->order('user_id')->limit($Page->firstRow.','.$Page->listRows)->select();
    
      $this->assign('usertab',$list);// 赋值数据集
      
      $this->assign('page',$show);// 赋值分页输出
		$this->display();
	}

    public function search(){ 
	    $Model = M('usertab');
	    $value = $_GET['search_value'];

	    $condition['user_name'] = array('like','%'.$value.'%');

	    $count = $Model->where($condition)->count();

	    $Page = new \Think\Page($count,1);        
	    $Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
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

    public function searchOwner(){ 
	    $Model = M('usertab');
	    $value = $_GET['search_value'];

	    $condition['user_name'] = array('like','%'.$value.'%');

	    $count = $Model->where($condition)->count();

	    $Page = new \Think\Page($count,1);        
	    $Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
	    $Page->setConfig('prev','上一页');
	    $Page->setConfig('next','下一页');
	    $Page->setConfig('last','末页');
	    $Page->setConfig('first','首页');
	    $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

	    $data = M('information')->join('usertab on information.inf_user_id = usertab.user_id')->where($condition)->limit($Page->firstRow.','.$Page->listRows)->select();
	    $this->assign('usertab',$data);

	    $show = $Page->show();// 分页显示输出
	    $this->assign('page',$show);// 赋值分页输出
	    $this->display();
    }

}