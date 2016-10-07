<?php

return array(
		'UPLOAD'=>array(
			'maxSize'	=>	3145728,
			'rootPath'	=>	'./Public/uploads/images/',

			'savePath'	=>	'user_img',
			'saveName'	=>	array('uniqid',''),
			'exts'		=>	array('jpg','gif','png','jpeg'),
			'autoSub'	=>	true,
			'subName'	=>	array('date','Ymd')
		),
);