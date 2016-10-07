<?php
namespace System\Controller;
use Common\Controller\HyFrameController;

/**
 * 首页
 * @author Homkai
 *
 */
class IndexController extends HyFrameController {
	
    public function index(){
    	// 基础访问认证
    	$this->baseAccessAuth();
    	$this->setPageTitle('首页');
    	// 菜单输出
    	$this->jsonAssign('hyMenu', S('menuCache_'.session('roles')));
    	// 登录信息
    	$log=M('frame_log')->where(array('user_id'=>ss_uid(),'status'=>1,'controller'=>'HyStart','action'=>'ajax','description'=>array('like','%成功%')))->order('id desc')->getField('create_time',2);
		$this->lastLogin=date('Y年m月d日 H:i',$log[1]);
		// 角色信息
		$this->role=session('roleTitle');
		$roles=session('roleSwitch');
		if(count($roles)) $this->roles=$roles;
		// 系统公告
		$this->notice=D('HyNotice')->limit('5')->select(array('hy'=>true));
		$this->display();
    }
  
}
