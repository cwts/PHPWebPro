<?php if (!defined('THINK_PATH')) exit();?>  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加图片</title>
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
		.img_ctrl{
			text-align:center;			
			display: inline-block;
			/*position: absolute;*/
			width: 100%;
			/*height: auto;*/
			padding: 1px;			
			background-color: #fff;
			border: 1px solid #ddd;
			border-radius: 4px;
			margin-bottom: 4px;
		}
		.img_name{			
			display:none;			
			position:absolute;
			z-index: 2;
		}
		.modal-content{
			text-align: center;
		}
		#img_show{
			max-width: 100%;
		}
		#fileselect{
			display:none;
		}
    </style>

<div id="page-wrapper">
	   <div class="form-group">  		
    		<button class="btn btn-primary" id="selsect">选择图片</button>
    		<input type="file" id="fileselect" class="form-control" name="fileselect[]" multiple="multiple"/> 
    	</div> 
		 <div class="form-group row img_box" id="img_box">		   	
    	</div>
    <form method="post" action="<?php echo U('Images/add');?>" style="margin-top:30px">
    	<div class="form-group">
             <input type="text" name="name" class="form-control" id="name" style="display:none">
			 <input type="text" name="url" class="form-control" id="url" style="display:none">
        </div>	   
        <div class="form-group">
            <label for="project-cate">所属模块</label>
            <select name="location" id="project-cate" class="form-control">
                <?php if(is_array($category)): foreach($category as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"> <?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
            </select>
        </div>
        <div class="form-group">
            <label>启用状态</label>
            <label class="radio-inline">
              <input type="radio" name="status" id="type" value="0" checked="checked">禁止
            </label>
            <label class="radio-inline">
              <input type="radio" name="status" id="type" value="1">启用
            </label>
        </div>
        <button type="submit"  class="btn btn-default">提交</button>
    </form>
</div>
 <div class="modal fade bs-example-modal-lg" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	    	<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
	    	<img id="img_show" src="" alt="">
	    </div>
	  </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/community/Public/js/jquery/jquery-1.11.3.js"></script>
	<!-- 引入uploadify的js代码 -->
	<script src="/community/Public/uploadify/jquery.uploadify.min.js"></script>

	<!-- 复制专用插件 -->
	<script src="/community/Public/js/jquery.zclip/jquery.zclip.js"></script>
	<!-- 引入livequery 用于新增对象方法绑定 -->
	<script src="/community/Public/js/jquery.livequery.js"></script>
<script type="text/javascript">

	$(function() {
            $('#selsect').click(function(event) {
				//alert(1);
				$('#fileselect').click();
			});			
			//选择文件
			$('#fileselect').change(function(event) {			
		        event.preventDefault();
		        var n=event.target.files.length;		        
		        var file;		        
				for (var i = 0; i < n; i++) {
					file=event.target.files[i];
					html5up(file);
				};						        
			});	
			//上传操作
			function html5up(file){
				/* Act on the event */
				//alert(1);
				var form_data=new FormData();				
				form_data.append('timestamp',"<?php echo ($time); ?>");
				form_data.append('token','<?php echo md5("unique_salt".$time);?>');
				form_data.append("Filedata",file);							
				$.ajax({
					url: '<?php echo U("Images/upload",null,false);?>',
					type: 'POST',
					// dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
					processData: false,
					contentType: false,
					data: form_data,
				})
				.done(function(data) {
					// alert(data.savepath);					
		            if (!data.status) {
		            	alert(data.info);
		            	return false;
		            };		            
		            put_img(data.savepath,data.savename);//添加图片到img_box		           
		            var name=data.savename;
		            $('#name').val(name);
			       //alert($('#name').val());
					var url="/community"+data.savepath+data.savename;
		            $('#url').val(url);
					//alert($('#url').val());
					console.log("success");
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});
			
			}	
			


			//添加图片到img_box
			function put_img(savepath,savename){
				var img_url="/community"+savepath+savename;		
				//alert(img_url);
				var new_img='<div class="col-md-3">';					
		            new_img+='<img src="'+img_url+'" alt="test" class="img">';
		            new_img+='<div class="img_ctrl">';
		           
		            new_img+='<span class="glyphicon glyphicon-trash btn" data-toggle="tooltip" data-placement="bottom"  title="删除文件" aria-hidden="true"></span>';
		            new_img+='<span class="glyphicon glyphicon-tag btn" data-toggle="tooltip" data-placement="bottom" title="修改标题" aria-hidden="true"></span>';
		            new_img+='</div>';
		            new_img+='<div class="img_name">';
	    			new_img+='<form action="" class="form-inline">';
	    			new_img+='<input type="text" class="form-control input-sm savename" value="'+savename+'">';
	    			new_img+='<button class="btn btn-primary btn-sm save inline-block">保存</button>';
	    			new_img+='</form>';
	    			new_img+='</div>';
		            new_img+='</div>';
            
		            $('.img_box').append(new_img);
			}



			//调出修改标题input
			$(document).on('click','.glyphicon-tag',function(event){
				
				var div=$(this).parents('div.col-md-3');
				var img_name=div.find('.img_name');
				img_name.fadeToggle();
			});

			//点击保存按钮
			$(document).on('click','.save',function(event){
				event.preventDefault();
				var img_name=$(this).parents('.img_name');
				var savename=img_name.find('.savename');
				var new_name=savename.val();
			   
				var img=$(this).parents('div.col-md-3').find('.img');
				var img_url=img.attr('src');
				// alert(img_url);
				$.ajax({
					url: '<?php echo U("Images/changeName",null,false);?>',
					type: 'POST',
					// dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
					data: {url:img_url,name:new_name},
					success:function(data){
//						var data = $.parseJSON(data);
//						alert(data);return false;
						if (!data['status']) {
							alert(data['info']);
							return false;
						};
						savename.val(data['savename']);
						//alert(data['savename']);
						//alert(data['savepath']);
						img.attr('src',"/community"+data['savepath']);
						img_name.fadeOut('slow');
						var name=data.savename;
		                $('#name').val(name);
					   // alert($('#name').val());
				     	var url="/community"+data.savepath;
		                $('#url').val(url);
				     //	alert($('#url').val());
					}
				});

			});

			
			//图片删除
			$(document).on('click', '.glyphicon-trash', function(event) {
				//alert(1);
				event.preventDefault();
				/* Act on the event */
				var div=$(this).parents('div.col-md-3');
				var img_url=div.find('.img').attr('src');
			    //alert(img_url);
				$.ajax({
					url: '<?php echo U("Images/del",null,false);?>',
					type: 'POST',
					// dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
					data: {url: img_url},
					success:function(data){
						if (!data['status']) {
							alert(data['info']);
							return false;
						}else{
							alert(data['info']);
							div.fadeOut(2000);
							div.remove();
						};
					}
				});			
				
			});

			//图片放大预览
			$(document).on('click', '.img', function(event) {
				
				event.preventDefault();
				/* Act on the event */
				var img_url=$(this).attr('src');
				$('#modal').modal('show');
				$('#img_show').attr('src',img_url);
			});
			
			//点击modal自动隐藏
			$('#modal').click(function(event) {
				$(this).modal('hide');
			});
		});		
</script>
<!-- JavaScript -->
<script src="/community/Application/Admin/View//Public/static/js/jquery-1.10.2.js"></script>
<script src="/community/Application/Admin/View//Public/static/js/bootstrap.js"></script>
<script src="/community/Application/Admin/View//Public/static/js/app.js"></script>
</body>
</html>