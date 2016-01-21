<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"> <!-- 指定该HTML文档是中文版本 -->
  <head>
    <meta charset="utf-8"> <!-- 编码方式是utf-8 -->
	<!-- X-UA-Compatible是IE8的一个专有<meta>属性，它告诉IE8采用何种IE版本去渲染网页
         IE8刚推出时，很多网页由于重构的问题无法适应较高级的浏览器，使用X-UA-Compatible标签强制IE8采用低版本方式渲染。 
		 content="IE=edge"表示永远以最新的IE版本模式来显示网页
     -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- ViewPort <meta>标记用于指定用户是否可以缩放Web页面，
	     如果可以，那么缩放到的最大和最小缩放比例是什么。
	     使用ViewPort <meta>标记还表示文档针对移动设备进行了优化。
		 ViewPort <meta>标记的content值是由指令及其值组成的以逗号分隔的列表。-->
    <meta name="viewport" content="width=device-width, initial-scale=1">	
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	
    <title>仁宇社会事务服务中心</title>
	<!-- 告诉浏览器这个网址应该用哪个内核渲染 -->
	<meta name="renderer" content="webkit">
	<meta name="keywords content="仁宇,* * 社区,社区,社会事务">
	<meta name="author" content="Harry YaoLin ChenWang">
	<meta name="description" content="任宇社区官方网站">
	
	
	<!-- 因为bootstrap制作的插件都是用jquery实现的，就是里面的语法都是按jquery的，
	     所以一定要先引入jquery.js文件，才能用bootstrap插件，不然就会报错，效果出不来。 
	     引入jQuery源文件，为用jQuery编程做准备 -->
	<script src="/community/Public/js/jquery.min.js"></script>

    <!-- 采用BootStrap响应式布局，下面是操作是引入BootStrap文件
         ‘__’表示目录连接符号，开头的'__'表示根目录 -->
    <link href="/community/Public/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
	<!--引入BootStrap中的JS文件 -->
    <script src="/community/Public/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
	
    
	<style>
	.carousel_border{
		border:0px solid red
	}
	.navbar_style{
		text-align:center;
		border:1px solid white;
		background-color:black;
	}
	.float_right{
		float:right;position:relative;
	}
	.footer_style{
		margin-top:5px;
		background-color:#c0153f;
	}
	.margin_style{
		margin-top:10px;
	}
	
	#txt{
	 height:200px; 
	 position:relative  

	} 
	body{
		background-color:rgb(223,223,223);
	}
	#txt form{ 
	 position:absolute; 
	 bottom:20px; 
	 right:0px;
	 padding:0px; 
	 margin:0px 
	} 
	img{
    max-width:100%;
	height:auto;
    }
	 #toptitle > li a{ background-color:#b9103b; color:white;}
	 #toptitle > li a:hover{ background-image:url("/community/Public/upload/icon/menu.jpg");}
	 #bottomtitle > li a{background-color:#b9103b; color:white;}
	 #bottomtitle > li a:hover{ background-image:url("/community/Public/upload/icon/menu.jpg");}
	</style>
	<script type="text/javascript">
	   function settoppic_width(){
			var top_pic1=document.getElementById("top_pic1"); //获取含有logo图片的img控件
			top_pic1.style.width=window.screen.availWidth;  
	   }
	   function  showImg(){
			document.getElementById("wxImg").style.display='block';
	   }
	   function hideImg(){
			document.getElementById("wxImg").style.display='none';
	   }
	</script>
