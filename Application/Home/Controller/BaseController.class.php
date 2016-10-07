<?php
namespace Home\Controller;
use Think\Controller;

class BaseController extends Controller {
	protected $errorMessage = '';
	
	public function _initialize(){
		$nav = D('Category')->getNav();
		$checkRes = session('checkRes');
		$userId = get_user_id();

		$this->assign('nav',$nav)
			 ->assign('userId',$userId)
			 ->assign('checkRes',$checkRes);
			

	}


}