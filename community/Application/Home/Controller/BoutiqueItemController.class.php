<?php
namespace Home\Controller;
use Think\Controller;
class BoutiqueItemController extends Controller {
    public function index(){
        $model = D('BoutiqueItem');  
       $count  = $model->where('cate_id=5')->count();// 查询满足要求的总记录数
        $Page = new \Extend\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        $post = $model->limit($Page->firstRow.','.$Page->listRows)->where('cate_id=5')->order('project.id DESC')->select();
        $this->assign('model', $post);
        $this->assign('page',$show);     
		$images= M('images')->where('location=11 AND status=1')->select();//精品项目location=11
    	$this->assign('image',$images);
        $this->display(); 
    }
    public function contentdisplay($id)
    {
    	//Ĭ����ʾ��ӱ?
    	if (!IS_POST) {
    		$model = M('project')->where('id='.$id)->find();
    		$this->assign('post',$model);
			$images= M('images')->where('location=11 AND status=1')->select();//精品项目location=11
         	$this->assign('image',$images);
    		$this->display();
    	}
    
    }
}
