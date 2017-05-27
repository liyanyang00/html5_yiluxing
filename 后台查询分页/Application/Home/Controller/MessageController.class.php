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
			$condition = array(	
				'mes_telephone' => I("post.telephone"),
				'mes_intoduce' => I("post.advicetext"),
				'mes_email' => I("post.address"),
				'mes_content' => I("post.messages"),
				'user_id' => I("post.user_id"),
				'mes_publish' => I('post.publish'),
				);
			$userID = mysql_query("select user_id from usertab");
			$userName = mysql_query("select user_name from usertab");
			$mesUserName = mysql_query("select mes_username from message");
			if($userID > 0){
				$mesUserName = $userName;
			}
			$result = M('message')->data($condition)->add();
			if($result){
				$this->redirect('message/index');
				echo "<script>alert('提交成功！')</script>";				
			}
			else{	
				$this->redirect('message/index');
				echo "<script>alert('提交失败！请再试一次！')</script>";
			}			
		}
	}
}
