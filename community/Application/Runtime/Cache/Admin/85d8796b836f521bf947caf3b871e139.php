<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>修改社工信息</title>
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
 <style>
		.img_box{
			padding: 9px 14px;
			margin-bottom: 14px;
			background-color: #f7f7f9;
			border: 1px solid #e1e1e8;
			border-radius: 4px;
			min-height:260px;
		}		
		
		.img{			
			text-align:center;			
			display: inline-block;
			margin: auto;			
			max-height: 260px;			
			padding: 4px;			
			background-color: #fff;
			border: 1px solid #ddd;
			border-radius: 4px;		
		}

    </style>
<div id="page-wrapper">
    <form method="post" action="<?php echo U('Workhouse/update');?>">
    	
        <div class="form-group">
            <label for="Workhouse-title">社工姓名</label>
            <input type="text" name="name" class="form-control" value="<?php echo ($post["name"]); ?>" id="Workhouse-name" >
        </div>
        <div class="form-group">
            <label for="Workhouse-duty">职务职称</label>
            <input type="text" name="duty" class="form-control" value="<?php echo ($post["duty"]); ?>" id="Workhouse-duty" >
        </div>
        <div class="form-group">
            <label for="Workhouse-major">专业方向</label>
            <input type="text" name="major" class="form-control" value="<?php echo ($post["major"]); ?>" id="Workhouse-major" >
        </div>
		<div class="form-group">
            <label for="Workhouse-qualification">专业资质</label>
            <input type="text" name="qualification" class="form-control" value="<?php echo ($post["qualification"]); ?>" id="Workhouse-qualification" >
        </div>
		<div class="form-group">
            <label for="Workhouse-title">从业年限</label>
            <input type="text" name="year" class="form-control" value="<?php echo ($post["year"]); ?>" id="Workhouse-year" >
        </div>
		<div class="form-group row img_box">       
           <img id="img_show" src="<?php echo ($post["photo"]); ?>" alt="test" class="img">     
		   <input type="text" name="photo" class="form-control" value="<?php echo ($post["photo"]); ?>" style="display:none">    
        </div>
        <input type="hidden" name="id" value="<?php echo ($post["id"]); ?>">
        <button type="submit" class="btn btn-default">提交</button>
    </form>
</div>
<!-- 配置文件 -->
<script type="text/javascript" src="/community/Public/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/community/Public/ueditor/ueditor.all.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('Workhouse-content',{
        toolbars: [
            ['fullscreen', 'source', 'undo', 'redo','bold', 'italic', 'underline','fontborder', 'strikethrough', '|','simpleupload', 'insertimage','attachment','emotion','link','unlink', '|', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote','searchreplace', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc'],
            ['inserttable','insertrow', 'insertcol','mergeright', 'mergedown','deleterow', 'deletecol','splittorows','splittocols', 'splittocells','deletecaption','inserttitle', 'mergecells', 'deletetable','insertparagraphbeforetable', 'paragraph','fontsize','fontfamily']
        ],
        initialFrameHeight:500,
        zIndex:100
    });
</script>
<!-- JavaScript -->
<script src="/community/Application/Admin/View//Public/static/js/jquery-1.10.2.js"></script>
<script src="/community/Application/Admin/View//Public/static/js/bootstrap.js"></script>
<script src="/community/Application/Admin/View//Public/static/js/app.js"></script>
</body>
</html>