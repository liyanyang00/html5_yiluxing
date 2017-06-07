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
                'inf_user_id' => $_SESSION['id'],
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
            $data = M('information')->where($condition)->find();
            $inf_id = $data['inf_id'];
            $_SESSION['infId']=$inf_id;
            if($result){               
                $this->redirect("Home/Issue/authentication/inf_id/{$inf_id}");
            }else{
                $this->redirect('Issue/addInf');
            }
        }
    	// $this->redirect('Issue/authentication');
    }
    public function upload(){
        $upload= new \Think\Upload();//实例化上传类
        $upload->maxsize=3145728;
        $upload->exts= array('jpg','gif','png','jpeg');
        $upload->rootPath = THINK_PATH;
        $upload->savePath='../Public/upload/';

        //上传文件
        $info = $upload->upload();
        if(!$info){
            $this->error($upload->getError());
        }else{
            foreach($info as $file){
                    $path = substr($file['savepath'], 9);
                    $string = $path.$file['savename'];
                    $i.=$string.',';

                }
            $a = substr($i, 0, -1) ;
            
            $model = M('usertab');
            // 保存当前数据对象
            $where = "user_id=".$_SESSION['id'];
            $result =$model->where($where)->find();
            $result['user_idphoto']=$a.','.$img;
            // $data['user_idphoto'] = $info[0]['savename'];
            $model->save($result);

            $this->redirect('Issue/perfectInf');
        }
        // $this->redirect('Issue/perfectInf');
    }
    public function addDetail(){	
        if(IS_POST){    
            $Model = M('information');            
            $condition = array(
                'inf_id' => $_SESSION['infId'],
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
            // $where = 'inf_id='.$_SESSION['infId'];
            // $result = M('information')->where($where)->find();
            M('information')->data($condition)->add();


            $upload= new \Think\Upload();//实例化上传类
            $upload->maxsize=3145728;
            $upload->exts= array('jpg','gif','png','jpeg');
            $upload->rootPath = THINK_PATH;
            $upload->savePath='../Public/uploads/';

            //上传文件
            $info = $upload->upload();
            if(!$info){
                $this->error($upload->getError());
            }else{
                foreach($info as $file){
                        $path = substr($file['savepath'], 9);
                        $string = $path.$file['savename'];
                        $i.=$string.',';

                    }
                $a = substr($i, 0, -1) ;
                
                $Model = M('information');
                // 保存当前数据对象
                $where = "inf_user_id=".$_SESSION['id'];
                $result =$Model->where($where)->find();
                $result['inf_carphoto']=$a.','.$img;
                $Model->save($result);               
            }
                $this->redirect("Issue/check");
        }        
    	// $this->redirect('Issue/check');
    }

}
?>