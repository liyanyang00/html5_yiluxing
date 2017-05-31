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
		$message = $messageModel->select();
		$this->assign('message', $message);
		$this->display();
	}

}