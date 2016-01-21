<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$sid = session('adminId');
    	//判断用户是否登陆
    	if(!isset($sid ) ) {
    		redirect(U('Login/index'));
    	}
    	else {
        $this->display();
    	}
    }
}