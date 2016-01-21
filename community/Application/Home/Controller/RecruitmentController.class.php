<?php
namespace Home\Controller;
use Think\Controller;
class RecruitmentController extends Controller {
    public function index(){
        $model = D('Recruitment');  
		$count  = $model->where($where)->count();// 查询满足要求的总记录数
        $Page = new \Extend\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        $post = $model->limit($Page->firstRow.','.$Page->listRows)->where($where)->order('recruitment.id DESC')->select();
        $this->assign('model', $post);
        $this->assign('page',$show);    
	$images= M('images')->where('location=13 AND status=1')->select();
    	$this->assign('image',$images);			
        $this->display(); 
    }
    public function contentdisplay($id)
    {
    	//Ĭ����ʾ��ӱ?
    	if (!IS_POST) {
    		$model = M('Recruitment')->where('id='.$id)->find();
    		$this->assign('post',$model);
			$images= M('images')->where('location=13 AND status=1')->select();
    	$this->assign('image',$images);	
    		$this->display();
    	}
    
    }
}