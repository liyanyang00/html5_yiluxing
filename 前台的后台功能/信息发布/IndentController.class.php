<?php
namespace Home\Controller;
use Think\Controller;
class IndentController extends Controller {
	public function __construct(){  
        parent::__construct();
        if (!isset($_SESSION['id']) || $_SESSION['id']=='') {
            $this->redirect('user/login');
        }
        else{   
            $user = M('usertab');
            $userid = $_SESSION['id'];
            $where = 'user_id='.$userid;
            $result = $user->where($where)->find();
            $this->assign('user',$result);

            $userId = $_SESSION['id'];
            $count = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where("ind_user_id=".$userId)->count();// 查询满足要求的总记录数
            $condition = array(
                "ind_user_id" => $userId,
                "ind_pay" => "否"
                );
            $count1 = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where($condition)->count();
            $count2 = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where("inf_user_id=".$userId)->count();
            $this->assign('count',$count);//租车单数
            $this->assign('count1',$count1);//未完成订单数
            $this->assign('count2',$count2);//出租订单数    

            $discount = $result['user_discount1']+$result['user_discount2']+$result['user_discount3'];
            $this->assign('discount',$discount);        
        }
    }

    public function createItem(){	
    	$this->display();
    }
    public function pay(){	
    	$ind_id = I('ind_id');
    	//$insur = I('insur');
    	$result = M('indent')->where('ind_id='.$ind_id)->find();
    	$result['ind_insurance'] = $insur;
    	$result['ind_state'] = "租赁中";
    	$result['ind_type'] = "普通订单";
    	$result['ind_pay'] ="是";
    	$result['ind_return'] = "否";
    	
    	$inform = M('information')->where("inf_id=".$result['ind_inf_id'])->find();
    	if($inform['inf_add'] == '是')
    	$inform['inf_carstate'] = "租赁中";
    	$result['ind_type'] = "活动订单";
    	M('indent')->save($result);
    	M('information')->save($inform);
    	$this->redirect('indent/rentItem');
    }

    public function rentItem(){	
    	$userId = $_SESSION['id'];
    	$where = "ind_user_id=".$userId;

    	$result = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where($where)->page($_GET['p'].',5')->select();
    	$count = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where($where)->count();// 查询满足要求的总记录数
     	
      	$Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)

	      ////$Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
	      $Page->setConfig('prev','上一页');
	      $Page->setConfig('next','下一页');
	      $Page->setConfig('last','末页');
	      $Page->setConfig('first','首页');
	      //$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
	      $show = $Page->show();// 分页显示输出
      	$this->assign('page',$show);
    	$this->assign('data',$result);
    	$this->display();
    }

    public function rentDetail(){	
    	$indId = $_GET['ind_id'];
    	$result = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where('ind_id='.$indId)->find();
    	$this->assign('data',$result);
    	$this->display();
    }

    public function myCars(){
        $where = 'inf_user_id='.$_SESSION['id'];
        
        $count = M('information')->where($where)->count();// 查询满足要求的总记录数
        
        $Page = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)

          ////$Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
          $Page->setConfig('prev','上一页');
          $Page->setConfig('next','下一页');
          $Page->setConfig('last','末页');
          $Page->setConfig('first','首页');
          //$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
          $show = $Page->show();// 分页显示输出
        $this->assign('page',$show);
        $result = M('information')->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$result);
        $this->display();
    }

    public function carDetail(){
        $infId = $_GET['inf_id'];
        $result = M('information')->join('indent on indent.ind_inf_id = information.inf_id','left')->where('inf_id='.$infId)->select();
        $this->assign('data',$result);
        $this->display();
    }

    public function change(){         
        if(IS_POST){
            $model = M('information');
            $condition = array(
                'inf_dayprice'  => I("day"),
                'inf_weekprice'  => I("week"),
                'inf_monthprice' => I("month")
                );
            $infId = $_POST['inf_id'];             
            $result = $model->where('inf_id='.$infId)->save($condition);

            $this->redirect("Home/Indent/carDetail/inf_id/{$infId}");
        }
    }

    public function doAlert(){
        if(IS_POST){
            $userModel = M('usertab');
            $where = 'user_id='.$_SESSION['id'];
            $result = $userModel->where($where)->find();
            if($result['user_password']==I('earlypwd')&&I('latepwd')==I('repwd')){ 
                $result['user_password'] = I('latepwd');
                if($userModel->save($result)){
                    $this->redirect("User/login");
                }  
            }else{                
                $this->redirect('Indent/alterPwd');
            }
        }
    } 

    public function personal(){
        
        $where = 'user_id='.$_SESSION['id'];
        $result = M('usertab')->where($where)->find();
        $this->assign('data',$result);  
        $this->display();   
    }

    public function edit(){
        if (IS_POST) {
            $model = M('usertab');
            $condition = array(
                'user_sex' => I('sex'),
                'user_name' => I('username'),
                'user_type' => I('idtype'),
                'user_telephone' => I('telephone')
                );
            $where = 'user_id='.$_SESSION['id'];
            $result = $model->where($where)->save($condition);
            if($result){ 
                $this->redirect('Indent/personal');
            }
        }
    }

    public function upload(){
        if(IS_POST){
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
                $user = M('usertab');
                //组织数据
                $id = $_SESSION['id'];
                $findid = 'user_id='.$id;;
                $b = $user->where($findid)->find();              
                //设置thumb字段属性(目录+名字)
                $data['user_head']=$info['fileField']['savepath'].$info['fileField']['savename'];
                $b['user_head']=$data['user_head'];
                $result = $user->save($b);
                if($result){

                    $this->redirect('personal');
                }
                else{   
                    $this->error("添加失败");
                }
           
            }            
        }  
        else{   
            $this->error();
        }
    }
}
?>