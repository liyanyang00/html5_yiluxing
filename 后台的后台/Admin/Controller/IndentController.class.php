<?php
namespace Admin\Controller;
use Think\Controller;
class IndentController extends Controller {	
	public function __construct() {
    parent::__construct();
    
    if (!isLogin()) {
      	$this->redirect('Admin/login');
    }
  }

	public function index(){	
		$indentModel = M("indent");	

		$data = M("indent")->join('information on information.inf_id = indent.inf_id','left')->join('usertab on usertab.user_id=information.inf_user_id','left')->select();
        $this->assign('indent',$data);

         $count = $indentModel->count();// 查询满足要求的总记录数
     
      $Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)

      //$Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
      $Page->setConfig('prev','上一页');
      $Page->setConfig('next','下一页');
      $Page->setConfig('last','末页');
      $Page->setConfig('first','首页');
      $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

      $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
      $list = M("indent")->join('information on information.inf_id = indent.inf_id','left')->join('usertab on usertab.user_id=information.inf_user_id','left')->order('ind_id')->limit($Page->firstRow.','.$Page->listRows)->select();
    
      $this->assign('indent',$list);// 赋值数据集
      
      $this->assign('page',$show);// 



		$this->display();
	}

	public function search(){
		
		$Model = M("indent");
	    $value = $_GET['search_value'];

	   $condition['ind_id'] = array('like','%'.$value.'%');
      $condition['inf_type'] = array('like','%'.$value.'%');
      $condition['user_name'] = array('like','%'.$value.'%');
      $condition['ind_type'] = array('like','%'.$value.'%');
      $condition['_logic'] = 'or';

	    $count = $Model->join('information on information.inf_id = indent.inf_id','left')->join('usertab on usertab.user_id=information.inf_user_id','left')->where($condition)->count();


	    $Page = new \Think\Page($count,5);        
	    //$Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
	    $Page->setConfig('prev','上一页');
	    $Page->setConfig('next','下一页');
	    $Page->setConfig('last','末页');
	    $Page->setConfig('first','首页');
	    $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

	    $data = M("indent")->join('information on information.inf_id = indent.inf_id','left')->join('usertab on usertab.user_id=information.inf_user_id','left')->where($condition)->limit($Page->firstRow.','.$Page->listRows)->select();
	    $this->assign('indent',$data);

	    $show = $Page->show();// 分页显示输出
	    $this->assign('page',$show);// 赋值分页输出
	    

	    $this->display();
	}

	public function query(){
        $Model = M('indent');

        $starttime1 = $_GET['date1'];
        $endtime1 = $_GET['date2'];

        $starttime2 = strtotime($starttime1);
        $endtime2 = strtotime($endtime1);

        $starttime = date("Y-m-d H:i:s", $starttime2);
        $endtime = date("Y-m-d H:i:s", $endtime2);

        $condition['ind_startdate'] = array('between',array($starttime,$endtime));

        $count = $Model->where($condition)->count();// 查询满足要求的总记录数

        $Page = new \Think\Page($count,5);// 实例化分页类 
        //$Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','末页');
        $Page->setConfig('first','首页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

        $data = M("indent")->join('information on information.inf_id = indent.inf_id','left')->join('usertab on usertab.user_id=information.inf_user_id','left')->where($condition)->order('ind_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('indent',$data);

        $show = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
  
        $this->display();
    }

	public function action(){	
		if(IS_POST){	
			$id = I('id');
			$indentModel = M("indent");
			$ids = 'ind_id='.$id;
			$result = M('indent')->join('information on information.inf_id = indent.inf_id','left')->join('usertab on usertab.user_id=information.inf_user_id','left')->where($ids)->find();
			//$result = $indentModel -> where($ids)->find();
			
			print_r(json_encode($result));

		}
		

	}

}