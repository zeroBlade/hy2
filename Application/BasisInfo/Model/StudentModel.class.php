<?php
namespace BasisInfo\Model;
use Common\Model\HyAllModel;
use System\Model\HomkaiServiceModel;

/**
 * 学生管理模型
 *
 * @author
 */
class StudentModel extends HyAllModel {

    /**
     * @overrides
     */
    protected function initTableName(){
        return 'student';
    }

    /**
     * @overrides
     */
    protected function initInfoOptions() {
        return array (
            'title' => '学生',
            'subtitle' => '查看系统中的学生用户'
        );
    }

    /**
     * @overrides
     */
    protected function initSqlOptions() {
        return array (
            'associate' => array (
                'user|user_id|id|user_no,roles,email,name,english_name,admission_time,birth,sex,phone,login_last_time,status user_status,country||right',
                'class|class_id|id|name AS class_id_text||left'
            ),
            'where' => array (
                'status'=>array('lt',9)
            )
        );
    }
    /**
     * @overrides
     */
    protected function initPageOptions() {
        return array (
            'deleteType'=> 'status|9',
            'actions' 	=> array (
                'edit' => array (
                    'title' => '编辑',
                    'max' => 1
                ),
                'delete' => array (
                    'title' => '删除',
                    'confirm' => true
                )
            ),
            'tips'		=> array(
                'add'	=> '新增用户初始密码123123'
            ),
            'order'		=>	'user.id desc',
            'tablesWrite'=>array(
                'user'=>'id',
                $this->getTableNameHy()=>array('user_id'=>'user')
            ),
        );
    }
    /**
     * @overrides
     */
    protected function initFieldsOptions() {
        return array (
            'name' => array (
                'title' => '姓名',
                'table' => 'user',
                'list' => array (
                    'orderdir' => 'CONVERT(user.name USING gbk)',
                    'callback'=>array('tplReplace',C('TPL_DETAIL_BTN')),
                    'search' => array (
                        'type'=>'text',
                        'query' => 'like'
                    )
                ),
                'form' => array (
                    'callback'=>array('get_name','{:user_id}','{#}'),
                    'validate' => array (
                        'required' => true,
                        'minlength' => 2,
                        'maxlength' => 30
                    )
                )
            ),
            'english_name' => array (
                'title' => '英文名',
                'table' => 'user',
                'list' => array (
                    'orderdir' => 'CONVERT(user.english_name USING gbk)'
                ),
                'form' => array (
                    'callback'=>array('get_english_name','{:user_id}','{#}')
                )
            ),
            'class_id'=>array(
                'form' => array (
                    'title' => '班级',
                    'type' => 'select',
                    'select'=>array(
                        'optgroup'=>true
                    ),
                    'validate' => array (
                        'required' => true,
                    )
                )
            ),
            'class_id_text' => array (
                'title' => '班级',
                'list' => array (
                    'search' => array (
                        'type' => 'select',
                        'style'=>'input-medium',
                        'select'=>array(
                            'optgroup'=>true
                        ),
                        'sql'=>'class_id={:class_id_text}'
                    )
                )
            ),

            'user_no'=>array(
                'table' => 'user',
                'title'=>'学号',
                'list'=>array(
                    'search'=>array(
                        'type'=>'text',
                        'query' => 'like'
                    )
                ),
                'form'=>array(
                    'callback'=>array('get_user_no','{:user_id}','{#}'),
                    'validate'=>array(
                        'required'=>true,
                        'number' => true
                    )
                ),
            ),
            'admission_time' => array (
                'table' => 'user',
                'title' => '入学时间',
                'list' => array (
                    //'hidden'=>true,
                    'callback' =>array('to_time')
                ),
                'form' => array(
                    'callback'=>array('get_admission_time','{:user_id}','{#}'),
                    'type' => 'date',
                    'fill' =>array(
                        'both' =>array('str_to_time')
                    )
                )
            ),
            'sex' => array (
                'title' => '性别',
                'table' => 'user',
                'list' => array (
                    'hidden'=>true
                ),
                'form' => array (
                    'callback'=>array('get_sex','{:user_id}','{#}'),
                    'type' => 'select',
                    'validate' => array (
                        'required' => true
                    )
                )
            ),
            'roles' => array (
                'table' => 'user',
                'form'=>array(
                    'fill'=>array(
                        'both'=>array('value','21')
                    )
                )
            ),
			'birth' => array(
				'title' => '生日',
				'table'=>'user',
				'list'=>array(
					'callback'=>array('to_time')
				),
				'form'=> array(
					'type' => 'text',
					'callback'=>array('get_birth','{:user_id}','{#}'),
                    'fill' => array(
                        'both' => array('dateToTime')
						),
                    'validate'=>array(
//						'required'=>true,
                        'regex'=>'^((^((1[8-9]\d{2})|([2-9]\d{3}))([-\/\._])(10|12|0?[13578])([-\/\._])(3[01]|[12][0-9]|0?[1-9])$)|(^((1[8-9]\d{2})|([2-9]\d{3}))([-\/\._])(11|0?[469])([-\/\._])(30|[12][0-9]|0?[1-9])$)|(^((1[8-9]\d{2})|([2-9]\d{3}))([-\/\._])(0?2)([-\/\._])(2[0-8]|1[0-9]|0?[1-9])$)|(^([2468][048]00)([-\/\._])(0?2)([-\/\._])(29)$)|(^([3579][26]00)([-\/\._])(0?2)([-\/\._])(29)$)|(^([1][89][0][48])([-\/\._])(0?2)([-\/\._])(29)$)|(^([2-9][0-9][0][48])([-\/\._])(0?2)([-\/\._])(29)$)|(^([1][89][2468][048])([-\/\._])(0?2)([-\/\._])(29)$)|(^([2-9][0-9][2468][048])([-\/\._])(0?2)([-\/\._])(29)$)|(^([1][89][13579][26])([-\/\._])(0?2)([-\/\._])(29)$)|(^([2-9][0-9][13579][26])([-\/\._])(0?2)([-\/\._])(29)$))$'
                        //'date'=>true
                    ),
                    'tip' => '时间格式为:1996-8-5'
				)
			),
            'email' => array (
                'table' => 'user',
                'form' => array (
					'title' => '邮箱',
                    'callback'=>array('get_email','{:user_id}','{#}'),
                    'type' => 'text',
                    'validate'=>array(

                    ),
                )
            ),
            'phone' => array (
                'table' => 'user',
                'form'=>array(
					'title' => '电话',
                    'validate'=>array(
                        'regex'=>'^1[3578]\d{9}$'
                    ),
                    'fill'=>array(
                        'both'=>array('val_encrypt')
                    ),
                    'callback'=>array('get_phone','{:user_id}','{#}'),
                )
            ),
			'country'=>array(
                'table' => 'user',
				'title'=>'国家',
				'list'=>array(

				),
				'form'=>array(
                    'callback'=>array('get_country','{:user_id}','{#}'),
					'type'=>'text',
					'tip'=>'如果是中国学生请填写“中国”!',
					'validate'=>array(
                        'required'=>true,
                    ),
				)
			),
            'login_last_time' => array (
                'title' => '上次登录',
                'list' => array (
                    'hidden'=>true,
                    'callback' =>array('to_time')
                )
            ),
            'password'=>array(
                'table' => 'user',
                'form'=>array(
                    'title'=>'密码',
                    'add'=>false,
                    'tip'=>'仅供重置密码时使用',
                    'fill'=>array(
                        'edit'=>array('pwdEncrypt'),
                        'add'=>array('value','tHHPF4VYX4V7S7CAryffPdAFtpHlcSZVIL7aUKqVAIEuoQedpaPeSU62_ARBH4fa-6H7qT-vCApYp6CpHSqJn1aUi3XGBsAer2IzMIET7f4TxeJscQxCKd2aNiQe2fyW'),
                    )
                )
            ),
            'user_status'=>array(
                'title'=>'账号状态',
//                'table'=>'user',
                'list'=>array(
                    'callback'=>array('status')
//                    'callback'=>array('value','{:user_status}')
//                    'callback'=>array('status','{callback}'=>array('value','{:user_status}'))
                ),
            ),
            'status'=>array(
                'table'=>'user',
                'form'=>array(
                    'title'=>'账号状态',
                    'type'=>'select'
                )
            )
        );
    }
	protected function callback_dateToTime($time){
            return strtotime($time);
    }
    protected function getOptions_class_id(){
        return HomkaiServiceModel::getClassOptg();
    }
    protected function getOptions_class_id_text(){
        return $this->getOptions_class_id();
    }

