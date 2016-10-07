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

	
	<link rel="stylesheet" type="text/css" href="/Hy2/HY2/Public/assets/global/styles/index/index.css"/>
	<link rel="stylesheet" type="text/css" href="/Hy2/HY2/Public/assets/global/styles/index/animate.min.css">
	<style>
		.pre_reason{
			width:100%;
			height:180px;
			position: relative;
		}
		.pre_reason h2{
			position: relative;
			top:44%;
			font-size:30px;
			text-align: center;
		}

		.pre_reason{
			background-color: transparent;
			color:rgba(255,122,8,1);
			height: 200px;
			margin:-23px 0;
		}
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
		
	
	<section id="theme">
		<div class="ad">
			<h2 ><span>Comming <i>H</i>ome</span> 让你居家生活没烦恼</h2>
			<h3>为你提供各类实用居家小贴士，让你生活更美好。</h3>
		</div>
		
		
		<div class="mask"></div>

		<div class="search">
			<form action="<?php echo U('Index/searchShow',array('select'=>'update_time'));?>" class="form-inline" method="post">
					<input type="text" name="text" class="form-control" id="searchBox" placeholder="搜索你想要了解的内容。">
					<div class="searchBtn">
				    	<button type="submit">Search</button>
				    </div>
			</form>
		</div>
	</section>
	
	<section id="meal">
		<div class="section_title">
			<h2 class="title">
				我们为你提供各色菜系做法。
			</h2>
		</div>

		<div class="row">
			<div class="col-md-3">
				<span>&#xe614;</span>
				<div class="meal_content">
					<h3>中餐</h3>
					<ul class="meal_thing">
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<span>&#xe65f;</span>
				<div class="meal_content">
					<h3>西餐</h3>
					<ul class="meal_thing">
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						
					</ul>
				</div>
			</div>

			<div class="col-md-3">
				<span>&#xf004a;</span>
				<div class="meal_content">
					<h3>日料</h3>
					<ul class="meal_thing">
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						
					</ul>
				</div>
			</div>

			<div class="col-md-3">
				<span>&#xe600;</span>
				<div class="meal_content">
					<h3>韩国菜</h3>
					<ul class="meal_thing">
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						<li><a href="#">黑椒牛扒</a></li>
						
					</ul>
				</div>
			</div>
		</div>

		<div class="section_more">
			<a class="more" href="<?php echo U('Index/category',array('category_id'=>$nav[0]['id']));?>">了解更多</a>
		</div>
	</section>

	<section id="household">
			<div class="section_title">
				<h2 class="title">
					为你提供精心挑选的实用家居指南
				</h2>
			</div>

			<div class="house_content">
				<div class="house_prev">
					<a href="javascript:;">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
				</div>
				<div class="house_next">
					<a href="javascript:;">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
				<div class="house_carousel">
					<ul id="houseTool">
						
					</ul>
				</div>
			</div>

			<div class="section_more">
				<a class="more" href="<?php echo U('Index/category',array('category_id'=>$nav[1]['id']));?>">了解更多</a>
			</div>
	</section>
	
	<section id="clean">
		<div class="clean_mask"></div>
		<div class="section_title">
			<h2 class="title">
				最实用清洁小窍门，让室内清洁无死角！
			</h2>
		</div>
	
		<div class="clean_example row">
			
			<div class="clean_content col-md-10">
				<ul class="all_clean">
					<li class="row show_clean" data-index="0">
						<div class="col-md-5">
							<a class="clean_font" href="javascript:;">
								&#xe701;
							</a>
						</div>
						<div class="col-md-7">
							<a class="clean_sub_content" href="javascript:;">
								<h2>墙面清洁</h2>
								<p>卫生间一般采用瓷砖或地板砖，由于洗澡等频繁地用水，墙面会溅有各种水渍，在擦拭中可用洗洁精或去污兑清水，用干净抹布蘸少擦拭，擦拭干后再用温水擦洗，最后用干净的布擦干。卫生间的墙面要经常清洁，一般一周清洁一次为好。</p>
							</a>
						</div>
					</li>

					<li class="row" data-index="1">
						<div class="col-md-5">
							<a class="clean_font" href="javascript:;">
								&#xe623;
							</a>
						</div>
						<div class="col-md-7">
							<a class="clean_sub_content" href="javascript:;">
								<h2>抽水马桶清洁</h2>
								<p>抽水马桶的盖可用抹布由里向外擦干净，抹布不能太湿，以免留下水渍。抽水马桶边缘所形成的黄色污垢，可用塑料刷子蘸发泡性清洁剂刷或专用的洁厕精洗刷。15天后清洗一次即可保持马桶洁净。</p>
							</a>
						</div>
					</li>

					<li class="row" data-index="2">
						<div class="col-md-5">
							<a class="clean_font" href="javascript:;">
								&#xe604;
							</a>
						</div>
						<div class="col-md-7">
							<a class="clean_sub_content" href="javascript:;">
								<h2>浴缸清洁</h2>
								<p>浴缸可用干净抹不或毛刷蘸点洗衣粉轻轻擦拭，再用清水冲洗。如果有沉积污垢，可用旧报纸擦拭。浴缸应定消毒，然后用来苏打水擦拭，将污水排入的沟后，再用干净抹布将浴缸擦拭干净。</p>
							</a>
						</div>
						
					</li>

					<li class="row" data-index="3">
						<div class="col-md-5">
							<a class="clean_font" href="javascript:;">
								&#xe601;
							</a>
						</div>
						<div class="col-md-7">
							<a class="clean_sub_content" href="javascript:;">
								<h2>地面清洁</h2>
								<p>卫生间地面一般都是用地板砖铺成。在清洗完卫生间时，用拖布蘸去污粉对成的水反复擦拭。擦拭完后用清水冲洗，再用干净的布擦干。</p><p>成都市小丫清洁服务部提醒在消毒卫生间时，应常使用的消毒液是来打水。来苏水是一种消毒防腐药，对人体的皮肤有腐蚀作用，使用时戴上口罩或橡胶手套，以保护人体不受伤害。</p>
							</a>
						</div>
					</li>
				</ul>
			</div>

			<div class="clean_menu col-md-2">
				<ul class="clean_menu_bar">
					<li class="clean_title" data-index="0">墙面清洁</li>
					<li class="clean_title" data-index="1">抽水马桶清洁</li>
					<li class="clean_title" data-index="2">浴缸清洁</li>
					<li class="clean_title" data-index="3">地面清洁</li>
				</ul>
			</div>
		</div>

		<div class="section_more">
			<a class="more" href="<?php echo U('Index/category',array('category_id'=>$nav[2]['id']));?>">了解更多</a>
		</div>
	</section>
	
	<section class="pre_reason">
		<h2>为什么选择我们？</h2>
	</section>

	<section id="reason">	
			<div class="sub_reason newest">
				<div class="row">
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="2.5s">
						<img class="" src="/Hy2/HY2/Public/assets/global/img/index/reason/newest.png"    alt="">
					</div>
					<div class="col-md-8 wow fadeInRight" data-wow-duration="3s">
						<h3>最新资讯</h3>
						<p >
							搜罗最新实用家居小常识，让你第一时间了解做菜、清洁的时的细节与误区，让你立马打造一个不一样的家。
						</p>
					</div>
				</div>
			</div>

			<div class="sub_reason trust">
				<div class="row">
					<div class="col-md-8 wow fadeInUp" data-wow-duration="3s">
						<h3>权威数据</h3>
						<p>
							搜罗最新实用家居小常识，让你第一时间了解做菜、清洁的时的细节与误区，让你立马打造一个不一样的家。
						</p>
					</div>
					
					<div class="col-md-4 wow fadeInUp" data-wow-duration="2.5s">
						<img   src="/Hy2/HY2/Public/assets/global/img/index/reason/trust.png" alt="">
					</div>
				</div>
			</div>

			<div class="sub_reason privilege">
				<div class="row">
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="2.5s">
						<img   src="/Hy2/HY2/Public/assets/global/img/index/reason/privilege.png" alt="">
					</div>

					<div class="col-md-8 wow fadeInRight" data-wow-duration="3s">
						<h3>会员特权</h3>
						<p>
							搜罗最新实用家居小常识，让你第一时间了解做菜、清洁的时的细节与误区，让你立马打造一个不一样的家。
						</p>
					</div>
				</div>
			</div>
	</section>

	<section id="joinUs">
		<div class="join_mask"></div>
		

		<div class="register wow flipInY" data-wow-duration="2s">
			<div class="join_title">
				<h2 class="title">
					加入我们
				</h2>
			</div>
			<form action="<?php echo U('Index/addUser');?>" id="doRegister" class="register_form" method="post">
				<div class="input_wrapper">
					<label for="email" class="input_label">邮箱</label>
					<input id="email" type="text" name="email"/>
					<span class="md-input-bar"></span>
				</div>

				<div class="input_wrapper">
					<label for="username" class="input_label">昵称</label>
					<input id="username" type="text" name="name"/>
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


