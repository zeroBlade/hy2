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
    
    <!-- END PAGE STYLES -->
    <title>国际教育学院</title>
</head>
<body>
<div class="container">
    <div class="top-header">
        <div class="row">
            <div class="col-md-2"> <?php echo date("Y年m月d日",time()); $weekday = array(日,一,二,三,四,五,六); echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "星期".$weekday[date(w)];?> </div>
            <div class="col-md-7">                  
                       <marquee>
                           <?php if(empty($announce)): ?><b>暂无重要公示~</b>
                           <?php else: ?>
                               <?php if(is_array($announce)): $i = 0; $__LIST__ = $announce;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><b>明天下午召开年级大会，请学院所有老师务必参加！</b><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                       </marquee>      
            </div>
            <div class="col-md-3"><a href="<?php echo U('User/login');?>">学生登陆</a>&nbsp; <a href="<?php echo U('User/login');?>">留学生登陆</a>&nbsp; <a href="">后台管理</div>
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
                    <a class="navbar-brand" href="#">首页</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        学院概况
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        学院动态
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        国际交流
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        本科教育
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        研究生教育
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        科学研究
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        党群工作
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        学生管理
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        东南亚研究
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                    </ul>
                                </li>

                            </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">搜索</button>
                        </form>
                    </ul>
                        </div>

<!-- /.navbar-collapse -->
            </div>

    </nav>
    <div class="content">

	
  <div class="container site-wrapper">
	
      <div class="site-wrapper-inner">

        <div class="cover-container">
          <div class="inner cover" >
           <form class="form-horizontal" method="post" action="/SIS.JXNU-B/index.php/User/do_login">


 			  <div class="form-group"> 
			  <div class="col-sm-offset-5 col-sm-6">
				   <img class="form-imgs" src="/SIS.JXNU-B/Public/assets/home/pages/img/bg/loginLogo.png">
				</div>
			  </div>          
           
         <br>
           
			  <div class="form-group login-form">
				<label for="inputEmail3" class="col-sm-3 control-label">学号</label>
				<div class="col-lg-6">
				  <input type="text" name="xuehao" class="form-control input-lg" id="inputEmail3" placeholder="请输入你的学号">
				</div>
			  </div>
			  <br>
			  <div class="form-group login-form">
				<label for="inputPassword3" class="col-sm-3 control-label">密码</label>
				<div class="col-lg-6">
				  <input type="password" name="pwd"class="form-control input-lg" id="inputPassword3" placeholder="Password">
				</div>
			  </div>
			   
			  <div class="form-group">
				<div class="col-sm-offset-3 col-sm-7">
				  <div class="checkbox">
					<label>
					  <input type="checkbox">记住我&nbsp;&nbsp;&nbsp;	 &nbsp;<button type="button" href="#" class="btn btn-link">忘记密码</button>
					  
					</label>
				  </div>
				</div>

			  </div>
			  <div class="form-group"> 
			  <div class="col-sm-offset-3 col-sm-6">
				  <button type="submit" name="sub" class="btn btn-primary btn-lg btn-block">登陆</button>
				</div>
			  </div>
			</form>
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
                <a href="">江西师范大学</a>
            </td>
            <td>
                <a href="">师大教务在线</a>
            </td>
            <td>
                <a href="">江西师大人事网</a>
            </td>
        </tr>
        <tr>
            <td colspan="3">Copyright © 2015 江西师范大学国际教育学院 学院地址：江西省南昌市紫阳大道99号 邮政编码：330022</td>
        </tr>
        <tr>
            <td colspan="3">联系电话：0791-8120460 赣ICP备11002450号-1      技术支持：江西师范大学计算机信息工程学院宏奕工作室</td>
        </tr>
    </table>
</div>
</body>
<!-- BEGIN CORE PLUGIN -->
<script src="/SIS.JXNU-B/Public/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/SIS.JXNU-B/Public/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- END CORE PLUGIN -->
</html>