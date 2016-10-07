<?php
return array(
    // 自动加载静态资源（HyFrameController）
    'LOAD_ASSETS' =>array(
        'GLOBAL'	=>	array(
            'CSS'	=>	array(

            ),
            'JS'	=>	array(

            )
        ),
        'PLUGINS'	=>	array(
            'CSS'	=>	array(
                'HyNotice/all'	=>	'umeditor/themes/default/css/umeditor.css',
            ),
            'JS'	=>	array(
                'HyNotice/all'	=>	array(
                    'umeditor/umeditor.config.js',
                    'umeditor/umeditor.min.js'
                ),
                'User/profile'=>'jquery-validation/jquery.validate.min.js'
            )
        ),
        'PAGES'		=>	array(
            'CSS'	=>	array(

            ),
            'JS'	=>	array(
                'Index/*'		=>	'index.js',
                'HyAlert/all'	=>	'hy-alert.js',
                'HyAlertA2/all'	=>	'hy-alert.js',
                'User/profile'=>'user-profile.js'

            )
        )
    ),
    // 管理员消息ICON（HyAlertA2Model）
    'ADMIN_ALERT_ICON'		=>	'label-info,fa-bell',
);