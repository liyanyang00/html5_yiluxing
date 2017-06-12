<?php
namespace Home\Controller;
use Think\Controller;
class RentController extends Controller {
	public function __construct(){  
        parent::__construct();
        if (!isset($_SESSION['id']) || $_SESSION['id']=='') {
            
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
    	$inform = M('information');
    	$where = array(
    		'inf_state' => '已通过',
    		'inf_carstate' => '空闲中'
    		);
    	$result = $inform->where($where)->order('inf_id desc')->page($_GET['p'].',5')->select();
    	//var_dump($result);
    	$count = $inform->where($where)->count();// 查询满足要求的总记录数
     	
      	$Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)

	      ////$Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
	      $Page->setConfig('prev','上一页');
	      $Page->setConfig('next','下一页');
	      $Page->setConfig('last','末页');
	      $Page->setConfig('first','首页');
	      //$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
	      $this->assign('infor',$result);
      	$show = $Page->show();// 分页显示输出
      	$this->assign('page',$show);
    	
    	$this->display();

    }
    public function search(){		
    	$inform = M('information');
    	$condition['inf_state'] = '已通过';
    	$condition['inf_carstate'] = '空闲中';
    	//position
    	$starttime1 = I('date1');
        $endtime1 = I('date2');

        $starttime2 = strtotime($starttime1);
        $endtime2 = strtotime($endtime1);

        $starttime = date("Y-m-d", $starttime2);
        $endtime = date("Y-m-d", $endtime2);

        $condition['inf_startdate'] = array('between',array($starttime,$endtime));
        $condition['inf_enddate'] = array('egt',$endtime);
        $count = $inform->where($condition)->count();// 查询满足要求的总记录数
    	$result = $inform->where($condition)->order('inf_id desc')->page($_GET['p'].',5')->select();
    	
      	$Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)

	      ////$Page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
	      $Page->setConfig('prev','上一页');
	      $Page->setConfig('next','下一页');
	      $Page->setConfig('last','末页');
	      $Page->setConfig('first','首页');
	      //$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
	      $this->assign('infor',$result);
      	$show = $Page->show();// 分页显示输出
      	$this->assign('page',$show);
    	
    	$this->display();
    	
    }
    public function detail(){	
    	$id = $_GET['inf_id'];
    	$inform = M('information');
    	$where = "inf_id=".$id;
    	$result = $inform->where($where)->find();
    	$this->assign('data',$result);
    	$this->display();
    }
    public function wantit(){	
    	$day = I('day');
    	$startdate = I('date');
    	$enddate = date('Y-m-d',strtotime("$startdate +$day day"));
    	echo $enddate;

    	$infId = I('inf_id');
    	$condition = array(
    		'ind_user_id' => $_SESSION['id'],
    		'ind_inf_id' => $infId,
    		'ind_startdate' => $startdate,
    		'ind_enddate' => $enddate,
    		'ind_day' => $day
    		);
    	
    	$where = "inf_id=".$infId;
    	
    	//$result = M('indent')->join('information on information.inf_id = indent.ind_inf_id')->where($where)->select();
    	$infModel = M('information')->where($where)->find();
    	if($day<7){	
    		$condition['ind_originalprice'] = $day*$infModel['inf_dayprice'];
    	}elseif($day>=7 && $day<30){	
    		$condition['ind_originalprice'] = floor($day/7)*$infModel['inf_weekprice']+($day%7)*$infModel['inf_dayprice'];
    	}
    	elseif($day>=30){	
    		$condition['ind_originalprice'] = floor($day/30)*$infModel['inf_monthprice'] + floor(($day%30)/7)*$infModel['inf_weekprice']+(($day%30)%7)*$infModel['inf_dayprice'];
    	}

    	if($_SESSION['id']>0){	
    		$indent = M('indent');
    		$result = $indent->data($condition)->add();
	    	if($result){	
	    		$ind = $indent->where($condition)->find();
	    		$this->assign('indent',$ind);
	    		$this->redirect("Home/Rent/rentIt/ind_id/{$ind['ind_id']}");
	    	}
    	}
    	else{	
    		$this->redirect('user/login');
    	}
    	
    }
    public function rentIt(){	
    	$ind_id = $_GET['ind_id'];
    	$result = M('indent')->where("ind_id=".$ind_id)->find();
    	$car = M('information')->where("inf_id=".$result['ind_inf_id'])->find();
    	$this->assign('ind',$car);
    	$this->display();
    }
    public function sure(){	
    	$ind = I('indId');
    	var_dump($ind);
    	$this->redirect("Home/Indent/createItem/ind_id/{$ind}");
    }
	public function create(){	
		$this->redirect('Indent/shareItem');
	}
	}
?>