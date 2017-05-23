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
		$check = $checkModel->select();
		$this->assign('information', $check);	
        $data = M('usertab')->join('information on information.inf_user_id = usertab.user_id')->select();
        $this->assign('information',$data);
		$this->display();
	}

	public function special(){
		$specialModel = M("information");
		$special = $specialModel->select();
		$this->assign('information', $special);	
		$data = M('usertab')->join('information on information.inf_user_id = usertab.user_id')->select();
        $this->assign('information',$data);
		$this->display();
	}

	public function add(){
		$this->display();
	}
}