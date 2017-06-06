<?php
namespace Home\Controller;
use Think\Controller;
class IssueController extends Controller {

    public function __construct(){  
        parent::__construct();
        if (!isset($_SESSION['id']) || $_SESSION['id']=='') {
            $this->redirect("user/login");
        }
        else{   
            $user = M('usertab');
            $userid = $_SESSION['id'];
            $where = 'user_id='.$userid;
            $result = $user->where($where)->find();
            $this->assign('user',$result);
        }
    }

    public function index(){	
    	$this->display();
    }
    public function submit(){	
    	$this->redirect('Issue/check');
    }
    public function add(){	
        if(IS_POST){    
            $Model = M('information');
            $condition = array(    
                'inf_user_id' => I("post.user_id"),
                'inf_carnumber' => I("post.carNumber"),
                'inf_displacement' => I("post.disPlacement"),
                'inf_journey' => I("post.Journey"),
                'inf_dayprice' => I("post.dayPrice"),
                'inf_weekprice' => I("post.weekPrice"),
                'inf_monthprice' => I("post.monthPrice"),
                'inf_gearbox' => I("post.gearbox"),
                'inf_chair' => I("post.chair")
                );

            $result = M('information')->data($condition)->add(); 

            if($result){
                $this->redirect("Issue/authentication");
            }else{
                $this->redirect('Issue/addInf');
            }
        }
        else{   
            $this->display();
        }
    	// $this->redirect('Issue/authentication');
    }
    public function upload(){
        // $upload= new \Think\Upload();//实例化上传类
        // $upload->maxsize=3145728;
        // $upload->exts= array('jpg','gif','png','jpeg');
        // $upload->rootPath = THINK_PATH;
        // $upload->savePath='../Public/uploads/';

        // //上传文件
        // $info = $upload->upload();
        // if(!$info){
        //     $this->error($upload->getError());
        // }else{
        //     $userModel=M('usertab');
        //     $data=$userModel->create();
            
        //     //设置thumb字段属性
        //     $data['user_idphoto']=$info['thumb']['savepath'].$info['thumb']['savename'];
        //     $z = $userModel->add($data);
        //     if($z){
        //        $this->redirect('Issue/perfectInf');
        //     }else{
        //         $this->showError('图片上传失败');
        //     }
            
        // }
        $this->redirect('Issue/perfectInf');
    }
    public function addDetail(){	
        if(IS_POST){    
            $Model = M('information');
            $condition = array(    
                'inf_user_id' => I("post.user_id"),
                'inf_color' => I("post.color"),
                'inf_window' => I("post.window"),
                'inf_gps' => I("post.gps"),
                'inf_sound' => I("post.sound"),
                'inf_dvd' => I("post.dvd"),
                'inf_camera' => I("post.camera"),
                'inf_gasbag' => I("post.gasbag"),
                'inf_leather' => I("post.leather"),
                'inf_smoke' => I("post.smoke"),
                'inf_introduce' => I("post.introduce")

                );

            $result = M('information')->data($condition)->add(); 
            if($result){
                $this->redirect("Issue/check");
            }else{
                $this->redirect('Issue/perfectInf');
            }
        }
        else{   
            $this->display();
        }
    	// $this->redirect('Issue/check');
    }

}
?>