<?php
namespace Admin\Controller;
use Think\Controller;
class CarsController extends Controller {	
	public function __construct() {
    parent::__construct();
    
    if (!isLogin()) {
      	$this->redirect('Admin/login');
    }
  }

	public function check(){
		$checkModel = M("information");

           $count = $checkModel->count();// 查询满足要求的总记录数
     
      $Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)

      ////$Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
      $Page->setConfig('prev','上一页');
      $Page->setConfig('next','下一页');
      $Page->setConfig('last','末页');
      $Page->setConfig('first','首页');
      $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

      $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
      $list = M('usertab')->join('information on information.inf_user_id = usertab.user_id')->order('inf_id desc')->limit($Page->firstRow.','.$Page->listRows)->select();

      $this->assign('information',$list);// 赋值数据集
   
      $this->assign('page',$show);// 
		$this->display();
	}
	public function special(){	
		$infModel = M('information');
		$result = "inf_add='是'";
		$count = M('information')->where($result)->count();


		$Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)

      	//$Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
      	$Page->setConfig('prev','上一页');
     	$Page->setConfig('next','下一页');
      	$Page->setConfig('last','末页');
      	$Page->setConfig('first','首页');
      	$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

      	$show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
   
      	$this->assign('page',$show);// 
		$where = "inf_add='是'";
		$result = M('usertab')->join('information on information.inf_user_id = usertab.user_id')->where($where)->select();
		$this->assign("data",$result);
		$this->display();
	}
	public function add(){
		$addModel = M("information");
		$where = "inf_state='已通过'";
		$condition = array(
			'inf_add' => "否",
			'inf_state' => "已通过"
			);
        $data = M('usertab')->join('information on information.inf_user_id = usertab.user_id')->where($condition)->select();
        $this->assign('information',$data);
		$this->display();
	}
	public function action(){	
		if(IS_POST){	
			$infModel = M("information");
			$id = I('id');
			$ids = 'inf_id='.$id;
			$data = M('usertab')->join('information on information.inf_user_id = usertab.user_id')->where($ids)->find();
			$data['user_idphoto'] = rtrim($data['user_idphoto'],',');
			print_r(json_encode($data));

		}
		
	}
	public function pass(){	
		$id = isset($_GET['inf_id']) ? intval($_GET['inf_id']) : '';
		$condition = array(	
			'inf_id' => $id
			);
		$infModel = M('information');
		$result = $infModel->where($condition)->find();
		$result['inf_state'] = '已通过';
		if($infModel->save($result)){	
			$this->redirect('Cars/check');
		}
		else{	
			$this->error();
		}
	}

	public function notPass(){	
		$id = isset($_GET['inf_id']) ? intval($_GET['inf_id']) : '';
		$condition = array(	
			'inf_id' => $id
			);
		$infModel = M('information');
		$result = $infModel->where($condition)->find();
		$result['inf_state'] = '未通过';
		if($infModel->save($result)){	
			$this->redirect('Cars/check');
		}
		else{	
			$this->error();
		}
	}
	public function del(){	
		$id = isset($_GET['inf_id']) ? intval($_GET['inf_id']) : '';
		$condition = array(	
			'inf_id' => $id
			);
		$infModel = M('information');
		$result = $infModel->where($condition)->find();
		$result['inf_add'] = "否";
		$result['inf_specialdate'] = NULL;
		$result['inf_specialprice'] = NULL;
		if($infModel->save($result)){	
			$this->redirect('Cars/special');
		}
		else{	
			$this->error();
		}
	}
	public function append(){	
		$condition = array(
			'inf_specialdate' => I('inf_specialdate'),
			'inf_specialprice' => I('inf_specialprice')
			);
			$id = 'inf_id='.I('inf_id');
			$result = M('information')->where($id)->find();
			$result['inf_add'] = "是";
			$result['inf_specialdate'] = I('inf_specialdate');
			$result['inf_specialprice'] = I('inf_specialprice');
			if(M('information')->save($result)){	
				$this->redirect('Cars/special');
			}
			else{	
				$this->error();
			}
	}

	public function search(){
		$Model = M('information');	

	    $value = $_GET['search_value'];

	  	$condition['inf_type'] = array('like','%'.$value.'%');
	  	$condition['inf_city'] = array('like','%'.$value.'%');
      	$condition['inf_carnumber'] = array('like','%'.$value.'%');
      	$condition['user_name'] = array('like','%'.$value.'%');
      	$condition['_logic'] = 'or';
 
	    $count = $Model->join('usertab on information.inf_user_id = usertab.user_id')->where($condition)->count();

	    $Page = new \Think\Page($count,5);        
	    //$Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
	    $Page->setConfig('prev','上一页');
	    $Page->setConfig('next','下一页');
	    $Page->setConfig('last','末页');
	    $Page->setConfig('first','首页');
	    $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

	    $data = M('usertab')->join('information on information.inf_user_id = usertab.user_id')->where($condition)->limit($Page->firstRow.','.$Page->listRows)->select();
	    $this->assign('information',$data);

	    $show = $Page->show();// 分页显示输出
	    $this->assign('page',$show);// 赋值分页输出

		$this->display();
	}
	public function searchspecial(){	
		$Model = M('information');	

	    $value = $_GET['search_value'];
	  	$condition['inf_type'] = array('like','%'.$value.'%');
	  	$condition['inf_city'] = array('like','%'.$value.'%');
      	$condition['inf_carnumber'] = array('like','%'.$value.'%');
      	$condition['user_name'] = array('like','%'.$value.'%');
      	$condition['_logic'] = 'or';

	    $count = $Model->join('usertab on information.inf_user_id = usertab.user_id')->where($condition)->count();
	  
	    $Page = new \Think\Page($count,5);        
	    //$Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
	    $Page->setConfig('prev','上一页');
	    $Page->setConfig('next','下一页');
	    $Page->setConfig('last','末页');
	    $Page->setConfig('first','首页');
	    $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

	    $data = M('usertab')->join('information on information.inf_user_id = usertab.user_id')->where($condition)->limit($Page->firstRow.','.$Page->listRows)->select();
	    $this->assign('information',$data);

	    $show = $Page->show();// 分页显示输出
	    $this->assign('page',$show);// 赋值分页输出

		$this->display();
	}
	public function query(){
        $Model = M('information');

         $starttime1 = $_GET['date1'];
        $endtime1 = $_GET['date2'];

        $starttime2 = strtotime($starttime1);
        $endtime2 = strtotime($endtime1);

        $starttime = date("Y-m-d H:i:s", $starttime2);
        $endtime = date("Y-m-d H:i:s", $endtime2);

        $condition['inf_startdate'] = array('between',array($starttime,$endtime));
        $condition['inf_enddate'] = array('egt',$endtime);
        $count = $Model->where($condition)->count();// 查询满足要求的总记录数

        $Page = new \Think\Page($count,5);// 实例化分页类 
        //$Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','末页');
        $Page->setConfig('first','首页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

        $data = M('usertab')->join('information on information.inf_user_id = usertab.user_id')->where($condition)->order('inf_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('information',$data);

        $show = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
  
        $this->display();
    }
    public function queryspecial(){	
    	$infModel = M('information');
		$date = $_GET['date'];
		$starttime = strtotime($date);
		$starttime = date("Y-m-d", $starttime);
		$condition['inf_specialdate'] = array('eq',$starttime);
		$condition['inf_add'] = "是";
		$count = M('information')->where($condition)->count();

		$Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)

      	//$Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
      	$Page->setConfig('prev','上一页');
     	$Page->setConfig('next','下一页');
      	$Page->setConfig('last','末页');
      	$Page->setConfig('first','首页');
      	$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

      	$show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
   
      	$this->assign('page',$show);// 
		$result = M('usertab')->join('information on information.inf_user_id = usertab.user_id')->where($condition)->select();
		$this->assign("data",$result);
		$this->display();

    }

}