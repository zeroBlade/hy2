<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-COMPATIBLE">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<title>frameset</title>

	<link rel="stylesheet" href="/Hy2/hy2/Public/assets/global/plugins/bootstrap/css/bootstrap.min.css" type="text/css">
	<style>
	 	@font-face{
		    font-family: 'Pacifico';
		   src: url(/Hy2/hy2/Public/assets/global/fonts/theme_font/Pacifico.ttf)format('truetype');
		 }
		body{
			font-family: "微软雅黑";
			position: relative;
		}
	
		#nav_top{
			position: fixed;
			width:100%;
			z-index:100;
			background-color:transparent;
			padding:8px 0;
			height:90px;
			transition:all .28s cubic-bezier(0.4,0,0.2,1);
			border-bottom:1.5px solid #fff;
			font-family: "幼圆";
		}
		.navbar,#collapse,#collapse ul,#collapse ul li{
			height: 100% !important;
			position: relative;
		}
		
		a.navbar-brand{
			font-family:'Pacifico';
			font-size:2em;
			display: block;
			width:100%;
			transform: translateY(8px);
			color:rgba(252,122,8,1)!important;
		}

		#nav_form{
			position: relative;
			top:10px;
		}

		#main{
			position: relative;
			width:100%;
			min-height:849px;
			
			box-sizing: border-box;
		}
		#footer{
			position: relative;
			height:100px;
			color:#fffff0;
			background-color:rgba(44,34,45,1);
			z-index:10;
		}
		#footer table{
			margin:0 auto;
		}
		#footer tr td{
			text-align: center;
			padding-top:5px;
		}
		.navbar{
			border:transparent;
			background-color:transparent;
		}

		.nav li a{
			font-size: 20px;
			top:10px;
			color:#666666!important;
			font-weight: bold;
			transition: all .5s;
		}
		.nav li:hover a{
			color:#3399FF!important;
		}

		.change_size{
			background-color: rgba(255,255,255,1)!important;
			padding:3px 0!important;
			height: 70px!important;
			border-bottom:1.5px solid transparent;

		}
		#collapse .pull-right li{
			margin:0 10px;
			transition:all .5s;
		}

		#collapse .pull-right a{
			display: block;
		}

		#collapse .pull-right li:hover a{
			color:#FF9933!important;
		}
		.nav{
			position: relative;
		}

		.navbar-toggle{
				position: absolute;
				top:20%;
				right:0;
		}

		.user_img{
			position:absolute;
			width: 45px;
			height: 45px;
			border-radius: 50%;
			top:15%;
			right:0;
		}

		



		@media screen and (max-width: 800px) {
		    #nav_top{
		    	background-color:rgba(255,255,255,1) ;
		    }
		    #collapse{
		    	min-height: 150px;
		    	background-color: #fff;
		    }
		}

		
		
	</style>

	
	<style>
	/*---------------joinUs begin----------------------*/
		#login{
			position:relative;
			min-height: 850px;
			padding-top:30px;
			background-color:rgba(255,204,153,.3);
		}
		
		.login_content{
			
			width: 30%;
			margin:150px auto 0;
			padding: 70px 0;
			background-color:#fff;
		}
		.login_content h2{
			text-align: center;
		}
		.login_content h2::before{
			content:"";
			width:8%;
			height:1px;
			background:rgba(192,192,192,1);
			position:absolute;
			top:37%;
			left:46%;
		}

		.login_form{
			width:80%;
			margin:0 auto;
		}
		.input_wrapper{
			position: relative;
			padding-top:4px;
			width: 100%;
			transition: all .2s ease-in-out;
			margin-top:50px;
		}

		.input_wrapper .input_label{
			color:#727272;
			position: absolute;
			font-size: 20px;
			top:16px;
			left:4px;
			right:0;
			pointer-events: none;
			transition: all 150ms ease-out;
		}
		
		.input_wrapper input{
			border:1px solid transparent;
			border-bottom:1px solid rgba(0,0,0,0.25);
			font:400 15px/18px;
			padding:12px 4px;
			background-color: transparent;
			display: block;
			outline: none;
			width: 100%;

		}

		.input_wrapper .md-input-bar{
			display: block;
			position: absolute;
			bottom: 0;
			left:0;
			width: 100%;
		}
		
		.input_wrapper .md-input-bar:before,
		.input_wrapper .md-input-bar:after{
			content:"";
			display: block;
			position:absolute;
			bottom: 0;
			width: 0;
			height:2px;
			background-color: #1976d2;
			transition: width 400ms cubic-bezier(0.4,0,0.2,1);
		}
		
		.input_wrapper .md-input-bar:before{
			left:50%;
		}
		.input_wrapper .md-input-bar:after{
			right:50%;
		}

		.input_focus .md-input-bar:before,
		.input_focus .md-input-bar:after{
			width: 50%;
		}
		

		.login_form button{
			margin-top:20px;
			width: 100%;
			margin-top:50px;
			height: 45px;
			font-size:17px;
			transition:all 280ms cubic-bezier(0.4,0,0.2,1);
			/*多重阴影的叠加*/
			box-shadow: 0 1px 3px  rgba(0,0,0,0.12),0 1px 2px rgba(0,0,0,0.24);
		}

		.login_form button:hover{
		
			box-shadow: 0 8px 8px  rgba(0,0,0,0.12),0 8px 8px rgba(0,0,0,0.24);
		}

		label.error{
			position:absolute;
			font-size:15px;
			color:red;
		}
	/*---------------joinUs end----------------------*/
	</style>

