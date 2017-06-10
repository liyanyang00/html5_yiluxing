<?php
   namespace Admin\Controller;
   use Think\Controller;
   class IndexController extends Controller{
   		public function __construct(){
   		
   			parent::__construct();
   			$this->redirect('Admin/login');
   	
   		}

   }
?>