    /**
     * 写入回调 - 密码加密
     * @param string $str
     * @return string | boolean
     */
    protected function callback_pwdEncrypt($str){
        if(is_string($str) && ''!==trim($str)) return D('HyAccount')->pwdEncrypt($str);
        return false;
    }

    protected function callback_str_to_time($str_time){
        return strtotime($str_time);
    }

    public function callback_get_name($user_id){
        return M('user')->where(array(
            'id' => $user_id,
            'status' => array('eq',1)
        ))->getField('name');
    }
	protected function callback_get_birth($user_id){
		return to_time(M('user')->where(array(
            'id' => $user_id,
            'status' => array('eq',1)
        ))->getField('birth'));
	}
    public function callback_get_admission_time($user_id){
        return to_time(M('user')->where(array(
            'id' => $user_id,
            'status' => array('eq',1)
        ))->getField('admission_time'));
    }

    public function callback_get_english_name($user_id){
        return M('user')->where(array(
            'id' => $user_id,
            'status' => array('eq',1)
        ))->getField('english_name');
    }
    public function callback_get_country($user_id){
        return M('user')->where(array(
            'id' => $user_id,
            'status' => array('eq',1)
        ))->getField('country');
    }

    public function callback_get_user_no($user_id){
        return M('user')->where(array(
            'id' => $user_id,
            'status' => array('eq',1)
        ))->getField('user_no');
    }
    public function callback_get_email($user_id){
        return M('user')->where(array(
            'id' => $user_id,
            'status' => array('eq',1)
        ))->getField('email');
    }
    public function callback_get_sex($user_id){
        return M('user')->where(array(
            'id' => $user_id,
            'status' => array('eq',1)
        ))->getField('sex');
    }
    public function callback_get_phone($user_id){
        return val_decrypt(M('user')->where(array(
            'id' => $user_id,
            'status' => array('eq',1)
        ))->getField('phone'));
    }

    public function detail($pk){
        $associate=array(
            'user|user_id|id|user_no,name,sex,phone,roles,email,login_last_time,login_times'
        );
        $arr=$this->associate($associate)->where(array('user.id'=>$pk))->find();
        return array('table'=>array(
            'base'=>array(
                'title'=>'基础信息',
                'icon'=>'fa-list-alt',
                'style'=>'green',
                'value'=>array(
                    '姓名：'=>val_decrypt($arr['name']),
                    '性别：'=>$arr['sex'],
                    '学号：'=>$arr['user_no'],
                    '电话：'=>val_decrypt($arr['phone']),
                    '邮箱：'=>$arr['email']
                )
            ),
            'user'=>array(
                'title'=>'账号信息',
                'icon'=>'fa-user',
                'style'=>'yellow',
                'value'=>array(

                    '上次登录：'=>to_time($arr['login_last_time']),
                    '累计登录：'=>($arr['login_times']?:0).'次',
                )
            )
        ));
    }
}
