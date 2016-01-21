<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>中心概况详细信息</title>
     <link href="/community/Application/Admin/View//Public/static/css/bootstrap.css" rel="stylesheet">
	 <link href="/community/Public/bootstrap-3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="/community/Application/Admin/View//Public/static/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/community/Application/Admin/View//Public/static/font-awesome/css/font-awesome.min.css">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/community/Public/js/jquery.min.js"></script>
    <style type="text/css">
		#mynave > li a{ background-color:#222222; color:white;}
	    #mynave > li a:hover{ background-color:white; color:#222222;}
		body{
			background-color:#ffffff;
		}
	</style>
	
</head>

<body>

<div id="wrapper">

    <!-- Sidebar --> 
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo U('index/index');?>">仁宇社会事务中心后台管理系统</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">

            <!--<ul class="nav navbar-nav side-nav">
	 <li class="dropdown">
        <a href="<?php echo U('member/index');?>"><i class="fa fa-users"></i> 用户管理</a>  
    </li>
      <li class="dropdown">
        <a href="<?php echo U('Aboutus/index');?>"><i class="fa fa-edit"></i> 中心概况</a>
     </li>
    <li class="dropdown">
        <a href="<?php echo U('Organization/index');?>"><i class="fa fa-file-text-o"></i> 组织架构 </a>
    </li>
    <li class="dropdown">
        <a href="<?php echo U('News/index');?>"><i class="fa fa-users"></i> 新闻中心</a>  
    </li>
    <li class="dropdown">
        <a href="<?php echo U('Recruitment/index');?>"><i class="fa fa-link"></i> 人才招聘</a>
    </li>
      <li class="dropdown">
        <a href="<?php echo U('Recommend/index');?>"><i class="fa fa-edit"></i> 特别推荐</a>
    </li>
    <li class="dropdown">
        <a href="<?php echo U('Cooperator/index');?>"><i class="fa fa-file-text-o"></i> 合作机构 </a>
    </li>
    <li class="dropdown">
        <a href="<?php echo U('project/index');?>"><i class="fa fa-users"></i> 项目管理</a>  
    </li>
     <li class="dropdown">
        <a href="<?php echo U('Centerdynamic/index');?>"><i class="fa fa-link"></i> 中心动态</a>
    </li>
     <li class="dropdown">
        <a href="<?php echo U('Workhouse/index');?>"><i class="fa fa-dashboard"></i> 社工之家</a>
    </li>
	<li class="dropdown">
        <a href="<?php echo U('Publicmap/index');?>"><i class="fa fa-dashboard"></i> 公益地图</a>
    </li>
    <li class="dropdown">
        <a href="<?php echo U('Images/index');?>"><i class="fa fa-dashboard"></i> 图片管理</a>
    </li>
</ul> -->    
			<ul id="mynave" class="nav navbar-nav side-nav">
				<li class="dropdown">	<a href="<?php echo U('member/index');?>"><i class="fa fa-users"></i> 用户管理</a>  </li>
				<li class="dropdown">   <a href="<?php echo U('Aboutus/index');?>"><i class="fa fa-edit"></i> 中心概况</a>  </li>
				<li class="dropdown">   <a href="<?php echo U('Organization/index');?>"><i class="fa fa-file-text-o"></i> 组织架构 </a></li>
                <li class="dropdown">   <a href="<?php echo U('News/index');?>"><i class="fa fa-users"></i> 新闻中心</a>  </li>
				<li class="dropdown">	<a href="<?php echo U('Recruitment/index');?>"><i class="fa fa-link"></i> 人才招聘</a></li>
				<li class="dropdown">   <a href="<?php echo U('Recommend/index');?>"><i class="fa fa-edit"></i> 特别推荐</a> </li>
				<li class="dropdown">   <a href="<?php echo U('Cooperator/index');?>"><i class="fa fa-file-text-o"></i> 合作机构 </a> </li>
				<li class="dropdown">   <a href="<?php echo U('project/index');?>"><i class="fa fa-users"></i> 项目管理</a>  </li>
                <li class="dropdown">   <a href="<?php echo U('Centerdynamic/index');?>"><i class="fa fa-link"></i> 中心动态</a></li>
				<li class="dropdown">   <a href="<?php echo U('Workhouse/index');?>"><i class="fa fa-dashboard"></i> 社工之家</a></li>
				<li class="dropdown">   <a href="<?php echo U('Publicmap/index');?>"><i class="fa fa-dashboard"></i> 公益地图</a> </li>
                <li class="dropdown">   <a href="<?php echo U('Images/index');?>"><i class="fa fa-dashboard"></i> 图片管理</a></li>
			</ul>		
            <ul class="nav navbar-nav navbar-right navbar-user">

                <li class="dropdown user-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 你好,<?php echo session('username');?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo U('member/update?id='); echo session('adminId');?>"><i class="fa fa-gear"></i> 设置</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo U('login/logout');?>"><i class="fa fa-power-off"></i> 退出</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
<div id="page-wrapper">
   
        <div class="form-group">
            <label for="post-content">中心概况</label>
            <div style="height:600;width:auto;border-style:solid;border-width:1px;overflow:scroll;"><?php echo (htmlspecialchars_decode($post["content"])); ?></div>          
        </div>
        <div class="form-group">
            <label for="post-title">上次修改时间</label>
            <input type="text" name="time" class="form-control" value="<?php echo (date("Y/m/d H:i:s",$post["time"])); ?>" readonly="readonly" >
        </div>
		<div class="form-group">
            <label for="post-title">上次修改人</label>
            <input type="text" name="user_name" class="form-control" value="<?php echo ($post["user_name"]); ?>" readonly="readonly">
        </div>
         <a href="<?php echo U('Aboutus/update?id='); echo ($post["id"]); ?>" class="btn btn-success">修改</a>   
</div>


<!-- JavaScript -->
<script src="/community/Application/Admin/View//Public/static/js/jquery-1.10.2.js"></script>
<script src="/community/Application/Admin/View//Public/static/js/bootstrap.js"></script>
<script src="/community/Application/Admin/View//Public/static/js/app.js"></script>
</body>
</html>