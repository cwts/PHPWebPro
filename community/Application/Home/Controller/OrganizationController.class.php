<?php
namespace Home\Controller;
use Think\Controller;
class OrganizationController extends Controller {
    public function index(){
    	$model = M('Organization')->where('id=1')->find();
    	// $this->assign("category",getSortedCategory(M('category')->select()));
    	$this->assign('post',$model);
		$images= M('images')->where('location=2 AND status=1')->select();
    	$this->assign('image',$images);		
    	$this->display();
    }
}