</head>
<body>
	<div id="nav_top">
		<div class="navbar navbar-default " role="navigation">
			<div class="navbar-header">

			    <a href="javascript:;" class="navbar-brand">    
			    	Coming<i style="color:#333399;">H</i>ome
                </a>

				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>

			<div id="collapse" class="collapse navbar-collapse navbar-responsive-collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo U('Index/index');?>">首页</a></li>
					<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="">
							<a href="<?php echo U('Index/category',array('category_id'=>$vo['id']));?>"><?php echo ($vo['name']); ?></a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				
				<ul class="nav navbar-nav pull-right">
					<?php if(empty($userId)): ?><li><a href="<?php echo U('Index/login');?>">登录</a></li>
						<li class="slip_register"><a href="javascript:;">注册</a></li>
					<?php else: ?>
					
						<li><a href="javascript:;"><img class="user_img" src="/Hy2/hy2/Public/uploads/images/<?php echo ($checkRes['avatar_file']); ?>" alt="<?php echo ($checkRes['name']); ?>"></a></li>

						<li><a href="<?php echo U('Index/member');?>">个人信息</a></li>

						<li><a href="<?php echo U('System/HyStart/login');?>">后台管理</a></li><?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
	
	<div id="main">
		
	<section id="login">
		<div class="login_content">
			<div class="join_title">
				<h2 class="title">
					用户登录
				</h2>
			</div>
			
			<form action="<?php echo U('Index/doLogin');?>" id="doLogin" class="login_form" method="post">
				<div class="input_wrapper">
					<label for="email" class="input_label">邮箱</label>
					<input id="email" type="text" name="email"/>
					<span class="md-input-bar"></span>
				</div>

				<div class="input_wrapper">
					<label for="password" class="input_label">密码</label>
					<input id="password" type="text" name="password"/>
					<span class="md-input-bar"></span>
				</div>
				
				<button class="btn btn-info" type="submit">提交</button> 
			</form>
		</div>
	</section>

	</div>

	<footer id="footer">
		<table>
			<tbody>
				<tr><td></td></tr>
				<tr>
					<td colspan="3">Copyright© 2016江西师范大学宏奕工作室，工作室地址：江西省南昌市紫阳大道99号 邮政编码：000000</td>
				</tr>
				
				<tr>
					<td colspan="3">联系电话：0791-8120460 赣ICP备11002450号-1   技术支持：江西师范大学计算机信息工程学院宏奕工作室</td>
				</tr>
				
			</tbody>
		</table>
	</footer>
</body>
<script src="/Hy2/hy2/Public/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/Hy2/hy2/Public/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript">
	$(function(){
		var navTop =(function(){
				var nav = $("#nav_top");
				var scroll_end = 0;
				var isTop = true;
				var slipRegister = $(".slip_register");
				var body = $("html,body");

				return {
					changeSize:function(type){
						// console.log(isTop);
						if(!type){
							nav.mouseover(function(){
			                   if(!isTop){
			                        return;
			                   }
			                    nav.addClass('change_size');
			                })

			                nav.mouseout(function(){
			                   if(!isTop){
			                        return;
			                   }
			                    nav.removeClass('change_size');
			                })
			                     
			                $(window).scroll(function(){
			                     scroll_end = $(document).scrollTop();
			                     // console.log(scroll_end);
			                     
			                     if(scroll_end==0){
			                          isTop = true;
			                          nav.removeClass('change_size');
			                     
			                     }else if(scroll_end > 0){
			                          isTop = false;
			                          nav.addClass('change_size');                                      
			                     }
			                })
						}else if(type=="none"){
							return false;
						}
		                
					},
					slipToRegiste:function(){
						slipRegister.on("click",function(){
							body.animate({scrollTop: $("#joinUs").offset().top}, 500);
						})
					}
				}
		})()
		
		navTop.changeSize();
		navTop.slipToRegiste();

		window['navTop'] = navTop;
	})
</script>

	
	<script src="/Hy2/hy2/Public/assets/global/scripts/jquery.validate-1.13.1.js" type="text/javascript"></script>


	<script type="text/javascript">
		var joinUs = (function(){
				var input = $(".input_wrapper input");
				var login = $("#doLogin");
				var reg = /\S/;/*\S匹配任意不是空白符的字符*/
				
				return{
					inputEvent:function(){
						input.on("focus",function(){
				
							var _self = $(this);
							var inputVal = _self.val();
							console.log(inputVal);
							
							_self.siblings('.input_label').css({						
										"top":"-6px",
										"font-size":"14px"		
							});

							_self.parent().addClass('input_focus');
						})

						input.on("blur",function(){
					
							var _self = $(this);
							var inputVal = _self.val();
							console.log(inputVal);

							if(reg.test(inputVal)){
								_self.siblings('.input_label').css({
										"top":"-6px",
										"font-size":"14px"
								});
							}else{
								_self.siblings('.input_label').css({
										"top":"16px",
										"font-size":"20px"
								});
							}
							_self.parent().removeClass('input_focus');
						})
					},	
					doLogin:function(){
						login.validate({
					           debug: true,
					           rules:{
					              username:{
					                required:true
					                
					              },
					              password:{
					                required:true
					              },
					              email:{
					                required:true
					              }
					           },
					            
					            messages:{
					              username:{
					                required:'请输入账号！',
					                
					              },
					              password:{
					                required:'请输入密码！'
					              },
					              email:{
					                required:'请输入邮箱！'
					              }
					         
					            },
					           
					           highlight:function(element,errorClass,validClass){
					            $(element).addClass(errorClass).removeClass(validClass);
					            $(element).fadeOut().fadeIn();
					           },
					           unhighlight:function(element,errorClass,validClass){
					              $(element).removeClass(errorClass).addClass(validClass)
					           },
					          
					           submitHandler: function (form){
					                 form.submit();
					            } 
					    });
					}
				}
		})()

		joinUs.inputEvent();
		joinUs.doLogin();
	</script>

</html>