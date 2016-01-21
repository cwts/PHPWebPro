<?php
namespace Home\Controller;
use Think\Controller;
class PublicMapController extends Controller {
    public function index(){
		$images= M('images')->where('location=13 AND status=1')->select();
    	$this->assign('image',$images);	
        $this->display();
    }
	
	public function getPoint(){
		$Point = M("publicmap");
		$list = $Point->select();
		$this->ajaxReturn(json_encode($list),'json',1);
		//echo json_encode($list);
    }
}