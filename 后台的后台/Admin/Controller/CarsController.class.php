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
        $data = M('usertab')->join('information on information.inf_user_id = usertab.user_id')->select();
        $this->assign('information',$data);	
		$this->display();
	}
	public function special(){	
		$infModel = M('information');
		$where = "inf_add='是'";
		$result = M('usertab')->join('information on information.inf_user_id = usertab.user_id')->where($where)->select();
		$this->assign("data",$result);
		$this->display();
	}
	public function add(){
		$addModel = M("information");
		$where = "inf_state='已通过'";
        $data = M('usertab')->join('information on information.inf_user_id = usertab.user_id')->where($where)->select();
        $this->assign('information',$data);
		$this->display();
	}
	public function action(){	
		if(IS_POST){	
			$infModel = M("information");
			$id = I('id');
			$ids = 'inf_id='.$id;
			$data = M('usertab')->join('information on information.inf_user_id = usertab.user_id')->where($ids)->find();
			print_r(json_encode($data));

		}
		

	}

}