<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>仁宇社会事务服务中心</title>
	<meta name="renderer" content="webkit">
	<meta name="keywords content="* * 社区,资源环境社区,环境工程,环境科学,资源环境科学,地理信息技术,生态学,测绘工程">
	<meta name="author" content="LinSimon">
	<meta name="link" content="boyu624@163.com">
	<meta name="description" content="* * 社区资源环境社区官方网站">
	
    <!-- Bootstrap -->
    <link href="/community/Public/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/community/Public/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
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
	  .nav-pills > li a:hover { background-image:url("/community/Public/upload/icon/menu.jpg");}
      .nav-pills > li:hover .dropdown-menu { display: block;}
	  .dropdown-menu{ margin: 0;background-image:url("/community/Public/upload/icon/submenu.jpg");}
	  .dropdown-menu > li a { color:white; background-image:url("/community/Public/upload/icon/submenu.jpg");}
	  .dropdown-menu > li a:hover { color:white; background-image:url("/community/Public/upload/icon/submenu2.jpg");}
	
	  
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
			    <img src="<?php echo("/community/Public"); ?>/upload/icon/logo.png"></img>
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
  <div class="container" style="background-color:#c0153f;border-width:1px;margin-top:10px;">
		<div class="row" style="margin-top:0px;border-width:1px;">
			<table style="margin: 0 auto;padding:0px;background-color:rgb(192,21,63);">
				<tr style="padding:0px;background-color:rgb(192,21,63);">
					<td style="margin-top:-20px;padding:0;background-color:rgb(192,21,63);">
						<ul class="nav nav-pills justify">
							<!--<li><a href="<?php echo U('Index/index');?>">  首 页 </a></li>  -->
							<li style="text-align:center;padding-left:1px;padding-right:1px;"><a href="<?php echo U('CenterInstruction/index');?>">中 心 概 况<br><small style="font-size:9px;">Introduction</small></a></li> 
							<li style="text-align:center;"><a href="<?php echo U('Organization/index');?>">组 织 架 构<br><small style="font-size:9px;">Organization</small></a></li>
							<li style="text-align:center;"><a href="<?php echo U('CommunityMembers/index');?>">社 工 之 家<br><small style="font-size:9px;">SocialWorkHouse </small></a></li>
							<li style="text-align:center;"><a href="<?php echo U('CentralDynamics/index');?>">中 心 动 态<br><small style="font-size:9px;">CentralDynamics</small></a></li>
							<li style="text-align:center;"><a href="<?php echo U('NewsCenter/home');?>">新 闻 中 心<br><small style="font-size:9px;">NewsPress</small></a></li>			
							<li style="text-align:center;"><a href="<?php echo U('CooperationAgency/index');?>">合 作 机 构<br><small style="font-size:8.5px;">CooperatingAgency</small></a></li>
							<li style="text-align:center;" class="dropdown">
								<a href="##" data-toggle="dropdown" class="dropdown-toggle">合 作 项 目<br><small style="font-size:9px;">CooperateProject</small><span class="caret"></span></a>  
									<ul class="dropdown-menu" style="margin-top:0px;background-color:rgb(192,21,63);">
										<li><a href="<?php echo U('ProgramGovernmentPurchase/index');?>">政府购买项目<span class="sr-only">(current)</span></a></li>
										<li><a href="<?php echo U('ProgramEnterpriseCooperation/index');?>">企业委托项目</a></li>
										<li><a href="<?php echo U('ProgramUniversityCooperation/index');?>">高校合作项目</a></li>
										<li><a href="<?php echo U('ProgramPublicService/index');?>">公益服务项目</a></li>
									</ul>
							</li>
							<li style="text-align:center;"><a href="<?php echo U('BoutiqueItem/index');?>">精 品 项 目<br><small style="font-size:9px;">BoutiqueProject</small></a></li>
							<li style="text-align:center;"><a href="<?php echo U('Recruitment/index');?>">人 才 招 聘<br><small style="font-size:9px;">Recruitment</small></a></li>
							<li style="text-align:center;"><a href="<?php echo U('SpecialRecommendation/index');?>">特 别 推 荐<br><small style="font-size:9px;">Recommend</small></a></li>
							<!--<li style="text-align:center;"><a href="<?php echo U('PublicMap/index');?>">公 益 地 图<br><small style="font-size:9px;">Public Map</small></a></li>-->	 	
						</ul>
			</td></tr></table>	
			<!-- 图片轮播 end -->            
		</div>	
		<div class="row" style="margin-top:0px;border-width:1px;">
			<!-- 图片轮播 begin -->
			<div id="myCarousel" class="carousel slide carousel_border">
			   <!-- 轮播（Carousel）指标 -->
			   <ol class="carousel-indicators">
				  <?php if(is_array($image)): foreach($image as $e=>$v): if($e == 0): ?><li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<?php else: ?>
							<li data-target="#myCarousel" data-slide-to="<?php echo ($e); ?>"></li><?php endif; endforeach; endif; ?>
			   </ol>   
			   <!-- 轮播（Carousel）项目 -->
			    <div class="carousel-inner"> 
					<?php if(is_array($image)): foreach($image as $e=>$v): if($e == 0): ?><div class="item active">
						<?php else: ?>
								<div class="item"><?php endif; ?>
									<center>
										<img id="img_show" src="<?php echo ($v["url"]); ?>" alt="test" class="img" style="height:230px;"> 
									</center>
							</div><?php endforeach; endif; ?>
				</div>
			   <!-- 轮播（Carousel）导航 -->
			   <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			   <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div> 
			<!-- 图片轮播 end -->            
		</div>
	</div>
  <!-- 屏幕宽度小于768px时，div.navbar-responsive-collapse容器里的内容都会隐藏，显示icon-bar图标，当点击icon-bar图标时，再展开。屏幕大于768px时，默认显示。 -->
  
	<!-- <img align="center" src="/community/Public/upload/icon/news.png">  --> 
 


	<!--内容显示区域 -->
	<div class="container" style="margin-top:0px;min-height:550px;background-color:white;">
		<div class="row">
			<div class="col-md-3" style="margin-top:20px;margin-left:0px;margin-right:-60px;"> 
				<!--<ul style="list-style:none;">
					<li><a href="#"><img src="/community/Public/upload/icon/news_nav.png"></a></li>
				</ul>-->
				<div style="background-color:#c0153f;height:90px;line-height:90px;color:#ffffff;font-family:黑体;font-size:23px;padding-left:10px;">中心概况</div>
				<div style="background-color:#b95253;height:40px;line-height:40px;color:#ffffff;font-family:黑体;font-size:16px;padding-left:10px;">CENTER INSTRUCTION</div>
				<div style="margin-top:20px;"><img src="/community/Public/upload/icon/weixingongzhonghao.png"></div>  
				<div style="margin-top:20px;"><img src="/community/Public/upload/icon/weixinsaomiao.png"></div>  
			</div>
			<div class="col-md-1" style="margin-top:20px;">
				
			</div>
			<div class="col-md-8">
			   <h5 style="margin-top:20px;"><strong>中心概况</strong><small><span class="float_right"><a href="<?php echo U('Index/index');?>">首页</a> > <a href="<?php echo U('CenterInstruction/index');?>">中心概况</a></span></small></h5>
				<hr></hr>         
						<div role="tabpanel" class="tab-pane active" id="college-1140">
							<?php echo (htmlspecialchars_decode($post["content"])); ?>
						</div> 
						

			</div>
		</div>
	</div>
	<div class="container footer footer_style">
       <!-- 底部说明 -->
		<div  style="margin-bottom:15px;height:40px;" >
			<div class="col-sm-12 text-left copyright-text" style="margin-top:10px;">
				<h5 style="display:inline-block;">地址：上海市杨浦区国权路525号&nbsp;&nbsp;电话：021-12345678&nbsp;&nbsp;邮箱：xxxx@xxxx.com</h5>	
				<h5 style="display:inline-block;float:right;">All Rights Reserved 版权所有：仁宇社区</h5>        
			</div>
		</div>	
	</div>
</body>
</html>