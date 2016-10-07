<?php

namespace User\Model;

/**
 * 教工管理模型-领导角色
 *
 * @author Homkai QQ:345887894
 */
class TeacherPModel extends TeacherModel {
	
	/**
	 * @overrides
	 */
	protected function initPageOptions() {
		/*array_merge() 函数把一个或多个数组合并为一个数组*/
		return array_merge(
			parent::initPageOptions(),
			array (
				'actions' 	=> false,
				'buttons'	=> false,
				'checkbox'	=> false,
			)
		);
	}
}
