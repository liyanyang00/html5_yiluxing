<?php
namespace Admin\Controller;
use Think\Controller;
class MessageController extends Controller {	
	public function __construct() {
    parent::__construct();
    
    if (!isLogin()) {
      	$this->redirect('Admin/login');
    }
  }

	public function index(){	
		$messageModel = M("message");

		$count = $messageModel->count();// 查询满足要求的总记录数
     
      $Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)

      //$Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
      $Page->setConfig('prev','上一页');
      $Page->setConfig('next','下一页');
      $Page->setConfig('last','末页');
      $Page->setConfig('first','首页');
      $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

      $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
      $list = $messageModel->order('mes_id')->limit($Page->firstRow.','.$Page->listRows)->select();
    
      $this->assign('message',$list);// 赋值数据集
      
      $this->assign('page',$show);// 赋值分页输出
		$this->display();
	}

	public function search(){ 
	    $Model = M('message');
	    $value = $_GET['search_value'];

	    $condition['mes_intoduce'] = array('like','%'.$value.'%');
	    $condition['mes_username'] = array('like','%'.$value.'%');
	    $condition['mes_telephone'] = array('like','%'.$value.'%');
	    $condition['mes_email'] = array('like','%'.$value.'%');
	    $condition['_logic'] = 'or';

	    $count = $Model->where($condition)->count();

	    $Page = new \Think\Page($count,2);        
	    //$Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
	    $Page->setConfig('prev','上一页');
	    $Page->setConfig('next','下一页');
	    $Page->setConfig('last','末页');
	    $Page->setConfig('first','首页');
	    $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

	    $data = $Model->where($condition)->limit($Page->firstRow.','.$Page->listRows)->select();
	    $this->assign('message',$data);

	    $show = $Page->show();// 分页显示输出
	    $this->assign('page',$show);// 赋值分页输出
	    $this->display();
    }
	public function action(){	
		if(IS_POST){	
			$id = I('id');
			$messageModel = M("message");
			$ids = "mes_id=".$id;
			$result = $messageModel->where($ids)->find();
			print_r(json_encode($result));
		}

	}
	public function reply(){	
		$id = isset($_GET['mes_id']) ? intval($_GET['mes_id']) : '';
		$condition = array(	
			'mes_id' => $id
			);
		$mesModel = M('message');
		$result = $mesModel->where($condition)->find();
		$result['mes_state'] = '已回复';
		if($mesModel->save($result)){	
			$this->redirect('Message/index');
		}
		else{	
			$this->error();
		}
	}

}