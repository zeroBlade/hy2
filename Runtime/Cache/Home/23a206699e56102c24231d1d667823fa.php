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
    
    <link href="/SIS.JXNU-B/Public/assets/pages/styles/question-list.css" rel="stylesheet" type="text/css"/>

    <!-- END PAGE STYLES -->
    <title>国际教育学院</title>
</head>
<body>
<div class="container">
    <div class="top-header">
        <div class="row">
            <div class="col-md-2"> <?php echo date("Y年m月d日",time()); $weekday = array(日,一,二,三,四,五,六); echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "星期".$weekday[date(w)];?> </div>
            <div class="col-md-6">                  
                       <marquee>
                           <?php if(empty($announce)): ?><b>暂无重要公示~</b>
                           <?php else: ?>
                               <?php if(is_array($announce)): $i = 0; $__LIST__ = $announce;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><b>明天下午召开年级大会，请学院所有老师务必参加！</b><?php endforeach; endif; else: echo "" ;endif; endif; ?>
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
        <img src="/SIS.JXNU-B/Public/assets/global/img/back-roll.png" alt="江西师范大学">
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
                        <form class="navbar-form navbar-left " role="search">
                            <div class="form-group  input-group-sm">
                                <input type="text" class="form-control input-group-sm" placeholder="搜索相关文章">
                            </div>
                            <button type="submit" class="btn btn-default btn-sm">搜索</button>
                        </form>
                    </ul>
                        </div>

<!-- /.navbar-collapse -->
            </div>

    </nav>
    <div class="content">

    <div class="container">
        <div class="row">
            <div class="page-body-left col-md-3">
                <?php if(empty($course_id)): ?><div class="side-nav">
                        <ul>
                            <a href="<?php echo U('Question/questionList');?>">
                                <li>
                                    <i class=" glyphicon glyphicon-list-alt"></i> <span class="nav-text">答疑记录</span>
                                </li>
                            </a>
                            <span class="after"></span>
                            <a href="<?php echo U('Question/askQuestion');?>">
                                <li>
                                    <i class=" glyphicon glyphicon-list-alt"></i> <span class="nav-text">提问</span>
                                </li>
                            </a>
                            <span class="after"></span>
                            <a href="<?php echo U('Question/myQuestion');?>">
                                <li  class="active">
                                    <i class=" glyphicon glyphicon-list-alt"></i> <span class="nav-text">我的提问</span>
                                </li>
                            </a>
                            <span class="after"></span>
                        </ul>
                    </div>
                    <?php else: ?>
                    <div class="side-nav">
                        <ul>
                            <a href="<?php echo U('GoodCourse/lesson',array('course_id'=>$course_id));?>">
                                <li>
                                    <i class=" glyphicon glyphicon-list-alt"></i> <span class="nav-text">返回精品课程</span>
                                </li>
                            </a>
                            <span class="after"></span>
                            <a href="<?php echo U('Question/questionList',array('course_id'=>$course_id));?>">
                                <li>
                                    <i class=" glyphicon glyphicon-list-alt"></i> <span class="nav-text">答疑记录</span>
                                </li>
                            </a>
                            <span class="after"></span>
                            <a href="<?php echo U('Question/askQuestion',array('course_id'=>$course_id));?>">
                                <li>
                                    <i class=" glyphicon glyphicon-list-alt"></i> <span class="nav-text">提问</span>
                                </li>
                            </a>
                            <span class="after"></span>
                            <a href="<?php echo U('Question/myQuestion',array('course_id'=>$course_id));?>">
                                <li  class="active">
                                    <i class=" glyphicon glyphicon-list-alt"></i> <span class="nav-text">我的提问</span>
                                </li>
                            </a>
                            <span class="after"></span>
                        </ul>
                    </div><?php endif; ?>
            </div>
            <div class="page-body-right col-md-8">
                <div class="row">
                    <div class="col-md-8 col-md-offset-1 top26">
                        <ol class="my-breadcrumb">
                            <li><a href="<?php echo U('Index/index');?>"><?php if(($lang_id) == "2"): ?>首页 <?php else: ?>Home<?php endif; ?></a></li>
                            <li>互动平台</li>
                            <li>我的提问</li>
                        </ol>
                    </div>
                    <div class="col-md-12">
                    <?php if(empty($my_question)): ?><div class=" empty_my_question alert alert-info"> 你还没有参与提问哦~</div>
                        <?php else: ?>
                        <div class="form-body">
                            <div class="panel-group"  id="accordion" role="tablist" aria-multiselectable="true">
                                <?php if(is_array($my_question)): $i = 0; $__LIST__ = $my_question;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="panel panel-default ql-panel">
                                        <div class="ques-list-title panel-heading" role="tab" id="heading<?php echo ($vo['id']); ?>">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo ($vo['id']); ?>" aria-expanded="true" aria-controls="collapse<?php echo ($vo['id']); ?>" title=<?php echo ($vo['title']); ?>>
                                                    <div class="row">
                                                        <div class="col-md-9 col-xs-12">
                                                            <?php echo ($vo['ask_id']); ?>&nbsp;:&nbsp;<?php echo (mb_substr($vo['title'],0,30,'utf-8')); ?>
                                                        </div>
                                                        <div class="col-md-3 col-xs-12 pull-right" style="text-align:right;">
                                                            <?php echo ($vo['create_str_time']); ?>
                                                        </div>
                                                    </div>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse<?php echo ($vo['id']); ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo ($vo['id']); ?>">
                                            <div class="ques-list-content panel-body">
                                                <ul class="list-group detail-list">
                                                    <div class="row">
										  		    <span><?php echo ($vo['answer']); ?></span>
                                                    </div>
                                                </ul>
                                            </div>
                                            <div class="ques-list-footer panel-footer ql-panel">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                <span>
                                                    <?php if(is_array($vo['children'])): $i = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ch): $mod = ($i % 2 );++$i; echo ($ch['tag']); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                                                </span>
                                                    </div>
                                                    <div class="col-md-5 pull-right">
                                                        <span><?php echo ($vo['statusText']); ?>&nbsp;|&nbsp;<?php echo ($vo['is_open']); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                        <div class="page-div">
                            <div class="col-md-12 xs-md-8 pull-right "><?php echo ($page); ?></div>
                        </div><?php endif; ?>
                    </div>
                </div>
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
            _ACTION_ = '/SIS.JXNU-B/index.php/Home/Question/myQuestion',
            _MODULE_ = '/SIS.JXNU-B/index.php/Home',
            _CONTROLLER_ = '/SIS.JXNU-B/index.php/Home/Question';
</script>
<script type="text/javascript">
    window._ROOT_='/SIS.JXNU-B';
    window._APP_='/SIS.JXNU-B/index.php';
    window._ACTION_='<?php echo U("");?>';
    window._SELF_='<?php echo urldecode("/SIS.JXNU-B/index.php/Home/Question/myQuestion.html");?>';
</script>
<!-- BEGIN CORE SCRIPTS -->
<script src="/SIS.JXNU-B/Public/assets/global/scripts/public.js" type="text/javascript"></script>
<!-- END CORE SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->



<!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>