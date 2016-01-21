<?php
namespace Admin\Model;
use Think\Model;
class OrganizationModel extends Model{
    protected $_validate = array(
        array('content','require','请填写组织架构！'), //默认情况下用正则进行验证
       
    );
    protected $_auto = array ( 
        array('time','time',3,'function'), // 调用time()函数自动写入当前时间
        array('user_name','getUname',3,'callback'), // 使用回调函数获取登陆者的id
    );
    protected function getUname(){
    	return session('username');
    }
}