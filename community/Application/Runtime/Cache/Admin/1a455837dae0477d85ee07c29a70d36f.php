<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>公益地图列表</title>
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
<div id="page-wrapper">
    
    <div class="row">
        <div class="col-md-6">
            <a href="<?php echo U('PublicMap/add');?>" class="btn btn-success">添加坐标点</a>
        </div>
        <div class="col-md-6">
            <form action="<?php echo U('PublicMap/index');?>" method="post">
                <div class="form-group input-group">
                    <input type="text" class="form-control" name="key" placeholder="输入公益地图点、发布人关键词搜索">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <table class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th>编号</th>
                <th>标题</th>
               
                <th>发布时间</th>
                <th>发布人</th>
                <th>坐标</th>
                <th>操作</th> 
            </tr>
        </thead>
        <tbody>
        <?php if(is_array($model)): foreach($model as $key=>$v): ?><tr>
                <td><?php echo ($v["id"]); ?></td>
                <td><?php echo ($v["title"]); ?></td>
               
                <td><?php echo (date("Y/m/d H:i:s",$v["time"])); ?></td>
                <td><?php echo ($v["username"]); ?></td>
				<td><?php echo ($v["coordinate"]); ?></td>
             
                <td><a href="<?php echo U('PublicMap/update?id='); echo ($v["id"]); ?>">编辑</a> | <a href="<?php echo U('PublicMap/delete?id='); echo ($v["id"]); ?>" style="color:red;" onclick="javascript:return del('您真的确定要删除吗？\n\n删除后将不能恢复!');">删除</a></td>
            </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
    <div class="clearfix"></div>
    <?php echo ($page); ?>
    
</div>
<!-- JavaScript -->
<script src="/community/Application/Admin/View//Public/static/js/jquery-1.10.2.js"></script>
<script src="/community/Application/Admin/View//Public/static/js/bootstrap.js"></script>
<script src="/community/Application/Admin/View//Public/static/js/app.js"></script>

</body>
</html>