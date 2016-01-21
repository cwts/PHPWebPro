<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>资源环境社区院网--* * 社区</title>
	<meta name="renderer" content="webkit">
	<meta name="keywords content="* * 社区,资源环境社区,环境工程,环境科学,资源环境科学,地理信息技术,生态学,测绘工程">
	<meta name="author" content="LinSimon">
	<meta name="link" content="boyu624@163.com">
	<meta name="description" content="* * 社区资源环境社区官方网站">
	
    <!-- Bootstrap -->
    <link href="/community2/Public/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/community2/Public/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/community2/Public/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
	<style>
	.carousel_border{
		border:5px solid red
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
		background-color:#dddddd;
	}
	hr{
	   height:2px;
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
	  #topnav > li{display:inline;}
	  .nav-pills > li a { color:white; background-color:rgb(192,21,63);}
	  .nav-pills > li a:hover { color:rgb(192,21,63); background-color:white;}
	  .nav-pills> li .dropdown-menu { margin: 0; }
      .nav-pills > li:hover .dropdown-menu { display: block; }
	</style>
	<script type="text/javascript">
	   function settoppic_width(){
			var top_pic1=document.getElementById("top_pic1");
			top_pic1.style.width=window.screen.availWidth;
	   }	
	</script>
</head>
<body>
<!-- 文档头部 -->
	<div class="container">
		<div class="row">
			<div class="col-md-8">
			    <img src="<?php echo("/community2/Public"); ?>/upload/icon/logo.png"></img>
			</div>
			<div class="col-md-4">
				<form class="navbar-form navbar-right middle" role="search" style="margin-top:35px;">
				    <span class="float_right"><a style="text-decoration: none;" href="<?php echo U('Index/index');?>"><strong>首 页</strong></a>&nbsp;|&nbsp;
					                          <a style="text-decoration: none;text-size:13px;" href="<?php echo U('Index/index');?>"><strong>Home</strong></a></span><br />
					<div class="form-group" style="margin-top:4px;">
					  <input style="height:30px;" type="text" class="form-control" placeholder="请输入关键字">
					  <button style="height:30px;" type="submit" class="btn btn-default"><span style="margin-left:-9x;" class="glyphicon glyphicon-search"></span></button>
					</div>	
				</form>
			</div>
		</div>
	</div>
	<table style="margin: 0 auto;padding:0px;background-color:rgb(192,21,63);">
		 <tr style="padding:0px;background-color:rgb(192,21,63);">
			 <td style="margin-top:-20px;padding:0;background-color:rgb(192,21,63);">
			 <ul class="nav nav-pills">
				<!--<li><a href="<?php echo U('Index/index');?>">  首 页 </a></li>  -->
				<li style="text-align:center;"><a href="<?php echo U('CenterInstruction/index');?>">中 心 概 况<br><small style="font-size:9px;">Introduction</small></a></li> 
				<li style="text-align:center;"><a href="<?php echo U('Organization/index');?>">组 织 架 构<br><small style="font-size:9px;">Organization</small></a></li>
				<li style="text-align:center;"><a href="<?php echo U('CommunityMembers/index');?>">社 工 之 家<br><small style="font-size:9px;">Community Members</small></a></li>
				<li style="text-align:center;"><a href="<?php echo U('CentralDynamics/index');?>">中 心 动 态<br><small style="font-size:9px;">Central Dynamics</small></a></li>
				
				<li style="text-align:center;"><a href="<?php echo U('NewsCenter/home');?>">新 闻 中 心<br><small style="font-size:9px;">News Press</small></a></li>			
				<li style="text-align:center;"><a href="<?php echo U('CooperationAgency/index');?>">合 作 机 构<br><small style="font-size:8.5px;">Cooperate Agency</small></a></li>
				<li style="text-align:center;" class="dropdown">
					<a href="##" data-toggle="dropdown" class="dropdown-toggle">合 作 项 目<br><small style="font-size:9px;">Cooperate Project</small><span class="caret"></span></a>  
						<ul class="dropdown-menu" style="margin-top:0px;background-color:rgb(192,21,63);">
							<li><a href="<?php echo U('ProgramGovernmentPurchase/index');?>">政府购买项目<span class="sr-only">(current)</span></a></li>
							<li><a href="<?php echo U('ProgramEnterpriseCooperation/index');?>">企业委托项目</a></li>
							<li><a href="<?php echo U('ProgramUniversityCooperation/index');?>">高校合作项目</a></li>
							<li><a href="<?php echo U('ProgramPublicService/index');?>">公益服务项目</a></li>
						</ul>
				</li>
				<li style="text-align:center;"><a href="<?php echo U('BoutiqueItem/index');?>">精 品 项 目<br><small style="font-size:9px;">Boutique Project</small></a></li>
				<li style="text-align:center;"><a href="<?php echo U('Recruitment/index');?>">人 才 招 聘<br><small style="font-size:9px;">Recruitment</small></a></li>
				<li style="text-align:center;"><a href="<?php echo U('SpecialRecommendation/index');?>">特 别 推 荐<br><small style="font-size:9px;">Recommendations</small></a></li>
				<li style="text-align:center;"><a href="<?php echo U('PublicMap/index');?>">公 益 地 图<br><small style="font-size:9px;">Public Map</small></a></li>	 	
			</ul>
			</td>
		</tr>
	</table>	
  <div class="container" style="background-color:#c0153f;border-width:1px;">
		<div class="row" style="margin-top:0px;border-width:1px;">
			<!-- 图片轮播 begin -->
			<div id="myCarousel" class="carousel slide carousel_border">
			   <!-- 轮播（Carousel）指标 -->
			   <ol class="carousel-indicators">
				  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				  <li data-target="#myCarousel" data-slide-to="1"></li>
				  <li data-target="#myCarousel" data-slide-to="2"></li>
			   </ol>   
			   <!-- 轮播（Carousel）项目 -->
			   <div class="carousel-inner">
				  <div class="item active">
					<center>
					 <img src="/community2/Public/upload/article/2015-05/test1.jpg" alt="First slide">
					</center>
				  </div>
				  <div class="item">
					<center>
					 <img src="/community2/Public/upload/article/2015-05/test1.jpg" alt="Second slide">
					 </center>
				  </div>
				  <div class="item">
					<center>
					 <img src="/community2/Public/upload/article/2015-05/test1.jpg" alt="Third slide">
					 </center>
				  </div>
			   </div>
			   <!-- 轮播（Carousel）导航 -->
			   <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			   <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div> 
			<!-- 图片轮播 end -->            
		</div>
	</div>
  <!-- 屏幕宽度小于768px时，div.navbar-responsive-collapse容器里的内容都会隐藏，显示icon-bar图标，当点击icon-bar图标时，再展开。屏幕大于768px时，默认显示。 -->
  
	<!-- <img align="center" src="/community2/Public/upload/icon/news.png">  --> 
 


	<!--内容显示区域 -->
	<div class="container" style="margin-top:0px;min-height:400px;background-color:white;">
		<div class="row">
			<div class="col-md-3" style="margin-top:20px;margin-left:-30px;">
				<ul style="list-style:none;">
					<li><a href="#"><img src="/community2/Public/upload/icon/news_nav.png"></a></li>
				</ul>
			</div>
			<div class="col-md-1" style="margin-top:20px;">
				
			</div>
			<div class="col-md-8">
			   <h5 style="margin-top:20px;"><strong>中心概况</strong><small><span class="float_right">首页 > 中心概况</span></small></h5>
				<hr></hr>         
						<div role="tabpanel" class="tab-pane active" id="college-1140">
							<!-- name指定的名字就是从model层拿过来的数据对象，item表示该对象的每一条信息  -->
							<!--<script id="post-content" name="content" type="text/plain"><?php echo (htmlspecialchars_decode($post["content"])); ?></script>-->
							<?php echo (htmlspecialchars_decode($post["content"])); ?>
						</div> 

			</div>
		</div>
	</div>
	<div class="container footer footer_style">
        <div class="col-sm-5 text-right" style="margin-top:10px;">
            <img class="qr_code" src="/community2/Public/upload/article/2015-05/qr_code.jpg" alt="资源环境社区二维码">
        </div>
        <div class="col-sm-7 text-left copyright-text">
            <h5>电话、传真：021-12345678 邮箱：xxxx@xxxx.com</h5>
			<h5>地址：上海市杨浦区国权路525号</h5>
			<h5>Copyright 2010-2015  http://xxxx.xxx.com.cn/ Government All Rights Reserved</h5>
			<h5>版权所有： * * 社区资源环境社区 2010-2015</h5>         
		</div>
    </div>
	<!-- 配置文件 -->
	<script type="text/javascript" src="/community2/Public/ueditor/ueditor.config.js"></script>
	<!-- 编辑器源码文件 -->
	<script type="text/javascript" src="/community2/Public/ueditor/ueditor.all.js"></script>
	<!-- 实例化编辑器 -->
	<script type="text/javascript">
		var ue = UE.getEditor('post-content',{
			toolbars: [],
			initialFrameHeight:500,
			zIndex:100
		});
	</script>
</body>
</html>