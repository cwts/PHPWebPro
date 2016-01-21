<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加公益地图坐标点信息</title>
     <link href="/community/Application/Admin/View//Public/static/css/bootstrap.css" rel="stylesheet">
	 <link href="/community/Public/bootstrap-3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="/community/Application/Admin/View//Public/static/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/community/Application/Admin/View//Public/static/font-awesome/css/font-awesome.min.css">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/community/Public/js/jquery.min.js"></script>
    
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
            <a class="navbar-brand" href="<?php echo U('index/index');?>">仁宇网站后台</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">

            <ul class="nav navbar-nav side-nav">
<!--     <li><a href="<?php echo U('index/index');?>"><i class="fa fa-dashboard"></i> 仪表盘</a></li>
    <li class="dropdown">
        <a href="<?php echo U('category/index');?>"><i class="fa fa-reorder"></i> 分类管理</a>
    </li>
    <li class="dropdown">
        <a href="<?php echo U('post/index');?>"><i class="fa fa-edit"></i> 文章管理</a>
    </li>
    <li class="dropdown">
        <a href="<?php echo U('page/index');?>"><i class="fa fa-file-text-o"></i> 单页管理 </a>
    </li>
    <li class="dropdown">
        <a href="<?php echo U('member/index');?>"><i class="fa fa-users"></i> 用户管理</a>  
    </li>
     <li class="dropdown">
        <a href="<?php echo U('links/index');?>"><i class="fa fa-link"></i> 链接管理</a>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i> 系统设置 <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="<?php echo U('setting/index');?>">自定义字段</a></li>
            <li><a href="#">系统优化</a></li>
            <li><a href="#">缓存管理</a></li>
        </ul>
    </li> -->
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
        <a href="<?php echo U('PublicMap/index');?>"><i class="fa fa-dashboard"></i> 公益地图</a>
    </li>
    <li class="dropdown">
        <a href="<?php echo U('Images/index');?>"><i class="fa fa-dashboard"></i> 图片管理</a>
    </li>
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
#publicmap{width:100%;height:500px;}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=lE1kYcBNzweb8cUGZ7qH4sqM"></script>
<div id="page_wrapper">
    <form method="post" action="<?php echo U('PublicMap/add');?>">
        <div class="form-group">
            <label for="publicmap-title">信息框标题</label>
            <input type="text" name="title" class="form-control" id="publicmap-title" placeholder="输入信息框标题">
        </div>
        <div class="form-group">
            <label for="publicmap-content">信息框内容</label>
            <textarea name="content" id="publicmap-content" class="form-control" rows="3" cols="20"></textarea>
        </div>
		<!--
        <div class="form-group">
            <label for="publicmap-coordinate">标注点坐标(在地图上点击获取)</label>
            <input type="text" name="coordinate" class="form-control" id="publicmap-coordinate" placeholder="" disabled="false">
        </div>
		-->
		<!--
		<div class="form-group">
            <input type="text" class="form-control" id="publicmap_search" placeholder="请输入要搜索的地址！">
			<label id="search_btn" class="btn btn-default" style="margin-top:10px;">搜索</label>
			<div id="publicmap"></div>
        </div>
		-->
        <button type="submit"  class="btn btn-default">提交</button>
    </form>
</div>

<script type="text/javascript">
	/*用于地图*/
	
	$(function(){
		var location= null;//用于存储点击地图的坐标;
		// 百度地图API功能
		publicmapAdd = new BMap.Map("publicmap");    // 创建Map实例
		publicmapAdd.centerAndZoom(new BMap.Point(121.475905,31.251442), 11);  // 初始化地图,设置中心点坐标和地图级别
		publicmapAdd.addControl(new BMap.MapTypeControl());   //添加地图类型控件
		publicmapAdd.setCurrentCity("上海");          // 设置地图显示的城市 此项是必须设置的
		publicmapAdd.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放

		// 百度地图API功能
		locationSearch = new BMap.LocalSearch(publicmapAdd, {
			renderOptions: { map: publicmapAdd }
		});

		//以下为实现当点击地图时，获取点击处的坐标
		publicmapAdd.addEventListener("click", function (e) {
			location = e.point.lng + "," + e.point.lat;
			document.getElementById('publicmap-coordinate').value = location;
		});
		
		$("#search_btn").click(function () {
			var textSearch = document.getElementById('publicmap_search').value;
			locationSearch.search(textSearch);
        });
	})
	
	
</script>
<!-- JavaScript -->
<script src="/community/Application/Admin/View//Public/static/js/jquery-1.10.2.js"></script>
<script src="/community/Application/Admin/View//Public/static/js/bootstrap.js"></script>
<script src="/community/Application/Admin/View//Public/static/js/app.js"></script>

</body>
</html>