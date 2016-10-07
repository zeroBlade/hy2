<?php
namespace Home\Model;
use Think\Model;
class CategoryModel extends BaseModel{
   public function getNav(){
   		$arr = $this->where(array('status'=>array('eq',1)))->select();

   		foreach ($arr as $k => $v) {
   			if($v['pid'] == 0){
   				foreach($arr as $k1 => $v1){
   					if($v1['pid'] == $v['id']){
   						$v['c'][] = $v1;
   					}
   				}
   				$arr1[] = $v; 
   			}
   		}

   		return $arr1;
   }
}