<?php
namespace Home\Model;
use Think\Model;

class UserModel extends BaseModel{
   
   public function checkLogin($email,$password){
   		$check = $this->where(array('email'=>array('eq',$email),'password'=>array('eq',$password)))->find();
   		
   		if($check){
            session('userId',$check['id']);
            session('checkRes',$check);
   			return $check;
   		}else{
   			return false;
   		}
   }

   public function addUserInfo($data){
      return $this->add($data);
   }



   public function getUserInfo(){
      $id = ss_uid();

      $data = $this->where(array('id'=>array('eq',$id)))->find();

      return $data;
   }




}
