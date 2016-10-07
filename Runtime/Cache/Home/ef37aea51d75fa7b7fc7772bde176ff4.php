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
                                    <li class="active">
                                        <i class=" glyphicon glyphicon-list-alt"></i> <span class="nav-text">提问</span>
                                    </li>
                                </a>
                                <span class="after"></span>
                                <a href="<?php echo U('Question/myQuestion');?>">
                                    <li>
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
                                <li class="active">
                                    <i class=" glyphicon glyphicon-list-alt"></i> <span class="nav-text">提问</span>
                                </li>
                            </a>
                            <span class="after"></span>
                            <a href="<?php echo U('Question/myQuestion',array('course_id'=>$course_id));?>">
                                <li>
                                    <i class=" glyphicon glyphicon-list-alt"></i> <span class="nav-text">我的提问</span>
                                </li>
                            </a>
                            <span class="after"></span>
                        </ul>
                    </div><?php endif; ?>

            </div>
			<div class="page-body-right top30 col-md-7 col-md-offset-1">

				<div class="row">

                    <div class="panel panel-default question-panel">
                        <div class="panel-heading ques-panel-title">提&nbsp;&nbsp;&nbsp;&nbsp;问</div>
                        <div class="panel-body ques-panel-body">
                            <span class="check-info" id="check-info">...</span>
                            <form id="question-form" class="ques-form">
                                  <!--<div class="form-group ques-form-title">
                                        提问
                                      <span class=" check-info" id="check-info">...</span>
                                  </div>-->
                                  <div class="form-group">
                                      <?php if(empty($course_id)): ?><div class="col-md-6">
                                              <select class="form-control ques-type" id="ques-type" style="display: none;">
                                                  <option value="0"  selected disabled>问题反馈</option>
                                              </select>
                                          </div>
                                          <div class="col-md-12">
                                              <select class="form-control ques-course-category" id="ques-course-category">
                                                  <option value="" selected disabled>选择课程</option>
                                                  <?php if(is_array($good_course_category)): $i = 0; $__LIST__ = $good_course_category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i;?><option value=<?php echo ($v3['id']); ?>><?php echo ($v3['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                                  <!--<option value="">高数</option>
                                                  <option value="">数字逻辑</option>-->
                                              </select>

                                              <select class="form-control ques-category" id="ques-category">
                                                  <option value="" selected disabled>选择问题分类</option>
                                                  <?php if(is_array($ques_category)): $i = 0; $__LIST__ = $ques_category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?><option value=<?php echo ($v1['id']); ?>><?php echo ($v1['name']); ?></option>
                                                      <?php if(is_array($v1['children'])): $i = 0; $__LIST__ = $v1['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?><option value=<?php echo ($v2['id']); ?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v2['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                                                  <!--<option value="">生活</option>
                                                  <option value="">学习</option>-->
                                              </select>
                                          </div>
                                          <div class="col-md-12 div-fg">&nbsp;</div>
                                          <?php else: ?>

                                              <div class="col-md-6" >
                                                  <select class="form-control ques-type" id="ques-type" style="display:none">
                                                      <option value="1" selected disabled>精品课程</option>
                                                  </select>
                                              </div>
                                              <div class="col-md-6"></div>
                                              <div class="col-md-6" >
                                                  <select class="form-control ques-course-category" id="ques-course-category" style="display:none">
                                                      <?php if(is_array($good_course_category)): $i = 0; $__LIST__ = $good_course_category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i; if(($v3['id']) == $course_id): ?><option value=<?php echo ($v3['id']); ?> selected disabled><?php echo ($v3['name']); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                                  </select>
                                                  <span class="course-title">精品课程：<?php echo ($course_name); ?></span>
                                                  <div class="col-md-12 div-fg">&nbsp;</div>
                                              </div><?php endif; ?>
                                  </div>
                                  <div class="form-group">
                                        <div class="col-md-12">
                                            <select class="form-control ques-type" id="is_open">
                                                <option value="" selected disabled>选择是否公开</option>
                                                <option value="1">公开</option>
                                                <option value="0">不公开</option>
                                            </select>
                                        </div>
                                      <div class="col-md-12 div-fg" >&nbsp;</div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-md-12">
                                        <!-- <label>问题标题</label> -->
                                        <input type="text" class="form-control" placeholder="请输入问题标题" id="title">
                                    </div>
                                      <div class="col-md-12 div-fg ">&nbsp;</div>
                                  </div>
                                  <div class="form-group">
                                     <div class="col-md-12">
                                         <textarea class="form-control" rows="10" id="content">请输入问题的内容</textarea>
                                     </div>
                                      <div class="col-md-12 div-fg" >&nbsp;</div>
                                  </div>

                                <!--data-toggle="modal" data-target="#myModal"-->
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">操作提醒</h4>
                                            </div>
                                            <div class="modal-body">

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal" id="check-btn">确定</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer ques-panel-footer">

                                <div >
                                    <button type="button" class="ques-submit btn "  data-loading-text="提交中请稍后..." data-target="#myModal"  id="ques-submit" autocomplete="off">提交</button>
                                </div>

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
            _ACTION_ = '/SIS.JXNU-B/index.php/Home/Question/askQuestion',
            _MODULE_ = '/SIS.JXNU-B/index.php/Home',
            _CONTROLLER_ = '/SIS.JXNU-B/index.php/Home/Question';
</script>
<script type="text/javascript">
    window._ROOT_='/SIS.JXNU-B';
    window._APP_='/SIS.JXNU-B/index.php';
    window._ACTION_='<?php echo U("");?>';
    window._SELF_='<?php echo urldecode("/SIS.JXNU-B/index.php/Home/Question/askQuestion.html");?>';
</script>
<!-- BEGIN CORE SCRIPTS -->
<script src="/SIS.JXNU-B/Public/assets/global/scripts/public.js" type="text/javascript"></script>
<!-- END CORE SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->

    <script src="/SIS.JXNU-B/Public/assets/global/scripts/question-xzq.js" type="text/javascript"></script>



<!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>