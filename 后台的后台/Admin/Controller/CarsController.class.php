<?php
namespace Admin\Controller;
use Think\Controller;
class CarsController extends Controller {	
	public function __construct() {
    parent::__construct();
    
    if (!isLogin()) {
      	$this->redirect('Admin/login');
    }
  }

	public function check(){
		$checkModel = M("information");
        $data = M('usertab')->join('information on information.inf_user_id = usertab.user_id')->select();
        $this->assign('information',$data);	
		$this->display();
	}
	public function special(){	
		$infModel = M('information');
		$where = "inf_add='是'";
		$result = M('usertab')->join('information on information.inf_user_id = usertab.user_id')->where($where)->select();
		$this->assign("data",$result);
		$this->display();
	}
	public function add(){
		$addModel = M("information");
		$where = "inf_state='已通过'";
        $data = M('usertab')->join('information on information.inf_user_id = usertab.user_id')->where($where)->select();
        $this->assign('information',$data);
		$this->display();
	}
	public function action(){	
		if(IS_POST){	
			$infModel = M("information");
			$id = I('id');
			$ids = 'inf_id='.$id;
			$data = M('usertab')->join('information on information.inf_user_id = usertab.user_id')->where($ids)->find();
			print_r(json_encode($data));

		}
		
	}
	public function pass(){	
		$id = isset($_GET['inf_id']) ? intval($_GET['inf_id']) : '';
		$condition = array(	
			'inf_id' => $id
			);
		$infModel = M('information');
		$result = $infModel->where($condition)->find();
		$result['inf_state'] = '已通过';
		if($infModel->save($result)){	
			$this->redirect('Cars/check');
		}
		else{	
			$this->error();
		}
	}

	public function notPass(){	
		$id = isset($_GET['inf_id']) ? intval($_GET['inf_id']) : '';
		$condition = array(	
			'inf_id' => $id
			);
		$infModel = M('information');
		$result = $infModel->where($condition)->find();
		$result['inf_state'] = '未通过';
		if($infModel->save($result)){	
			$this->redirect('Cars/check');
		}
		else{	
			$this->error();
		}
	}
	public function del(){	
		$id = isset($_GET['inf_id']) ? intval($_GET['inf_id']) : '';
		$condition = array(	
			'inf_id' => $id
			);
		$infModel = M('information');
		$result = $infModel->where($condition)->find();
		$result['inf_add'] = "否";
		$result['inf_specialdate'] = NULL;
		$result['inf_specialprice'] = NULL;
		if($infModel->save($result)){	
			$this->redirect('Cars/special');
		}
		else{	
			$this->error();
		}
	}
	public function append(){	
		$condition = array(
			'inf_specaildate' => I('inf_specialdate'),
			'inf_specailprice' => I('inf_specailprice')
			);
			$id = 'inf_id='.I('inf_id');
			$result = M('information')->where($id)->find();
			$result['inf_add'] = "是";
			$result['inf_specialdate'] = I('inf_specialdate');
			$result['inf_specialprice'] = I('inf_specialprice');
			if(M('information')->save($result)){	
				$this->redirect('Cars/special');
			}
			else{	
				$this->error();
			}
	}

}