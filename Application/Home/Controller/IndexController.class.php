<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends BaseController{

	public function _initialize(){
		parent::_initialize();
	}

	public function index(){
		
		$this->display();
	}

	public function login(){

		$this->display();
	}
	public function member(){
		$this->display();
	}

	public function getAjaxAtricle(){
		$dt = D('Detail');
		$data = $dt->getSaveArticle();
		$this->ajaxReturn($data);
	}

	public function getAjaxSelect(){
		$ca = D('Category');
		$data = $ca->getNav();
		$this->ajaxReturn($data);
	}

	public function searchShow(){
		$inputVal = I('search')?I('search'):false;
		$detail = D("Detail");

		$searchResult = $detail->getSearch($input);
	}

	public function doLogin(){
		$email = $_POST['email'];
		$password = $_POST['password'];

		$user = D('User');
		// dump($user);
		$checkReasult = $user->checkLogin($email,$password);
		$arr = $user->create();

		if($arr){
			if($checkReasult){
				$this->success('登陆成功',U('Index/member'));
			}else{
				$this->error('登录失败',U('Index/login'));
			}
		}else{
			$this->error($user->getError());
		}
	}


	public function addUser(){
		 $user = D('User');	
	     $data = $user->create();
	     $data['roles']='21';
	     $data['user_no'] = rand(1000000,1999999);
	     $data['login_last_time'] = time();
	     $result = $user->addUserInfo($data);
	     session('userId',$result);
	     if(!$result){
	     	$this->error('新建失败',U('Index/index'));
	     }else{
	     	$this->success('新建成功',U('Index/index'));
	     }
	}

	public function correctInfo(){
      	$user = D('User');
      	$data = $user->create();
      	$id = ss_uid();
      
		$upload = new \Think\Upload(C('UPLOAD'));
		$info = $upload->upload();

		if(!$info){
          $this->error($upload->getError());
        }

        $data['avatar_file'] = $info['avatar_file']['savepath'].$info['avatar_file']['savename'];
        
        $result = $user->where(array('id'=>$id))->save($data);

      	if(!$result){
      		$this->error('上传失败',U('Index/member'));
      	}else{
      		$this->error('上传成功',U('Index/member'));
      	}

    }

	public function changePwd(){
		$user = D('User');
      	$data = $user->create();
      	$userInfo = get_user_info();
      	$id = get_user_id();
      	$pwd = $_POST['password'];
      	$checkPwd = $_POST['check_pwd'];
      	$newPwd = $_POST['new_pwd'];
      	
      	if($pwd === $userInfo['password']){
      		$data['password'] = $newPwd;
      		$result = $user->where(array('id'=>$id))->save($data);
      	}

      	if(!$result){
      		$this->error('修改失败',U('Index/member'));
      	}else{
      		$this->success('修改成功',U('Index/member'));
      	}
	} 

	public function addArticle(){
		$detail = D('Detail');
		$data = $detail->create();
		$content = $_POST['content2'];
		
		$arr = array();
		$imgArr = array();
		
		foreach($_POST as $key => $val){
			
			trim($key,' ');
			if(strpos($key,'ontent')){
				$arr[$key] = $val;
			}
			
		}
		
		$data['content'] = implode('|',$arr);
		$upload = new \Think\Upload(C('UPLOAD'));
		
		$info = $upload->upload();
		
		foreach($info as $k => $v) {
			$imgArr[$k] = $v['savename'];
		}

		$data['step_img'] = implode('|',$imgArr);
		$data['user_id'] = get_user_id();

		dump($data);
		if(!$info){
          $this->error($upload->getError());
        }
        $res = $detail->add($data);

        if($res){
      		$this->success('上传成功',U('Index/member'));
      	}else{
      		$this->error('上传失败',U('Index/member'));
      	}

       
	}


}