<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>error</title>
    <link href="/SIS.JXNU-B/Public/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/SIS.JXNU-B/Public/assets/global/styles/public.css" rel="stylesheet" type="text/css"/>
    <style>
        body{ background-color:#fff;}
    </style>
</head>
<body >
<div class="error-body">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6">
                <div class="error-word">
                    <div>404</div>
                    <div>Error...</div>
                </div>
            </div>
            <div class="col-md-6 error-img">
                <img src="/SIS.JXNU-B/Public/assets/global/img/ku.gif" alt="..." style="float:right;">
                <div class="error-content">
                    <?php echo ($message); ?>
                   <!--系统检测到你不是留学生！<br>-->
                    <!--无法查看此页面。。-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 ">

            </div>
            <div class="col-md-5 error-button">
                页面出错啦。。。
                    <a href="<?php echo U('Index/index');?>" style="color: #004b54;">返回首页</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>