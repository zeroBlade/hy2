<?php
namespace Home\Model;
use Think\Model;
class DetailModel extends BaseModel{
   
   public function getSearch($inputVal){
   		if(!$input) return false;
   		$where['title'] = array('like','%'.$input.'%');
   		$where['content'] = array('like','%'.$input.'%');
   		$where['name'] = array('like','%'.$input.'%');

   		$where['_logic'] = 'or';
   		$map['_complex'] = $where;

   		$count = $this->alias('d')
   					  ->join('com_category AS c ON d.category_id = c.id');

   }

   public function getSaveArticle(){
      $data = $this->where(array('status'=>array('eq',1)))->select();

      return $data;
   }

   

   


   
}
