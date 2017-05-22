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
		$this->display();
	}

}