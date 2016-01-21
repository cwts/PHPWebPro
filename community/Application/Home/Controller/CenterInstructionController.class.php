<?php
namespace Home\Controller;
use Think\Controller;
class CenterInstructionController extends Controller {
    public function index(){
    	$model = M('centerinstruction')->where('id=1')->find();
    	// $this->assign("category",getSortedCategory(M('category')->select()));
    	$this->assign('post',$model);
		$images= M('images')->where('location=1 AND status=1')->select();
    	$this->assign('image',$images);
    	$this->display();
    }
	
	/**
     * ����������Ϣ
     * @param  [type] $id [����ID]
     * @return [type]     [description]
     */
    public function contentdisplay($id)
    {
        //Ĭ����ʾ��ӱ?
        if (!IS_POST) {
            $model = M('post')->where('id='.$id)->find();
            $this->assign('post',$model);
			$images= M('images')->where('location=1 AND status=1')->select();
    	   $this->assign('image',$images);
            $this->display();
        }

    }
}
