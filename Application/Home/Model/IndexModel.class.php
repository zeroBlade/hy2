<?php
namespace Home\Model;
use Think\Model;
class IndexModel extends BaseModel{
    public function sortArticle($pid){
        $data = $this->alias('d')
                      ->join('left join com_category as c on d.category_id = c.id')
                      ->where(array('d.pid'=>array('eq',$pid)))
                      ->field('d.title,d.content,d.img,c.name')
                      ->select();
        $ca = M('Category');
        
        $res = $ca->where(array('pid'=>array('eq',$pid)))
                    ->field("name")
                    ->select();
      
        $arr = array();

        foreach ($res as $k => $v) {
            $arr[$v['name']] = array();

            foreach ($data as $k2 => $v2) {

              if($v2['name'] == $v['name']){
                  array_push($arr[$v['name']],$v2);
                  
              };
            }
        }

        return $arr;
	}
}
