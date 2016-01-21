<?php
namespace Admin\Controller;
use Think\Controller\RestController;
/**
 * 合作机构管理
 */
class CooperatorController extends RestController
{
    /**
     * 合作机构列表
     * @return [type] [description]
     */
    public function index($key="")
    {
    	$sid = session('adminId');
    	//判断用户是否登陆
    	if(!isset($sid ) ) {
    		redirect(U('Login/index'));
    	}
    	else 
    	{
        if($key == ""){
            $model = D('CooperationagencyView'); 
        }else{
            $where['cooperationagency.title'] = array('like',"%$key%");
            $where['member.username'] = array('like',"%$key%");
          //  $where['category.title'] = array('like',"%$key%");
            $where['_logic'] = 'or';
            $model = D('CooperationagencyView')->where($where); 
        } 
        
        $count  = $model->where($where)->count();// 查询满足要求的总记录数
        $Page = new \Extend\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        $post = $model->limit($Page->firstRow.','.$Page->listRows)->where($where)->order('cooperationagency.id DESC')->select();
        $this->assign('model', $post);
        $this->assign('page',$show);
      
        $this->display();     
        }
    }
    /**
     * 添加合作机构
     */
    public function add()
    {
        //默认显示添加表单
        if (!IS_POST) {
        	//$this->assign("category",getSortedCategory(M('category')->select()));
            $this->display();
        }
        if (IS_POST) {
            //如果用户提交数据
             $model = D("Cooperationagency");
//             $model->time = time();
//             $model->user_id = 1; 
            if (!$model->create()) {
                // 如果创建失败 表示验证没有通过 输出错误提示信息
                $this->error($model->getError());
                exit();
            } else {
                if ($model->add()) {
                    $this->success("添加成功", U('Cooperator/index'));
                } else {
                    $this->error("添加失败");
                }
            }
        }
    }
    //上传操作
    public function upload(){
    	$token=I('post.token');
    	$timestamp=I('post.timestamp');
    	$verifyToken = md5('unique_salt' . $timestamp);
    	if (!empty($_FILES) && $token == $verifyToken) {
    		//上传参数配置
    		$config=array(
    				'maxSize'    =>    3145728,// 设置附件上传大小
    				'rootPath'   =>    './Uploads/',// 设置附件上传根目录
    				'savePath'   =>    '',// 设置附件上传（子）目录
    				'saveName'   =>    array('uniqid',''),//保存名称
    				'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),// 设置附件上传类型
    				'autoSub'    =>    true,//自动使用子目录保存上传文件 默认为true
    				'subName'    =>    array('date','Ymd'),//子目录创建方式，采用数组或者字符串方式定义
    		);
    		$upload = new \Think\Upload($config);// 实例化上传类
    
    		// 上传文件
    		$info   =   $upload->upload();
    		// dump($info);die;
    		if(!$info) {// 上传错误提示错误信息
    			// exit($upload->getError());
    			$data=array(
    					'status'=>0,//状态
    					'info'=>$upload->getError(),//错误信息
    			);
    		}else{// 上传成功
    			//     			//添加水印和缩略图
    			//     			$img_url=$config['rootPath'].$info['Filedata']['savepath'].$info['Filedata']['savename'];//图片地址
    			//     			$img=new \Think\Image(1,$img_url);
    			//     			$mark="./Public/img/hbh.png";//水印图片地址
    			//     			$img->water($mark);//添加水印默认是右下角
    			//     			$img->save($img_url);//保存水印后的图片
    			//     			$tumb=$img->thumb(250,150);//缩略图宽250px 高150px 等比例缩放
    			//     			$tumb_url=$config['rootPath'].$info['Filedata']['savepath'].'tb_'.$info['Filedata']['savename'];//缩略图地址
    			//     			$img->save($tumb_url);//保存缩略图
    
    			$data=array(
    					'savename'=>$info['Filedata']['savename'],//保存名称
    					'savepath'=>$config['rootPath'].$info['Filedata']['savepath'],//保存路径
    					'status'=>1,//状态
    			);
    		}
    		$this->ajaxReturn($data);
    	}
    }
    //删除图片
    public function del(){
    	if (!IS_AJAX) {
    		exit('需要AJAX提交信息');
    	}
    	$img_url=I('post.url');
    	$len=strlen(__ROOT__);
    	$img_url=substr($img_url, $len);
    	// echo $img_url;
    	if (@unlink($img_url)) {
    		$data=array(
    				'status'=>1,
    				'info'=>':)成功删除图片',
    		);
    	}else{
    		$data=array(
    				'status'=>0,
    				'info'=>':(删除图片失败',
    		);
    	}
    	$this->ajaxReturn($data);
    }
    //修改名称
    public function changeName(){
    	if (!IS_AJAX) {
    		exit('需要AJAX提交信息');
    	}
    
    	$old_url=I('post.url');                 //原来的地址
    	$len=strlen(__ROOT__);
    	$old_url=substr($old_url, $len);    //除去前缀,改成 ./Uploads/...
    	$name=I('post.name');                   //新的名称不包含后缀
    	$info=pathinfo($old_url);               //获取图片的信息
    	$path=$info['dirname'].'/';             //目录信息
    	$ext=$info['extension'];   	            //后缀信息
    	$new_url=$path.$name.'.'.$ext;    	    //生成新的图片地址信息
    	//检查是否有同名文件;目标文件是否存在
    	if(!file_exists($old_url)){
    		$data=array(
    				'status'=>0,
    				'info'=>'原文件不存在!',
    		);
    	}elseif(file_exists($new_url)){
    		$data=array(
    				'status'=>0,
    				'info'=>'新的命名已存在,起冲突,请改换别名!',
    		);
    	}else{
    		$res=@rename($old_url, $new_url);//修改名称
    			
    		if ($res) {
    			$data=array(
    					'status'=>1,
    					'info'=>':)成功修改图片标题',
    					'savepath'=>$new_url,
    					'savename'=>$name,
    			);
    		}else{
    			$data=array(
    					'status'=>0,
    					'info'=>':(修改失败',
    			);
    		}
    	}
    
    	$this->ajaxReturn($data);
    }
    
    /**
     * 更新机构信息
     * @param  [type] $id [文章ID]
     * @return [type]     [description]
     */
    public function update($id)
    {
        //默认显示添加表单
        if (!IS_POST) {
            $model = M('Cooperationagency')->where('id='.$id)->find();
           // $this->assign("category",getSortedCategory(M('category')->select()));
            $this->assign('post',$model);
            $this->display();
        }
        if (IS_POST) {
            $model = D("Cooperationagency");
            if (!$model->create()) {
                $this->error($model->getError());
            }else{
                if ($model->save()) {
                    $this->success("更新成功", U('Cooperator/index'));
                } else {
                    $this->error("更新失败");
                }        
            }
        }
    }
    /**
     * 删除机构
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function delete($id)
    {
        $model = M('Cooperationagency');
        $result = $model->where("id=".$id)->delete();
        if($result){
            $this->success("删除成功", U('Cooperator/index'));
        }else{
            $this->error("删除失败");
        }
    }
}
