<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends Controller {
		public function __construct(){  
        parent::__construct();
        if (!isset($_SESSION['id']) || $_SESSION['id']=='') {
            $_SESSION['id'] = -1;
        }        
    }
	public function index(){
			$this->display();
	}
	public function submit(){	
		if(IS_POST){	
			$messageModel = M('message');
			if($_SESSION['id']!=-1){
				$user = M('usertab');
				$where="user_id=".$_SESSION['id'];
				$a = $user->where($where)->find();
				$condition = array(	
				'user_id'=>$_SESSION['id'],
				'mes_username' => $a['user_name'],
				'mes_telephone' => I("post.telephone"),
				'mes_intoduce' => I("post.introduce"),
				'mes_email' => I("post.email"),
				'mes_content' => I("post.content"),
				'mes_publish' => I('post.publish')
				);
			}
			else{
				$condition = array(	
				'user_id'=>$_SESSION['id'],
				'mes_telephone' => I("post.telephone"),
				'mes_intoduce' => I("post.introduce"),
				'mes_email' => I("post.email"),
				'mes_content' => I("post.content"),
				'mes_publish' => I('post.publish')
				);
			}

			$result=$messageModel->data($condition)->add();
			if($result){
				$this->redirect("Message/index");
			}			
		}
	}

	}
?>