</head>
<body onload="settoppic_width()">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
			    <img src="<?php echo("/community/Public"); ?>/upload/icon/logo.png"></img>
			</div>
			<div class="col-md-4">
				<form class="navbar-form navbar-right middle" role="search" style="margin-top:35px;">
				    <span class="float_right" ><a style="text-decoration: none;" href="#"><strong>首 页</strong></a>&nbsp;|&nbsp;
					                          <a style="text-decoration: none;text-size:13px;" href="#"><strong>Home</strong></a></span><br />
				    <div class="form-group" style="margin-top:4px;">
					  <input style="height:30px;" type="text" class="form-control" placeholder="请输入关键字">
					  <button style="height:30px;" type="submit" class="btn btn-default"><span style="margin-left:-9x;" class="glyphicon glyphicon-search"></span></button>
					</div>	
				</form>
			</div>
		</div>
	</div>	
	<div class="container" style="background-color:#b9103b;margin-top:10px;border-width:0px;">
	<!--<div class="container" style="background-color:#c0153f;margin-top:10px;">  -->
		<div class="row" style="padding:0px;background-color:#b9103b;border-width:0px;">
			<nav class="navbar navbar-default navbar-inverse" style="margin-bottom:0px;background-color:#b9103b;border-width:0px;">
			  <div class="container-fluid"  style="padding:0px;background-color:#b9103b;border-width:0px;">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header"  style="padding:0px;background-color:#b9103b;border-width:0px;">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<div class="collapse navbar-collapse navbar_style" id="bs-example-navbar-collapse-1"  style="padding:0px;background-color:#b9103b;border-width:0px;">
				  <ul id="toptitle"  class="nav navbar-default nav-justified" style="height:60px;border-width:0px;">
					<li><a href="<?php echo U('CenterInstruction/index');?>">中心概况<br><small>ABOUTUS</small><span class="sr-only">(current)</span></a></li>
					<li><a href="<?php echo U('Organization/index');?>">组织架构<br><small>ORGANISATION</small></a></li>
					<li><a href="<?php echo U('NewsCenter/home');?>">新闻中心<br><small>NEW PRESS</small></a></li>
					<li><a href="<?php echo U('Recruitment/index');?>" >人才招聘<br><small>RECTRUITMENT</small></a></li>
					<li><a href="<?php echo U('SpecialRecommendation/index');?>">特别推荐<br><small>PARTICULARLYRECOMMENTED</small></a></li>
					<li><a href="<?php echo U('CooperationAgency/index');?>">合作机构<br><small>COOPERATIONAGENCY</small></a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid --> 
			</nav>
		</div>
		<div class="row" style="margin-top:0px">
			<!-- 图片轮播 begin -->
			<div id="myCarousel" class="carousel slide carousel_border">
			   <!-- 轮播（Carousel）指标 -->
			   <!--
			   <ol class="carousel-indicators">
				  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				  <li data-target="#myCarousel" data-slide-to="1"></li>
				  <li data-target="#myCarousel" data-slide-to="2"></li>
			   </ol>
				-->
			   <!-- 轮播（Carousel）项目 -->
			   <div class="carousel-inner">
				  <div class="item active">
					<center> <img style="max-height:600px;" src="/community/Public/upload/article/2015-05/homepage.jpg" alt="First slide"> </center>
					<img onMouseOut="hideImg()"  onmouseover="showImg()" src="/community/Public/upload/article/2015-05/qr_code.jpg" class="float_right" style="z-index:3;margin-top:-95px;margin-right:5px;width:90px;"></img>
					<div id="wxImg" class="float_right" style="display:none;z-index:3;margin-top:-305px;margin-right:100px;width:300px;">
						<img src="/community/Public/upload/article/2015-05/qr_code.jpg" style="margin-right:5px;width:300px;"></img>
					</div>
				  </div>
				   
			   </div>		    
		         
			   <!-- 轮播（Carousel）导航 -->
			   <!--
			   <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			   <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
			   -->
			</div> 
			<!-- 图片轮播 end -->            
		</div>
		<div>
		
		<div class="row" style="border-width:0px;">
			<nav class="navbar navbar-default navbar-inverse" style="padding:0px;background-color:#b9103b;border-width:0px;">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar_style" id="bs-example-navbar-collapse-2" style="border-width:0px;vertical-align:middle;padding:0px;background-color:#b9103b">			 
				  <ul id="bottomtitle" class="nav navbar-default nav-justified" style="height:60px;background-color:#00ff00;;border-width:0px;">
					<li><a href="<?php echo U('ProgramGovernmentPurchase/index');?>">政府购买项目<br ><small>GovernmentPurchaseProject</small></a></li>
					<li><a href="<?php echo U('ProgramEnterpriseCooperation/index');?>">企业委托项目<br ><small>EnterpriseEntrustProject</small></a></li>
					<li><a href="<?php echo U('ProgramUniversityCooperation/index');?>">高校合作项目<br ><small>UniversityCooperationProject</small></a></li>
					<li><a href="<?php echo U('ProgramPublicService/index');?>">公益服务项目<br ><small>PublicServiceProject</small></a></li>
					<li><a href="">培训中心<br ><small>TrainingCenter</small></a></li>
				  </ul>				 
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
		<div class="row" style="background-color:white;margin-top:-20px;">
			<div class="col-md-5 margin_style">
				<div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#college-1140" aria-controls="college-1140" role="tab" data-toggle="tab">中心动态</a></li>
					</ul>
                    <!-- Tab panes -->
                    <div class="tab-content my-tab">
						<div role="tabpanel" class="tab-pane active" id="college-1140">
							<!-- name指定的名字就是从model层拿过来的数据对象，item表示该对象的每一条信息  -->
							<?php if(is_array($CentralDynamicsmodel)): foreach($CentralDynamicsmodel as $key=>$v): ?><h5>
								   <!-- 取title字段 -->
								   <a alt="" href="<?php echo U('CentralDynamics/contentdisplay?id='); echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a>
								   <!-- 取time字段的值 -->
								   <small><span class="float_right"><?php echo (date("Y/m/d",$v["time"])); ?></span></small>
								</h5><?php endforeach; endif; ?>
							<a href="<?php echo U('CentralDynamics/index');?>" class="btn-more">More</a> 
						</div>                                                                                                                           
                    </div>
                </div>
			</div>
			<div class="col-md-4 margin_style">
				<div class="row">
					<div class="col-sm-12">
						<div role="tabpanel">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#college-1140" aria-controls="college-1140" role="tab" data-toggle="tab">特别推荐</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content my-tab">
								<div role="tabpanel" class="tab-pane active" id="college-1140">
									<?php if(is_array($SpecialRecommendationmodel)): foreach($SpecialRecommendationmodel as $key=>$v): ?><h5>
								   <!-- 取title字段 -->
								   <a alt="" href="<?php echo U('SpecialRecommendation/contentdisplay?id='); echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a>
								   <!-- 取time字段的值 -->
								   <small><span class="float_right"><?php echo (date("Y/m/d",$v["time"])); ?></span></small>
								</h5><?php endforeach; endif; ?>									
						   <a href="<?php echo U('CommunityMembers/index');?>">More</a>
								</div>                                                                                                                           
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div role="tabpanel">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#college-1141" aria-controls="college-1141" role="tab" data-toggle="tab">精品项目</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content my-tab">
								<div role="tabpanel" class="tab-pane active" id="college-1141">
								<?php if(is_array($BoutiqueItemmodel)): foreach($BoutiqueItemmodel as $key=>$v): ?><h5>
								   <!-- 取title字段 -->
								   <a alt="" href="<?php echo U('BoutiqueItem/contentdisplay?id='); echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a>
								   <!-- 取time字段的值 -->
								   <small><span class="float_right"><?php echo (date("Y/m/d",$v["time"])); ?></span></small>
								</h5><?php endforeach; endif; ?>		
									<a href="<?php echo U('BoutiqueItem/index');?>" class="btn-more">More</a>
								</div>                                                                                                                           
							</div>
						</div>
					</div>
				</div>
	
			</div>
			<!--地图 -->
			
			<div class="col-md-3 margin_style">
				<div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#college-1142" aria-controls="college-1142" role="tab" data-toggle="tab">公益地图</a></li>
					</ul>
                    <!-- Tab panes -->
                    <div class="tab-content my-tab">
						<div role="tabpanel" class="tab-pane active" id="college-1142" style="text-align:center;">						    
							<a href="<?php echo U('PublicMap/index');?>"><img src="/community/Public/upload/icon/baidumap.png" style="max-width:100%;max-height:100%" alt="公益地图"></a>
						</div>                                                                                                                           
                    </div>
                </div>
			</div>
			
			<div class="col-md-3 margin_style">
			</div>
		</div>
	</div>
	<!-- 底部说明 -->
	<div class="footer footer_style" style="height:45px;margin-top:3px;">
		<div  style="margin-bottom:15px;height:40px;" >
			<div class="col-sm-12 text-left copyright-text" style="margin-top:3px;">
				<h5 style="display:inline-block;">地址：上海市杨浦区国权路525号&nbsp;&nbsp;电话：021-12345678&nbsp;&nbsp;邮箱：xxxx@xxxx.com</h5>	
				<h5 style="display:inline-block;float:right;">All Rights Reserved 版权所有：仁宇社区</h5>        
			</div>
		</div>	
	</div>
</body>
</html>