<!-- 	<script src="/Hy2/HY2/Public/assets/global/plugins/bootstrap-carousel.min.js" type="text/javascript"></script> -->
	<script src="/Hy2/HY2/Public/assets/global/scripts/jquery.validate-1.13.1.js" type="text/javascript"></script>
	<script src="/Hy2/HY2/Public/assets/global/scripts/wow.min.js" type="text/javascript"></script>


	<script type="text/javascript">
		$(function(){
			var house = (function(){
				var houseLi = null;

				houseCarousel = function(houseLi){
					
					var houseTool = $("#houseTool");	
					var prev = $(".house_prev");
					var next = $(".house_next");
					var imgIndex = 0;
					var imgOffset = 400;
					var imgNum = houseLi.length;
					// console.log(imgNum);
					prev.on('click',function(){
						imgIndex--;
						
						if(imgIndex != -1){

							houseTool.css({'transform':'translateX(' + -(imgIndex*imgOffset) + 'px)'});					

						}else{

							imgIndex = imgNum - 1;
							houseTool.css({'transform':'translateX(' + -(imgIndex*imgOffset) + 'px)'})
							
						}

						console.log(imgIndex);
					})

					next.on('click',function(){
						if(imgIndex != imgNum - 1){
							imgIndex++;
							houseTool.css({'transform':'translateX(' + -(imgIndex*imgOffset) + 'px)'})
							

						}else{
							imgIndex = 0;
							houseTool.css({'transform':'translateX(0px)'})
							
						}
						
					})
				};

				return {
					addImg:function() {
						var imgUrl = "/Hy2/HY2/Public/assets/global/json/data.json";

						 $.getJSON(imgUrl,function(data){
								var imgArr = [];
								
								$.each(data,function(k,v) {

									if(k=='img'){
										$.each(v,function(k1,v1){
			                               imgArr.push(v1);
			                            })
									}
								});

								imgArr.sort(function(a,b){
									return b.create_time - a.create_time;
								})
								var imgNum = imgArr.length;
								var houseTool = $("#houseTool");

								

								for(var i=0;i<imgNum;i++){
									
									var li = "<li class='tool'>\
												<div class='tool_box'>\
													<div class='sub_tool_box'>\
														<img src='/Hy2/HY2/Public/assets/global/img/index/house/"+imgArr[i].src+"' alt=''>\
														<div class='img_content'><a href='javascript:;'>"+imgArr[i].content+"</a></div>\
													</div>\
													<div class='img_name'><span>"+imgArr[i].name+"</span></div>\
												</div>\
										  </li>";	

									houseTool.append(li);	

								}
								
								houseLi = houseTool.find("li");	
								houseCarousel(houseLi);
						 })
					}
				};
			})();
			
			house.addImg();

			var clean = (function(){
				var currLi = $(".clean_menu_bar").children();
				var currEle = $(".all_clean").children();
				var currEleNum = currEle.length;
				var clean_example  = $(".clean_example");
				
				var currIndex = 0;

				// console.log(currEleNum);

				var timer = null;			
				
				var autoSlip = function(){
						clearInterval(timer);
						
						timer = setInterval(function(){
							if(currIndex!=currEleNum-1){
								currIndex++;
								$(currLi[currIndex]).trigger("click");
							}else{
								currIndex = 0;
								$(currLi[currIndex]).trigger("click");
							}
							
						},2000)


				};

				return {
					slipToElement:function(){
						autoSlip();
						
						currEle.eq(0).css({"opacity":1,"z-index":10});
						currEle.eq(0).siblings().css({"opacity":0,"z-index":0});

						currLi.eq(0).css({"color":"rgba(255,122,8,1)"});
						currLi.eq(0).siblings().css({"color":"#fff"});
						

						currLi.on("click",function(){
							
							var _self = $(this);
							currIndex = _self.data("index");
						

							for(var i=0;i<currEleNum;i++){
								/*注意，此时的currEle[i]不是JQ对象，我们要将其转化为JQ对象*/

									if($(currEle[i]).data("index") == currIndex){
										
										$(currEle[i]).siblings().css({"opacity":0,"z-index":0});
										$(currEle[i]).css({"opacity":1,"z-index":10});
										
										_self.siblings().css({"color":"#fff"})
										_self.css({"color":"rgba(255,122,8,1)"});
									}
							}

						})
					},
					
					beginSlip:function(){
						clean_example.on("mouseout",function(){
							var currIndex;
							for(var i=0;i<4;i++){
								if($(currEle[i]).css("opacity") == 1){
									currIndex = $(currEle[i]).data("index");
								}
							}
							autoSlip(currIndex);
						})
					},

					stopSlip:function(){
						clean_example.on("mouseover",function(){
							clearInterval(timer);
						})
					}
				}
			})();
			
			clean.slipToElement();
			clean.stopSlip();
			clean.beginSlip();
			
			var joinUs = (function(){
				var input = $(".input_wrapper input");
				var register = $("#doRegister");
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
					doRegister:function(){
						register.validate({
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
			joinUs.doRegister();
	
			var wow = new WOW();

			wow.init();
		});
	</script>

</html>