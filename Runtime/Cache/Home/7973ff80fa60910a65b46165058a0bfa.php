<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-COMPATIBLE">
    <meta name="viewport" content="width=device-width,initial-scale=1">
      <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/SIS.JXNU-B/Public/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/SIS.JXNU-B/Public/assets/global/styles/public.css" rel="stylesheet" type="text/css"/>  
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE STYLES -->
  <!-- [if IE] -->
  <!--  <script src="/SIS.JXNU-B/Public/assets/global/plugins/ie8/html5shiv.min.js" type="text/javascript"></script> -->
    <script src="/SIS.JXNU-B/Public/assets/global/plugins/ie8/respond.min.js" type="text/javascript"></script>
   <!--  <link rel="stylesheet" href="/SIS.JXNU-B/Public/assets/global/styles/ie8-fix.css" type="text/css"/> --> 
    <!-- [endif] -->
  
    
    <link rel="stylesheet" href="/SIS.JXNU-B/Public/assets/pages/styles/course.css" type="text/css"/>

    <!-- END PAGE STYLES -->
    <title>国际教育学院</title>
</head>
<body>
<div class="container container-fluid">
    <div class="top-header">
        <div class="row">
            <div class="col-md-2"> <?php echo date("Y年m月d日",time()); $weekday = array(日,一,二,三,四,五,六); echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "星期".$weekday[date(w)];?> </div>
            <div class="col-md-6">                  
                       <marquee>
                          <?php if(empty($announce)): ?><b style="color:#fff;">暂无重要公示~</b>
                                    <?php else: ?>

                                    <?php if(is_array($announce)): $i = 0; $__LIST__ = $announce;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(empty($vo['link'])): echo ($vo['content']); ?>
                                        <?php else: ?>
                                                <a href="http://<?php echo ($vo['link']); ?>"> <?php echo ($vo['content']); ?></a><?php endif; ?>
                                        </b><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                       </marquee>      
            </div>
            <div class="col-md-4">
             <div class="user">
                        <?php if(empty($session_user_no)): ?><span class="login-btn"><a href="<?php echo U('User/login');?>" title="网站特定栏目仅供学院内学生访问，需先登录"><?php if(($lang_id) == "2"): ?>学生登录 <?php else: ?>Login<?php endif; ?></a></span>
                            <?php else: ?>
                            <span class="logout-btn"><a href="<?php echo U('Home/User/userLogout');?>"><?php if(($lang_id) == "2"): ?>退出 <?php else: ?>Logout<?php endif; ?></a></span>
                            <span class="admin"><a href="<?php echo U('Home/User/pwd');?>"><?php if(($lang_id) == "2"): ?>修改密码 <?php else: ?>Change Key<?php endif; ?></a></span><?php endif; ?>
                        <span class="admin"><a href="<?php echo U('Score/score');?>" title="留学生查成绩入口"><?php if(($lang_id) == "2"): ?>留学生入口 <?php else: ?>Check Grade<?php endif; ?></a></span>
                        <span class="admin"><a href="<?php echo U('System/HyStart/login');?>"><?php if(($lang_id) == "2"): ?>后台管理 <?php else: ?>Admin<?php endif; ?></a></span>
                        <?php if(empty($session_user_name)): else: ?>
                            <span class="login-welcome">|&nbsp;<?php if(($lang_id) == "2"): ?>欢迎你! <?php else: ?> Welcome!<?php endif; ?>&nbsp;<?php echo ($session_user_name); ?></span><?php endif; ?>
                

               </div>
            </div>
            
        </div>
    </div>
    <div class="header">
        <img src="/SIS.JXNU-B/Public/assets/global/img/back-roll.jpg" alt="江西师范大学">
    </div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                   
                    <ul class="nav navbar-nav">
                    <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                    <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if(empty($v['children'])): ?><li><a title="<?php echo ($v["name"]); ?>" href="<?php echo U('Article/category',array('category_id'=>$v['id'],'lan_id'=>$v['language_id']));?>"><?php echo (mb_substr($v['name'],0,5,'UTF8')); ?><span class="sr-only"></span></a></li>
                        <?php else: ?>
                                    <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" title=""><?php echo (mb_substr($v['name'],0,5,'UTF8')); ?></a>
                                    <ul class="dropdown-menu">
                                    <?php if(is_array($v['children'])): $i = 0; $__LIST__ = $v['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ch): $mod = ($i % 2 );++$i; if(($ch["name"]) == "精品课程"): ?><li><a href="http://www.sisjxnu.com/index.php/Home/GoodCourse/course.html" title=""><?php echo ($ch['name']); ?></a></li>
										<?php else: ?>
										<li><a href="<?php echo U('Article/category',array('category_id'=>$ch['id'],'lan_id'=>$v['language_id']));?>" title=""><?php echo ($ch['name']); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>	
                            </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left " role="search" action="<?php echo U('Article/searchShow');?>" method="post">
                            <div class="form-group  input-group-sm">
                                <input type="text" name ="search" class="form-control input-group-sm" placeholder="搜索相关文章">
                            </div>
                            <button type="submit" class="btn btn-default btn-sm">搜索</button>
                        </form>
                    </ul>
                        </div>

<!-- /.navbar-collapse -->
            </div>

    </nav>
    <div class="row">
    <div class="col-md-12">
    <div class="content">
	
    <div class="container good-course">
        <div class="headline bottom30">
            <h3>课程建设</h3>
            <span class="triangle-lg2 glyphicon glyphicon-triangle-right"></span>
        </div>
        <?php if(is_array($good_course)): $i = 0; $__LIST__ = $good_course;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="level">
                <b><?php echo ($v['name']); ?></b>
            </div>
            <div class="row">
                <?php if(is_array($v['children'])): $i = 0; $__LIST__ = $v['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="thumbnail class-color">
                            <a href="<?php echo U('GoodCourse/lesson',array('course_id'=>$vv['id']));?>"><img style="height: 90px; width: 100%" alt="" src="/SIS.JXNU-B/Public/uploads/<?php echo ($vv['img_url']); ?>"></a>
                            <div class="caption">
                                <h4 class="text-center"><i class="glyphicon glyphicon-edit text-success"></i>&nbsp;<a href="<?php echo U('GoodCourse/lesson',array('course_id'=>$vv['id']));?>" class="text-success"><?php echo ($vv['name']); ?></a></h4>
                                <div class="intro text-center text-info"><span class="incharge"><i class="glyphicon glyphicon-user"></i> <?php echo ($vv['incharge_id']); ?></span> &nbsp;&nbsp;&nbsp;<span class="hit"><i class="glyphicon glyphicon-heart-empty"></i> <?php echo ($vv['hit']); ?></span>人学习</div>
                                <p><?php echo (mb_substr($vv['description'],0,36,'utf8')); ?>...</p>
                            </div>
                        </div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

    </div>
    </div>
    </div>
    
    
    <div class="footer">
    <table>
        <tr>
            <td>
                <a href="http://www.jxnu.edu.cn/" target="_blank">江西师范大学</a>
            
                <a href="http://jwc.jxnu.edu.cn/" target="_blank">师大教务在线</a>
			
                <a href="http://rsc.jxnu.edu.cn/" target="_blank">江西师大人事网</a>
            </td>
        </tr>
        <tr>
            <td colspan="3">Copyright&copy;<?php echo date('Y',time()); ?> 江西师范大学国际教育学院 学院地址：江西省南昌市紫阳大道99号 邮政编码：330022</td>
        </tr>
        <tr>
            <td colspan="3">联系电话：0791-8120460 赣ICP备11002450号-1  &nbsp;    技术支持：江西师范大学计算机信息工程学院宏奕工作室</td>
        </tr>
    </table>
</div>
</div>


<!-- BEGIN CORE PLUGIN -->
<script src="/SIS.JXNU-B/Public/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/SIS.JXNU-B/Public/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/SIS.JXNU-B/Public/assets/global/plugins/bootbox.min.js" type="text/javascript"></script>
<!-- END CORE PLUGIN -->

<script type="text/javascript">
    /* GLOBAL URL */
    var _ROOT_ = '/SIS.JXNU-B',
            _PUBLIC_ = '/SIS.JXNU-B/Public',
            _INDEX_ = '/SIS.JXNU-B/index.php',
            _ACTION_ = '/SIS.JXNU-B/index.php/Home/GoodCourse/course',
            _MODULE_ = '/SIS.JXNU-B/index.php/Home',
            _CONTROLLER_ = '/SIS.JXNU-B/index.php/Home/GoodCourse';
</script>
<script type="text/javascript">
    window._ROOT_='/SIS.JXNU-B';
    window._APP_='/SIS.JXNU-B/index.php';
    window._ACTION_='<?php echo U("");?>';
    window._SELF_='<?php echo urldecode("/SIS.JXNU-B/index.php/Home/GoodCourse/course.html");?>';
</script>
<!-- BEGIN CORE SCRIPTS -->
<script src="/SIS.JXNU-B/Public/assets/global/scripts/public.js" type="text/javascript"></script>
<!-- END CORE SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->



<!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>