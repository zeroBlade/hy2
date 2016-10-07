<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-COMPATIBLE">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<title>frameset</title>

	<link rel="stylesheet" href="/Hy2/HY2/Public/assets/global/plugins/bootstrap/css/bootstrap.min.css" type="text/css">
	<style>
	 	@font-face{
		    font-family: 'Pacifico';
		   src: url(/Hy2/HY2/Public/assets/global/fonts/theme_font/Pacifico.ttf)format('truetype');
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
		.wrapper{
			position: relative;
		}
		#nav_top{
			top:0px;
			background-color:#fff;
		
		}
	    .userInfo_nav{
	    	position: fixed;
	    	width: 20%;
	    	height: 100%;
	    	background-color: rgba(241,241,241,1);
	    	z-index: 0;
	    }

	    .userInfo_menu{
	   
	    	width: 100%;
	    	
	    	margin:100px 0;
	    	padding:60px 0;
	    	
	    }

	    .userInfo_menu li{
	    	display: block;
	    	vertical-align: middle;
	    	text-align: center;
	    	list-style:none;
	    	height: 70px;
	    	line-height: 70px;
	    	font-size:24px;
	    	cursor: pointer;

	    }
	    .userInfo_menu li:nth-child(1){	
			background-color:rgba(44,34,45,1);
			color:#fff;
		}
	    .userInfo{
	    	position: relative;
	    	width: 79%;
	    	left:20%;
	    	top:70px;
	    }

	    .sub_info{
	    	display: none;
	    	width: 90%;
	    	margin-left:20px;
	    	/*background-color:rgba(241,241,241,1);*/
	    }

	    .sub_info h2{
	    	text-align: center;
	    }
	/*-------------------------change_form,change_pwd begin------------------------- */
	    .change_form,.change_pwd{
	    	width: 30%;
	    	margin:40px auto;
	    }
	    .form-group input{
	    	height: 40px;
	    }
	    a.avatar_file,a.step_file{
	    	position: relative;
	    }
	    a.avatar_file input,a.step_file input{
	    	position: absolute;
	    	right: 0;
	    	top:0;
	    	opacity: 0;
	    }



	    .btnSub{
	    	width: 100%;
	    }

	    label.error{
	    	color:red;
	    	font-size: 16px;
	    }
	    .sub_article{
	    	margin-top:30px;
	    	margin-left:0;
	    	margin-right: 0;
	    	background-color: #fffff0;
	    	padding:20px 0;
	    }
	    .art_img{
	    	display: block;
	    	margin:0 auto;
	    	height:224px;
	    	width: 330px;
	    }
	    a.art_content{
	    	display: block;
	    	width: 100%;
			text-decoration: none;
			color:#222;
	    }

	/*-----------------------------change_form,change_pwd end----------------------- */
		
	/*-----------------------------my_article begin----------------------- */
	    #my_article{
	    	
	    	margin-bottom:200px;
	    }

	    .pageNav{
	    	padding:0;
	    	margin:0 auto;
	    	width: 60%;
	    	height: 80px;

	    }

	    .pageNav li{
	    	text-align: center;
			float:left;
			list-style: none;
			width:50px;
			height: 50px;
			line-height: 50px;
			
			margin:0 10px;
			margin-top:30px;

	    }
	    
	    .pageNav li a{
	    	text-decoration:none;
	    	color:#fff;
	    	display: block;
	    	width:100%;
	    	height: 100%;
	    	border-radius: 50%;
	    	background-color: rgba(44,34,35,1);
	    }


		.activeColor{
			background-color: rgba(255,122,8,1)!important;
		}
		
	/*-----------------------------my_article end----------------------- */

	/* ------------------------------write begin---------------------------------- */
		#write{
			margin-bottom:200px;
		}
		.step_form{
			width: 30%;
	    	margin:40px auto;
		}

		.step_form .form-grounp{
			margin:10px auto;
		}
	    .funBtn{
	    	width: 100%;
	    	position: relative;
	    }

	    .addBtn,.delBtn{
	    	position: relative;
			
	    }

	    .addBtn{
	    	left:40%;
	    }
	    .delBtn{
	    	left:48%;
	    }
	    .form-group select{
	    	width:40%;
	    	display: inline-block;
	    }
	    .step_file{
	    	margin-top:10px;
	    }

    /* ------------------------------write end---------------------------------- */
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
					
						<li><a href="javascript:;"><img class="user_img" src="/Hy2/HY2/Public/uploads/images/<?php echo ($checkRes['avatar_file']); ?>" alt="<?php echo ($checkRes['name']); ?>"></a></li>

						<li><a href="<?php echo U('Index/member');?>">个人信息</a></li>

						<li><a href="<?php echo U('System/HyStart/login');?>">后台管理</a></li><?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
	
	<div id="main">
		
	<section class="wrapper">
		<section class="userInfo_nav">
			<ul class="userInfo_menu">
				<li data-target="change_userInfo">个人信息填写</li>
				<li data-target="change_pwd">修改密码</li>
				<li data-target="write">写文章</li>
				<li data-target="my_article">收藏的文章</li>
				
			</ul>
		</section>

		<section class="userInfo">
			<article id="change_userInfo" class="sub_info">
				<h2>个人信息填写</h2>
				<form class="change_form" action="<?php echo U('Index/correctInfo');?>" method="post" enctype="multipart/form-data">
					
					<div class="form-group">
					    <label for="avatar_file">头像</label>
					    <a href="javascript:;" class="avatar_file btn btn-info" ><input type="file" class="form-control" id="avatar_file" name="avatar_file" value="请选择头像上传">请选择头像上传</a>
					</div>

					<div class="form-group">
					    <label  for="email">邮箱</label>
					    <input type="email" class="form-control" id="email" name="email" placeholder="请输入你的邮箱地址" value="<?php echo ($checkRes['email']); ?>">
					</div>
					
					<div class="form-group">
					    <label for="name">昵称</label>
					    <input type="text" class="form-control" id="name" name="name" placeholder="请输入你的昵称" value="<?php echo ($checkRes['name']); ?>">
					</div>

					<div class="form-group">
					    <label for="sex">性别</label>
					    <input type="text" class="form-control" id="sex" name="sex" placeholder="请输入你的性别" value="<?php echo ($checkRes['sex']); ?>">
					</div>

					<div class="form-group">
					    <label for="phone">电话</label>
					    <input type="text" class="form-control" id="phone" name="phone" placeholder="请输入你的电话号" value="<?php echo ($checkRes['phone']); ?>">
					</div>

					
					<button class="btn btn-info btnSub" type="submit">提交</button>
				</form>
			</article>
			
			<article id="change_pwd" class="sub_info">
				<h2>修改密码</h2>

				<form class="change_pwd" action="<?php echo U('Index/changePwd');?>" method="post">
					
					<div class="form-group">
					    <label for="password">密码</label>
					    <input type="text" class="form-control" id="password" name="password" placeholder="请输入密码">

					</div>
					<div class="form-group">
					    <label for="check_pwd">确认密码</label>
					    <input type="text" class="form-control" id="check_pwd" name="check_pwd" placeholder="请确认密码">
					</div>

					<div class="form-group">
					    <label for="new_pwd">确认密码</label>
					    <input type="text" class="form-control" id="new_pwd" name="new_pwd" placeholder="新密码">
					</div>

					<button class="btn btn-info btnSub" type="submit">提交</button>
				</form>
			</article>

			<article id="write" class="sub_info">
				<h2>写文章</h2>
				<form class="step_form" action="<?php echo U('Index/addArticle');?>" method="post" enctype="multipart/form-data">

					<div class="form-group">
					    <label for="art_title">标题</label>
					    <input type="text" class="form-control" id="art_title" name="title" placeholder="请输入你的标题">
					</div>

					<div class="form-group">
					    <label for="name">请选择分类</label>
					    <select class="ancestor_type form-control" name="pid">
							<option >请选择</option>
						</select>
		
						<select class="parent_type form-control" name="category_id">
							<option >请选择</option>	  
						</select>
					</div>

					<div class="step_ele_wrapper">
						<div class="form-group">
						    <label for="content">步骤1</label>
						    <textarea id="content" name="content" class="form-control" placeholder="请输入步骤"></textarea>
						    
						    <a href="javascript:;" class="step_file btn btn-info" ><input type="file" class="form-control" name="step_img" value="请选择图片上传">请选择图片上传</a>
						</div>
					</div>
					<button class="btn btn-info btnSub" type="submit">提交</button>
				</form>
				<div class="funBtn">
					<a href="javascript:;" class="addBtn btn btn-info" >添加步骤</a>
					<a href="javascript:;" class="delBtn btn btn-danger" >删除步骤</a>
				</div>
			</article>

			<article id="my_article" class="sub_info">
				<h2>收藏的文章</h2>
				<div class="all_my_article">
					
				</div>

				<ul class="pageNav">
					
				</ul>
			</article>
		</section>
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
<script src="/Hy2/HY2/Public/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/Hy2/HY2/Public/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

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


	<script src="/Hy2/HY2/Public/assets/global/scripts/jquery.validate-1.13.1.js" type="text/javascript"></script>


	<script type="text/javascript">
		$(function(){

			var tab = (function(){
				var subInfo = $(".sub_info");
				return{
					changeTab:function(){
						$(subInfo[0]).css({"display":"block"});
						
						$(".userInfo_menu li").on('click',function() {
							var self = $(this);
							var target = self.data('target');
							var subInfoNum = subInfo.length; 


							for(var i=0;i<subInfoNum;i++){
								if($(subInfo[i]).attr('id')==target){
									$(subInfo[i]).css({"display":"block"});
									$(subInfo[i]).siblings().css({"display":"none"});

									self.css({
										"background-color":"rgba(44,34,45,1)",
										"color":"#fff"
									});

									self.siblings().css({
										"background-color":"transparent",
										"color":"#222"
									});


								}
							}
						})
					}
				}
			})();
			tab.changeTab();
			
			$(".change_form").validate({
		           debug: true,
		           rules:{
			           	 avatar_file:{
			           	 	required:true
			           	 },
			          	 name:{
			          	 	required:true
			          	 },
			          	 sex:{
			          	 	required:true
			          	 },
			             email:{
			                required:true
			             },
			             phone:{
			             	required:true
			             }
		           },
		            
		            messages:{
			             avatar_file:{
			           	 	required:'请上传头像'
			           	 },
			          	 name:{
			          	 	required:'请输入昵称'
			          	 },
			          	 sex:{
			          	 	required:'请输入性别'
			          	 },
			             email:{
			                required:"请输入邮箱"
			             },
			             phone:{
			             	required:"请输入电话"
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

			$(".change_pwd").validate({
				   debug: true,
		           rules:{
			           	 password:{
			           	 	required:true
			           	 },
			          	 check_pwd:{
			          	 	required:true
			          	 },
			          	 new_pwd:{
			          	 	required:true
			          	 }
		           },
		            
		           messages:{
			             password:{
			           	 	required:'请输入密码！'
			           	 },
			          	 check_pwd:{
			          	 	required:'请确认密码！'
			          	 },
			          	 new_pwd:{
			          	 	required:'请输入新的密码！'
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

			var writeArticle = (function(){
				var addBtn = $(".addBtn");
				var delBtn = $(".delBtn");
				var stepWrapper = $(".step_form .step_ele_wrapper");
				var stepEle,stepNum,lastEle;
				var sectionWrapper = $(".wrapper");

				var ancestorType = $(".ancestor_type");
				var parentType = $(".parent_type");

				var selectUrl,
					areaJson,
					temp_html;

				var ancestor = function(){ 
					
                    $.each(areaJson,function(i,ac){ 
                    	
                        temp_html+="<option value='"+ac.id+"'>"+ac.name+"</option>"; 
                    }); 
                    ancestorType.html(temp_html); 
                    parent(); 
                }; 
                //赋值市 
                var parent = function(){ 
                    temp_html = ""; 
                    var n = ancestorType.get(0).selectedIndex;
                    // oProvince.get(0)取到province
                    $.each(areaJson[n].c,function(i,pa){
                    	
                        temp_html+="<option value='"+pa.id+"'>"+pa.name+"</option>"; 
                    }); 
                    parentType.html(temp_html); 
                   
                }; 
				return{
					addStep:function(){
						
						addBtn.on('click',function(){
							
							stepNum = stepWrapper.find("label").length;
							stepEle = "<div class='form-group'>\
										    <label for='content"+(stepNum+1)+"'>步骤"+(stepNum+1)+"</label>\
										    <textarea id='content"+(stepNum+1)+"' name='content"+(stepNum+1)+"' class='form-control' placeholder='请输入步骤'></textarea>\
										    \
										    <a href='javascript:;' class='step_file btn btn-info' ><input type='file' class='form-control 'name='step_img"+(stepNum+1)+"' value='请选择图片上传'>请选择图片上传</a>\
									   </div>"
							stepWrapper.append(stepEle);
						})
					},
					delStep:function(){
						delBtn.on('click',function(){
							stepNum = stepWrapper.find("label").length;
							lastEle = $(".step_form .form-group:last");
							
							if(stepNum!=1){
								lastEle.remove();
							}else{
								return;
							}
							

						})
					},
					selectChange:function(){
						selectUrl = "<?php echo U('Index/getAjaxSelect');?>";
						ancestorType.change(function(){ 
			                 parent(); 
			            }); 
						$.getJSON(selectUrl,function(data){
							areaJson = data;
							ancestor();
						});
					},
					init:function(){
						this.addStep();
						this.delStep();
						this.selectChange();
					}
				}
			})();

			writeArticle.init();
			

			var saveArticle = (function(){

				var detailUrl = "<?php echo U('Index/getAjaxAtricle');?>";
				var allArt = $(".all_my_article");
				var subArticle;
				var pageLi;

				var pageNav = $(".pageNav");
				
				var pageOffset = 3;
				var pageOffsetHalf = Math.floor(pageOffset/2);
				var currIndex = 0 ;
				var eleNum = 5;
				var pageFirst,
					pageLast,
					pageNum,
					pageSub;

				function showArticle(currPage = 0){
						allArt.empty();

						$.getJSON(detailUrl,function(data){
							var len = data.length;
							
							data.sort(function(a,b){
                                 return (b.update_time - a.update_time);
                            }) 

							for(var i=currPage*eleNum;i<(currPage+1)*eleNum && i<len;i++){
								
								subArticle = 
	                            "<div class='sub_article row'>\
									<div class='col-md-3'>\
										<img class='art_img' src='/Hy2/HY2/Public/uploads/images/"+data[i]['img']+"' alt='"+data[i]['title']+"'>\
									</div>\
									<div class='col-md-9'>\
										<a href='javascript:;' class='art_content'>\
											<h3>"+data[i]['title']+"</h3>\
											<div class='art_essay'>"+data[i]['content']+"</div>\
										</a>\
									</div>\
								</div>"

								allArt.append(subArticle);
							}
						})
				};

				function pageActive(obj){
					obj.each(function(i,v){
									
						if($(v).data("page") == currIndex){
							$(v).children("a").addClass('activeColor');

							
							$(v).siblings().children("a").removeClass('activeColor');
						}
					});
				}

				

				return{
					showPage:function(){
						showArticle();
						
						var self = this;
						
						$.getJSON(detailUrl,function(data){
							var len = data.length;
							// console.log(len);
							pageNum = Math.ceil(len/eleNum);

							for(var i=0;i<pageOffset;i++){
								pageLi = "<li data-page='"+i+"'><a href='javascript:;'>"+(i+1)+"</a></li>"
								pageNav.append(pageLi);
							}

							pageLast = 
								"<li><b>...</b></li>\
								<li data-page='"+(pageNum-1)+"'><a href='javascript:;'>"+pageNum+"</a></li>";
							pageNav.append(pageLast);

							pageSub = pageNav.find("li");
							
							$(pageSub[0]).children("a").addClass('activeColor');
							self.pageChange();
						})
					},
					pageChange:function(){
						var self = this;
						
						pageSub.on('click',function(){

							var _self = $(this);
							currIndex = _self.data("page");
							pageNav.empty();
							
							console.log(currIndex);
							

						
							if(currIndex+1>=pageOffset && currIndex+pageOffset<=pageNum){
								
								pageFirst = 
								"<li data-page='"+0+"'><a href='javascript:;'>"+1+"</a></li>\
								<li><b>...</b></li>\
								";
								pageNav.append(pageFirst);

								for(var i=(currIndex-pageOffsetHalf);i<(currIndex-pageOffsetHalf+pageOffset);i++){
									pageLi = "<li data-page='"+i+"'><a href='javascript:;'>"+(i+1)+"</a></li>"
									pageNav.append(pageLi);
									console.log(123);
								}
								pageLast = 
								"<li><b>...</b></li>\
								<li data-page='"+(pageNum-1)+"'><a href='javascript:;'>"+pageNum+"</a></li>";
								pageNav.append(pageLast);

								pageSub = pageNav.find("li");
								pageActive(pageSub);
								self.pageChange();

							}else if(currIndex<pageOffset){
								for(var i=0;i<pageOffset;i++){
									pageLi = "<li data-page='"+i+"'><a href='javascript:;'>"+(i+1)+"</a></li>"
									pageNav.append(pageLi);
								}

								pageLast = 
								"<li><b>...</b></li>\
								<li data-page='"+(pageNum-1)+"'><a href='javascript:;'>"+pageNum+"</a></li>";
								pageNav.append(pageLast);

								pageSub = pageNav.find("li");
								pageActive(pageSub);
								self.pageChange();

							}else if((currIndex-pageOffsetHalf+pageOffset)>=pageNum){
								pageFirst = 
								"<li data-page='"+0+"'><a href='javascript:;'>"+1+"</a></li>\
								<li><b>...</b></li>\
								";
								pageNav.append(pageFirst);

								for(var i=(currIndex-pageOffsetHalf);i<(currIndex-pageOffsetHalf+pageOffset)&&i<pageNum;i++){
									pageLi = "<li data-page='"+i+"'><a href='javascript:;'>"+(i+1)+"</a></li>"
									pageNav.append(pageLi);
								}


								pageSub = pageNav.find("li");
								pageActive(pageSub);
								self.pageChange();
							}

							

							
							showArticle(currIndex);
						})
						
					}
				}
			})();
			saveArticle.showPage();
			

			
			

		});
	</script>

</html>