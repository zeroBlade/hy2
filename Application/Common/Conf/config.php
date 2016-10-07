<?php
return array_merge( $db = array(
		
	// 数据库配置：
		// 数据库类型：
		'DB_TYPE'   			=>	'mysql',  
		// 数据库地址：
		'DB_HOST'				=>	'127.0.0.1',
		// 数据库名：
		'DB_NAME'				=>	'com_home',
		// 用户名：
		'DB_USER'   			=>	'root',
		// 密码：
		'DB_PWD'    			=>	'',
		// 数据库表前缀： 
		'DB_PREFIX' 			=>	'com_', 
		// 数据库编码：
		'DB_CHARSET'			=>	'utf8',

        //备份数据库配置
        'DB_COPY_PREFIX'        =>  'com_',
        'DB_COPY_NAME'          =>  'com_home_copy',
        'DB_COPY_CONFIG'        =>  'mysql://homyit:homyit_dev@127.0.0.1/jxnu_sis_copy#utf8'
		
), array(
		
		
	// 开发调试配置
		// 开发模式：
		'APP_DEV'				=>	true,
		// 页面TRACE开关：
		'SHOW_PAGE_TRACE'		=>	false,
		
	// SESSION 配置
		// SESSION类型，如果改用文件存储此项留空：
		'SESSION_TYPE'          =>  'DB',
		'SESSION_TABLE'			=>	$db['DB_PREFIX'].'frame_session',
		// 会话保持在线时长（秒）：
		'SESSION_ONLINE'		=>	60*30,
		// SESSION配置，一般无需修改：
		'SESSION_OPTIONS'		=>  array('expire'=>60*30, 'name'=>'HyFrame_SSID', 'path'=>RUNTIME_PATH.'Temp/'),
		
	// CACHE 配置
		// 缓存方式，可根据自己服务器情况设定：
		'DATA_CACHE_TYPE'       =>  'File',
		'DATA_CACHE_PATH'       =>  RUNTIME_PATH.'Temp/Cache',
		'DATA_CACHE_TIME'       =>  60*60*12,
		
		
	// 文件上传相关配置 
		'FILE_UPLOAD' => array(
				//上传的文件大小限制 (0-不做限制)：
				'maxSize'  => 5*1024*1024, 
				//允许上传的文件后缀：
				'exts'     => 'jpg,jpeg,png,swf,zip,rar,doc,docx,txt,xls,xlsx,ppt,pptx,pdf',
				//自动子目录保存文件：
				'autoSub'  => true, 
				//子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组：
				'subName'  => array('date', 'Y-m-d'),
				//保存根路径：
				'rootPath' => './Public/uploads/', 
				//上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组：
				'saveName' => array('uniqid', ''), 
				//存在同名是否覆盖：
				'replace'  => false, 
				//是否生成hash编码（用于过滤相同文件）
				'hash'     => true, 
		),
		
	// 加密秘钥 
		// 文件：
		'CRYPT_KEY_FILE'		=>	'$%&HGfhs+KsTPxlR]K~guIY^(6kfBIFS',
		// 通信：
		'CRYPT_KEY_ACT'			=>	'MY^zC5hdl*.HZ0DsouH=m].Us86yM4!S',
		// 密码：
		'CRYPT_KEY_PWD'			=>	'a@#y$V4%9i$&*JG%$#Li*(K:!*3%Q~p0',
		// 密码哈希前补充的复杂串：
		'PWD_HASH_ADDON'		=>	'@*H$%Y:1&4',
		// 其他字段：
		'CRYPT_KEY_VAL'			=>	'fb+%&*HJK56-^$:(5KQ&9hK@(SZ^175A',
		
	// 系统其他配置
		// 默认模块：
		'DEFAULT_MODULE'		=>	'Home',
		// URL模式：
		'URL_MODEL'				=>  1,
		
		// 日志记录：
		'LOG_SET_DOWN'			=>	true,
		
		// 关键词过滤：
		'FILTER_WORDS'			=>	array(
				// 是否启用过滤：
				'on'		=>	true,
				// 会被过滤掉的字符串：
				'words'		=>	'法轮功,黑社会',
				// 替换成的字符串：
				'replace'	=>	'****'
		),
		
		// 查看详情模板：
		'TPL_DETAIL_BTN'		=>	'<a href="javascript:;" title="查看详情" class="btn btn-xs blue dt-detail" ><i class="fa fa-eye"></i>&nbsp;{0}</a>',
		
		// 默认用户头像：
		'DEFAULT_AVATAR_IMG'	=>	__ROOT__.'/Public/assets/global/img/userpic.gif',
		
		// 反馈接受邮件UID：
		'FEEDBACK_UID'			=>	9001,
		
		// 公共控制器：
		'PUBLIC_CONTROLLER'		=>	array('HyStart', 'Index', 'HyFile', 'HyChat'),

		// 单点登录：
		'SINGLE_POINT_ONLINE'	=>	false,
		
		'LOAD_EXT_FILE'			=>	'hyframe',
) );