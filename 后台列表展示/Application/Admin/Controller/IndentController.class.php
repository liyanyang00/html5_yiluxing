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
		$indent = $indentModel->select();
		$this->assign('indent', $indent);
		$data = M('indent')->join('information on information.inf_id = indent.inf_id','left')->join('usertab on usertab.user_id=information.inf_user_id','left')->select();
        

        $this->assign('indent',$data);
		$this->display();
	}
}